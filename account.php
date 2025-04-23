<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="account.css">
</head>

<body>
    <form action="">
        <div id="wrapper">
            <div class="wp-header">
                <h2>Thông tin tài khoản</h2>
            </div>
            <div class="wp-body">
                <div class="detail-login">
                    Chi tiết đăng nhập
                </div>
                <br>
                <div class="login">
                    <label for="username">Tên đăng nhập*:</label>
                    <input type="text" name="username" id="username" placeholder="Nhập tên đăng nhập"><br><br>
                    <label for="email">Email*:</label>
                    <input type="email" name="email" id="email" placeholder="Nhập email"><br><br>
                    <label for="email">Nhập lại email*:</label>
                    <input type="email" name="retype-email" id="retype-email"placeholder="Nhập lại email"><br><br>
                    <label for="new-pw">Mật khẩu mới*:</label>
                    <input type="password" name="new-pw" id="new-pw"placeholder="Nhập mật khẩu"><br><br>
                    <label for="confirm-pw">Xác nhận lại mật khẩu*:</label>
                    <input type="password" name="confirm-pw" id="confirm-pw" placeholder="Nhập lại mật khẩu"><br><br>
                </div>
                <br>
                <div class="profile">
                    Thông tin về cá nhân
                </div>
                <br>
                <div class="account">
                    <label for="name">Họ và tên*:</label>
                    <input type="text" name="name" id="name"placeholder="Nhập họ tên"><br><br>
                    <label for="date">Ngày/tháng/năm sinh</label><br>
                    <input type="date" name="date" id="date"><br><br>
                    <label for="">Giới tính:</label><br>
                    <label for="male">Nam</label>
                    <input type="radio" name="gender" id="male">
                    <label for="female">Nữ</label>
                    <input type="radio" name="gender" id="female"><br><br>
                    <label for="nationanl">Chọn quốc tịch</label>
                    <select name="national" id="national">
                        <option value="0">Quốc tịch</option>
                        <option value="1">Viet Nam</option>
                        <option value="2">China</option>
                        <option value="3">Thailand</option>
                        <option value="4">Indonesia</option>
                        <option value="5">Malaysia</option>
                        <option value="6">Singapore</option>
                    </select>
                    <br><br>
                </div>
                <br>
                <div class="contact-information">
                    Thông tin liên hệ chi tiết
            
                </div>
                <br>
                <div class="contact">
                    <label for="number">Số điện thoại:</label>
                    <input type="text" name="number" id="number"placeholder="Nhập số điện thoại"><br><br>
                    <label for="address">Địa chỉ:</label>
                    <input type="text" name="address" id="address"placeholder="Nhập địa chỉ">
                </div>
                <div class="wp-footer">
                    <p>
                        <div class="submit">
                        <label for="submit"></label>
                        <input type="submit" name="btn-login" id="submit">
                        <button>Hủy</button>
                    </div>
                    </p>
                    
                </div>
            </div>
            
        </div>
    </form>
</body>

</html>