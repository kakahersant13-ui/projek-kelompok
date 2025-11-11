<?php include('../includes/header.php'); ?>
<main class="form-container">
    <h2>Hubungi Kami</h2>
    <form action="#" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Pesan:</label>
        <textarea name="pesan" rows="4" required></textarea>

        <button type="submit" class="btn">Kirim Pesan</button>
    </form>
</main>
<?php include('../includes/footer.php'); ?>