<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="view/css/auth.css">
</head>
<body>
    <div class="auth-container">
        <form action="index.php?act=login" method="POST" class="auth-form">
            <h2>Đăng Nhập</h2>

            <?php if (isset($error)): ?>
                <div style="color: red;"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <div class="form-group">
                <label>Tên đăng nhập:</label>
                <input type="text" name="username" required 
                       value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
            </div>
            
            <div class="form-group">
                <label>Mật khẩu:</label>
                <input type="password" name="password" required>
            </div>
            
            <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
            
            <div class="auth-links">
                <a href="index.php?act=forgot-password">Quên mật khẩu?</a>
                <p>Chưa có tài khoản? <a href="index.php?act=register">Đăng ký ngay</a></p>
            </div>
        </form>
    </div>
</body>
</html>
