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
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="index.php" class="flex items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">JWP</span>
                    </a>
                    <div class="flex md:order-2">
                        <a href="login.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>
                        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="index.php" class="block py-2 pl-3 pr-4 text-gray-900 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Beranda</a>
                            </li>
                            <li>
                                <a href="news_article.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News Article</a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                $queryKomentar = mysqli_query($conn, "SELECT * FROM komentar WHERE id_komentar = '$idArtikel'");

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