<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Project - Nazwa</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-purple-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- LOGO -->
            <h1 class="text-2xl font-bold text-purple-700">
                NAWWA
            </h1>

            <!-- MENU -->
            <div class="flex gap-8 text-gray-600">

                <a href="/" class="hover:text-purple-700">
                    Home
                </a>

                <a href="/halaman-dua" class="text-purple-700 font-semibold">
                    Project
                </a>

                <a href="/#about" class="hover:text-purple-700">
                    About
                </a>

                <a href="#" class="hover:text-purple-700">
                    Contact
                </a>

            </div>

        </div>
    </nav>


    <!-- JUDUL -->
    <section class="py-14">

        <div class="max-w-6xl mx-auto px-6">

            <div class="text-center mb-10">

                <p class="text-purple-600 font-semibold">
                    My Project
                </p>

                <h2 class="text-4xl font-bold text-purple-800 mt-2">
                    Project yang Saya Pelajari
                </h2>

                <p class="text-gray-600 mt-3">
                    Beberapa project yang pernah saya buat dan pelajari.
                </p>

            </div>


            <!-- PROJECT CARDS -->
            <div class="grid md:grid-cols-3 gap-6">


                <!-- PROJECT 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:-translate-y-1 transition">

                    <!-- GAMBAR -->
                    <div class="h-44 bg-purple-100 overflow-hidden">

                        <img
                            src="{{ asset('image/planApp.jpeg') }}"
                            alt="PlanrApp"
                            class="w-full h-full object-cover"
                        >

                    </div>


                    <!-- ISI -->
                    <div class="p-6">

                        <span class="text-sm text-purple-600 font-semibold">
                            Mobile
                        </span>

                        <h3 class="text-xl font-bold text-purple-800 mt-2">
                            PlanrApp
                        </h3>

                        <p class="text-gray-600 mt-2 leading-relaxed">
                            Aplikasi sederhana untuk mengatur
                            catatan dan kegiatan sehari-hari.
                        </p>

                        <div class="flex gap-2 mt-4">

                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">
                                Flutter
                            </span>

                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">
                                Dart
                            </span>

                        </div>

                    </div>

                </div>



                <!-- PROJECT 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:-translate-y-1 transition">

                    <!-- GAMBAR -->
                    <div class="h-44 bg-pink-100 overflow-hidden">

                        <img
                            src="{{ asset('image/dessert.png') }}"
                            alt="Dessert Shop"
                            class="w-full h-full object-cover"
                        >

                    </div>


                    <!-- ISI -->
                    <div class="p-6">

                        <span class="text-sm text-pink-600 font-semibold">
                            Website
                        </span>

                        <h3 class="text-xl font-bold text-purple-800 mt-2">
                            Dessert Shop
                        </h3>

                        <p class="text-gray-600 mt-2 leading-relaxed">
                            Website sederhana untuk menampilkan
                            berbagai produk dessert.
                        </p>

                        <div class="flex gap-2 mt-4">

                            <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs">
                                HTML
                            </span>

                            <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs">
                                CSS
                            </span>

                        </div>

                    </div>

                </div>



                <!-- PROJECT 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:-translate-y-1 transition">

                    <!-- GAMBAR -->
                    <div class="h-44 bg-blue-100 overflow-hidden">

                        <img
                            src="{{ asset('image/laravel.png') }}"
                            alt="Laravel"
                            class="w-full h-full object-cover"
                        >

                    </div>


                    <!-- ISI -->
                    <div class="p-6">

                        <span class="text-sm text-blue-600 font-semibold">
                            Framework
                        </span>

                        <h3 class="text-xl font-bold text-purple-800 mt-2">
                            Laravel
                        </h3>

                        <p class="text-gray-600 mt-2 leading-relaxed">
                            Project website yang dibuat dengan
                            menggunakan framework Laravel.
                        </p>

                        <div class="flex gap-2 mt-4">

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                                Laravel
                            </span>

                            <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">
                                PHP
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- TOMBOL KEMBALI -->
            <div class="text-center mt-10">

                <a
                    href="/"
                    class="inline-block bg-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-purple-700 transition"
                >
                    Kembali ke Home
                </a>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="bg-white border-t mt-10">

        <div class="max-w-6xl mx-auto px-6 py-6 text-center">

            <p class="text-gray-500 text-sm">
                © 2026 Nazwa. Student RPL.
            </p>

        </div>

    </footer>

</body>
</html>