<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Perusahaan - KerjoSam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bg-batik {
            background-image: url("{{ asset('images/LogoB.png') }}");
            background-size: 300px;
            background-repeat: repeat;
            background-color: #fffafa;
        }

        .card-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .banner-jawa-overlay {
            background-image: url("{{ asset('images/Jawa.png') }}");
            background-color: #D97C7C;
            background-blend-mode: multiply;
            background-size: cover;
            background-position: center 15%;
            position: relative;
        }

        /* Transisi halus untuk menu mobile */
        #mobile-menu {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-white">

    <nav class="w-full bg-white shadow-sm relative z-20">
        <div class="w-full px-8 md:px-16 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="/images/LogoWeb.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover" />
            </div>
            <div class="flex items-center gap-6">
                <!-- MENU KIRI -->
                <ul class="hidden md:flex gap-8 text-sm text-gray-600">
                    <li class="hover:text-red-500 cursor-pointer">
                        <a href="/dashboard">Home</a>
                    </li>
                    <li class="hover:text-red-500 cursor-pointer">
                        <a href="{{ route('history') }}">History</a>
                    </li>
                    <li class="hover:text-red-500 cursor-pointer">
                        <a href="{{ route('about') }}">About</a>
                    </li>
                </ul>

                <!-- MOBILE MENU BUTTON -->
                <button onclick="toggleMobileMenu()" class="md:hidden p-2">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- USER PROFILE (DESKTOP) -->
                <div class="relative hidden md:block"> <!-- Trigger --> <button onclick="toggleDropdown()" class="flex items-center gap-2 focus:outline-none">
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

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="md:hidden bg-white border-t border-gray-100 hidden">
            <div class="px-8 py-4">
                <!-- User Info -->
                <div class="flex items-center gap-3 pb-4 border-b border-gray-100">
                    <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center text-white text-sm font-semibold">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="py-4 space-y-1">
                    <a href="/dashboard" class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">Home</a>
                    <a href="{{ route('history') }}" class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">History</a>
                    <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">About</a>
                    <a href="/profile" class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">Profile</a>
                </div>

                <!-- Logout -->
                <div class="pt-2 border-t border-gray-100">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="w-full text-left px-3 py-2 rounded-lg text-sm text-red-500 hover:bg-red-50">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main class="bg-batik min-h-screen py-8 md:py-12">
        <div class="max-w-5xl mx-auto px-4 md:px-6 space-y-12">

            <div class="bg-white rounded-[2rem] p-8 md:p-10 card-shadow border border-gray-50 flex flex-col md:flex-row items-center gap-6 md:gap-12">
                <div class="w-28 h-28 md:w-32 md:h-32 rounded-full bg-[#0033A0] flex items-center justify-center text-white text-4xl md:text-5xl font-black">
                    AX
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 text-center md:text-left">PT ABANG SPX</h1>
            </div>

            <div class="bg-white rounded-[2rem] p-8 md:p-12 card-shadow border border-gray-50 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4 uppercase tracking-widest">Deskripsi</h2>
                <div class="w-32 h-1 bg-gray-800 mx-auto mb-8"></div>
                <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-3xl mx-auto">
                    Kami mencari Web Developer yang kreatif dan teknis untuk membangun serta memelihara situs web yang responsif, efisien, dan memiliki performa tinggi.
                </p>
            </div>

            <div class="space-y-6">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 uppercase tracking-widest">Lowongan Pekerjaan</h2>
                    <div class="w-48 h-1 bg-gray-800 mx-auto mb-8"></div>
                </div>

                <div class="bg-white rounded-2xl md:rounded-[1.5rem] p-4 md:p-6 card-shadow border border-gray-50 flex items-center justify-between hover:scale-[1.01] transition-transform">
                    <span class="text-base md:text-xl font-bold text-gray-800 ml-2 md:ml-6">Data Scientist</span>
                    <button class="bg-[#E14F4F] text-white px-6 md:px-10 py-2 md:py-3 rounded-xl font-bold text-sm md:text-base hover:bg-red-700 shadow-md">VIEW</button>
                </div>

                <div class="bg-white rounded-2xl md:rounded-[1.5rem] p-4 md:p-6 card-shadow border border-gray-50 flex items-center justify-between hover:scale-[1.01] transition-transform">
                    <span class="text-base md:text-xl font-bold text-gray-800 ml-2 md:ml-6">Game Dev</span>
                    <button class="bg-[#E14F4F] text-white px-6 md:px-10 py-2 md:py-3 rounded-xl font-bold text-sm md:text-base hover:bg-red-700 shadow-md">VIEW</button>
                </div>

                <div class="bg-white rounded-2xl md:rounded-[1.5rem] p-4 md:p-6 card-shadow border border-gray-50 flex items-center justify-between hover:scale-[1.01] transition-transform">
                    <span class="text-base md:text-xl font-bold text-gray-800 ml-2 md:ml-6">Game Design</span>
                    <button class="bg-[#E14F4F] text-white px-6 md:px-10 py-2 md:py-3 rounded-xl font-bold text-sm md:text-base hover:bg-red-700 shadow-md">VIEW</button>
                </div>
            </div>
        </div>
    </main>

    <!-- CTA SECTION -->
    <section class="relative overflow-hidden">
        <img src="/images/about/Overlay6.png" alt="" class="absolute inset-0 w-full h-full object-cover object-[50%_15%]" />
        <!-- Overlay merah biar teks kebaca -->
        <div class="absolute inset-0 bg-gradient-to-r  from-red-600/50  via-red-600/30  to-white">
        </div>
        <div class="relative z-10 w-full px-6 md:px-12 py-8 md:py-10 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-white text-center md:text-left">
                <h2 class="text-2xl md:text-3xl font-bold mb-2">
                    Kita ada Untuk Kalian
                </h2>
                <p class="text-white/90">
                    Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi
                </p>
            </div>

            <a href="/dashboard" class="bg-[#CC1E1E] text-white font-semibold px-8 py-4 rounded-2xl border-2 border-transparent hover:bg-white hover:border-[#CC1E1E] hover:text-[#CC1E1E] transition-all duration-300">
                Cari Kerja !
            </a>
        </div>
    </section>

    <footer class="bg-white border-t">
        <div class="w-full px-4 md:px-8 lg:px-16 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo -->
                <div class="md:col-span-1 flex flex-col items-start">
                    <img
                        src="/images/WhatsApp-Image-2026-01-06-at-22.57.16-7.png"
                        alt="KerjoSam Logo"
                        class="w-full max-w-[240px] h-auto object-contain mb-3" />

                    <p class="text-base md:text-lg font-semibold">
                        <span class="text-[#FD721D]">Kerjo Bareng,</span>
                        <span class="text-[#CC0000]"> Sukses Bareng</span>
                    </p>
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
            document.getElementById('userDropdown').classList.toggle('hidden');
        }

        function toggleMobileMenu() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        }

        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('userDropdown');
            const mobileMenu = document.getElementById('mobileMenu');
            if (!e.target.closest('.relative')) {
                dropdown.classList.add('hidden');
            }
            if (!e.target.closest('button[onclick="toggleMobileMenu()"]') && !e.target.closest('#mobileMenu')) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>

</body>

</html>