<div class="auth-container">
    <h2>Đăng ký tài khoản</h2>
    <?php if(isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
    
    <form action="index.php?act=register" method="POST">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label>Tên đăng nhập:</label>
            <input type="text" name="username" required>
        </div>
        
        <div class="form-group">
            <label>Mật khẩu:</label>
            <input type="password" name="password" required>
        </div>
        
        <button type="submit" name="register" class="btn">Đăng ký</button>
    </form>
    
    <p>Đã có tài khoản? <a href="index.php?act=login">Đăng nhập</a></p>
</div>