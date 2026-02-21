@extends('customer.layouts.master-shop-detail')

@section('content')
    <section class="shop-product-detail-wrapper py-4">
        <div class="shop-container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="shop-breadcrumb bg-transparent p-0 mb-0">
                    <li class="shop-breadcrumb-item"><a href="{{ route('home') }}" class="shop-link-muted">خانه</a></li>
                    <li class="shop-breadcrumb-item"><a href="{{ route('customer.pricing.chatgpt.index') }}" class="shop-link-muted">محصولات</a></li>
                    <li class="shop-breadcrumb-item shop-active text-primary" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>

            <div class="shop-chat-wrapper">
                <button class="shop-chat-toggle" id="shopChatToggle">
                    <i class="fas fa-comments"></i>
                </button>

                <div class="shop-chat-box" id="shopChatBox">
                    <ul class="shop-chat-menu">
                        <li class="shop-chat-item"><a href="#" class="shop-chat-link">چت با پشتیبانی</a></li>
                        <li class="shop-chat-item"><a href="#" class="shop-chat-link">سوالات متداول</a></li>
                        <li class="shop-chat-item"><a href="#" class="shop-chat-link">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
         
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                        <div>
                            <div class="row g-0 me-2" style="margin-top:260px;">

                                <div class="col-lg-6 col-md-12 bg-light rounded-5 border border-primary"
                                    style="margin-top:330px;">
                                    <div class="shop-info-wrapper">
                                        <div class="shop-title-wrapper">
                                            <h1 class="shop-product-title">{{ $product->name }}</h1>
                                            <span class="shop-authenticity-badge">
                                                <i class="fas fa-check-circle"></i>اصالت کالا
                                            </span>
                                        </div>

                                        <p class="shop-description-text">
                                            <i class="fas fa-info-circle text-primary me-2"></i>
                                            {{ $product->description_fa ?? 'توضیحاتی برای این محصول ثبت نشده است.' }}
                                        </p>

                                        <div class="shop-price-section">
                                            @if ($product->old_price ?? false)
                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                    <span class="shop-old-price">{{ number_format($product->old_price) }}
                                                        تومان</span>
                                                    <span
                                                        class="shop-discount-badge">{{ $product->discount_percent ?? '20%' }}
                                                        تخفیف</span>
                                                </div>
                                            @endif
                                            <div class="d-flex align-items-baseline">
                                                <span class="shop-current-price">{{ number_format($product->price) }}</span>
                                                <span class="shop-currency">تومان</span>
                                            </div>
                                            <small class="shop-security-badge">
                                                <i class="fas fa-shield-alt"></i> پرداخت امن و تضمین شده
                                            </small>
                                        </div>

                                        <div class="shop-features-grid">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <div class="shop-feature-item">
                                                        <i class="fas fa-headset shop-feature-icon"></i>
                                                        <div>
                                                            <small class="shop-feature-label">پشتیبانی</small>
                                                            <span class="shop-feature-value">۲۴ ساعته</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="shop-feature-item">
                                                        <i class="fas fa-truck shop-feature-icon"></i>
                                                        <div>
                                                            <small class="shop-feature-label">ارسال</small>
                                                            <span class="shop-feature-value">فوری</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="shop-action-section">

                                            <!-- The Modal -->

                                            <div class="custom-modal-wrapper" id="uniqueModalContainer">
                                                <div class="custom-modal-overlay" id="uniqueModalOverlay"></div>

                                                <div class="custom-modal unique-modal" id="uniqueModal" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="custom-modal-dialog unique-modal-dialog">
                                                        <div class="custom-modal-content unique-modal-content">
                                                            
                                                            <div class="custom-modal-footer unique-modal-footer">
                                                                <div class="px-3 py-2">
                                                                    <div
                                                                        class="d-flex justify-content-center gap-3 mb-3 text-muted small">
                                                                        <span>🔒 پرداخت امن</span>
                                                                        <span>⚡ آنی و مطمئن</span>
                                                                        <span>✅ ضمانت بازگشت وجه</span>
                                                                    </div>

                                                                    <form method="POST"
                                                                        action="{{ route('payment.pay', $product->price) }}">
                                                                        @csrf
                                                                        <div class="alert alert-warning py-2 mb-3"
                                                                            role="alert"
                                                                            style="background-color: #fff3cd; border-color: #ffecb5;">
                                                                            <small class="d-block text-center">
                                                                                <span class="fw-bold">⏰ فقط تا ۵ ساعت
                                                                                    آینده!</span> ایمیل دسترسی ارسال می‌شود
                                                                            </small>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1"
                                                                                class="form-label fw-bold">
                                                                                <i class="bi bi-envelope"></i> ایمیل برای
                                                                                اشتراک
                                                                            </label>
                                                                            <input type="email" class="form-control"
                                                                                id="exampleInputEmail1"
                                                                                aria-describedby="emailHelp"
                                                                                placeholder="example@email.com"
                                                                                dir="ltr">
                                                                            <div id="emailHelp"
                                                                                class="form-text small text-muted mt-1">
                                                                                ایمیل شما نزد ما محفوظ است
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="exampleInputPassword1"
                                                                                class="form-label fw-bold">
                                                                                <i class="bi bi-lock"></i> پسورد مدنظر برای
                                                                                اشتراک
                                                                            </label>
                                                                            <input type="password" class="form-control"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="••••••••" dir="ltr">
                                                                            <small
                                                                                class="form-text text-muted d-block mt-1">
                                                                            </small>
                                                                        </div>

                                                                        <div class="bg-light p-2 rounded mb-3 small">
                                                                            <div
                                                                                class="d-flex align-items-center gap-2 mt-1">
                                                                                <span class="text-success fs-5">✓</span>
                                                                                <span>پشتیبانی ۲۴ ساعته</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn btn-primary w-100 py-2 fw-bold"
                                                                                style="background-color: #28a745; border-color: #28a745;">
                                                                                <span>✨ تکمیل خرید و پرداخت</span>
                                                                                <small class="d-block mt-1"
                                                                                    style="font-size: 0.75rem; opacity: 0.9;">پرداخت
                                                                                    امن با تمام کارت‌ها</small>
                                                                            </button>

                                                                            <p class="text-muted small mt-2 mb-0">
                                                                                👥 بیش از ۱۰,۰۰۰ کاربر عضو
                                                                            </p>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                    <button type="button" class="w-75 custom-btn-open unique-btn-open"
                                                id="uniqueOpenModalBtn" style="background-color:green;">
                                               پرداخت
                                            </button>
                                            </div>

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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const shopChatToggle = document.getElementById("shopChatToggle");
        const shopChatBox = document.getElementById("shopChatBox");

        if (shopChatToggle && shopChatBox) {
            shopChatToggle.addEventListener("click", function(e) {
                e.stopPropagation();
                shopChatBox.classList.toggle("shop-active");
            });

            shopChatBox.addEventListener("click", function(e) {
                e.stopPropagation();
            });

            document.addEventListener("click", function() {
                shopChatBox.classList.remove("shop-active");
            });
        }

        function shopIncrement() {
            let input = document.getElementById('shopQuantity');
            let max = parseInt(input.getAttribute('max')) || 99;
            let currentValue = parseInt(input.value) || 1;
            if (currentValue < max) {
                input.value = currentValue + 1;
            }
        }

        function shopDecrement() {
            let input = document.getElementById('shopQuantity');
            let currentValue = parseInt(input.value) || 1;
            if (currentValue > 1) {
                input.value = currentValue - 1;
            }
        }

        function shopAddToWishlist(productId) {
            alert('محصول به علاقه‌مندی‌ها اضافه شد');
        }

        function shopShareProduct() {
            if (navigator.share) {
                navigator.share({
                    title: '{{ $product->name }}',
                    text: '{{ Str::limit($product->description, 100) }}',
                    url: window.location.href,
                });
            } else {
                navigator.clipboard.writeText(window.location.href);
                alert('لینک محصول کپی شد');
            }
        }

        function shopZoomImage() {
            alert('نمایش تصویر در اندازه بزرگ');
        }
    </script>
@endsection
