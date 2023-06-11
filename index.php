<!DOCTYPE html>
<html>

<head>
    <title>Kirim Pesan WhatsApp Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Kirim Pesan WhatsApp Web</h2>
        <small style="color: blue;">Akses form ini menggunakan browser yang memiliki whatsapp web aktif</small>
        <form method="get" action="redirect.php">
            <div class="col">
                <label for="nomorTelepon" class="form-label">Nomor Telepon:</label>
                <input type="number" class="form-control" id="nomorTelepon" name="nohp" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="col">
                <label for="pesanTeks" class="form-label">Pesan Teks:</label>
                <textarea class="form-control" id="pesanTeks" name="text" placeholder="Masukkan pesan teks" required></textarea>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>