<?php
include('../database/database.php');

if (isset($_GET['id'])) {
    $idArtikel = $_GET['id'];

    // Ambil data artikel berdasarkan ID
    $query = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = '$idArtikel'");
    $row = mysqli_fetch_assoc($query);

    // Hapus gambar jika ada
    if (!empty($row['images'])) {
        $imagePath = '../uploads/' . $row['images'];

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Hapus artikel dari database
    $deleteQuery = mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel = '$idArtikel'");

    if ($deleteQuery) {
        // Redirect ke halaman daftar_artikel.php
        header('Location: daftar_artikel.php');
    } else {
        // Tampilkan pesan error jika gagal menghapus artikel
        echo "Failed to delete article. Please try again.";
    }
} else {
    // Redirect ke halaman daftar_artikel.php jika parameter ID tidak ada
    header('Location: daftar_artikel.php');
}
?>
