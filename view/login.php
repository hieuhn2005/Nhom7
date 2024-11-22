<div class="auth-container">
    <h2>Đăng nhập</h2>
    <?php if(isset($error)): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>
    
    <form action="index.php?act=login" method="POST">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label>Mật khẩu:</label>
            <input type="password" name="password" required>
        </div>
        
        <button type="submit" name="login" class="btn">Đăng nhập</button>
    </form>
    
    <p>Chưa có tài khoản? <a href="index.php?act=register">Đăng ký</a></p>
</div>