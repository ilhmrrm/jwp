<?php
    include('../database/database.php');

    $query = "SELECT COUNT(*) AS total FROM artikel";
    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $totalArtikel = $row['total'];
    } else {
        $totalArtikel = 0;
    }

    $queryTotalKomentar = "SELECT COUNT(*) AS total_komentar FROM komentar";
    $resultTotalKomentar = $conn->query($queryTotalKomentar);

    if ($resultTotalKomentar) {
        $rowTotalKomentar = $resultTotalKomentar->fetch_assoc();
        $totalKomentar = $rowTotalKomentar['total_komentar'];
    } else {
        $totalKomentar = 0;
    }
?>

<!-- Dashboard admin -->
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .sidebar {
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-link {
            padding: 10px 15px;
            position: relative;
        }

        .sidebar .nav-link.active {
            background-color: #f8f9fa;
            box-shadow: inset 3px 0 0 #007bff;
            color: #007bff;
        }

        .sidebar .nav-link.active::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 3px;
            background-color: #007bff;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard_admin.php">JWP</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="daftar_artikel.php">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="komentar/daftar_komentar.php">Komentar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="laporan/daftar_laporan.php">Laporan</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 col-lg-10 ms-sm-auto px-md-4">
                <div class="pt-3 pb-2 mb-3">
                    <h2>Welcome, Admin!</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Artikel</h5>
                                <p class="card-text"><?php echo $totalArtikel; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Comments</h5>
                                <p class="card-text"><?php echo $totalKomentar; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- End of Main Content -->
        </div>
    </div>

    <!-- Tambahkan script JavaScript untuk Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Tambahkan script JavaScript berikut untuk menambahkan efek pada sidebar saat diklik
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                link.classList.add('active');
            });
        });
    </script>

</body>

</html>