<?php
$nohp = $_GET['nohp'];
$text = urlencode($_GET['text']);
echo ubahNomorTelepon($nohp);
echo '<br>';
echo $text;
$customURL = 'https://wa.me/' . ubahNomorTelepon($nohp) . '?text=' . $text;
echo "<script>window.open('$customURL');</script>";
echo '<br>';
echo '<a href="index.php">Kembali</a>';

function ubahNomorTelepon($nomorTelepon)
{
  $nomorTelepon = str_replace([' ', '-'], '', $nomorTelepon);
  if (substr($nomorTelepon, 0, 1) === '0') {
    $nomorTelepon = '+62' . substr($nomorTelepon, 1);
  }

  return $nomorTelepon;
}
