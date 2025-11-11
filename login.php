<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
    $data = mysqli_fetch_assoc($query);

    if ($data && password_verify($password, $data['password'])) {
        echo "<script>alert('Login berhasil!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Email atau password salah!');</script>";
    }
}
?>

<h2>Login</h2>
<form action="#" method="POST">
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Password:</label>
    <input type="password" name="password" required>
    <button type="submit" name="login" class="btn">Masuk</button>
    <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
</form>

<?php include('includes/footer.php'); ?>
