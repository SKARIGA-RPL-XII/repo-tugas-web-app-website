<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About | KerjoSam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-about {
            background-image: url('{{ asset(' images/Background_4.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body class="bg-white overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->
    <nav class="w-full bg-white shadow-sm relative z-20">
        <div class="w-full px-8 md:px-16 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3"> <img src="/images/logo.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover" /> </div>
            <div class="flex items-center gap-6"> <!-- MENU KIRI -->
                <ul class="hidden md:flex gap-8 text-sm text-gray-600">
                    <li class="hover:text-red-500 cursor-pointer"> <a href="/dashboard">Home</a> </li>
                    <li class="hover:text-red-500 cursor-pointer"> <a href="#jobs">Jobs</a> </li>
                    <li class="hover:text-red-500 cursor-pointer"> <a href="{{ route('about') }}">About</a> </li>
                </ul> <!-- USER PROFILE -->
                <div class="relative"> <!-- Trigger --> <button onclick="toggleDropdown()" class="flex items-center gap-2 focus:outline-none">
                        <div class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center text-white text-sm font-semibold"> {{ strtoupper(substr(auth()->user()->name, 0, 1)) }} </div> <span class="text-sm text-gray-600"> {{ auth()->user()->name }} </span> <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button> <!-- Dropdown -->
                    <div id="userDropdown" class="absolute right-0 mt-3 w-40 bg-white rounded-xl shadow-lg border border-gray-100 hidden"> <a href="/profile" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50"> Profile </a>
                        <form method="POST" action="/logout"> @csrf <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-50"> Logout </button> </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ================= HERO / BACKGROUND ================= -->
    <section class="bg-about min-h-screen pt-32">
        <div class="max-w-7xl mx-auto px-6 md:px-16">
            <!-- TOP SECTION -->
            <div class="grid md:grid-cols-2 gap-16 items-center mb-28">

                <!-- LEFT TEXT -->
                <div>
                    <h1 class="text-5xl md:text-7xl font-black leading-none">
                        <span class="text-red-600">Kerjo</span>
                        <span class="text-orange-500">Sam</span>
                    </h1>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative">
                    <img
                        src="/images/Jawa.png"
                        class="rounded-3xl shadow-2xl object-cover aspect-video"
                        alt="Team Work">
                </div>
            </div>

            <!-- BOTTOM SECTION -->
            <div class="grid md:grid-cols-2 gap-20 items-center pb-32">

                <!-- LEFT DESCRIPTION -->
                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <p>
                        <span class="font-bold text-red-600">KerjoSam</span> adalah platform pencarian kerja yang berfokus
                        pada wilayah Malang dan sekirtarnya,yang bertujuan untuk mempertemukan pencari kerja dengan
                        perusahaan,UMKM,dan pelaku usaha lokal. Kami menyediakan informasi lowongan kerja terbaru mulai
                        dari pekerjaan full-time, part-time, hingga freelance dengan proses yang mudah dan cepat
                    </p>
                    <div class="mt-10">
                        <p class="text-xl text-gray-800">
                            Kerjo Bareng, Sukses Bareng
                        </p>
                    </div>
                </div>

                <!-- RIGHT ABOUT TEXT -->
                <div class="relative text-center md:text-right">
                    <h2 class="text-5xl md:text-7xl font-black leading-tight">
                        <div class="text-red-500">ABOUT</div>
                        <div>
                            <span class="text-red-600">Kerjo</span>
                            <span class="text-orange-500">Sam</span>
                        </div>
                    </h2>
            </div>
        </div>
    </section>

</body>

</html>