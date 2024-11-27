<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="view/css/auth.css">
</head>
<body>
    <div class="auth-container">
        <form action="index.php?act=register" method="POST" class="auth-form">
            <h2>Đăng Ký</h2>

            <?php if (isset($error)): ?>
                <div style="color: red;"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required 
                       value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
            </div>
            
            <div class="form-group">
                <label>Tên đăng nhập:</label>
                <input type="text" name="username" required 
                       value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
            </div>
            
            <div class="form-group">
                <label>Mật khẩu:</label>
                <input type="password" name="password" required minlength="6">
            </div>
            
            <button type="submit" name="register" class="btn btn-primary">Đăng ký</button>
            
            <div class="auth-links">
                <p>Đã có tài khoản? <a href="index.php?act=login">Đăng nhập ngay</a></p>
            </div>
        </form>
    </div>
</body>
</html>
