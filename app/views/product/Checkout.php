<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán - Thanh Hoa Xứ - Nghệ Thuật Gốm Sứ Truyền Thống</title>
    <meta name="description" content="Thanh toán đơn hàng gốm sứ Thanh Hoa truyền thống">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts - Noto Serif cho tiếng Việt -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --thanh-hoa-blue: #1e3a8a;
            --thanh-hoa-light-blue: #3b82f6;
            --thanh-hoa-white: #ffffff;
            --thanh-hoa-cream: #f8fafc;
            --thanh-hoa-gray: #64748b;
            --thanh-hoa-dark-blue: #1e293b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Noto Serif', serif;
            background: linear-gradient(135deg, var(--thanh-hoa-cream) 0%, #e2e8f0 100%);
            color: var(--thanh-hoa-dark-blue);
            min-height: 100vh;
            position: relative;
        }
        
        /* Họa tiết nền gốm sứ */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 20%, var(--thanh-hoa-light-blue) 1px, transparent 1px),
                radial-gradient(circle at 80% 80%, var(--thanh-hoa-blue) 1px, transparent 1px),
                radial-gradient(circle at 40% 60%, rgba(59, 130, 246, 0.1) 2px, transparent 2px);
            background-size: 50px 50px, 80px 80px, 120px 120px;
            opacity: 0.3;
            z-index: -1;
        }
        
        /* Header styling */
        .main-header {
            background: linear-gradient(135deg, var(--thanh-hoa-white) 0%, #f1f5f9 100%);
            border-bottom: 3px solid var(--thanh-hoa-blue);
            box-shadow: 0 4px 20px rgba(30, 58, 138, 0.1);
            position: relative;
        }
        
        .main-header::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 6px;
            background: repeating-linear-gradient(
                90deg,
                var(--thanh-hoa-blue) 0px,
                var(--thanh-hoa-blue) 10px,
                var(--thanh-hoa-light-blue) 10px,
                var(--thanh-hoa-light-blue) 20px
            );
        }
        
        /* Logo và tiêu đề */
        .site-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--thanh-hoa-blue);
            text-decoration: none;
            position: relative;
            display: inline-block;
        }
        
        .site-logo::after {
            content: '⚱';
            position: absolute;
            right: -40px;
            top: -5px;
            font-size: 1.5rem;
            color: var(--thanh-hoa-light-blue);
        }
        
        .site-tagline {
            color: var(--thanh-hoa-gray);
            font-size: 0.9rem;
            font-style: italic;
            margin-top: 5px;
        }
        
        /* Navigation */
        .main-nav {
            background: var(--thanh-hoa-blue);
            padding: 0;
        }
        
        .navbar-nav .nav-link {
            color: var(--thanh-hoa-white) !important;
            font-weight: 500;
            padding: 15px 20px !important;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover {
            background: var(--thanh-hoa-light-blue);
            transform: translateY(-2px);
        }
        
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: var(--thanh-hoa-white);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link.active::before {
            width: 80%;
        }
        
        /* Container chính */
        .main-container {
            min-height: calc(100vh - 200px);
            padding: 30px 0;
        }
        
        /* Page Header với họa tiết Thanh Hoa */
        .page-header {
            background: linear-gradient(135deg, var(--thanh-hoa-white) 0%, #f1f5f9 100%);
            border: 3px solid var(--thanh-hoa-blue);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: -20px;
            right: -20px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        
        .page-header::after {
            content: '💳';
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 3rem;
            opacity: 0.2;
        }
        
        .page-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--thanh-hoa-blue);
            margin-bottom: 15px;
            position: relative;
        }
        
        .page-subtitle {
            color: var(--thanh-hoa-gray);
            font-size: 1.1rem;
            font-style: italic;
        }
        
        /* Checkout Form Container */
        .checkout-container {
            background: var(--thanh-hoa-white);
            border: 3px solid var(--thanh-hoa-blue);
            border-radius: 20px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.1);
            margin-bottom: 30px;
        }
        
        .checkout-container::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background: radial-gradient(circle at top right, var(--thanh-hoa-light-blue) 0%, transparent 70%);
            opacity: 0.1;
        }
        
        .checkout-container::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle at bottom left, var(--thanh-hoa-blue) 0%, transparent 70%);
            opacity: 0.1;
        }
        
        /* Form styling */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-group label {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: var(--thanh-hoa-blue);
            margin-bottom: 8px;
            display: block;
            font-size: 1.1rem;
        }
        
        .form-control {
            border: 2px solid var(--thanh-hoa-light-blue);
            border-radius: 15px;
            padding: 15px 20px;
            font-size: 1rem;
            background: var(--thanh-hoa-cream);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .form-control:focus {
            border-color: var(--thanh-hoa-blue);
            box-shadow: 0 0 0 0.2rem rgba(30, 58, 138, 0.2);
            background: var(--thanh-hoa-white);
            outline: none;
        }
        
        .form-control::placeholder {
            color: var(--thanh-hoa-gray);
            font-style: italic;
        }
        
        /* Required field indicator */
        .form-group label::after {
            content: '*';
            color: #ef4444;
            margin-left: 5px;
            font-weight: bold;
        }
        
        /* Textarea specific styling */
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        /* Button styling */
        .btn-primary {
            background: linear-gradient(135deg, var(--thanh-hoa-blue) 0%, var(--thanh-hoa-light-blue) 100%);
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            color: var(--thanh-hoa-white);
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
            position: relative;
            overflow: hidden;
            margin-right: 15px;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(30, 58, 138, 0.4);
            color: var(--thanh-hoa-white);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, var(--thanh-hoa-gray) 0%, #475569 100%);
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            color: var(--thanh-hoa-white);
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(100, 116, 139, 0.3);
        }
        
        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(100, 116, 139, 0.4);
            color: var(--thanh-hoa-white);
        }
        
        /* Progress Steps */
        .checkout-steps {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
            padding: 20px;
            background: linear-gradient(135deg, var(--thanh-hoa-white) 0%, #f1f5f9 100%);
            border-radius: 15px;
            border: 2px solid var(--thanh-hoa-light-blue);
        }
        
        .step {
            display: flex;
            align-items: center;
            color: var(--thanh-hoa-gray);
            font-weight: 500;
        }
        
        .step.active {
            color: var(--thanh-hoa-blue);
            font-weight: 700;
        }
        
        .step-number {
            background: var(--thanh-hoa-light-blue);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: bold;
        }
        
        .step.active .step-number {
            background: var(--thanh-hoa-blue);
        }
        
        .step-divider {
            width: 50px;
            height: 2px;
            background: var(--thanh-hoa-light-blue);
            margin: 0 20px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .site-logo {
                font-size: 1.8rem;
            }
            
            .site-logo::after {
                right: -30px;
                font-size: 1.2rem;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .checkout-container {
                padding: 25px;
            }
            
            .checkout-steps {
                flex-direction: column;
                gap: 15px;
            }
            
            .step-divider {
                width: 2px;
                height: 30px;
                margin: 10px 0;
            }
            
            .btn-primary,
            .btn-secondary {
                width: 100%;
                justify-content: center;
                margin-bottom: 10px;
            }
        }
        
        /* Animation */
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-slide-in {
            animation: formSlideIn 0.6s ease-out;
        }
        
        @keyframes formSlideIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <!-- Header chính -->
    <header class="main-header">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-md-8">
                    <a href="/MYSTORE/" class="site-logo">Thanh Hoa Xứ</a>
                    <div class="site-tagline">Nghệ thuật gốm sứ truyền thống Việt Nam</div>
                </div>
                <div class="col-md-4 text-end">
                    <div class="header-contact">
                        <small class="text-muted">
                            <i class="fas fa-phone"></i> Hotline: 0123.456.789<br>
                            <i class="fas fa-envelope"></i> info@thanhhoaxu.vn
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg main-nav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/">
                            <i class="fas fa-home"></i> Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/Product">
                            <i class="fas fa-th-large"></i> Sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/Category">
                            <i class="fas fa-tags"></i> Danh mục
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/about">
                            <i class="fas fa-info-circle"></i> Giới thiệu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/contact">
                            <i class="fas fa-envelope"></i> Liên hệ
                        </a>
                    </li>
                </ul>
                
                <!-- Search form -->
                <form class="d-flex" method="GET" action="/MYSTORE/Product/search">
                    <input class="form-control me-2" type="search" name="q" placeholder="Tìm kiếm sản phẩm..." style="border-radius: 20px;">
                    <button class="btn btn-outline-light" type="submit" style="border-radius: 20px;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    
    <!-- Container chính -->
    <div class="main-container">
        <div class="container fade-in">
            <!-- Page Header -->
            <div class="page-header">
                <h1 class="page-title">Thanh Toán Đơn Hàng</h1>
                <p class="page-subtitle">Hoàn tất thông tin để nhận sản phẩm gốm sứ Thanh Hoa tuyệt đẹp</p>
            </div>
            
            <!-- Progress Steps -->
            <div class="checkout-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    Giỏ hàng
                </div>
                <div class="step-divider"></div>
                <div class="step active">
                    <div class="step-number">2</div>
                    Thanh toán
                </div>
                <div class="step-divider"></div>
                <div class="step">
                    <div class="step-number">3</div>
                    Hoàn thành
                </div>
            </div>
            
            <!-- Checkout Form -->
            <div class="checkout-container form-slide-in">
                <form method="POST" action="/MYSTORE/Product/processCheckout">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    <i class="fas fa-user"></i> Họ và tên
                                </label>
                                <input type="text" id="name" name="name" class="form-control" 
                                       placeholder="Nhập họ tên đầy đủ" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">
                                    <i class="fas fa-phone"></i> Số điện thoại
                                </label>
                                <input type="tel" id="phone" name="phone" class="form-control" 
                                       placeholder="Nhập số điện thoại liên hệ" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">
                                    <i class="fas fa-envelope"></i> Email (tùy chọn)
                                </label>
                                <input type="email" id="email" name="email" class="form-control" 
                                       placeholder="Nhập email để nhận thông báo">
                            </div>
                            
                            <div class="form-group">
                                <label for="city">
                                    <i class="fas fa-map-marker-alt"></i> Tỉnh/Thành phố
                                </label>
                                <select id="city" name="city" class="form-control" required>
                                    <option value="">Chọn tỉnh/thành phố</option>
                                    <option value="hanoi">Hà Nội</option>
                                    <option value="hcm">TP. Hồ Chí Minh</option>
                                    <option value="danang">Đà Nẵng</option>
                                    <option value="haiphong">Hải Phòng</option>
                                    <option value="cantho">Cần Thơ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">
                            <i class="fas fa-home"></i> Địa chỉ giao hàng chi tiết
                        </label>
                        <textarea id="address" name="address" class="form-control" 
                                  placeholder="Nhập địa chỉ chi tiết: số nhà, tên đường, phường/xã, quận/huyện..." 
                                  required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="notes">
                            <i class="fas fa-sticky-note"></i> Ghi chú đặc biệt
                        </label>
                        <textarea id="notes" name="notes" class="form-control" 
                                  placeholder="Ghi chú về thời gian giao hàng, yêu cầu đặc biệt..." 
                                  style="min-height: 80px;"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="payment_method">
                                    <i class="fas fa-credit-card"></i> Phương thức thanh toán
                                </label>
                                <select id="payment_method" name="payment_method" class="form-control" required>
                                    <option value="">Chọn phương thức thanh toán</option>
                                    <option value="cod">Thanh toán khi nhận hàng (COD)</option>
                                    <option value="bank_transfer">Chuyển khoản ngân hàng</option>
                                    <option value="credit_card">Thẻ tín dụng</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="delivery_time">
                                    <i class="fas fa-clock"></i> Thời gian giao hàng mong muốn
                                </label>
                                <select id="delivery_time" name="delivery_time" class="form-control">
                                    <option value="">Chọn thời gian giao hàng</option>
                                    <option value="morning">Buổi sáng (8:00 - 12:00)</option>
                                    <option value="afternoon">Buổi chiều (13:00 - 17:00)</option>
                                    <option value="evening">Buổi tối (17:00 - 20:00)</option>
                                    <option value="anytime">Bất kỳ lúc nào</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-credit-card"></i>
                            Hoàn tất thanh toán
                        </button>
                        
                        <a href="/MYSTORE/Product/cart" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Quay lại giỏ hàng
                        </a>
                    </div>
                </form>
            </div>
            
            <!-- Security Notice -->
            <div class="row mt-4">
                <div class="col-md-8 mx-auto">
                    <div class="alert alert-info" style="border-radius: 15px; border: 2px solid var(--thanh-hoa-light-blue); background: rgba(59, 130, 246, 0.1);">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-shield-alt text-primary me-3" style="font-size: 1.5rem;"></i>
                            <div>
                                <strong>Cam kết bảo mật thông tin</strong><br>
                                <small class="text-muted">Thông tin cá nhân của bạn được mã hóa và bảo vệ an toàn. Chúng tôi cam kết không chia sẻ thông tin với bên thứ ba.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form validation và enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = form.querySelectorAll('.form-control');
            const provinceSelect = document.getElementById('city');
            const districtSelect = document.getElementById('district');
            const wardSelect = document.getElementById('ward');
            const addressInput = document.getElementById('address');
            
            // Add focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateX(5px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateX(0)';
                });
            });
            
            // Phone number formatting
            const phoneInput = document.getElementById('phone');
            phoneInput.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.length > 0) {
                    if (value.length <= 3) {
                        this.value = value;
                    } else if (value.length <= 6) {
                        this.value = value.substring(0, 3) + '.' + value.substring(3);
                    } else {
                        this.value = value.substring(0, 3) + '.' + value.substring(3, 6) + '.' + value.substring(6, 10);
                    }
                }
            });
            
            // Form submission with loading state
            form.addEventListener('submit', function(e) {
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang xử lý...';
                submitBtn.disabled = true;
            });
            fecth('https://provinces.open-api.vn/api/provinces')
                .then(response => response.json())
                .then(data => {
                    data.forEach(province => {
                        const option = document.createElement('option');
                        option.value = province.code;
                        option.textContent = province.name;
                        provinceSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching provinces:', error));
            provinceSelect.addEventListener('change', function() {
                const provinceCode = this.value;
                districtSelect.innerHTML = '<option value="">Chọn quận/huyện</option>';
                wardSelect.innerHTML = '<option value="">Chọn phường/xã</option>';
                
                if (provinceCode) {
                    fetch(`https://provinces.open-api.vn/api/districts?code=${provinceCode}`)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(district => {
                                const option = document.createElement('option');
                                option.value = district.code;
                                option.textContent = district.name;
                                districtSelect.appendChild(option);
                            });
                        })
                        .catch(error => console.error('Error fetching districts:', error));
                }
            });
            districtSelect.addEventListener('change', function() {
                const districtCode = this.value;
                wardSelect.innerHTML = '<option value="">Chọn phường/xã</option>';
                
                if (districtCode) {
                    fetch(`https://provinces.open-api.vn/api/wards?code=${districtCode}`)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(ward => {
                                const option = document.createElement('option');
                                option.value = ward.code;
                                option.textContent = ward.name;
                                wardSelect.appendChild(option);
                            });
                        })
                        .catch(error => console.error('Error fetching wards:', error));
                }
            });
            // Validate form on submit
            form.addEventListener('submit', function(e) {
                let valid = true;
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        input.classList.add('is-invalid');
                        valid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                
                if (!valid) {
                    e.preventDefault();
                    alert('Vui lòng điền đầy đủ thông tin.');
                }
            });
        });
    </script>
</body>
</html>