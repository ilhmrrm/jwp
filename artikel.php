<?php
include('database/database.php');

// Periksa apakah parameter ID artikel diberikan
if (isset($_GET['id'])) {
    $idArtikel = $_GET['id'];

    // Ambil data artikel berdasarkan ID
    $query = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = '$idArtikel'");
    $row = mysqli_fetch_assoc($query);

    // Periksa apakah artikel ditemukan
    if ($row) {
        $judul = $row['judul'];
        $pembuat = $row['pembuat'];
        $deskripsi = $row['deskripsi'];
        $gambar = base64_encode($row['images']);
?>

        <!DOCTYPE html>
        <html>

        <head>
            <title>JWP - Artikel</title>
            <!-- Tambahkan link CSS untuk Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Tambahkan link CSS untuk Tailwind CSS -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        </head>

        <body>

            <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <!-- Kode navbar -->
            </nav>

            <div class="container mx-auto">
                <h1 class="mt-5 text-2xl font-bold"><?php echo $judul; ?></h1>
                <div class="flex justify-center">
                    <img src="data:image/jpeg;base64,<?php echo $gambar; ?>" alt="Article Image" class="w-3/4 rounded my-5">
                </div>
                <p>Author: <?php echo $pembuat; ?></p>
                <p>Deskripsi: <?php echo $deskripsi; ?></p>

                <hr class="my-5">

                <h2 class="text-2xl font-bold mb-3">Komentar</h2>
                <?php
                // Ambil data komentar berdasarkan ID artikel
                $queryKomentar = mysqli_query($conn, "SELECT * FROM komentar WHERE id_artikel = '$idArtikel'");

                // Periksa apakah ada komentar yang ditemukan
                if (mysqli_num_rows($queryKomentar) > 0) {
                    while ($rowKomentar = mysqli_fetch_assoc($queryKomentar)) {
                        $namaKomentar = $rowKomentar['nama'];
                        $emailKomentar = $rowKomentar['email'];
                        $isiKomentar = $rowKomentar['komentar'];
                ?>
                        <div class="bg-white rounded-lg border shadow-md p-4 mb-4">
                            <p class="font-semibold">Nama: <?php echo $namaKomentar; ?></p>
                            <p class="font-semibold">Email: <?php echo $emailKomentar; ?></p>
                            <p>Komentar: <?php echo $isiKomentar; ?></p>
                        </div>
                <?php
                    }
                } else {
                    echo "<p>Belum ada komentar.</p>";
                }
                ?>

                <hr class="my-5">
                <h2 class="text-2xl font-bold mb-3">Tinggalkan Komentar</h2>
                <form action="simpan_komentar.php" method="post">
                    <input type="hidden" name="id_artikel" value="<?php echo $idArtikel; ?>">
                    <div class="mb-3">
                        <label for="nama" class="block font-semibold">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block font-semibold">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="komentar" class="block font-semibold">Komentar:</label>
                        <textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                </form>
            </div>
        </body>

        <!-- Tambahkan script JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <!-- Tambahkan library Font Awesome untuk ikon -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        </html>

<?php
    } else {
        echo "Artikel tidak ditemukan.";
    }
} else {
    echo "ID artikel tidak diberikan.";
}
?>