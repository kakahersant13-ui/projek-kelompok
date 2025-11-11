<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['nama']; // disesuaikan dengan name="nama" di form
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($koneksi, $query);

    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
}
?>

<?php include('includes/header.php'); ?>
<main>
    <h2>Daftar Akun</h2>
    <form action="#" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="register" class="btn">Daftar</button>
    </form>
</main>
<?php include('includes/footer.php'); ?>
