<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Pet.com - Trang Chủ</title>
</head>

<body>

    <!-- Header -->
    <header class="container py-3">
        <div class="row align-items-center">
            <div class="col-lg-3 col-sm-3 d-flex align-items-center logo">
                <img src="img/tải xuống.jpg" alt="Pet.com Logo" class="img-fluid">
                <h2 class="Nweb ms-3">Pet.Com</h2>
            </div>
            <div class="col-lg-9 col-sm-9 text-end">
                <img src="img/we.png" alt="Quảng cáo" class="qc img-fluid">
            </div>
        </div>

        <!-- Navigation -->
        <nav class="menu mt-3">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="?i=thucung">Thú Cưng</a></li>
                <li class="nav-item"><a class="nav-link" href="?i=tintuc">Tin Tức</a></li>
                <li class="nav-item"><a class="nav-link" href="?i=dichvu">Dịch Vụ</a></li>
                <li class="nav-item"><a class="nav-link" href="?i=lienhe">Liên Hệ</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Banner (Hiển thị chỉ trên trang chủ) -->
    <?php if (!isset($_GET['i']) || $_GET['i'] == 'index'): ?>
    <div class="container-fluid bg-primary text-white text-center py-5">
        <h1>Chào mừng đến với Pet.com</h1>
        <p>Nơi chăm sóc tốt nhất cho thú cưng của bạn với các dịch vụ Spa, khám chữa bệnh, và các sản phẩm thú cưng chất lượng.</p>
        <a href="?i=dichvu" class="btn btn-light mt-3">Khám phá dịch vụ</a>
    </div>
    <?php endif; ?>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="content">
            <?php 
                $view = "gioithieu.php";
                if (isset($_GET['i'])) {
                    $view = $_GET['i'] . '.php';
                }
                include $view;
            ?>
        </div>

        <!-- Featured Services Section -->
        <section class="my-5">
            <h2 class="text-center mb-4">Dịch Vụ Nổi Bật</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://thuyprocare.com/upload/baiviet/screenshot1-136_245x245.png" class="card-img-top" alt="Dịch vụ Spa">
                        <div class="card-body">
                            <h5 class="card-title">Spa Thú Cưng</h5>
                            <p class="card-text">Dịch vụ spa và làm đẹp cho thú cưng, bao gồm tắm, chải lông và vệ sinh toàn diện.</p>
                            <a href="?i=dichvu" class="btn btn-primary">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://thuyprocare.com/upload/baiviet/9jzeu6o-7252_245x245.jpg" class="card-img-top" alt="Cắt tỉa lông">
                        <div class="card-body">
                            <h5 class="card-title">Cắt Tỉa Lông</h5>
                            <p class="card-text">Giúp thú cưng của bạn luôn gọn gàng và phong cách với dịch vụ cắt tỉa lông chuyên nghiệp.</p>
                            <a href="?i=dichvu" class="btn btn-primary">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://thuyprocare.com/upload/baiviet/download-2-1819_245x245.jpg" class="card-img-top" alt="Mổ đẻ tại nhà">
                        <div class="card-body">
                            <h5 class="card-title">Mổ Đẻ Tại Nhà</h5>
                            <p class="card-text">Dịch vụ mổ đẻ tại nhà cho thú cưng, an toàn và tiện lợi với đội ngũ chuyên nghiệp.</p>
                            <a href="?i=dichvu" class="btn btn-primary">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="tc py-5 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-12 mb-3 mb-lg-0">
                    <p>© Pet.com - Tất cả các quyền được bảo lưu</p>
                </div>
                <div class="col-lg-4 col-sm-12 mb-3 mb-lg-0">
                    <h6>Thông Tin Liên Hệ</h6>
                    <p>Email: petcom@gmail.com</p>
                    <p>Số điện thoại: +84 942321493</p>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h6>Địa Chỉ</h6>
                    <p>30/2/1/4/7/2 Lê Duẩn, TP.BMT, Tỉnh DakLak</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="?i=facebook" class="text-white me-3"><i class="bi bi-facebook"></i> Facebook</a>
                <a href="?i=instagram" class="text-white"><i class="bi bi-instagram"></i> Instagram</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    
</body>

</html>
