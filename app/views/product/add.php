<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm mới - Thanh Hoa Xứ - Nghệ Thuật Gốm Sứ Truyền Thống</title>
    <meta name="description" content="Thêm sản phẩm gốm sứ Thanh Hoa truyền thống vào bộ sưu tập">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts - Noto Serif cho tiếng Việt -->
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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
            background: repeating-linear-gradient(90deg,
                    var(--thanh-hoa-blue) 0px,
                    var(--thanh-hoa-blue) 10px,
                    var(--thanh-hoa-light-blue) 10px,
                    var(--thanh-hoa-light-blue) 20px);
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
            content: '✨';
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

        /* Form Container */
        .form-container {
            background: var(--thanh-hoa-white);
            border: 3px solid var(--thanh-hoa-blue);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.1);
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 150px;
            height: 150px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }

        .form-container::after {
            content: '';
            position: absolute;
            bottom: -30px;
            right: -30px;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(30, 58, 138, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            font-weight: 600;
            color: var(--thanh-hoa-blue);
            margin-bottom: 8px;
            display: block;
            font-size: 1rem;
        }

        .form-control {
            border: 2px solid var(--thanh-hoa-light-blue);
            border-radius: 15px;
            padding: 12px 20px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--thanh-hoa-white);
        }

        .form-control:focus {
            border-color: var(--thanh-hoa-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        /* Alert Styling */
        .alert {
            border: none;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 5px solid;
        }

        .alert-danger {
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            border-left-color: #ef4444;
            color: #dc2626;
        }

        .alert-success {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border-left-color: #22c55e;
            color: #16a34a;
        }

        /* Button Styling */
        .btn {
            border: none;
            padding: 12px 25px;
            border-radius: 20px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--thanh-hoa-blue) 0%, var(--thanh-hoa-light-blue) 100%);
            color: var(--thanh-hoa-white);
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
        }

        .btn-secondary {
            background: linear-gradient(135deg, var(--thanh-hoa-gray) 0%, #475569 100%);
            color: var(--thanh-hoa-white);
            box-shadow: 0 4px 15px rgba(100, 116, 139, 0.3);
        }

        .btn-success {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(34, 197, 94, 0.3);
        }

        .btn-link {
            background: none;
            color: var(--thanh-hoa-light-blue);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 0;
            box-shadow: none;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .btn:hover.btn-link {
            transform: none;
            box-shadow: none;
            color: var(--thanh-hoa-blue);
        }

        /* Category Form */
        .new-category-form {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border: 2px dashed var(--thanh-hoa-light-blue);
            border-radius: 15px;
            padding: 25px;
            margin-top: 15px;
        }

        .new-category-form h5 {
            color: var(--thanh-hoa-blue);
            font-family: 'Playfair Display', serif;
            margin-bottom: 20px;
        }

        /* Action Buttons */
        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #e2e8f0;
        }

        /* Animation cho các elements */
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container {
            animation: formSlideIn 0.6s ease-out;
        }

        @keyframes formSlideIn {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
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

            .page-title {
                font-size: 2rem;
            }

            .form-container {
                padding: 25px;
            }

            .form-actions {
                flex-direction: column;
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
                        <a class="nav-link active" href="/MYSTORE/Product">
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
                    <input class="form-control me-2" type="search" name="q" placeholder="Tìm kiếm sản phẩm..."
                        style="border-radius: 20px;">
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
                <h1 class="page-title">Thêm Sản Phẩm Mới</h1>
                <p class="page-subtitle">Tạo thêm tác phẩm gốm sứ Thanh Hoa cho bộ sưu tập</p>
            </div>

            <!-- Error Messages -->
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger fade-in">
                    <h5><i class="fas fa-exclamation-triangle"></i> Có lỗi xảy ra:</h5>
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Form Container -->
            <div class="form-container">
                <form method="POST" action="/MYSTORE/Product/save" onsubmit="return validateForm();"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Tên sản phẩm -->
                            <div class="form-group">
                                <label for="name">
                                    <i class="fas fa-vase"></i> Tên sản phẩm:
                                </label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Nhập tên sản phẩm..." required>
                            </div>

                            <!-- Mô tả -->
                            <div class="form-group">
                                <label for="description">
                                    <i class="fas fa-align-left"></i> Mô tả:
                                </label>
                                <textarea id="description" name="description" class="form-control"
                                    placeholder="Mô tả chi tiết về sản phẩm..." required></textarea>
                            </div>

                            <!-- Giá -->
                            <div class="form-group">
                                <label for="price">
                                    <i class="fas fa-tag"></i> Giá (VND):
                                </label>
                                <input type="number" id="price" name="price" class="form-control" step="1000" min="0"
                                    placeholder="0" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Danh mục -->
                            <div class="form-group">
                                <label for="category_id">
                                    <i class="fas fa-tags"></i> Danh mục:
                                </label>
                                <select id="category_id" name="category_id" class="form-control" required>
                                    <option value="">Chọn danh mục...</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?php echo $category->id; ?>">
                                            <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="button" class="btn btn-link mt-2" onclick="toggleCategoryForm()">
                                    <i class="fas fa-plus"></i> Thêm danh mục mới
                                </button>
                            </div>

                            <!-- Hình ảnh -->
                            <div class="form-group">
                                <label for="image">
                                    <i class="fas fa-image"></i> Hình ảnh:
                                </label>
                                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                                <small class="text-muted mt-1">
                                    Chấp nhận: JPG, PNG, GIF (Tối đa 5MB)
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- Form thêm danh mục mới -->
                    <div id="new-category-form" class="new-category-form" style="display: none;">
                        <h5><i class="fas fa-folder-plus"></i> Thêm danh mục mới</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_category_name">Tên danh mục:</label>
                                    <input type="text" id="new_category_name" class="form-control"
                                        placeholder="Tên danh mục...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="new_category_description">Mô tả:</label>
                                    <input type="text" id="new_category_description" class="form-control"
                                        placeholder="Mô tả danh mục...">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success" onclick="addCategory()">
                            <i class="fas fa-save"></i> Lưu danh mục
                        </button>
                    </div>

                    <!-- Action Buttons -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus-circle"></i> Thêm sản phẩm
                        </button>
                        <a href="/MYSTORE/Product" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Quay lại danh sách
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleCategoryForm() {
            const form = document.getElementById('new-category-form');
            form.style.display = (form.style.display === 'none') ? 'block' : 'none';
        }

        function addCategory() {
            const name = document.getElementById('new_category_name').value.trim();
            const description = document.getElementById('new_category_description').value.trim();

            if (!name) {
                alert('Vui lòng nhập tên danh mục!');
                return;
            }

            fetch('/MYSTORE/Category/create', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ name, description })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success && data.category) {
                        const select = document.getElementById('category_id');
                        const option = document.createElement('option');
                        option.value = data.category.id;
                        option.textContent = data.category.name;
                        option.selected = true;
                        select.appendChild(option);

                        // Clear form
                        document.getElementById('new_category_name').value = '';
                        document.getElementById('new_category_description').value = '';

                        // Show success message
                        showAlert('Danh mục mới đã được thêm thành công!', 'success');
                        toggleCategoryForm();
                    } else {
                        showAlert('Thêm danh mục thất bại. Vui lòng thử lại!', 'danger');
                    }
                })
                .catch(err => {
                    console.error('Error:', err);
                    showAlert('Lỗi khi gọi API thêm danh mục.', 'danger');
                });
        }

        function showAlert(message, type) {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} fade-in`;
            alertDiv.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-triangle'}"></i> 
                ${message}
            `;

            const container = document.querySelector('.container .fade-in');
            container.insertBefore(alertDiv, container.querySelector('.form-container'));

            // Auto remove after 5 seconds
            setTimeout(() => {
                alertDiv.remove();
            }, 5000);
        }

        function validateForm() {
            const name = document.getElementById('name').value.trim();
            const description = document.getElementById('description').value.trim();
            const price = document.getElementById('price').value;
            const categoryId = document.getElementById('category_id').value;

            if (!name) {
                showAlert('Vui lòng nhập tên sản phẩm!', 'danger');
                return false;
            }

            if (!description) {
                showAlert('Vui lòng nhập mô tả sản phẩm!', 'danger');
                return false;
            }

            if (!price || price <= 0) {
                showAlert('Vui lòng nhập giá hợp lệ!', 'danger');
                return false;
            }

            if (!categoryId) {
                showAlert('Vui lòng chọn danh mục!', 'danger');
                return false;
            }

            return true;
        }

        // Format price input
        document.getElementById('price').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value) {
                e.target.value = parseInt(value);
            }
        });
    </script>

    <!-- Footer -->
    <?php include __DIR__ . '/../shares/footer.php'; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch('/MYSTORE/api/category')
                .then(response => response.json())
                .then(data => {
                    const categorySelect = document.getElementById('category_id');
                    data.forEach(category => {
                        const option = document.createElement('option');
                        option.value = category.id;
                        option.textContent = category.name;
                        categorySelect.appendChild(option);
                    });
                });

            document.getElementById('add-product-form').addEventListener('submit',
                function (event) {
                    event.preventDefault();

                    const formData = new FormData(this);
                    const jsonData = {};
                    formData.forEach((value, key) => {
                        jsonData[key] = value;
                    });
                    fetch('/MYSTORE/api/product', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(jsonData)
                    })
                        .then(response => response.json())
                        .then(text => {
                            console.log('Raw response:', text); // Log the raw response text 
                            try {
                                const data = text;
                                if (data.message === 'Product created successfully') {
                                    location.href = '/MYSTORE/Product';
                                } else {
                                    alert('Thêm sản phẩm thất bại');
                                }
                            } catch (error) {
                                console.error('Error parsing JSON:', error);
                                alert('Lỗi: Không thể phân tích JSON từ phản hồi của máy chủ.');
                            }
                        });
                });
        }); 
    </script>
</body>

</html>