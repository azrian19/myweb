<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Contoh simpan ke file log
    $log = fopen("kontak_log.txt", "a");
    fwrite($log, "$nama <$email>: $pesan\n");
    fclose($log);

    echo "<script>alert('Pesan berhasil dikirim!');window.location.href='index.php#contact';</script>";
} else {
    header("Location: index.php");
}
?>
