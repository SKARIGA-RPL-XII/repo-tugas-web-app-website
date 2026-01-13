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
            background-image: url('/images/about/Overlay1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .bg-about-section {
            background-image: url('/images/about/Overlay2.png');
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
                    <li class="hover:text-red-500 cursor-pointer">
                        <a href="/dashboard">Home</a>
                    </li>
                    <li class="hover:text-red-500 cursor-pointer">
                        <a href="#jobs">Jobs</a>
                    </li>
                    <li class="hover:text-red-500 cursor-pointer">
                        <a href="{{ route('about') }}">About</a>
                    </li>
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
    <section>
        <!-- TOP SECTION (WITH BG IMAGE) -->
        <div class="relative bg-about min-h-screen">
            <div class="relative grid md:grid-cols-2 gap-16 items-center min-h-screen px-8 md:px-16">
                <!-- LEFT IMAGE -->
                <div class="flex justify-center md:justify-start overflow-visible">
                    <img src="/images/about/Overlay3.png" alt="Logo" class="w-[420px] md:w-[600px] lg:w-[700px] aspect-square rounded-full object-contain"/>
                </div>
                <!-- RIGHT IMAGE -->
                <div class="flex justify-center md:justify-end overflow-visible">
                    <img src="/images/about/Overlay4.png" alt="Team Work" class="w-[420px] md:w-[640px] lg:w-[760px] object-contain"/>
                </div>
            </div>
        </div>

        <div class="relative bg-about-section py-20">
            <div class="w-full px-8 md:px-16">
                <!-- ABOUT TITLE -->
                <div class="w-full text-center mb-20 pt-16">
                    <h2 class="text-5xl md:text-7xl font-black leading-tight text-red-500">
                        ABOUT
                    </h2>
                </div>

                <!-- BOTTOM SECTION -->
                <div class="flex justify-center pb-16">
                    <div class="max-w-4xl text-center space-y-8">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            <span class="font-bold text-red-600">KerjoSam</span> adalah platform pencarian kerja yang berfokus
                            pada wilayah Malang dan sekitarnya, yang bertujuan untuk mempertemukan pencari kerja dengan
                            perusahaan, UMKM, dan pelaku usaha lokal. Kami menyediakan informasi lowongan kerja terbaru mulai
                            dari pekerjaan full-time, part-time, hingga freelance dengan proses yang mudah dan cepat.
                        </p>
                        <p class="text-2xl font-semibold text-gray-800">
                            Kerjo Bareng, Sukses Bareng
                        </p>
                    </div>
                </div>
<<<<<<< HEAD

                <!-- RIGHT ABOUT TEXT -->
                <div class="">
                    <h2 class="text-5xl md:text-7xl font-black leading-tight">
                        <div class="text-red-500">ABOUT</div>
                        <div class="flex items-center gap-3">
                            <img src="/images/logo.png" alt="Logo" class="w-200 h-200 md:w-300 md:h-300 rounded-full object-cover" />
                        </div>
                    </h2>
                </div>
            </div>
    </section>

</body>

</html>
=======
            </div>
        </div>
    </section>
</body>
</html>
>>>>>>> c007a7c447d44ce22e1333ee30b263d66ed7689a
