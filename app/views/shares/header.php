<?php
// Lấy thông tin cấu hình trang web từ database (nếu có)
// $site_config = getSiteConfig(); // Uncomment nếu bạn có hàm này
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>Thanh Hoa Xứ - Nghệ Thuật Gốm Sứ Truyền Thống</title>
    <meta name="description" content="Khám phá vẻ đẹp nghệ thuật gốm sứ Thanh Hoa truyền thống với các họa tiết xanh trắng tinh xảo">
    
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
        
        /* Breadcrumb với họa tiết */
        .thanh-hoa-breadcrumb {
            background: rgba(255, 255, 255, 0.9);
            padding: 15px 0;
            border-radius: 0 0 15px 15px;
            margin-bottom: 30px;
        }
        
        .breadcrumb {
            background: none;
            margin: 0;
        }
        
        .breadcrumb-item a {
            color: var(--thanh-hoa-blue);
            text-decoration: none;
        }
        
        .breadcrumb-item a:hover {
            color: var(--thanh-hoa-light-blue);
        }
        
        /* Container chính */
        .main-container {
            min-height: calc(100vh - 200px);
            padding: 30px 0;
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
            
            .navbar-nav .nav-link {
                padding: 12px 15px !important;
            }
        }
        
        /* Animation cho các elements */
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
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
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="/MYSTORE/">
                            <i class="fas fa-home"></i> Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], 'Product') !== false) ? 'active' : ''; ?>" href="/MYSTORE/Product">
                            <i class="fas fa-th-large"></i> Sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], 'Category') !== false) ? 'active' : ''; ?>" href="/MYSTORE/Category">
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
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/Product/cart">
                            <i class="fas fa-shopping-cart"></i> Giỏ hàng
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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/account/login" title="Đăng nhập">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/MYSTORE/account/register" title="Đăng ký">
                            <i class="fas fa-user-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Breadcrumb -->
    <?php if (isset($breadcrumb) && !empty($breadcrumb)): ?>
    <div class="thanh-hoa-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/MYSTORE/">Trang chủ</a></li>
                    <?php foreach ($breadcrumb as $item): ?>
                        <?php if (isset($item['url'])): ?>
                            <li class="breadcrumb-item"><a href="<?php echo $item['url']; ?>"><?php echo htmlspecialchars($item['title']); ?></a></li>
                        <?php else: ?>
                            <li class="breadcrumb-item active"><?php echo htmlspecialchars($item['title']); ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </nav>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Container chính -->
    <div class="main-container">
        <div class="container fade-in">