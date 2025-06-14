<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm - Thanh Hoa Xứ - Nghệ Thuật Gốm Sứ Truyền Thống</title>
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
            content: '🏺';
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
        
        /* Nút thêm sản phẩm với thiết kế gốm sứ */
        .add-product-btn {
            background: linear-gradient(135deg, var(--thanh-hoa-blue) 0%, var(--thanh-hoa-light-blue) 100%);
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            color: var(--thanh-hoa-white);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .add-product-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .add-product-btn:hover::before {
            left: 100%;
        }
        
        .add-product-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(30, 58, 138, 0.4);
            color: var(--thanh-hoa-white);
        }
        
        /* Product Cards với thiết kế gốm sứ Thanh Hoa */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .product-card {
            background: var(--thanh-hoa-white);
            border: 3px solid var(--thanh-hoa-blue);
            border-radius: 20px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.1);
        }
        
        /* Họa tiết góc card */
        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 80px;
            height: 80px;
            background: radial-gradient(circle at top right, var(--thanh-hoa-light-blue) 0%, transparent 70%);
            opacity: 0.1;
        }
        
        .product-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 60px;
            background: radial-gradient(circle at bottom left, var(--thanh-hoa-blue) 0%, transparent 70%);
            opacity: 0.1;
        }
        
        .product-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 40px rgba(30, 58, 138, 0.2);
            border-color: var(--thanh-hoa-light-blue);
        }
        
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            border: 2px solid var(--thanh-hoa-light-blue);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .product-card:hover .product-image {
            transform: scale(1.05);
        }
        
        .product-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--thanh-hoa-blue);
            margin-bottom: 10px;
            text-decoration: none;
            display: block;
            transition: color 0.3s ease;
        }
        
        .product-title:hover {
            color: var(--thanh-hoa-light-blue);
        }
        
        .product-description {
            color: var(--thanh-hoa-gray);
            line-height: 1.6;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--thanh-hoa-blue);
            margin-bottom: 10px;
        }
        
        .product-category {
            background: linear-gradient(135deg, var(--thanh-hoa-light-blue) 0%, var(--thanh-hoa-blue) 100%);
            color: var(--thanh-hoa-white);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        /* Action buttons */
        .product-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-action {
            flex: 1;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-edit {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
        }
        
        .btn-delete {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
        }

        .btn-addToCart {
            background: linear-gradient(135deg, #2365d5 0%, #2365d5 100%);
            color: white;
        }
        
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: white;
        }
        
        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: var(--thanh-hoa-white);
            border: 3px dashed var(--thanh-hoa-light-blue);
            border-radius: 20px;
            margin-top: 30px;
        }
        
        .empty-state-icon {
            font-size: 4rem;
            color: var(--thanh-hoa-light-blue);
            margin-bottom: 20px;
        }
        
        .empty-state-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--thanh-hoa-blue);
            margin-bottom: 10px;
        }
        
        .empty-state-text {
            color: var(--thanh-hoa-gray);
            font-size: 1.1rem;
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
            
            .product-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .product-actions {
                flex-direction: column;
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
        
        .product-card {
            animation: cardSlideIn 0.6s ease-out;
        }
        
        @keyframes cardSlideIn {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../shares/header.php'; ?>
    
    <!-- Container chính -->
    <div class="main-container">
        <div class="container fade-in">
            <!-- Page Header -->
            <div class="page-header">
                <h1 class="page-title">Bộ Sưu Tập Gốm Sứ</h1>
                <p class="page-subtitle">Khám phá những tác phẩm nghệ thuật gốm sứ Thanh Hoa tinh xảo</p>
            </div>
            
            <!-- Add Product Button -->
            <div class="text-center mb-4">
                <a href="/MYSTORE/Product/add" class="add-product-btn">
                    <i class="fas fa-plus-circle"></i>
                    Thêm sản phẩm mới
                </a>
            </div>
            <div class="product-grid" id="productGrid">
                <?php foreach ($products as $product): ?>
                        <div class="product-card fade-in">
                            <img src="<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" class="product-image">
                            <h2><a href="/MYSTORE/Product/show/<?php echo $product->id; ?>" class="product-title"><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></a></h2>
                            <span class="product-category">
                            <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></span>
                            <p class="product-description"><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="product-price"><?php echo number_format($product->price, 0, ',', '.'); ?> VND</p>
                            <div class="product-actions">
                                <a href="/MYSTORE/Product/edit/<?php echo $product->id; ?>" class="btn-action btn-edit">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>
                                <a href="/MYSTORE/Product/delete/<?php echo $product->id; ?>" class="btn-action btn-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                    <i class="fas fa-trash"></i> Xóa
                                </a>
                                 <a href="/MYSTORE/Product/addToCart/<?php echo $product->id; ?>" class="btn-action btn-addToCart">Thêm vào giỏ hàng
                                </a> 
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
            <!-- Empty State (hidden by default) -->
            <div class="empty-state" id="emptyState" style="display: none;">
                <div class="empty-state-icon">🏺</div>
                <h3 class="empty-state-title">Chưa có sản phẩm nào</h3>
                <p class="empty-state-text">Hãy thêm sản phẩm đầu tiên để bắt đầu bộ sưu tập của bạn</p>
            </div>
        </div> <!-- Đóng container chính từ header -->
    </div> <!-- Đóng main-container -->
</body>
    <!-- Footer -->
<?php include __DIR__ . '/../shares/footer.php'; ?>
