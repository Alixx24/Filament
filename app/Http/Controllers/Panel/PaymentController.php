<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Invoice;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Illuminate\Http\Request;
use App\Models\Payment as PaymentModel;
use App\Models\Order;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Notifications\OrderStoredNotification;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $order = Order::find(1);

        $amountInRial = 1000;

        $invoice = (new Invoice)->amount($amountInRial);

        try {
            $payment = Payment::via('zarinpal')->purchase($invoice, function ($driver, $transactionId) use ($order, $amountInRial) {

                // ذخیره تراکنش در DB
                PaymentModel::create([
                    'order_id' => $order->id,
                    'user_id' => auth()->id(),
                    'transaction_id' => $transactionId,
                    'amount' => $amountInRial,
                    'currency' => 'R',
                    'status' => 'pending',
                ]);
                Notification::route('mail', 'alixcommunity6.ir@gmail.com')
                    ->notify(new OrderStoredNotification($order));

                session(['payment' => [
                    'user_id' => auth()->id(),
                    'amount' => $amountInRial,
                    'order_id' => $order->id,
                ]]);
            });

            return $payment->pay()->render();
        } catch (\Exception $e) {
            Log::error('Payment Gateway Error: ' . $e->getMessage());
            return redirect()->route('payment.failed')->withErrors(['payment' => $e->getMessage()]);
        }
    }

    // callback زرین‌پال
    public function callback(Request $request)
    {
        DB::beginTransaction();

        try {
            $authority = $request->get('Authority');
            $status = $request->get('Status');

            if (!$authority) {
                throw new \Exception('پارامتر Authority یافت نشد.');
            }

            $payment = PaymentModel::where('transaction_id', $authority)->first();

            if (!$payment) {
                throw new \Exception('تراکنش در پایگاه داده یافت نشد.');
            }

            if ($status !== 'OK') {
                $payment->update(['status' => 'failed']);
                return redirect()->route('payment.failed')->withErrors(['payment' => 'پرداخت توسط کاربر لغو شد.']);
            }

            // Verify با همان مبلغ ریال
            $receipt = Payment::via('zarinpal')
                ->transactionId($authority)
                ->amount($payment->amount)
                ->verify();

            $payment->update([
                'status' => 'paid',
                'ref_id' => $receipt->getReferenceId(),
                'raw_response' => json_encode($receipt),
            ]);

            DB::commit();

            return redirect()->route('payment.success')->with('payment', $payment);
        } catch (InvalidPaymentException $e) {
            DB::rollBack();
            if (isset($payment)) {
                $payment->update(['status' => 'failed']);
            }
            return redirect()->route('payment.failed')->withErrors(['payment' => $e->getMessage()]);
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($payment)) {
                $payment->update(['status' => 'failed']);
            }
            return redirect()->route('payment.failed')->withErrors(['payment' => $e->getMessage()]);
        }
    }

    // صفحه موفقیت
    public function success()
    {
        $payment = session('payment');
        if (!$payment) {
            return redirect()->route('payment.failed')->withErrors(['payment' => 'اطلاعات پرداخت در دسترس نیست.']);
        }

        $userId = auth()->id();
        return redirect()->route('dashboard.index', ['id' => $userId]);
    }

    // صفحه خطا
    public function failed()
    {
        $errors = session('errors');
        return view('payment.failed', compact('errors'));
    }
}
