<!-- Contact Form Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Liên Hệ Với Chúng Tôi</h2>
    <p class="text-center mb-5">Chúng tôi rất vui được nghe từ bạn. Hãy để lại thông tin và câu hỏi của bạn dưới đây!
    </p>

    <form action="lienhe_process.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên Của Bạn</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Lời Nhắn</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Gửi Liên Hệ</button>
        </div>
    </form>
</div>

<!-- Contact Information Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Thông Tin Liên Hệ</h2>
    <div class="row">
        <div class="col-md-4">
            <h5>Địa Chỉ</h5>
            <p>30/2/1/4/7/2 Lê Duẩn, TP.BMT, Tỉnh DakLak</p>
        </div>
        <div class="col-md-4">
            <h5>Email</h5>
            <p>petcom@gmail.com</p>
        </div>
        <div class="col-md-4">
            <h5>Số Điện Thoại</h5>
            <p>+84 942321493</p>
        </div>
    </div>
</div>

