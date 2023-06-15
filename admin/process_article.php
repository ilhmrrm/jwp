<?php
require_once "../database/database.php";

// Cek apakah tombol submit telah ditekan
// if (isset($_POST['submit'])) {
//     // Mengambil informasi file gambar yang diunggah
//     $file = $_FILES['gambar'];
//     $fileName = $_FILES['gambar']['name'];
//     $fileTmpName = $_FILES['gambar']['tmp_name'];
//     $fileSize = $_FILES['gambar']['size'];
//     $fileError = $_FILES['gambar']['error'];
//     $fileType = $_FILES['gambar']['type'];

//     // Memisahkan ekstensi file
//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     // Membatasi ekstensi file yang diizinkan
//     $allowedExtensions = array('jpg', 'jpeg', 'png');

//     // Memeriksa apakah ekstensi file diizinkan
//     if (in_array($fileActualExt, $allowedExtensions)) {
//         // Memeriksa apakah terdapat error saat mengunggah file
//         if ($fileError === 0) {
//             // Memeriksa ukuran file
//             if ($fileSize < 5000000) {
//                 // Membuat nama unik untuk file gambar yang diunggah
//                 $fileNameNew = uniqid('', true) . "." . $fileActualExt;

//                 // Menentukan lokasi penyimpanan file gambar
//                 $fileDestination = '../uploads/' . $fileNameNew;

//                 // Memindahkan file gambar yang diunggah ke lokasi penyimpanan
//                 move_uploaded_file($fileTmpName, $fileDestination);

//                 // Mengambil informasi artikel dari form
//                 $judul = $_POST['judul'];
//                 $pembuat = $_POST['pembuat'];
//                 $deskripsi = $_POST['deskripsi'];

//                 // Menyimpan informasi artikel dan nama gambar ke database menggunakan prepared statement
//                 $stmt = $conn->prepare("INSERT INTO artikel (user_id, deskripsi, image, judul) VALUES (?, ?, ?, ?)");
//                 $stmt->bind_param("isss", $user_id, $deskripsi, $fileNameNew, $judul);

//                 if ($stmt->execute()) {
//                     echo "Artikel berhasil ditambahkan!";
//                 } else {
//                     echo "Error: " . $stmt->error;
//                 }

//                 $stmt->close();
//             } else {
//                 echo "Ukuran file terlalu besar! (Maksimal 5MB)";
//             }
//         } else {
//             echo "Error saat mengunggah file!";
//         }
//     } else {
//         echo "Tipe file tidak diizinkan! (Hanya menerima file JPG, JPEG, dan PNG)";
//     }
// }
