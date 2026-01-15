<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job['title'] }} - {{ $job['company'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        *::-webkit-scrollbar {
            display: none;
        }
        .bg-about {
            background-image: url('/images/about/Overlay1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- NAVBAR -->
    <nav class="w-full bg-white shadow-sm relative z-10">
        <div class="w-full px-8 md:px-12 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="/images/LogoWeb.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover"/>
            </div>
            <div class="flex items-center gap-6">
                {{-- MENU KIRI --}}
                <ul class="hidden md:flex gap-8 text-sm text-gray-600">
                    @auth
                        <li class="hover:text-red-500 cursor-pointer">
                            <a href="/">Home</a>
                        </li>
                        <li class="hover:text-red-500 cursor-pointer">
                            <a href="{{ route('history') }}">History</a>
                        </li>
                        <li class="hover:text-red-500 cursor-pointer">
                            <a href="{{ route('about') }}">About</a>
                        </li>
                    @endauth
                </ul>

                {{-- MENU KANAN --}}
                @guest
                    <div class="flex items-center gap-4 text-sm">
                        <button @click="open = true; mode = 'login'" class="text-gray-600 hover:text-red-500" type="button">
                            Login
                        </button>

                        <button @click="open = true; mode = 'register'" class="px-4 py-2 bg-red-500 text-white rounded-full hover:bg-red-600" type="button">
                            Register
                        </button>
                    </div>
                @endguest

                @auth
                    <!-- JIKA SUDAH LOGIN -->
                    <div class="relative">
                        <!-- Trigger -->
                        <button onclick="toggleDropdown()" class="flex items-center gap-2 focus:outline-none">
                            <div class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center text-white text-sm font-semibold">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <span class="text-sm text-gray-600">
                                {{ auth()->user()->name }}
                            </span>
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div id="userDropdown"
                            class="absolute right-0 mt-3 w-40 bg-white rounded-xl shadow-lg border border-gray-100 hidden">
                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50">
                                Profile
                            </a>
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- JOB DETAIL SECTION -->
    <section class="relative bg-about min-h-screen overflow-hidden">
        <!-- FADE BOTTOM -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-b from-transparent to-white pointer-events-none"></div>
        <!-- SMOOTH FADE BOTTOM -->
        <div class="absolute top-[55vh] left-0 w-full h-32 bg-gradient-to-b from-transparent to-white pointer-events-none"></div>
        <div class="relative z-10 w-full px-8 md:px-16">
            <!-- HEADER CARD -->
            <div class="bg-white rounded-2xl shadow-md p-6 mb-10">
                <!-- BACK BUTTON -->
                <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 text-sm text-red-500 mb-4"> ← Kembali</a>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <!-- LEFT -->
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">
                            AX
                        </div>
                        <div>
                            <h1 class="text-xl md:text-2xl font-bold text-gray-900">
                                {{ $job['title'] }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ $job['company'] }}
                            </p>
                        </div>
                    </div>

                    <!-- RIGHT -->
                    <div class="flex flex-col items-end w-fit ml-auto gap-3">
                        <p class="text-lg font-bold text-gray-900">
                            6 – 7JT / BULAN
                        </p>
                        <span class="h-0.5 w-full bg-gray-900"></span>
                        <span class="px-3 py-0.5 text-xs rounded-full bg-red-100 text-red-500">
                            Part Time
                        </span>
                    </div>
                </div>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- DESKRIPSI -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <h2 class="font-bold text-gray-900 mb-3">Deskripsi</h2>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        {{ $job['description'] }}
                    </p>
                </div>

                <!-- ABOUT -->
                <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
                    <!-- Title -->
                    <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-4">
                        About Company
                    </h3>
                    <!-- Logo / Initial -->
                    <div class="w-16 h-16 mx-auto rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mb-3">
                        AX
                    </div>
                    <!-- Company Name -->
                    <h4 class="font-semibold text-gray-800">
                        {{ $job['company'] }}
                    </h4>
                    <!-- Divider -->
                    <span class="block w-10 h-0.5 bg-gray-300 mx-auto my-3"></span>
                    <!-- Short Description -->
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Perusahaan yang bergerak di bidang teknologi dan pengembangan produk digital.
                    </p>
                    <!-- Action -->
                    <button class="mt-5 px-5 py-2 bg-red-500 text-white text-sm rounded-full hover:bg-red-600 transition">
                        Kunjungi Profil
                    </button>
                </div>

                <!-- SHARE -->
                <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
                    <h3 class="font-bold mb-3">Share Job</h3>
                    <p class="text-sm text-gray-500 mb-4">
                        Klik tombol dibawah ini untuk copy link
                    </p>
                    <button class="px-6 py-2 bg-red-500 text-white rounded-full text-sm">
                        COPY LINK
                    </button>
                </div>

                <!-- KETENTUAN -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <h3 class="font-bold mb-3">Ketentuan</h3>
                    <ul class="text-sm text-gray-600 space-y-2 list-disc list-inside">
                        @foreach($job['requirements'] as $req)
                            <li>{{ $req }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- SEND CV -->
            <div class="mt-10 bg-white rounded-2xl shadow-md p-6 md:p-8">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <!-- LEFT -->
                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-2">
                            Kirim CV Kamu
                        </h2>
                        <p class="text-sm text-gray-600 max-w-md">
                            Tertarik dengan posisi ini? Kirim CV dan portofolio terbaikmu sekarang.
                        </p>
                    </div>

                    <!-- RIGHT -->
                    <div class="flex items-center gap-3">
                        <button class="px-6 py-3 text-sm rounded-full border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
                            Upload CV
                        </button>
                        <button class="px-7 py-3 text-sm rounded-full bg-red-500 text-white hover:bg-red-600 transition">
                            Send CV
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="relative overflow-hidden">
        <img src="/images/about/Overlay6.png" alt="" class="absolute inset-0 w-full h-full object-cover"/>
        <!-- Overlay merah biar teks kebaca -->
        <div class="absolute inset-0 bg-red-600/80"></div>
        <div class="relative z-10 w-full px-8 md:px-16 py-12 md:py-16 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-white text-center md:text-left">
                <h2 class="text-2xl md:text-3xl font-bold mb-2">
                    Kita ada Untuk Kalian
                </h2>
                <p class="text-white/90">
                    Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi
                </p>
            </div>

            <a href="/dashboard" class="bg-white text-red-600 font-semibold px-8 py-4 rounded-2xl hover:bg-red-50 transition">
                Cari Kerja !
            </a>
        </div>
    </section>

    <footer class="bg-white border-t">
        <div class="w-full px-4 md:px-8 lg:px-16 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo -->
                <div class="md:col-span-1">
                    <img src="/images/about/Overlay3.png" alt="KerjoSam Logo" class="h-20 w-auto mb-4">
                </div>
                <!-- Link -->
                <div>
                    <h3 class="font-semibold mb-4 text-gray-800">Navigasi</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="/dashboard" class="hover:text-red-500 transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-red-500 transition">About Us</a></li>
                        <li><a href="{{ route('history') }}" class="hover:text-red-500 transition">History</a></li>
                    </ul>
                </div>
                <!-- Other -->
                <div>
                    <h3 class="font-semibold mb-4 text-gray-800">Other</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="#" class="hover:text-red-500 transition">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-red-500 transition">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h3 class="font-semibold mb-4 text-gray-800">Kontak Kami</h3>
                    <div class="space-y-3 text-sm text-gray-600">
                        <!-- Phone -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <span>+62 822-3456-7890</span>
                        </div>
                        <!-- Email -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <span>kerjosam@kerjo.id</span>
                        </div>
                        <!-- Website -->
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 0c2.5 2.5 4 6 4 10s-1.5 7.5-4 10m0-20C9.5 4.5 8 8 8 12s1.5 7.5 4 10" />
                                </svg>
                            </div>
                            <span>kerjosam.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('userDropdown');
            const button = event.target.closest('button[onclick="toggleDropdown()"]');

            if (!button && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
