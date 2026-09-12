<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Satu</title>

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
                <a href="/" class="text-purple-700 font-semibold">
                    Home
                </a>

                <a href="/halaman-dua" class="hover:text-purple-700">
                    Project
                </a>

                <a href="#" class="hover:text-purple-700">
                    About
                </a>

                <a href="#" class="hover:text-purple-700">
                    Contact
                </a>
            </div>

        </div>
    </nav>


    <!-- HERO -->
    <section class="min-h-[calc(100vh-72px)] flex items-center">

        <div class="max-w-6xl mx-auto px-6 w-full">

            <div class="bg-white rounded-3xl shadow-lg p-8 md:p-10">

                <div class="grid md:grid-cols-2 gap-10 items-center">


                    <!-- FOTO -->
                    <div class="relative">

                        <!-- hiasan lingkaran -->
                        <div class="absolute -top-4 -left-4 w-20 h-20 bg-purple-200 rounded-full">
                        </div>

                        <!-- FOTO UTAMA -->
                        <div class="relative h-[420px] rounded-3xl overflow-hidden shadow-md">

                            <img
                                src="{{ asset('image/purple.jpg') }}"
                                alt="Foto Nazwa"
                                class="w-full h-full object-cover"
                            >

                        </div>

                        <!-- hiasan kecil -->
                        <div class="absolute -bottom-5 -right-5 w-24 h-24 bg-pink-200 rounded-full -z-0">
                        </div>

                    </div>


                    <!-- TEKS -->
                    <div>

                        <p class="text-purple-600 font-semibold text-lg mb-3">
                            Hello, I'm
                        </p>

                        <h2 class="text-5xl font-bold text-purple-800 mb-5">
                            Nazwa Dwi Nadia Putri
                        </h2>

                        <p class="text-purple-300 text-lg leading-relaxed mb-6">
                            Saya adalah siswa RPL yang sedang belajar
                            membuat website menggunakan HTML, CSS,
                            Tailwind CSS, dan Laravel.
                        </p>


                        <!-- SKILL -->
                        <div class="flex flex-wrap gap-3 mb-7">

                            <span class="bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium">
                                HTML
                            </span>

                            <span class="bg-pink-100 text-pink-700 px-4 py-2 rounded-full text-sm font-medium">
                                CSS
                            </span>

                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium">
                                Tailwind CSS
                            </span>

                            <span class="bg-orange-100 text-orange-700 px-4 py-2 rounded-full text-sm font-medium">
                                Laravel
                            </span>

                        </div>


                        <!-- TOMBOL -->
                        <div class="flex gap-4">

                            <a
                                href="/halaman-dua"
                                class="bg-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-purple-700 transition"
                            >
                                Lihat Project
                            </a>

                            <a
                                href="#about"
                                class="border-2 border-purple-600 text-purple-600 px-6 py-3 rounded-xl font-semibold hover:bg-purple-50 transition"
                            >
                                Tentang Saya
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ABOUT -->
    <section id="about" class="bg-white py-16">

        <div class="max-w-6xl mx-auto px-6">

            <div class="text-center mb-10">

                <p class="text-purple-600 font-semibold">
                    About Me
                </p>

                <h2 class="text-3xl font-bold text-purple-800 mt-2">
                    Sedikit Tentang Saya
                </h2>

            </div>


            <div class="grid md:grid-cols-3 gap-6">

                <!-- CARD 1 -->
                <div class="bg-purple-50 rounded-2xl p-6 text-center shadow-sm">

                    <div class="text-4xl mb-4">
                        💻
                    </div>

                    <h3 class="font-bold text-xl text-purple-800 mb-2">
                        Web Development
                    </h3>

                    <p class="text-gray-600">
                        Saya sedang mempelajari cara membuat
                        website menggunakan berbagai teknologi.
                    </p>

                </div>


                <!-- CARD 2 -->
                <div class="bg-pink-50 rounded-2xl p-6 text-center shadow-sm">

                    <div class="text-4xl mb-4">
                        📱
                    </div>

                    <h3 class="font-bold text-xl text-purple-800 mb-2">
                        Mobile
                    </h3>

                    <p class="text-gray-600">
                        Saya juga tertarik untuk mempelajari
                        pembuatan aplikasi mobile.
                    </p>

                </div>


                <!-- CARD 3 -->
                <div class="bg-blue-50 rounded-2xl p-6 text-center shadow-sm">

                    <div class="text-4xl mb-4">
                        ✨
                    </div>

                    <h3 class="font-bold text-xl text-purple-800 mb-2">
                        Learning
                    </h3>

                    <p class="text-gray-600">
                        Saya masih terus belajar dan mencoba
                        berbagai teknologi baru.
                    </p>

                </div>

            </div>

        </div>

    </section>

</body>
</html>