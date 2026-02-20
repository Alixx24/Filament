<!DOCTYPE html>
@yield('lang')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'اکانت هوش مصنوعی')</title>
    @include('customer.layouts.head-tag-content')

    <style>
        /* استایل‌های اصلی برای چسباندن فوتر */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }

        /* کانتینر اصلی محتوا */
        .gv-main-content {
            flex: 1 0 auto;
            width: 100%;
        }

        /* استایل برای hero-section */
        .hero-section {
            flex: 1 0 auto;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        /* استایل‌های فوتر مدرن و متحرک */
        .gv-footer-wrapper {
            flex-shrink: 0;
            width: 100%;
            direction: ltr;
            margin-top: auto;
            position: relative;
            z-index: 2;
        }

        .gv-footer-container {
            background: linear-gradient(135deg, #1a1e25 0%, #2c3e50 100%);
            padding: 60px 20px 30px;
            color: #fff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.2);
        }

        /* افکت موج در بالای فوتر */
        .gv-footer-container::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            right: 0;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            opacity: 0.3;
        }

        /* افکت پس‌زمینه متحرک */
        .gv-footer-container::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: gvFooterGlow 15s linear infinite;
        }

        @keyframes gvFooterGlow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* لوگو و نماد اعتماد */
        .gv-footer-copyright {
            font-size: 14px;
            margin-bottom: 30px;
            color: #bdc3c7;
            line-height: 1.8;
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .gv-footer-copyright img {
            max-width: 100px;
            height: auto;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            border-radius: 10px;
            background: white;
            padding: 5px;
            display: inline-block;
        }

        .gv-footer-copyright img:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .gv-footer-copyright strong {
            color: #3498db;
            font-weight: 700;
        }

        /* شبکه‌های اجتماعی با انیمیشن */
        .gv-social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            flex-wrap: wrap;
        }

        .gv-social-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            position: relative;
            overflow: hidden;
        }

        .gv-social-link::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
        }

        .gv-social-link:hover::before {
            width: 100px;
            height: 100px;
        }

        .gv-social-link:hover {
            background: #3498db;
            transform: translateY(-5px) scale(1.1);
            border-color: transparent;
            box-shadow: 0 10px 25px rgba(52, 152, 219, 0.4);
        }

        /* لینک‌های فوتر */
        .gv-footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
            margin-top: 20px;
        }

        .gv-footer-link {
            color: #bdc3c7;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            padding: 5px 10px;
            transition: all 0.3s ease;
            position: relative;
            letter-spacing: 0.5px;
        }

        .gv-footer-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: #3498db;
            transition: width 0.3s ease;
        }

        .gv-footer-link:hover {
            color: #fff;
        }

        .gv-footer-link:hover::after {
            width: 80%;
        }

        /* ===== استایل مخصوص موبایل (مدرن و متحرک) ===== */
        @media (max-width: 768px) {
            .gv-footer-container {
                padding: 40px 15px 25px;
                border-radius: 30px 30px 0 0;
            }

            /* کارت‌های متحرک برای موبایل */
            .gv-footer-copyright {
                font-size: 12px;
                margin-bottom: 25px;
            }

            .gv-footer-copyright img {
                max-width: 80px;
                animation: gvMobilePulse 2s infinite;
            }

            @keyframes gvMobilePulse {
                0% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.05);
                }

                100% {
                    transform: scale(1);
                }
            }

            /* آیکون‌های اجتماعی متحرک */
            .gv-social-icons {
                gap: 12px;
                margin-bottom: 25px;
            }

            .gv-social-link {
                width: 40px;
                height: 40px;
                font-size: 1rem;
                animation: gvMobileBounce 2s infinite;
                animation-delay: calc(0.1s * var(--i));
            }

            .gv-social-link:nth-child(1) {
                --i: 1;
            }

            .gv-social-link:nth-child(2) {
                --i: 2;
            }

            .gv-social-link:nth-child(3) {
                --i: 3;
            }

            .gv-social-link:nth-child(4) {
                --i: 4;
            }

            @keyframes gvMobileBounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-5px);
                }
            }

            .gv-social-link:hover {
                animation: none;
                transform: scale(1.15);
            }

            /* لینک‌های فوتر به صورت کارت */
            .gv-footer-links {
                gap: 10px;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 15px;
            }

            .gv-footer-link {
                font-size: 13px;
                padding: 8px 15px;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 25px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                transition: all 0.3s ease;
                flex: 0 1 auto;
                min-width: 80px;
                text-align: center;
            }

            .gv-footer-link::after {
                display: none;
            }

            .gv-footer-link:hover {
                background: #3498db;
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
            }

            /* متن کپی رایت با افکت */
            .gv-footer-copyright span {
                display: inline-block;
                animation: gvMobileFade 3s infinite;
            }

            @keyframes gvMobileFade {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.8;
                }
            }
        }

        /* موبایل کوچک */
        @media (max-width: 480px) {
            .gv-footer-container {
                padding: 30px 12px 20px;
            }

            .gv-social-icons {
                gap: 8px;
            }

            .gv-social-link {
                width: 35px;
                height: 35px;
                font-size: 0.9rem;
            }

            .gv-footer-link {
                font-size: 12px;
                padding: 6px 12px;
                min-width: 70px;
            }

            .gv-footer-copyright {
                font-size: 11px;
            }

            .gv-footer-copyright img {
                max-width: 70px;
            }
        }

        /* انیمیشن برای لینک‌ها */
        .gv-footer-link {
            animation: gvFadeInUp 0.5s ease backwards;
        }

        .gv-social-link:nth-child(1) {
            animation-delay: 0.1s;
        }

        .gv-social-link:nth-child(2) {
            animation-delay: 0.2s;
        }

        .gv-social-link:nth-child(3) {
            animation-delay: 0.3s;
        }

        .gv-social-link:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes gvFadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* حالت هاور برای کل فوتر */
        .gv-footer-wrapper:hover .gv-social-link {
            filter: blur(0);
            opacity: 1;
        }

        .gv-social-link {
            filter: blur(0.3px);
            opacity: 0.95;
            transition: all 0.3s ease;
        }

        .gv-social-link:hover {
            filter: blur(0);
            opacity: 1;
        }

        /* استایل برای ذرات پس‌زمینه */
        .style-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        .footer-copy {
            text-align: center;
            /* اگر می‌خوای وسط باشه */
            direction: rtl;
            /* برای درست نمایش دادن فارسی */
            line-height: 1.8;
            font-size: 14px;
            color: #ffffff;
        }

        /* استایل‌های اختصاصی مودال */
        .custom-modal-wrapper {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .custom-modal-wrapper.show {
            display: block;
        }

        .custom-modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(2px);
        }

        .custom-modal {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            margin: 0 auto;
            max-width: 500px;
            width: 90%;
            z-index: 10000;
            outline: 0;
        }

        .custom-modal-dialog {
            position: relative;
            width: 100%;
            pointer-events: auto;
        }

        .custom-modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            outline: 0;
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        .custom-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .custom-modal-title {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 1.5;
            color: #212529;
        }

        .custom-btn-close {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: 0.25rem;
            opacity: 0.5;
            cursor: pointer;
        }

        .custom-btn-close:hover {
            opacity: 0.75;
        }

        .custom-modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
            color: #212529;
        }

        .custom-modal-footer {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 1px solid #dee2e6;
            gap: 0.5rem;
        }

        .custom-btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            border: 1px solid transparent;
        }

        .custom-btn-primary {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .custom-btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }

        .custom-btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .custom-btn-secondary:hover {
            background-color: #5c636a;
            border-color: #565e64;
        }

        .custom-btn-open {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #fff;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            background-color: #0d6efd;
            border: 1px solid #0d6efd;
            margin: 1rem;
        }

        .custom-btn-open:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }

        /* انیمیشن برای مودال */
        .custom-modal {
            animation: customModalFadeIn 0.3s ease;
        }

        @keyframes customModalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-50%) scale(0.9);
            }

            to {
                opacity: 1;
                transform: translateY(-50%) scale(1);
            }
        }

        /* استایل‌های اختصاصی مودال */
        .unique-modal-wrapper {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        .unique-modal-container {
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            margin: 0 auto;
            animation: uniqueModalFadeIn 0.3s ease;
        }

        @keyframes uniqueModalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .unique-modal-content {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .unique-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .unique-modal-title {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
        }

        .unique-modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            line-height: 1;
            cursor: pointer;
            color: #666;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .unique-modal-close:hover {
            background-color: #e9ecef;
            color: #333;
        }

        .unique-modal-body {
            padding: 20px;
            max-height: calc(90vh - 130px);
            overflow-y: auto;
        }

        .unique-modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding: 16px 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }

        .unique-btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .unique-btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .unique-btn-danger:hover {
            background-color: #c82333;
        }

        /* کلاس برای نمایش مودال */
        .unique-modal-wrapper.unique-show {
            display: flex;
        }

        /* استایل‌های اضافی برای جلوگیری از تداخل */
        body.unique-modal-open {
            overflow: hidden;
        }
    </style>
    <style>
        <style>.custom-card {
            border-radius: 20px;
            /* مرز گرد */
            overflow: hidden;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            /* سایه نرم */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* انیمیشن حرکت */
        }

        .custom-card:hover {
            transform: translateY(-15px);
            /* حرکت کارت به سمت بالا */
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            /* سایه بیشتر */
        }

        .card-img-top {
            transition: transform 0.4s ease-in-out;
            /* انیمیشن تصویر */
        }

        .custom-card:hover .card-img-top {
            transform: scale(1.05);
            /* بزرگ شدن تصویر هنگام هاور */
        }

        .card-body {
            background-color: #fff;
            padding: 25px;
            text-align: center;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #777;
            font-size: 1rem;
            margin: 15px 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            /* دکمه گرد */
            padding: 12px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            /* حرکت دکمه به سمت بالا */
        }


        @media (min-width: 768px) {
            .desktop-row {
                display: flex;
                flex-wrap: wrap;
                padding: 25px !important;
            }
        }

        .chat-wrapper {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        .chat-box ul li {
            display: flex;
            align-items: center;
            gap: 5px;
            /* فاصله بین آیکون و متن */
            width: 120px;
            /* طول آیتم دلخواه */
            direction: ltr;
            /* مهم: راست‌چین کردن فلکس */
        }

        .chat-box ul li a {
            white-space: nowrap;
            /* جلوگیری از رفتن به خط بعد */
            font-size: 1.2rem;
        }

        .chat-box ul li a {
            margin-left: 30px;
            /* متن به سمت راست می‌رود */
            text-decoration: none;
            color: black;
        }

        /* دکمه اصلی */
        .chat-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: none;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            color: white;
            font-size: 22px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chat-button:hover {
            transform: scale(1.1);
        }

        /* باکس چت */
        .chat-box {
            position: absolute;
            bottom: 75px;
            right: 0;
            width: 220px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 10px 0;
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            transition: all 0.3s ease-in-out;
        }

        /* وقتی فعال میشه */
        .chat-box.active {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .chat-box ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .chat-box li {
            padding: 10px 20px;
            transition: background 0.2s;
        }

        .chat-box li:hover {
            background: #f8f9fc;
        }

        .chat-box a {
            text-decoration: none;
            color: #333;
            display: block;
            font-size: 14px;
        }


        @media (max-width: 767px) {
            .mt-mobile {
                margin-top: 2466px !important;
            }
        }

        /* استایل مخصوص دسکتاپ - فقط در سایزهای بالای 992px اعمال می‌شود */
        @media (min-width: 992px) {
            .desktop-product-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
                margin-top: 0 !important;
                padding: 0;
            }

            .desktop-product-card {
                transition: all 0.3s ease;
                border: 1px solid #e9ecef;
                border-radius: 16px;
                overflow: hidden;
                background: #ffffff;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .desktop-product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                border-color: transparent;
            }

            .desktop-product-image {
                padding: 20px 20px 10px 20px;
                text-align: center;
                background: #f8f9fa;
            }

            .desktop-product-image img {
                max-width: 70%;
                height: 140px;
                object-fit: contain;
                transition: transform 0.3s ease;
            }

            .desktop-product-card:hover .desktop-product-image img {
                transform: scale(1.05);
            }

            .desktop-product-content {
                padding: 0 20px 20px 20px;
                text-align: center;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
            }

            .desktop-product-title {
                font-size: 1.1rem;
                font-weight: 600;
                color: #212529;
                margin-bottom: 8px;
            }

            .desktop-product-description {
                font-size: 0.85rem;
                color: #6c757d;
                line-height: 1.5;
                margin-bottom: 15px;
                flex-grow: 1;
            }

            .desktop-product-button {
                display: inline-block;
                width: 80%;
                margin: 0 auto;
                padding: 10px 0;
                background: #212529;
                color: white;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 500;
                transition: all 0.3s ease;
                border: 1px solid #212529;
            }

            .desktop-product-button:hover {
                background: white;
                color: #212529;
                text-decoration: none;
            }

            /* لینک بدون تغییر ظاهر */
            .desktop-product-link {
                text-decoration: none;
                color: inherit;
                display: block;
                height: 100%;
            }

            /* حذف فاصله از بالای کانتینر */
            .desktop-container {
                margin-top: 0 !important;
                padding-top: 0 !important;
            }

            .mt-desktop {
                margin-top: 69px;
            }
        }

        /* استایل موبایل (اختیاری) */
        @media (max-width: 991px) {
            .desktop-product-grid {
                display: block;
            }

            .col-md-3 {
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
    </style>
</head>

<body>
    <div id="particles-js" class="style-particles"></div>

    {{-- HEADER --}}
    @include('customer.layouts.header-shop')

    {{-- PAGE CONTENT --}}
    <main class="hero-section">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <section style="margin-top:590px !important;">
        <footer class="gv-footer-container text-center">
            <!-- Footer text -->
            <p class="gv-footer-copyright">
                <a referrerpolicy='origin' target='_blank'
                    href='https://trustseal.enamad.ir/?id=703000&Code=oBqG9M3Yan78S2nE0Mgw1OyqNHA6eDPA'>
                    <img referrerpolicy='origin'
                        src='https://trustseal.enamad.ir/logo.aspx?id=703000&Code=oBqG9M3Yan78S2nE0Mgw1OyqNHA6eDPA'
                        alt='' style='cursor:pointer' code='oBqG9M3Yan78S2nE0Mgw1OyqNHA6eDPA'>
                </a>
                <br>
            <div class="footer-copy">
                © 2025 <strong>Growvixo</strong><br>
                تمامی حقوق این وب‌سایت محفوظ است.
            </div>

            </p>

            <!-- Social Media Icons -->
            <div class="gv-social-icons">
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

            <!-- Quick Links -->
            <div class="gv-footer-links">
                <a class="gv-footer-link" href="{{ route('about') }}">درباره ما</a>
                <a class="gv-footer-link" href="{{ route('contact') }}">تماس باما</a>
                <a class="gv-footer-link" href="{{ route('services') }}">خدمات</a>
            </div>
        </footer>
    </section>

    {{-- SCRIPTS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80
                },
                "color": {
                    "value": "#90A4C7"
                },
                "shape": {
                    "type": "circle"
                },
                "opacity": {
                    "value": 0.3
                },
                "size": {
                    "value": 3
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#90A4C7",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2
                }
            },
            "interactivity": {
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    }
                }
            }
        });

        // اضافه کردن انیمیشن اسکرول برای موبایل
        if (window.innerWidth <= 768) {
            const footer = document.querySelector('.gv-footer-wrapper');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('gv-footer-visible');
                    }
                });
            });

            if (footer) {
                observer.observe(footer);
            }
        }
    </script>
    <script src="/js/header.js"></script>
    <script>
        const chatToggle = document.getElementById("chatToggle");
        const chatBox = document.getElementById("chatBox");

        // باز و بسته شدن با دکمه
        chatToggle.addEventListener("click", function(e) {
            e.stopPropagation(); // جلوگیری از بسته شدن فوری
            chatBox.classList.toggle("active");
        });

        // جلوگیری از بسته شدن وقتی داخل باکس کلیک میشه
        chatBox.addEventListener("click", function(e) {
            e.stopPropagation();
        });

        // بستن هنگام کلیک بیرون
        document.addEventListener("click", function() {
            chatBox.classList.remove("active");
        });
    </script>
</body>

</html>
