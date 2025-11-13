<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $hobi = $_POST["hobi"];
    $pasangan = $_POST["pasangan"];
    $pekerjaan = $_POST["pekerjaan"];
    $nama_orang_tua = $_POST["nama_orang_tua"];
    $nama_kakak = $_POST["nama_kakak"];
    $nama_adik = $_POST["nama_adik"];

    // Redirect ke halaman utama dengan data NIM sebagai parameter
    header("Location: index.html?nim=" . urlencode($nim));
    exit();
} else {
    // Jika diakses tidak melalui form, redirect ke halaman utama
    header("Location: index.html");
    exit();
}
?>