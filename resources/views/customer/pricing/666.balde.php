<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مودال هوشمند بوت استرپ</title>
    <!-- بوت استرپ 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- فونت awesome برای آیکون‌ها -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- فونت فارسی وزیر -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .btn-show-modal {
            background: white;
            color: #764ba2;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }

        .btn-show-modal:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
            background: #f8f9fa;
        }

        /* استایل مودال هوشمند */
        .smart-modal .modal-content {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5);
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        }

        .smart-modal .modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 20px 30px;
            position: relative;
        }

        .smart-modal .modal-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
            pointer-events: none;
        }

        .smart-modal .modal-title {
            font-weight: bold;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .smart-modal .modal-title i {
            font-size: 2rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .smart-modal .btn-close {
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            padding: 10px;
            opacity: 1;
            transition: all 0.3s ease;
        }

        .smart-modal .btn-close:hover {
            background: rgba(255,255,255,0.4);
            transform: rotate(90deg);
        }

        .smart-modal .modal-body {
            padding: 30px;
        }

        /* بخش هوشمند با متریال دیزاین */
        .smart-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        .smart-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }

        .smart-card h6 {
            color: #667eea;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .smart-card h6 i {
            font-size: 1.2rem;
        }

        /* فیلدهای ورودی هوشمند */
        .smart-input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .smart-input-group i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #667eea;
            font-size: 1.1rem;
        }

        .smart-input-group .form-control {
            padding: 12px 45px 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-family: 'Vazir', sans-serif;
            transition: all 0.3s ease;
        }

        .smart-input-group .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        .smart-input-group .form-control:focus + i {
            color: #764ba2;
        }

        /* سلکت باکس هوشمند */
        .smart-select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-family: 'Vazir', sans-serif;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .smart-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        /* چک‌باکس هوشمند */
        .smart-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 10px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .smart-checkbox:hover {
            background: rgba(102, 126, 234, 0.05);
        }

        .smart-checkbox input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #667eea;
        }

        /* دکمه‌های هوشمند */
        .smart-btn {
            padding: 12px 25px;
            border-radius: 12px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            font-family: 'Vazir', sans-serif;
        }

        .smart-btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .smart-btn-primary:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .smart-btn-outline {
            background: transparent;
            border: 2px solid #667eea;
            color: #667eea;
        }

        .smart-btn-outline:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }

        /* نوتیفیکیشن هوشمند */
        .smart-toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            border-radius: 12px;
            padding: 15px 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            display: none;
            align-items: center;
            gap: 10px;
            z-index: 9999;
            animation: slideIn 0.3s ease;
            border-right: 4px solid #667eea;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .smart-toast.show {
            display: flex;
        }

        .smart-toast i {
            font-size: 1.5rem;
            color: #667eea;
        }

        /* حالت هوشمند برای نمایش اطلاعات */
        .info-badge {
            background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
            color: #667eea;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            border: 1px solid #667eea30;
        }

        /* انیمیشن لودینگ هوشمند */
        .smart-loading {
            display: none;
            text-align: center;
            padding: 20px;
        }

        .smart-loading.show {
            display: block;
        }

        .spinner-smart {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #667eea;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 10px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- دکمه نمایش مودال -->
    <button class="btn-show-modal" onclick="showSmartModal()">
        <i class="fas fa-magic me-2"></i>
        نمایش مودال هوشمند
    </button>

    <!-- مودال هوشمند -->
    <div class="modal fade smart-modal" id="smartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-robot"></i>
                        مودال هوشمند
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- بخش هوشمند با متریال دیزاین -->
                    <div class="smart-card">
                        <h6>
                            <i class="fas fa-user-circle"></i>
                            اطلاعات کاربری
                        </h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="smart-input-group">
                                    <i class="fas fa-user"></i>
                                    <input type="text" class="form-control" id="nameInput" placeholder="نام و نام خانوادگی">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="smart-input-group">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" class="form-control" id="emailInput" placeholder="ایمیل">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- بخش تنظیمات هوشمند -->
                    <div class="smart-card">
                        <h6>
                            <i class="fas fa-cog"></i>
                            تنظیمات پیشرفته
                        </h6>
                        <div class="row">
                            <div class="col-md-6">
                                <select class="smart-select" id="themeSelect">
                                    <option value="light">حالت روشن</option>
                                    <option value="dark">حالت تاریک</option>
                                    <option value="auto">حالت خودکار</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="smart-select" id="languageSelect">
                                    <option value="fa">فارسی</option>
                                    <option value="en">English</option>
                                    <option value="ar">العربية</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- بخش تنظیمات اعلان‌ها -->
                    <div class="smart-card">
                        <h6>
                            <i class="fas fa-bell"></i>
                            تنظیمات اعلان‌ها
                        </h6>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="smart-checkbox">
                                    <input type="checkbox" id="emailNotify" checked>
                                    <span>اعلان از طریق ایمیل</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="smart-checkbox">
                                    <input type="checkbox" id="smsNotify">
                                    <span>اعلان از طریق پیامک</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- بخش نمایش اطلاعات هوشمند -->
                    <div class="smart-card">
                        <h6>
                            <i class="fas fa-chart-line"></i>
                            وضعیت هوشمند
                        </h6>
                        <div class="d-flex gap-3 flex-wrap">
                            <span class="info-badge">
                                <i class="fas fa-check-circle"></i>
                                سیستم فعال
                            </span>
                            <span class="info-badge">
                                <i class="fas fa-users"></i>
                                ۱۲۸ کاربر آنلاین
                            </span>
                            <span class="info-badge">
                                <i class="fas fa-clock"></i>
                                آخرین به‌روزرسانی: لحظاتی پیش
                            </span>
                        </div>
                    </div>

                    <!-- بخش لودینگ هوشمند -->
                    <div class="smart-loading" id="smartLoading">
                        <div class="spinner-smart"></div>
                        <p>در حال پردازش اطلاعات...</p>
                    </div>

                    <!-- دکمه‌های عملیات -->
                    <div class="d-flex gap-2 justify-content-end mt-4">
                        <button class="smart-btn smart-btn-outline" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>
                            انصراف
                        </button>
                        <button class="smart-btn smart-btn-primary" onclick="saveChanges()">
                            <i class="fas fa-save me-2"></i>
                            ذخیره تغییرات هوشمند
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- نوتیفیکیشن هوشمند -->
    <div class="smart-toast" id="smartToast">
        <i class="fas fa-check-circle"></i>
        <div>
            <strong>عملیات موفق!</strong>
            <p class="mb-0" id="toastMessage">تغییرات با موفقیت ذخیره شد.</p>
        </div>
    </div>

    <!-- بوت استرپ 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let modalInstance;

        // آماده‌سازی مودال
        document.addEventListener('DOMContentLoaded', function() {
            const modalElement = document.getElementById('smartModal');
            modalInstance = new bootstrap.Modal(modalElement, {
                backdrop: 'static',
                keyboard: true,
                focus: true
            });

            // اضافه کردن قابلیت هوشمند به اینپوت‌ها
            const inputs = document.querySelectorAll('.smart-input-group .form-control');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    if (this.value.length > 0) {
                        this.style.borderColor = '#10b981';
                    } else {
                        this.style.borderColor = '#e0e0e0';
                    }
                });
            });
        });

        // نمایش مودال
        function showSmartModal() {
            modalInstance.show();
        }

        // ذخیره تغییرات با افکت هوشمند
        function saveChanges() {
            // نمایش لودینگ
            const loading = document.getElementById('smartLoading');
            loading.classList.add('show');
            
            // غیرفعال کردن دکمه‌ها
            const buttons = document.querySelectorAll('.smart-btn');
            buttons.forEach(btn => {
                btn.disabled = true;
                btn.style.opacity = '0.6';
            });

            // دریافت مقادیر
            const name = document.getElementById('nameInput').value;
            const email = document.getElementById('emailInput').value;
            const theme = document.getElementById('themeSelect').value;
            const language = document.getElementById('languageSelect').value;
            const emailNotify = document.getElementById('emailNotify').checked;
            const smsNotify = document.getElementById('smsNotify').checked;

            // شبیه‌سازی عملیات ذخیره‌سازی
            setTimeout(() => {
                // مخفی کردن لودینگ
                loading.classList.remove('show');
                
                // فعال کردن دکمه‌ها
                buttons.forEach(btn => {
                    btn.disabled = false;
                    btn.style.opacity = '1';
                });

                // نمایش نوتیفیکیشن
                showToast('اطلاعات با موفقیت در سیستم هوشمند ذخیره شد.');

                // نمایش خلاصه اطلاعات در کنسول (فقط برای دیباگ)
                console.log('اطلاعات ذخیره شده:', {
                    name: name || 'مقدار پیش‌فرض',
                    email: email || 'example@email.com',
                    theme: theme,
                    language: language,
                    emailNotify: emailNotify,
                    smsNotify: smsNotify
                });

                // اگر کاربر اطلاعات را کامل پر کرده بود، تبریک ویژه
                if (name && email) {
                    showToast('🎉 ممنون از اطلاعات کامل شما!', 'success');
                }
            }, 2000);
        }

        // نمایش نوتیفیکیشن هوشمند
        function showToast(message, type = 'success') {
            const toast = document.getElementById('smartToast');
            const toastMessage = document.getElementById('toastMessage');
            const icon = toast.querySelector('i');
            
            toastMessage.textContent = message;
            
            if (type === 'success') {
                icon.style.color = '#10b981';
                icon.className = 'fas fa-check-circle';
            } else {
                icon.style.color = '#f59e0b';
                icon.className = 'fas fa-info-circle';
            }
            
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // قابلیت ذخیره با دکمه Enter
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' && document.getElementById('smartModal').classList.contains('show')) {
                saveChanges();
            }
        });

        // افکت هوشمند هنگام باز شدن مودال
        document.getElementById('smartModal').addEventListener('shown.bs.modal', function () {
            document.getElementById('nameInput').focus();
        });
    </script>
</body>
</html>