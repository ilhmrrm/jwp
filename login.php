<?php
include("database.php");
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $res = mysqli_fetch_object($res);
        $_SESSION['status_login'] = true;
        $_SESSION['a_global'] = $res;
        echo '<script>window.location="admin.php"</script>';
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>JWP</title>
    <!-- Tambahkan link CSS untuk Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="flex w-1/2 p-8 bg-white rounded shadow">
        <div class="w-1/2">
            <img class="mb-4 mx-auto w-100" src="assets/kobo.jpg" alt="">
        </div>
        <div class="w-1/2">
            <form action="" method="post" class="p-4">
                <h1 class="text-2xl font-bold mb-6">Please sign in</h1>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="text" id="email" class="form-input w-full" placeholder="Email address" name="email" required autofocus>
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" class="form-input w-full" placeholder="Password" name="password" required>
                </div>
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2">Remember me</span>
                    </label>
                </div>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded w-full" name="submit" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-center text-gray-500">© 2023 - MIAW</p>
            </form>
        </div>
    </div>

    <!-- Tambahkan script JavaScript untuk Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tambahkan script JavaScript untuk interaksi (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
