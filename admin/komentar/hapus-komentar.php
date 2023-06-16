<?php
include('../../database/database.php');

if (isset($_GET['id'])) {
    $idArtikel = $_GET['id'];

    // Ambil data artikel berdasarkan ID
    $query = mysqli_query($conn, "SELECT * FROM komentar WHERE id_komentar = '$idArtikel'");
    $row = mysqli_fetch_assoc($query);


    // Hapus artikel dari database
    $deleteQuery = mysqli_query($conn, "DELETE FROM komentar WHERE id_komentar = '$idArtikel'");

    if ($deleteQuery) {
        // Redirect ke halaman daftar_artikel.php
        header('Location: daftar_komentar.php');
    } else {
        // Tampilkan pesan error jika gagal menghapus artikel
        echo "Failed to delete article. Please try again.";
    }
} else {
    // Redirect ke halaman daftar_artikel.php jika parameter ID tidak ada
    header('Location: daftar_komentar.php');
}
?>
