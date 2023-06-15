<?php
include('../database/database.php');

// get data from form
$judul = $_POST['judul'];
$pembuat = $_POST['pembuat'];
$deskripsi = $_POST['deskripsi'];

$imageName = $_FILES['gambar']['name'];
$imageTmp = $_FILES['gambar']['tmp_name'];
$imagePath = "../uploads/" . $imageName;

// Read the file content
$imageData = file_get_contents($imageTmp);
$imageData = mysqli_real_escape_string($conn, $imageData);

$query = "INSERT INTO artikel (judul, pembuat, deskripsi, images) VALUES ('$judul', '$pembuat', '$deskripsi', '$imageData')";

if (move_uploaded_file($imageTmp, $imagePath) && $conn->query($query)) {
    header("location: daftar_artikel.php");
} else {
    echo "Data gagal disimpan !";
}
?>
