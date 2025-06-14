</div> <!-- Đóng container chính từ header -->
    </div> <!-- Đóng main-container từ header -->
    
    <!-- Footer -->
    <footer class="main-footer">
        <!-- Decorative border -->
        <div class="footer-border"></div>
        
        <div class="container">
            <div class="row py-5">
                <!-- Thông tin công ty -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-section">
                        <h5 class="footer-title">
                            <i class="fas fa-store"></i>
                            Thanh Hoa Xứ
                        </h5>
                        <p class="footer-description">
                            Chuyên cung cấp các sản phẩm gốm sứ Thanh Hoa truyền thống, 
                            mang đậm bản sắc văn hóa Việt Nam với những họa tiết tinh xảo, 
                            tỉ mỉ từng chi tiết.
                        </p>
                        <div class="footer-social">
                            <a href="#" class="social-link facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://youtu.be/KgayxOF4Y7E?si=S_Kbuti0TIY76VAc" class="social-link youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="social-link zalo">
                                <i class="fas fa-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Liên kết nhanh -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-section">
                        <h6 class="footer-subtitle">Liên kết</h6>
                        <ul class="footer-links">
                            <li><a href="/MYSTORE/">Trang chủ</a></li>
                            <li><a href="/MYSTORE/Product">Sản phẩm</a></li>
                            <li><a href="/MYSTORE/Category">Danh mục</a></li>
                            <li><a href="/MYSTORE/about">Giới thiệu</a></li>
                            <li><a href="/MYSTORE/contact">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Danh mục sản phẩm -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-section">
                        <h6 class="footer-subtitle">Danh mục</h6>
                        <ul class="footer-links">
                            <?php 
                            // Lấy danh sách danh mục từ database (cần implement)
                            // $categories = getCategories(5); // Lấy 5 danh mục đầu
                            
                            // Dữ liệu mẫu - thay thế bằng dữ liệu từ database
                            $sample_categories = [
                                ['id' => 1, 'name' => 'Bình hoa'],
                                ['id' => 2, 'name' => 'Chén dĩa'],
                                ['id' => 3, 'name' => 'Tượng trang trí'],
                                ['id' => 4, 'name' => 'Lọ đựng'],
                                ['id' => 5, 'name' => 'Đồ thờ cúng']
                            ];
                            
                            foreach ($sample_categories as $category): ?>
                                <li>
                                    <a href="/MYSTORE/Category/view/<?php echo $category['id']; ?>">
                                        <?php echo htmlspecialchars($category['name']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <!-- Thông tin liên hệ -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-section">
                        <h6 class="footer-subtitle">Thông tin liên hệ</h6>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Địa chỉ:</strong><br>
                                    123 Đường Gốm Sứ, Phường Thanh Hà<br>
                                    Thành phố Hồ Chí Minh, Việt Nam
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Điện thoại:</strong><br>
                                    <a href="tel:0123456789">0123.456.789</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email:</strong><br>
                                    <a href="mailto:info@thanhhoaxu.vn">info@thanhhoaxu.vn</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <strong>Giờ làm việc:</strong><br>
                                    T2-T7: 8:00 - 18:00<br>
                                    Chủ nhật: 8:00 - 16:00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Đường kẻ phân cách -->
            <hr class="footer-divider">
            
            <!-- Copyright -->
            <div class="row py-3">
                <div class="col-md-6">
                    <p class="copyright-text">
                        © <?php echo date('Y'); ?> <strong>Thanh Hoa Xứ</strong>. 
                        Tất cả quyền được bảo lưu.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-meta">
                        <a href="/MYSTORE/privacy">Chính sách bảo mật</a>
                        <span class="separator">|</span>
                        <a href="/MYSTORE/terms">Điều khoản sử dụng</a>
                        <span class="separator">|</span>
                        <a href="/MYSTORE/sitemap">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Nút scroll to top -->
        <div class="scroll-top" id="scrollTop">
            <i class="fas fa-chevron-up"></i>
        </div>
    </footer>
    
    <!-- CSS cho Footer -->
    <style>
        .main-footer {
            background: linear-gradient(135deg, var(--thanh-hoa-dark-blue) 0%, var(--thanh-hoa-blue) 100%);
            color: var(--thanh-hoa-white);
            position: relative;
            margin-top: 50px;
        }
        
        /* Đường viền trang trí trên footer */
        .footer-border {
            height: 8px;
            background: repeating-linear-gradient(
                90deg,
                var(--thanh-hoa-white) 0px,
                var(--thanh-hoa-white) 15px,
                var(--thanh-hoa-light-blue) 15px,
                var(--thanh-hoa-light-blue) 30px
            );
        }
        
        .footer-title {
            color: var(--thanh-hoa-white);
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--thanh-hoa-light-blue);
            border-radius: 2px;
        }
        
        .footer-subtitle {
            color: var(--thanh-hoa-white);
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .footer-description {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        /* Social links */
        .footer-social {
            display: flex;
            gap: 10px;
        }
        
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--thanh-hoa-white);
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .social-link:hover {
            background: var(--thanh-hoa-white);
            color: var(--thanh-hoa-blue);
            transform: translateY(-3px);
            border-color: var(--thanh-hoa-light-blue);
        }
        
        /* Footer links */
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 8px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .footer-links a:hover {
            color: var(--thanh-hoa-white);
            padding-left: 10px;
        }
        
        .footer-links a::before {
            content: '▶';
            position: absolute;
            left: -15px;
            opacity: 0;
            transition: all 0.3s ease;
            font-size: 10px;
        }
        
        .footer-links a:hover::before {
            opacity: 1;
            left: -10px;
        }
        
        /* Contact info */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        
        .contact-item i {
            color: var(--thanh-hoa-light-blue);
            font-size: 1.1rem;
            margin-top: 3px;
            min-width: 20px;
        }
        
        .contact-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        
        .contact-item a:hover {
            color: var(--thanh-hoa-white);
        }
        
        /* Footer divider */
        .footer-divider {
            border-color: rgba(255, 255, 255, 0.2);
            margin: 30px 0 20px 0;
        }
        
        /* Copyright */
        .copyright-text {
            color: rgba(255, 255, 255, 0.8);
            margin: 0;
            font-size: 0.9rem;
        }
        
        .footer-meta {
            font-size: 0.9rem;
        }
        
        .footer-meta a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-meta a:hover {
            color: var(--thanh-hoa-white);
        }
        
        .separator {
            margin: 0 10px;
            color: rgba(255, 255, 255, 0.5);
        }
        
        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--thanh-hoa-blue);
            color: var(--thanh-hoa-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
        }
        
        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-top:hover {
            background: var(--thanh-hoa-light-blue);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(30, 58, 138, 0.4);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .footer-social {
                justify-content: flex-start;
                margin-top: 15px;
            }
            
            .contact-item {
                flex-direction: column;
                gap: 5px;
            }
            
            .contact-item i {
                margin-top: 0;
            }
            
            .scroll-top {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
        }
    </style>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Scroll to top functionality
        window.addEventListener('scroll', function() {
            const scrollTop = document.getElementById('scrollTop');
            if (window.pageYOffset > 300) {
                scrollTop.classList.add('show');
            } else {
                scrollTop.classList.remove('show');
            }
        });
        
        document.getElementById('scrollTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Animation cho các elements khi scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe các elements cần animation
        document.querySelectorAll('.footer-section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.6s ease';
            observer.observe(section);
        });
        
        // Confirm delete functionality
        function confirmDelete(message) {
            return confirm(message || 'Bạn có chắc chắn muốn xóa?');
        }
        
        // Toast notifications (nếu cần)
        function showToast(message, type = 'success') {
            // Implementation cho toast notifications
            console.log(`${type}: ${message}`);
        }
    </script>
    
    <?php if (isset($custom_js)): ?>
        <!-- Custom JavaScript từ các trang con -->
        <?php echo $custom_js; ?>
    <?php endif; ?>
</body>
</html>