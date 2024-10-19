<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập và Đăng ký</title>
</head>
<body>

    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['login_email'];
        echo "<h3>Chào mừng $email đã quay lại trang web</h3>";
    }
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['register_email'];
        $password = $_POST['register_password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password === $confirm_password) {
            echo "<h3>Chúc mừng bạn đã đăng ký thành công</h3>";
    }
}
    ?>
    <center>
    <h2> Đăng nhập</h2>
    <form method="post" action="">
        <label for="login_email">Email:</label>
        <input type="email" id="login_email" name="login_email" required><br><br>

        <label for="login_password">Password:</label>
        <input type="password" id="login_password" name="login_password" required><br><br>

        <input type="submit" name="login" value="Gửi">
    </form>


    <hr>
    <h2> Đăng ký</h2>
    <form method="post" action="">
        <label for="name">Họ tên:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="register_email">Email:</label>
        <input type="email" id="register_email" name="register_email" required><br><br>

        <label for="register_password">Password:</label>
        <input type="password" id="register_password" name="register_password" required><br><br>

        <label for="confirm_password">Xác nhận mật khẩu:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <input type="submit" name="register" value="Gửi">
    </form>
    </center>
</body>
</html>
