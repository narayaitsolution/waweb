<!DOCTYPE html>
<html>

<head>
  <title>Kirim Pesan WhatsApp Web</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <?php
  $nohp = $_GET['nohp'];
  $text = urlencode($_GET['text']);
  $customURL = 'https://wa.me/' . ubahNomorTelepon($nohp) . '?text=' . $text;
  echo "<script>window.open('$customURL');</script>";
  function ubahNomorTelepon($nomorTelepon)
  {
    $nomorTelepon = str_replace([' ', '-'], '', $nomorTelepon);
    if (substr($nomorTelepon, 0, 1) === '0') {
      $nomorTelepon = '+62' . substr($nomorTelepon, 1);
    }

    return $nomorTelepon;
  }
  ?>
  <div class="col">
    <label for="nomorTelepon" class="form-label">Nomor Telepon:</label>
    <input type="number" class="form-control" id="nomorTelepon" name="nohp" value="<?= $nohp; ?>" readonly>
  </div>
  <div class="col">
    <label for="pesanTeks" class="form-label">Pesan Teks:</label>
    <textarea class="form-control" id="pesanTeks" name="text" placeholder="Masukkan pesan teks" readonly><?= urldecode($text); ?></textarea>
  </div>
  <hr>
  <a href="index.php" class="btn btn-primary btn-lg btn-block">kembali</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>