<header>
    <style>
        /* ===== RTL Fix Only For Sidebar Menu ===== */

        .nav-menu {
            direction: rtl;
            text-align: right;
        }

        /* لیست منو */
        .nav-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu ul li {
            text-align: right;
            margin-bottom: 8px;
            /* فاصله کمتر بین آیتم‌ها */
        }

        .nav-menu ul li a {
            display: block;
            text-align: right;
        }

        .menu-item img {
            width: 56px;
            height: 56px;
            object-fit: contain;
            flex-shrink: 0;

        }

        .img-chatgpt-sidebar {
            width: 30px !important;
            height: 30px !important;
        }
        /* در دسکتاپ (عرض ≥ 992px) */
@media (min-width: 992px) {

  /* مخفی کردن آیتم خدمات */
  .nav-menu li[data-link="home"] {
    display: none;
  }

  /* مخفی کردن تصاویر همه آیتم‌ها */
  .nav-menu li img {
    display: none;
  }
}

/* نسخه موبایل: همه چیز نمایش داده شود */
@media (max-width: 991px) {
  .nav-menu li[data-link="home"] {
    display: block;
  }

  .nav-menu li img {
    display: inline-block;
  }
}
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

                .shop-breadcrumb-item+.shop-breadcrumb-item {
                    padding-right: 0.5rem;
                }

                .shop-breadcrumb-item+.shop-breadcrumb-item::before {
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

                    .shop-wishlist-btn,
                    .shop-share-btn {
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

    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}" class="text-decoration-none">
                <span class="logo-primary">Grow</span><span class="logo-secondary">vixo</span>
            </a>
        </div>
        <nav class="nav-menu" id="navMenu">
            <div class="close-btn fs-1" id="closeBtn" style="margin-right:190px !important;">&times;</div>
            <ul>

                <li data-link="home" class="active">
                    <a class="menu-item me-2 fs-3" href="{{ route('home') }}">
                        <span>خدمات</span>
                    </a>
                </li>

                <li data-link="chatgpt">
                    <a class="menu-item" href="{{ route('customer.pricing.chatgpt.index') }}">
                        <img src="/customer/images/cgatgpt.webp" alt="ChatGPT"
                            class="me-2 ms-2 mb-1 img-chatgpt-sidebar">
                        <span>اکانت ChatGPT</span>
                    </a>
                </li>

                <li data-link="gemini">
                    <a class="menu-item" href="{{ route('customer.pricing.gemini.index') }}">
                        <img src="/customer/images/gemini.webp" alt="Gemini" class="me-2 ms-2 mb-1">
                        <span>اکانت Gemini</span>
                    </a>
                </li>

                <li data-link="cursor">
                    <a class="menu-item" href="{{ route('customer.pricing.cursor.index') }}">
                        <img src="/customer/images/cursor.webp" alt="Cursor" class="me-2 ms-2 mb-1">
                        <span>اکانت Cursor</span>
                    </a>
                </li>

                <li data-link="claude">
                    <a class="menu-item" href="{{ route('customer.pricing.claude.index') }}">
                        <img src="/customer/images/claude.webp" alt="Claude" class="me-2 ms-2 mb-1">
                        <span>اکانت Claude</span>
                    </a>
                </li>

                <li data-link="spotify">
                    <a class="menu-item" href="{{ route('customer.pricing.spotify.index') }}">
                        <img src="/customer/images/spotify.webp" alt="Spotify" class="me-2 ms-2 mb-1">
                        <span>اکانت Spotify</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.TradingView.index') }}">
                        <img src="/customer/images/tradingview.webp" alt="TradingView" class="me-2 ms-2 mb-1">
                        <span>اکانت TradingView</span>
                    </a>
                </li>
            </ul>
        </nav>

        @auth
            <form action="{{ route('logout.post') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger ms-2">
                    Log out
                </button>
                <a href="{{ route('dashboard.index', auth()->user()->id) }}"
                    class="btn btn-outline-primary ms-2">داشبورد</a>

            </form>
        @endauth
        @if (auth()->guest())
            <form class="d-flex">
                <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    ورود
                </button>


                <a class="btn btn-outline-primary" type="submit" data-bs-toggle="modal"
                    data-bs-target="#registerModal">ثبت نام</a>
            </form>
        @endif
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<x-login-modal />
<x-register-modal />

{{-- mobile --}}
<x-register-mobile-modal />
