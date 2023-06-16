<?php
include('database/database.php');

// Periksa apakah data yang diperlukan tersedia
if (isset($_POST['id_artikel']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['komentar'])) {
    $idArtikel = $_POST['id_artikel'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    // Simpan komentar ke dalam tabel komentar
    $query = "INSERT INTO komentar (id_komentar, nama, email, komentar) VALUES ('$idArtikel', '$nama', '$email', '$komentar')";
    mysqli_query($conn, $query);

    // Redirect kembali ke halaman artikel setelah komentar disimpan
    header("Location: artikel.php?id=$idArtikel");
    exit();
} else {
    echo "Data tidak lengkap.";
}
?>