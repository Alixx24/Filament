@extends('customer.layouts.master-shop-detail')

{{-- ====================== Meta Section ====================== --}}
@section('meta')
    <title>{{ $product->name }}</title>
    {{-- Meta Description --}}
    <meta name="description" content="{{ $product->meta_description }}">
    <meta name="keywords" content="{{ $product->meta_keywords }}">

    {{-- Author & Publisher --}}
    <meta name="author" content="Ali">
    <meta name="publisher" content="GrowVixo">

    {{-- Open Graph (Facebook & LinkedIn) --}}
    <meta property="og:title" content="Խանութի կայքի դիզայն և Social Media Marketing Հայաստանում – GrowVixo">
    <meta property="og:description"
        content="Բարձրացրեք Ձեր e-commerce բրենդի և խանութի կայքի տեսանելիությունը Հայաստանում՝ Instagram, Facebook և Telegram ինտեգրացիա, KPI tracking և measurable growth. Սկսեք հիմա GrowVixo-ով.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/social-media-marketing-banner.webp') }}">
    <meta property="og:image:alt" content="Խանութի կայքի դիզայն Հայաստանում և Social Media Marketing ինտեգրացիա">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Խանութի կայքի դիզայն և Social Media Marketing Հայաստանում – GrowVixo">
    <meta name="twitter:description"
        content="Բարձրացրեք Ձեր e-commerce բրենդի և խանութի կայքի տեսանելիությունը Հայաստանում՝ Instagram, Facebook ինտեգրացիա և measurable sales growth. Սկսեք հիմա GrowVixo-ով.">
    <meta name="twitter:image" content="{{ asset('images/social-media-marketing-banner.webp') }}">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
 
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
            const closeBtn = document.getElementById('uniqueCloseBtn');
            const cancelBtn = document.getElementById('uniqueCancelBtn');
            const confirmBtn = document.getElementById('uniqueConfirmBtn');

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

            function handleOverlayClick(e) {
                if (e.target === modalOverlay) {
                    closeUniqueModal();
                }
            }

            function handleEscapeKey(e) {
                if (e.key === 'Escape' && modalWrapper.classList.contains('show')) {
                    closeUniqueModal();
                }
            }

            function handleModalContentClick(e) {
                e.stopPropagation();
            }

            if (openBtn) {
                openBtn.addEventListener('click', openUniqueModal);
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', closeUniqueModal);
            }

            if (cancelBtn) {
                cancelBtn.addEventListener('click', closeUniqueModal);
            }

            if (confirmBtn) {
                confirmBtn.addEventListener('click', function() {
                    alert('عملیات تایید انجام شد!');
                    closeUniqueModal();
                });
            }

            if (modalOverlay) {
                modalOverlay.addEventListener('click', handleOverlayClick);
            }

            if (modal) {
                modal.addEventListener('click', handleModalContentClick);
            }

            document.addEventListener('keydown', handleEscapeKey);
        })();
    </script>
    <script>
        const chatToggle = document.getElementById("chatToggle");
        const chatBox = document.getElementById("chatBox");

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
    </script>
    <script src="../js/header.js"></script>
@endsection
