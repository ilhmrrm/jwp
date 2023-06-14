<!DOCTYPE html>
<html>

<head>
    <title>JWP</title>
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Start Nav Bar -->

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">JWP</span>
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

    <!-- End of Nav Bar -->

    <!-- Start of Carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/borobudur.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/basketball.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End of Carousel -->

    <section class="w-full self-center px-4">
        <br>
        <h1 class="font-bold text-xl">Terbaru</h1>
        <br>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            <!-- Mulai -->
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md lg:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="assets/kobo.jpg" alt="Lepkom">
                <div class="flex flex-wrap justify-between p-4 leading-normal">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Course Instructor</h1>
                    <h2 class="mb-3 font-semibold text-gray-800 dark:text-gray-400">( March 2022 - Present )</h2>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 text-justify">Teaching practitioners with approximately 40 participants per class.</p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md lg:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="assets/kobo.jpg" alt="Ruangguru">
                <div class="flex flex-wrap justify-between p-4 leading-normal">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Backend Engineering Ruangguru</h1>
                    <h2 class="mb-3 font-semibold text-gray-800 dark:text-gray-400">( August - Present )</h2>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 text-justify">I'm Apprenticeship at Backend Engineering Ruangguru, I hope when this program was finished the knowledge would be useful for my dreams</p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md lg:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="assets/kobo.jpg" alt="Ruangguru">
                <div class="flex flex-wrap justify-between p-4 leading-normal">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">My Dreams in the future</h1>
                    <h2 class="mb-3 font-semibold text-gray-800 dark:text-gray-400">( August - Present )</h2>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, unde. Nemo quaerat tempora impedit doloremque consequatur ducimus blanditiis sed quidem ullam, magni labore nulla officia voluptas explicabo reprehenderit quisquam consectetur.</p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md lg:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="assets/kobo.jpg" alt="Ruangguru">
                <div class="flex flex-wrap justify-between p-4 leading-normal">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">My Dreams in the future</h1>
                    <h2 class="mb-3 font-semibold text-gray-800 dark:text-gray-400">( August - Present )</h2>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, unde. Nemo quaerat tempora impedit doloremque consequatur ducimus blanditiis sed quidem ullam, magni labore nulla officia voluptas explicabo reprehenderit quisquam consectetur.</p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md lg:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="assets/kobo.jpg" alt="Ruangguru">
                <div class="flex flex-wrap justify-between p-4 leading-normal">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">My Dreams in the future</h1>
                    <h2 class="mb-3 font-semibold text-gray-800 dark:text-gray-400">( August - Present )</h2>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, unde. Nemo quaerat tempora impedit doloremque consequatur ducimus blanditiis sed quidem ullam, magni labore nulla officia voluptas explicabo reprehenderit quisquam consectetur.</p>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md lg:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="assets/kobo.jpg" alt="Ruangguru">
                <div class="flex flex-wrap justify-between p-4 leading-normal">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">My Dreams in the future</h1>
                    <h2 class="mb-3 font-semibold text-gray-800 dark:text-gray-400">( August - Present )</h2>
                    <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, unde. Nemo quaerat tempora impedit doloremque consequatur ducimus blanditiis sed quidem ullam, magni labore nulla officia voluptas explicabo reprehenderit quisquam consectetur.</p>
                </div>
            </a>
            <!-- Selesai -->
        </div>
    </section>
    <!-- Experience Card End -->
</body>
<!-- Tambahkan script JavaScript untuk Bootstrap (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- Tambahkan library Font Awesome untuk ikon -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</html>