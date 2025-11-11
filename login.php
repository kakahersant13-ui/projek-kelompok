<?php include('includes/header.php'); ?>
<main class="form-container">
    <h2>Login</h2>
    <form action="#" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit" class="btn">Masuk</button>
        <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
    </form>
</main>
<?php include('includes/footer.php'); ?>
