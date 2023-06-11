<!DOCTYPE html>
<html>

<head>
    <title>Kirim Pesan WhatsApp Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Kirim Pesan</h2>
        <form method="get" action="redirect.php">
            <div class="mb-3">
                <label for="nomorTelepon" class="form-label">Nomor Telepon:</label>
                <input type="text" class="form-control" id="nomorTelepon" name="nohp" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="mb-3">
                <label for="pesanTeks" class="form-label">Pesan Teks:</label>
                <textarea class="form-control" id="pesanTeks" name="text" placeholder="Masukkan pesan teks" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-blosk">Kirim</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
function ubahNomorTelepon($nomorTelepon)
{
    $nomorTelepon = str_replace([' ', '-'], '', $nomorTelepon);
    if (substr($nomorTelepon, 0, 1) === '0') {
        $nomorTelepon = '+62' . substr($nomorTelepon, 1);
    }

    return $nomorTelepon;
}
?>