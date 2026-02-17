@extends('customer.layouts.master-shop-detail')

@section('content')
    <section class="shop-product-detail-wrapper py-4">
        <div class="shop-container">
            <!-- مسیر راهنما (Breadcrumb) -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="shop-breadcrumb bg-transparent p-0 mb-0">
                    <li class="shop-breadcrumb-item"><a href="{{ route('home') }}" class="shop-link-muted">خانه</a></li>
                    <li class="shop-breadcrumb-item"><a href="{{ route('customer.pricing.chatgpt.index') }}" class="shop-link-muted">محصولات</a></li>
                    <li class="shop-breadcrumb-item shop-active text-primary" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>

            <style>
                /* استایل‌های منحصربفرد با پیشوند shop- */
                .shop-product-detail-wrapper {
                    direction: rtl;
                    font-family: 'Vazir', 'Tahoma', sans-serif;
                }

                /* ===== Breadcrumb ===== */
                .shop-breadcrumb {
                    display: flex;
                    flex-wrap: wrap;
                    padding: 0;
                    margin-bottom: 1rem;
                    list-style: none;
                    background-color: transparent;
                }

                .shop-breadcrumb-item + .shop-breadcrumb-item {
                    padding-right: 0.5rem;
                }

                .shop-breadcrumb-item + .shop-breadcrumb-item::before {
                    content: "/";
                    padding-left: 0.5rem;
                    color: #6c757d;
                }

                .shop-link-muted {
                    color: #6c757d;
                    text-decoration: none;
                }

                .shop-link-muted:hover {
                    color: #0056b3;
                    text-decoration: underline;
                }

                .shop-active {
                    color: #0d6efd;
                }

                /* ===== کارت اصلی محصول ===== */
                .shop-main-card {
                    border: none;
                    border-radius: 24px;
                    overflow: hidden;
                    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
                    margin-bottom: 2rem;
                }

                /* ===== گالری تصویر ===== */
                .shop-gallery-wrapper {
                    background: #f8f9fa;
                    padding: 2rem;
                    height: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .shop-image-container {
                    position: relative;
                    width: 100%;
                    text-align: center;
                }

                .shop-badge-special {
                    position: absolute;
                    top: 15px;
                    right: 15px;
                    background: #ffc107;
                    color: #212529;
                    padding: 8px 18px;
                    border-radius: 50px;
                    font-weight: 600;
                    font-size: 0.9rem;
                    box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
                }

                .shop-main-image {
                    max-height: 350px;
                    object-fit: contain;
                    transition: transform 0.5s ease;
                }

                .shop-main-image:hover {
                    transform: scale(1.08);
                }

                .shop-zoom-btn {
                    position: absolute;
                    bottom: 15px;
                    left: 15px;
                    width: 45px;
                    height: 45px;
                    border-radius: 50%;
                    background: white;
                    border: none;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: all 0.3s ease;
                }

                .shop-zoom-btn:hover {
                    background: #0d6efd;
                    color: white;
                    transform: scale(1.1);
                }

                /* ===== اطلاعات محصول ===== */
                .shop-info-wrapper {
                    padding: 2.5rem;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                }

                .shop-title-wrapper {
                    display: flex;
                    justify-content: space-between;
                    align-items: flex-start;
                    margin-bottom: 1rem;
                }

                .shop-product-title {
                    font-size: 2rem;
                    font-weight: 700;
                    color: #212529;
                    margin: 0;
                }

                .shop-authenticity-badge {
                    background: rgba(25, 135, 84, 0.1);
                    color: #198754;
                    padding: 8px 16px;
                    border-radius: 50px;
                    font-size: 0.9rem;
                    font-weight: 500;
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                }

                .shop-description-text {
                    color: #6c757d;
                    margin-bottom: 1.5rem;
                    padding-bottom: 1rem;
                    border-bottom: 1px solid #dee2e6;
                    line-height: 1.8;
                }

                /* ===== قیمت ===== */
                .shop-price-section {
                    margin-bottom: 1.5rem;
                }

                .shop-old-price {
                    color: #6c757d;
                    text-decoration: line-through;
                    font-size: 1.1rem;
                    margin-left: 1rem;
                }

                .shop-discount-badge {
                    background: #dc3545;
                    color: white;
                    padding: 5px 15px;
                    border-radius: 50px;
                    font-size: 0.9rem;
                    font-weight: 600;
                }

                .shop-current-price {
                    font-size: 2.5rem;
                    font-weight: 700;
                    color: #0d6efd;
                    margin-left: 0.5rem;
                }

                .shop-currency {
                    color: #6c757d;
                    font-size: 1.2rem;
                }

                .shop-security-badge {
                    color: #198754;
                    font-size: 0.9rem;
                    margin-top: 0.5rem;
                    display: block;
                }

                /* ===== موجودی ===== */
                .shop-stock-wrapper {
                    margin-bottom: 1.5rem;
                }

                .shop-instock-badge {
                    background: rgba(25, 135, 84, 0.1);
                    color: #198754;
                    padding: 8px 16px;
                    border-radius: 50px;
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                }

                .shop-stock-count {
                    color: #6c757d;
                    margin-right: 1rem;
                    font-size: 0.95rem;
                }

                .shop-outofstock-badge {
                    background: rgba(220, 53, 69, 0.1);
                    color: #dc3545;
                    padding: 8px 16px;
                    border-radius: 50px;
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                }

                /* ===== ویژگی‌ها ===== */
                .shop-features-grid {
                    margin-bottom: 1.5rem;
                }

                .shop-feature-item {
                    padding: 1rem;
                    background: #f8f9fa;
                    border-radius: 16px;
                    transition: all 0.3s ease;
                    display: flex;
                    align-items: center;
                }

                .shop-feature-item:hover {
                    background: #e9ecef;
                    transform: translateY(-3px);
                }

                .shop-feature-icon {
                    font-size: 1.8rem;
                    color: #0d6efd;
                    margin-left: 1rem;
                }

                .shop-feature-label {
                    font-size: 0.85rem;
                    color: #6c757d;
                    display: block;
                }

                .shop-feature-value {
                    font-weight: 600;
                    color: #212529;
                }

                /* ===== بخش خرید ===== */
                .shop-action-section {
                    margin-top: auto;
                }

                .shop-quantity-wrapper {
                    margin-bottom: 1.5rem;
                }

                .shop-quantity-label {
                    font-weight: 600;
                    margin-bottom: 0.5rem;
                    display: block;
                }

                .shop-quantity-control {
                    width: 140px;
                    display: flex;
                    border: 1px solid #dee2e6;
                    border-radius: 50px;
                    overflow: hidden;
                }

                .shop-qty-btn {
                    width: 45px;
                    height: 45px;
                    border: none;
                    background: #f8f9fa;
                    font-size: 1.3rem;
                    cursor: pointer;
                    transition: all 0.2s ease;
                }

                .shop-qty-btn:hover {
                    background: #e9ecef;
                }

                .shop-qty-input {
                    width: 60px;
                    text-align: center;
                    border: none;
                    border-left: 1px solid #dee2e6;
                    border-right: 1px solid #dee2e6;
                    font-weight: 600;
                }

                .shop-qty-input:focus {
                    outline: none;
                }

                .shop-buttons-wrapper {
                    display: flex;
                    gap: 10px;
                    flex-wrap: wrap;
                    margin-bottom: 1rem;
                }

                .shop-add-to-cart {
                    flex: 1;
                    background: #0d6efd;
                    color: white;
                    border: none;
                    padding: 15px 25px;
                    border-radius: 50px;
                    font-weight: 600;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    gap: 10px;
                    text-decoration: none;
                    transition: all 0.3s ease;
                }

                .shop-add-to-cart:hover {
                    background: #0b5ed7;
                    transform: translateY(-3px);
                    box-shadow: 0 10px 25px rgba(13, 110, 253, 0.3);
                    color: white;
                }

                .shop-wishlist-btn {
                    width: 55px;
                    height: 55px;
                    border-radius: 50%;
                    border: 1px solid #0d6efd;
                    background: transparent;
                    color: #0d6efd;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.2rem;
                    transition: all 0.3s ease;
                }

                .shop-wishlist-btn:hover {
                    background: #0d6efd;
                    color: white;
                    transform: scale(1.1);
                }

                .shop-share-btn {
                    width: 55px;
                    height: 55px;
                    border-radius: 50%;
                    border: 1px solid #6c757d;
                    background: transparent;
                    color: #6c757d;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.2rem;
                    transition: all 0.3s ease;
                }

                .shop-share-btn:hover {
                    background: #6c757d;
                    color: white;
                    transform: scale(1.1);
                }

                .shop-quick-buy {
                    text-align: center;
                }

                .shop-quick-buy-link {
                    color: #6c757d;
                    text-decoration: none;
                    font-size: 0.9rem;
                }

                .shop-quick-buy-link:hover {
                    color: #0d6efd;
                }

                /* ===== چت ویجت ===== */
                .shop-chat-wrapper {
                    position: fixed;
                    bottom: 25px;
                    left: 25px;
                    z-index: 9999;
                }

                .shop-chat-toggle {
                    width: 65px;
                    height: 65px;
                    border-radius: 50%;
                    border: none;
                    background: linear-gradient(135deg, #4e73df, #1cc88a);
                    color: white;
                    font-size: 24px;
                    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
                    cursor: pointer;
                    transition: all 0.3s ease;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .shop-chat-toggle:hover {
                    transform: scale(1.15);
                }

                .shop-chat-box {
                    position: absolute;
                    bottom: 80px;
                    left: 0;
                    width: 240px;
                    background: white;
                    border-radius: 18px;
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
                    padding: 12px 0;
                    opacity: 0;
                    transform: translateY(20px);
                    pointer-events: none;
                    transition: all 0.3s ease-in-out;
                }

                .shop-chat-box.shop-active {
                    opacity: 1;
                    transform: translateY(0);
                    pointer-events: auto;
                }

                .shop-chat-menu {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }

                .shop-chat-item {
                    padding: 12px 20px;
                    transition: background 0.2s;
                }

                .shop-chat-item:hover {
                    background: #f8f9fa;
                }

                .shop-chat-link {
                    text-decoration: none;
                    color: #212529;
                    display: block;
                    font-size: 14px;
                    font-weight: 500;
                }

                /* ===== ریسپانسیو ===== */
                @media (max-width: 991px) {
                    .shop-gallery-wrapper {
                        min-height: 300px;
                    }

                    .shop-info-wrapper {
                        padding: 2rem;
                    }

                    .shop-product-title {
                        font-size: 1.8rem;
                    }
                }

                @media (max-width: 767px) {
                    .shop-gallery-wrapper {
                        padding: 1rem;
                        min-height: 250px;
                    }

                    .shop-info-wrapper {
                        padding: 1.5rem;
                    }

                    .shop-product-title {
                        font-size: 1.5rem;
                    }

                    .shop-current-price {
                        font-size: 2rem;
                    }

                    .shop-buttons-wrapper {
                        flex-direction: column;
                    }

                    .shop-add-to-cart {
                        width: 100%;
                    }

                    .shop-wishlist-btn, .shop-share-btn {
                        width: 100%;
                        height: 50px;
                        border-radius: 50px;
                    }

                    .shop-title-wrapper {
                        flex-direction: column;
                        gap: 10px;
                    }
                }

                /* ===== انیمیشن‌ها ===== */
                @keyframes shopFadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(20px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .shop-main-card {
                    animation: shopFadeIn 0.6s ease-out;
                }

                /* حذف اسپینر از اینپوت عدد */
                .shop-qty-input::-webkit-inner-spin-button,
                .shop-qty-input::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }

                .shop-qty-input {
                    -moz-appearance: textfield;
                    appearance: textfield;
                }

                /* ===== هدر توضیحات ===== */
                .shop-header-box {
                    background: #f8f9fa;
                    border: 1px solid #0d6efd;
                    border-radius: 20px;
                    padding: 1.5rem;
                    margin: 1rem;
                }

                .shop-header-title {
                    text-align: right;
                    font-weight: 700;
                }

                .shop-header-text {
                    text-align: right;
                    font-family: 'Vazir', Tahoma, Arial, sans-serif;
                    line-height: 1.8;
                }
            </style>

            <!-- ویجت چت -->
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
                    <!-- کارت اصلی محصول -->
                    <div class="col-12">
                        <div>
                            <div class="row g-0" style="margin-top:330px;">
                                <!-- گالری تصویر -->
                               
                                <!-- اطلاعات محصول -->
                                <div class="col-lg-6 col-md-12 bg-light rounded-5 border border-primary" style="margin-top:330px;">
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

                                        <!-- قیمت -->
                                        <div class="shop-price-section">
                                            @if ($product->old_price ?? false)
                                                <div class="d-flex align-items-center gap-3 mb-2">
                                                    <span class="shop-old-price">{{ number_format($product->old_price) }} تومان</span>
                                                    <span class="shop-discount-badge">{{ $product->discount_percent ?? '20%' }} تخفیف</span>
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

                                        <!-- ویژگی‌ها -->
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

                                        <!-- بخش خرید -->
                                        <div class="shop-action-section">
                                           
                                            <div class="shop-buttons-wrapper">
                                                <a href="#" class="shop-add-to-cart">
                                                    <i class="fas fa-shopping-cart"></i>افزودن به سبد خرید
                                                </a>
                                            </div>

                                          
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
        // چت ویجت
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

        // توابع تعداد محصول
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

        // افزودن به علاقه‌مندی‌ها
        function shopAddToWishlist(productId) {
            alert('محصول به علاقه‌مندی‌ها اضافه شد');
        }

        // اشتراک‌گذاری
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

        // بزرگنمایی تصویر
        function shopZoomImage() {
            alert('نمایش تصویر در اندازه بزرگ');
        }
    </script>
@endsection