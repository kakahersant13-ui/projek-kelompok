<?php include('../includes/header.php'); ?>
<main class="form-container">
    <h2>Form Pemesanan</h2>
    <form action="#" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Menu yang dipesan:</label>
        <input type="text" name="menu" required>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" min="1" required>

        <label>Catatan Tambahan:</label>
        <textarea name="catatan" rows="3"></textarea>

        <button type="submit" class="btn">Pesan Sekarang</button>
    </form>
</main>
<?php include('../includes/footer.php'); ?>