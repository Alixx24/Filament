@extends('customer.layouts.master-shop-detail')

{{-- ====================== Title Section ====================== --}}
@section('title', $product->name . ' | خرید اکانت کلاد - GrowVixo')

{{-- ====================== Meta Section ====================== --}}
@section('meta')

@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "خانه", "item": "{{ route('home') }}"},
    {"@type": "ListItem", "position": 2, "name": "محصولات", "item": "{{ route('customer.pricing.claude.index') }}"},
    {"@type": "ListItem", "position": 3, "name": "{{ $product->name }}"}
  ]
}
</script>
@endverbatim
@endsection

{{-- ====================== Content Section ====================== --}}
@section('content')

    {{-- Chat icon --}}
    <div class="chat-wrapper">
        <button class="chat-button" id="chatToggle">
            <i class="bi bi-chat-dots fs-1"></i>
        </button>
        <div class="chat-box fs-1" id="chatBox">
            <ul>
                <li>
                    <i class="fs-1 bi bi-telegram"></i>
                    <a href="https://t.me/alixx24" class="fs-6">پشتیبانی تلگرام</a>
                </li>
                <li>
                    <i class="fs-1 bi bi-whatsapp"></i>
                    <a href="#" class="fs-6">پشتیبانی واتس‌اپ</a>
                </li>
                <li>
                    <i class="fs-1 bi bi-envelope-at"></i>
                    <a href="mailto:alixcommunity6.ir@gmail.com" class="fs-6">پشتیبانی ایمیل</a>
                </li>
            </ul>
        </div>
    </div>

    <section class="p-2 m-3 bg-light p-mt-head border border-primary rounded-3">
        <div class="chat-wrapper">
            <button class="chat-button" id="chatToggle">
                <i class="bi bi-chat-dots fs-1"></i>
            </button>
            <div class="chat-box fs-1" id="chatBox">
                <ul>
                    <li>
                        <i class="fs-1 bi bi-telegram"></i>
                        <a href="https://t.me/alixx24" class="fs-6">پشتیبانی تلگرام</a>
                    </li>
                    <li>
                        <i class="fs-1 bi bi-whatsapp"></i>
                        <a href="#" class="fs-6">پشتیبانی واتس اب</a>
                    </li>
                    <li>
                        <i class="fs-1 bi bi-envelope-at"></i>
                        <a href="mailto:alixcommunity6.ir@gmail.com" class="fs-6">پشتیبانی ایمیل</a>
                    </li>
                </ul>
            </div>
        </div>
        <h1 class="m-3">{{ $product->name }}</h1>
        <hr>
        <div class="shop-price-section">
            @if ($product->old_price ?? false)
                <div class="d-flex align-items-center gap-3 mb-2">
                    <span class="shop-old-price">{{ number_format($product->old_price) }}
                    </span>
                    <span class="shop-discount-badge">{{ $product->discount_percent ?? '20%' }}
                        تخفیف</span>
                </div>
            @endif
            <div class="d-flex align-items-baseline">
                <span class="shop-currency">تومان</span>
                <span class="shop-current-price">{{ number_format($product->price) }}</span>

            </div>
            <small class="shop-security-badge fs-3 ps-3">
                <i class="fas fa-shield-alt"></i> پرداخت امن و تضمین شده
            </small>
        </div>
        <br>
        <div class="text-center">
            <button type="button" class="w-50 custom-btn-open unique-btn-open pay-btn-modal fs-2" id="uniqueOpenModalBtn">
                برای خرید کلیک کنید
            </button>
        </div>
        <div class="p-show m-3 text-end">
            {!! \Illuminate\Support\Str::markdown($product->description_fa) !!}
            <br>

            <div class="custom-modal-wrapper" id="uniqueModalContainer">
                <div class="custom-modal-overlay" id="uniqueModalOverlay">
                </div>

                <div class="custom-modal unique-modal" id="uniqueModal" tabindex="-1" aria-hidden="true">
                    <div class="custom-modal-dialog unique-modal-dialog">
                        <div class="custom-modal-content unique-modal-content mt-modal-detail">

                            <div class="custom-modal-footer unique-modal-footer">
                                <div class="px-1 py-2">


                                    <div class="d-flex justify-content-center gap-3 mb-3 text-muted small">
                                        <span class="nowrapfont">🔒
                                            پرداخت امن</span>
                                        <span class="nowrapfont">⚡ آنی و
                                            مطمئن</span>
                                        <span class="nowrapfont">✅ ضمانت بازگشت
                                            وجه</span>
                                    </div>
                                    <form method="POST" action="{{ route('payment.pay', $product) }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                        <div class="alert alert-warning py-2 mb-1 alert-modal" role="alert">
                                            <small class="d-block text-center">
                                                <span class="fw-bold fs-6">⏰
                                                    فقط تا
                                                    ۵ ساعت
                                                    آینده!</span> ایمیل دسترسی
                                                ارسال می‌شود
                                            </small>
                                        </div>
                                        <div class="mb-1">
                                            <label for="exampleInputEmail1"
                                                class="form-label fw-bold d-flex align-items-center">
                                                <i class="bi bi-envelope ms-1"></i><span class="font-modal-label">ایمیل
                                                    برای اشتراک</span>

                                            </label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="example@email.com" dir="ltr" required>
                                            <div id="emailHelp" class="form-text small text-muted mt-1">
                                            </div>
                                        </div>



                                        <div class="mb-1">
                                            <label for="exampleInputEmail1"
                                                class="form-label fw-bold d-flex align-items-center">
                                                <i class="bi bi-telephone ms-1"></i><span class="font-modal-label">
                                                    شماره تماس</span>

                                            </label>
                                            <input type="tel" name="phone" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="09123456789" dir="ltr" required>
                                            <div id="emailHelp" class="form-text small text-muted mt-1">
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="exampleInputEmail1"
                                                class="form-label fw-bold d-flex align-items-center">
                                                <i class="bi bi-lock ms-1"></i><span class="font-modal-label">
                                                    بسورد مدنظر برای
                                                    اشتراک</span>

                                            </label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="••••••••" name="password" dir="ltr" required>
                                            <small class="form-text text-muted d-block mt-1">
                                            </small>
                                        </div>

                                        <div class="mb-1">
                                            <label for="exampleInputEmail1"
                                                class="form-label fw-bold d-flex align-items-center">
                                                <i class="bi bi-lock ms-1"></i><span class="font-modal-label">
                                                    درصورتیکه دارای username
                                                    میباشد</span>

                                            </label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="jack666" name="username" dir="ltr">
                                            <small class="form-text text-muted d-block">
                                            </small>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1"
                                                class="form-label fw-bold d-flex align-items-center">
                                                <i class="bi bi-lock ms-1"></i><span class="font-modal-label">
                                                    درصورتیکه نیاز به توضیحات
                                                    میباشد</span>

                                            </label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="نیاز فوری دارم ..." name="description" dir="ltr">
                                            <small class="form-text text-muted d-block">
                                            </small>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-primary w-100 py-1 fw-bold finish-pay-btn">
                                                <span>✨ تکمیل خرید و
                                                    پرداخت</span>
                                                <small class="d-block font-sm">پرداخت
                                                    امن با تمام کارت‌ها</small>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>
        (function() {
            const modalWrapper = document.getElementById('uniqueModalContainer');
            const modalOverlay = document.getElementById('uniqueModalOverlay');
            const modal = document.getElementById('uniqueModal');
            const openBtn = document.getElementById('uniqueOpenModalBtn');

            function openUniqueModal() {
                if (modalWrapper) {
                    modalWrapper.classList.add('show');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeUniqueModal() {
                if (modalWrapper) {
                    modalWrapper.classList.remove('show');
                    document.body.style.overflow = '';
                }
            }

            if (openBtn) openBtn.addEventListener('click', openUniqueModal);
            if (modalOverlay) modalOverlay.addEventListener('click', function(e) {
                if (e.target === modalOverlay) closeUniqueModal();
            });
            if (modal) modal.addEventListener('click', function(e) {
                e.stopPropagation();
            });
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modalWrapper && modalWrapper.classList.contains('show')) closeUniqueModal();
            });
        })();

        (function() {
            const chatToggle = document.getElementById("chatToggle");
            const chatBox = document.getElementById("chatBox");
            if (!chatToggle || !chatBox) return;
            chatToggle.addEventListener("click", function(e) {
                e.stopPropagation();
                chatBox.classList.toggle("active");
            });
            chatBox.addEventListener("click", function(e) {
                e.stopPropagation();
            });
            document.addEventListener("click", function() {
                chatBox.classList.remove("active");
            });
        })();
    </script>
@endsection