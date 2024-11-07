<div class="container my-5">
    <div class="row gy-4" id="services-container"></div>
</div>

<!-- Form Đặt Lịch -->
<div class="container mt-5" id="booking-form">
    <h3 id="form-title"></h3>
    <form id="bookingForm">
        <div class="form-group">
            <label for="name">Họ và tên:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="date">Ngày và giờ:</label>
            <input type="datetime-local" class="form-control" id="date" name="date" required>
        </div>
        <button type="button" class="btn btn-primary mt-3" onclick="submitForm()">Đặt lịch</button>
        <button type="button" class="btn btn-secondary mt-3" onclick="hideForm()">Hủy</button>
    </form>
</div>

<!-- Bảng hiển thị thông tin lịch hẹn -->
<div id="bookingDetails">
    <h3>Thông tin lịch hẹn</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Ngày và giờ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="bookingName"></td>
                <td id="bookingEmail"></td>
                <td id="bookingDate"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
// Dữ liệu dịch vụ
const services = [
    {
        title: 'Spa chó mèo',
        description: 'Spa cho chó mèo bao gồm các dịch vụ như tắm, chải lông, và cắt tỉa móng, giúp thú cưng của bạn luôn sạch sẽ và thơm tho.',
        time: '1 - 2 giờ',
        price: '300.000 - 500.000 VND',
        location: '123 Lê Duẩn, TP. Buôn Ma Thuột',
        imgUrl: 'https://thuyprocare.com/upload/baiviet/screenshot1-136_245x245.png'
    },
    {
        title: 'Cắt tỉa lông chó poodle',
        description: 'Dịch vụ cắt tỉa lông cho chó poodle, giúp giữ cho bộ lông của các bé gọn gàng, mượt mà và thời trang.',
        time: '1 - 1.5 giờ',
        price: '200.000 - 400.000 VND',
        location: '456 Trần Phú, TP. Buôn Ma Thuột',
        imgUrl: 'https://thuyprocare.com/upload/baiviet/9jzeu6o-7252_245x245.jpg'
    },
    {
        title: 'Mổ đẻ tại nhà',
        description: 'Dịch vụ mổ đẻ thú cưng tại nhà, đảm bảo an toàn và tiện lợi cho thú cưng của bạn trong quá trình sinh nở.',
        time: '2 - 3 giờ',
        price: '1.500.000 - 2.000.000 VND',
        location: 'Dịch vụ tại nhà, toàn TP. Buôn Ma Thuột',
        imgUrl: 'https://thuyprocare.com/upload/baiviet/download-2-1819_245x245.jpg'
    },
    {
        title: 'Điều trị chó mèo tại nhà',
        description: 'Dịch vụ chăm sóc và điều trị thú cưng tận nhà, bao gồm các dịch vụ khám bệnh, tiêm phòng và tư vấn dinh dưỡng.',
        time: 'Theo yêu cầu',
        price: 'Tùy thuộc vào dịch vụ cụ thể',
        location: 'Dịch vụ tại nhà, toàn TP. Buôn Ma Thuột',
        imgUrl: 'https://thuyprocare.com/upload/baiviet/phongkhamthuyuytinnhattaihanoi89013-6057_245x245.jpg'
    }
];

// Render dịch vụ
function renderServices() {
    const container = document.getElementById('services-container');
    services.forEach((service, index) => {
        const col = document.createElement('div');
        col.classList.add('col-lg-6');
        col.innerHTML = `
            <div class="card h-100 border-0 shadow-lg hover-card">
                <img class="card-img-top igdv rounded-top" src="${service.imgUrl}" alt="${service.title}">
                <div class="card-body bg-light">
                    <h5 class="card-title text-primary">${service.title}</h5>
                    <p class="card-text">${service.description}</p>
                    <ul class="list-unstyled">
                        <li><strong>Thời gian dịch vụ:</strong> ${service.time}</li>
                        <li><strong>Giá:</strong> ${service.price}</li>
                        <li><strong>Địa chỉ:</strong> ${service.location}</li>
                    </ul>
                    <button class="btn btn-primary mt-3">Xem chi tiết</button>
                    <button class="btn btn-outline-secondary mt-3" onclick="showForm(${index})">Đặt lịch hẹn</button>
                </div>
            </div>
        `;
        container.appendChild(col);
    });
}

// Hiển thị form đặt lịch
function showForm(index) {
    const formTitle = document.getElementById('form-title');
    formTitle.textContent = `Đặt lịch hẹn cho dịch vụ ${services[index].title}`;
    const bookingForm = document.getElementById('booking-form');
    bookingForm.style.display = 'block';

    // Lưu thông tin dịch vụ đã chọn vào form
    document.getElementById('bookingForm').onsubmit = function(e) {
        e.preventDefault();
        submitForm(index);
    };
}

// Ẩn form đặt lịch
function hideForm() {
    document.getElementById('booking-form').style.display = 'none';
}

// Xử lý khi người dùng đặt lịch
function submitForm(index) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const date = document.getElementById('date').value;

    // Cập nhật thông tin vào bảng
    document.getElementById('bookingName').textContent = name;
    document.getElementById('bookingEmail').textContent = email;
    document.getElementById('bookingDate').textContent = date;

    // Ẩn form và hiển thị bảng thông tin
    document.getElementById('booking-form').style.display = 'none';
    document.getElementById('bookingDetails').style.display = 'block';
}

// Render các dịch vụ khi trang được tải
document.addEventListener('DOMContentLoaded', function () {
    renderServices();
});
</script>
