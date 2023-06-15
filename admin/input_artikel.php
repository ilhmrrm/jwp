<!DOCTYPE html>
<html>

<head>
    <title>Input Artikel</title>
    <!-- Tambahkan link CSS untuk Bootstrap dan Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .form-control {
            background-color: #e2f4ff;
            border-color: #7dc9e3;
        }
    </style>
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Input Artikel</h1>

        <!-- Form input artikel -->
        <form action="process_article.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="judul" class="block">Judul:</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="pembuat" class="block">Pembuat:</label>
                <input type="text" name="pembuat" id="pembuat" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" required></textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block">Gambar:</label>
                <input type="file" name="gambar" id="gambar" class="form-control" required>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" value="cancel">Cancel</button>
            </div>
        </form>
    </div>

    <!-- Tambahkan script JavaScript atau yang diperlukan -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
