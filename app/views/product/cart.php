<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng - Thanh Hoa Xứ - Nghệ Thuật Gốm Sứ Truyền Thống</title>
    <meta name="description" content="Giỏ hàng gốm sứ Thanh Hoa truyền thống">
    
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
            content: '🛒';
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
        
        /* Cart Container */
        .cart-container {
            background: var(--thanh-hoa-white);
            border: 3px solid var(--thanh-hoa-blue);
            border-radius: 20px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.1);
            margin-bottom: 30px;
        }
        
        .cart-container::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background: radial-gradient(circle at top right, var(--thanh-hoa-light-blue) 0%, transparent 70%);
            opacity: 0.1;
        }
        
        .cart-container::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle at bottom left, var(--thanh-hoa-blue) 0%, transparent 70%);
            opacity: 0.1;
        }
        
        /* Cart Item */
        .cart-item {
            background: linear-gradient(135deg, var(--thanh-hoa-white) 0%, #f1f5f9 100%);
            border: 2px solid var(--thanh-hoa-light-blue);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            position: relative;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .cart-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--thanh-hoa-blue), var(--thanh-hoa-light-blue));
        }
        
        .cart-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.15);
        }
        
        .product-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 15px;
            border: 3px solid var(--thanh-hoa-light-blue);
            transition: all 0.3s ease;
        }
        
        .product-image:hover {
            transform: scale(1.05);
            border-color: var(--thanh-hoa-blue);
        }
        
        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--thanh-hoa-blue);
            margin-bottom: 10px;
        }
        
        .product-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--thanh-hoa-blue);
            margin-bottom: 8px;
        }
        
        .product-quantity {
            color: var(--thanh-hoa-gray);
            font-size: 1rem;
            margin-bottom: 8px;
        }
        
        .product-subtotal {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--thanh-hoa-dark-blue);
            background: rgba(59, 130, 246, 0.1);
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
        }
        
        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 60px 20px;
            color: var(--thanh-hoa-gray);
        }
        
        .empty-cart-icon {
            font-size: 4rem;
            color: var(--thanh-hoa-light-blue);
            margin-bottom: 20px;
        }
        
        .empty-cart h3 {
            font-family: 'Playfair Display', serif;
            color: var(--thanh-hoa-blue);
            margin-bottom: 15px;
        }
        
        /* Total Summary */
        .cart-summary {
            background: linear-gradient(135deg, var(--thanh-hoa-blue) 0%, var(--thanh-hoa-light-blue) 100%);
            color: var(--thanh-hoa-white);
            padding: 30px;
            border-radius: 20px;
            margin-top: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .cart-summary::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .cart-summary h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .total-amount {
            font-size: 2rem;
            font-weight: 700;
            position: relative;
            z-index: 1;
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
            
            .cart-container {
                padding: 25px;
            }
            
            .cart-item {
                padding: 20px;
            }
            
            .product-image {
                width: 80px;
                height: 80px;
            }
            
            .product-name {
                font-size: 1.2rem;
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
        
        .cart-slide-in {
            animation: cartSlideIn 0.6s ease-out;
        }
        
        @keyframes cartSlideIn {
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
                <h1 class="page-title">Giỏ Hàng Của Bạn</h1>
                <p class="page-subtitle">Xem lại các sản phẩm gốm sứ Thanh Hoa đã chọn</p>
            </div>
            
            <!-- Progress Steps -->
            <div class="checkout-steps">
                <div class="step active">
                    <div class="step-number">1</div>
                    Giỏ hàng
                </div>
                <div class="step-divider"></div>
                <div class="step">
                    <div class="step-number">2</div>
                    Thanh toán
                </div>
                <div class="step-divider"></div>
                <div class="step">
                    <div class="step-number">3</div>
                    Hoàn thành
                </div>
            </div>
            
            <!-- Cart Content -->
            <div class="cart-container cart-slide-in">
                <?php if (!empty($cart)): ?>
                    <!-- Cart Items -->
                    <?php foreach ($cart as $id => $item): ?>
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center">
                                    <?php if ($item['image']): ?>
                                        <img src="/MYSTORE/<?php echo htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8'); ?>" 
                                             alt="<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>" 
                                             class="product-image">
                                    <?php else: ?>
                                        <div class="product-image d-flex align-items-center justify-content-center" 
                                             style="background: var(--thanh-hoa-cream); color: var(--thanh-hoa-gray);">
                                            <i class="fas fa-image fa-2x"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="col-md-6">
                                    <h3 class="product-name">
                                        <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>
                                    </h3>
                                    <div class="product-price">
                                        <i class="fas fa-tag"></i>
                                        <?php echo number_format($item['price'], 0, ',', '.'); ?> VND
                                    </div>
                                    <div class="product-quantity">
                                        <i class="fas fa-cubes"></i>
                                        Số lượng: <?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 text-end">
                                    <div class="product-subtotal">
                                        <i class="fas fa-calculator"></i>
                                        Thành tiền: <?php echo number_format($item['price'] * $item['quantity'], 0, ',', '.'); ?> VND
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <!-- Cart Summary -->
                    <div class="cart-summary">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3><i class="fas fa-receipt"></i> Tổng Đơn Hàng</h3>
                                <p class="mb-0">Bao gồm tất cả sản phẩm đã chọn</p>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="total-amount">
                                    <?php 
                                    $total = array_reduce($cart, function($carry, $item) { 
                                        return $carry + ($item['price'] * $item['quantity']); 
                                    }, 0); 
                                    echo number_format($total, 0, ',', '.'); 
                                    ?> VND
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="text-center mt-4">
                        <a href="/MYSTORE/Product/checkout" class="btn btn-primary">
                            <i class="fas fa-credit-card"></i>
                            Tiến hành thanh toán
                        </a>
                        
                        <a href="/MYSTORE/Product" class="btn btn-secondary">
                            <i class="fas fa-shopping-cart"></i>
                            Tiếp tục mua sắm
                        </a>
                    </div>
                    
                <?php else: ?>
                    <!-- Empty Cart -->
                    <div class="empty-cart">
                        <div class="empty-cart-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3>Giỏ hàng của bạn đang trống</h3>
                        <p>Hãy khám phá bộ sưu tập gốm sứ Thanh Hoa tuyệt đẹp của chúng tôi</p>
                        
                        <div class="mt-4">
                            <a href="/MYSTORE/Product" class="btn btn-primary">
                                <i class="fas fa-shopping-bag"></i>
                                Khám phá sản phẩm
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Benefits Notice -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="alert alert-info" style="border-radius: 15px; border: 2px solid var(--thanh-hoa-light-blue); background: rgba(59, 130, 246, 0.1);">
                        <div class="text-center">
                            <i class="fas fa-shipping-fast text-primary mb-2" style="font-size: 1.5rem;"></i>
                            <div><strong>Giao hàng miễn phí</strong></div>
                            <small class="text-muted">Đơn hàng từ 500.000 VND</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert alert-success" style="border-radius: 15px; border: 2px solid #10b981; background: rgba(16, 185, 129, 0.1);">
                        <div class="text-center">
                            <i class="fas fa-award text-success mb-2" style="font-size: 1.5rem;"></i>
                            <div><strong>Chất lượng đảm bảo</strong></div>
                            <small class="text-muted">Gốm sứ truyền thống Thanh Hoa</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert alert-warning" style="border-radius: 15px; border: 2px solid #f59e0b; background: rgba(245, 158, 11, 0.1);">
                        <div class="text-center">
                            <i class="fas fa-phone text-warning mb-2" style="font-size: 1.5rem;"></i>
                            <div><strong>Hỗ trợ 24/7</strong></div>
                            <small class="text-muted">Hotline: 0123.456.789</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <!-- Custom JS -->
    <script>
        // JavaScript for any additional functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Example: Smooth scroll to top on button click
            const scrollToTopBtn = document.createElement('button');
            scrollToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
            scrollToTopBtn.className = 'btn btn-primary';
            scrollToTopBtn.style.position = 'fixed';
            scrollToTopBtn.style.bottom = '20px';
            scrollToTopBtn.style.right = '20px';
            scrollToTopBtn.style.display = 'none';
            document.body.appendChild(scrollToTopBtn);
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    scrollToTopBtn.style.display = 'block';
                } else {
                    scrollToTopBtn.style.display = 'none';
                }
            });
            
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
<?php include 'app/views/shares/footer.php'; ?>
