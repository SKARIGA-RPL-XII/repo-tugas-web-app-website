<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar & Banner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-50" x-data="{ open: false, mode: 'login' }">
    <!-- NAVBAR -->
    <nav class="w-full bg-white shadow-sm rounded-b-[50px] relative z-10">
        <div class="w-full px-8 md:px-12 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="/images/logo.png" alt="Logo" class="w-12 h-12 md:w-10 md:h-10 rounded-full object-cover"/>
            </div>

            <div class="flex items-center gap-6">
                {{-- MENU KIRI --}}
                <ul class="hidden md:flex gap-8 text-sm text-gray-600">
                    @auth
                        <li class="hover:text-red-500 cursor-pointer">
                            <a href="/">Home</a>
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
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
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

    <!-- Modal Overlay -->
    <div
        x-show="open"
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        x-cloak
    >
        <!-- Background Overlay -->
        <div
            class="absolute inset-0 bg-black/60 backdrop-blur-sm"
            @click="open = false"
            x-transition:enter="transition-opacity duration-300 ease-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-200 ease-in"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        ></div>

        <!-- Modal Panel -->
        <div
            class="relative bg-white rounded-2xl shadow-2xl w-full max-w-md mx-auto overflow-hidden"
            x-transition:enter="transform transition duration-300 ease-out"
            x-transition:enter-start="scale-95 opacity-0"
            x-transition:enter-end="scale-100 opacity-100"
            x-transition:leave="transform transition duration-200 ease-in"
            x-transition:leave-start="scale-100 opacity-100"
            x-transition:leave-end="scale-95 opacity-0"
        >
            <!-- Header -->
            <!-- <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-4 text-white relative">
                <button
                    class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors"
                    @click="open = false"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="flex space-x-1">
                    <button
                        @click="mode = 'login'"
                        :class="mode === 'login' ? 'text-white border-b-2 border-white' : 'text-white/70 hover:text-white'"
                        class="pb-2 px-1 font-medium transition-colors"
                    >
                        Login
                    </button>
                    <span class="text-white/50 px-2">|</span>
                    <button
                        @click="mode = 'register'"
                        :class="mode === 'register' ? 'text-white border-b-2 border-white' : 'text-white/70 hover:text-white'"
                        class="pb-2 px-1 font-medium transition-colors"
                    >
                        Register
                    </button>
                </div>
            </div> -->

            <!-- Form Content -->
            <div class="p-6">
           <!-- LOGIN FORM -->
<div x-show="mode === 'login'" 
    x-transition:enter="transition-opacity duration-200" 
    x-transition:enter-start="opacity-0" 
    x-transition:enter-end="opacity-100"
    x-data="{ showPass: false }">

    <div class="text-center mb-6">
        <h2 class="text-3xl font-extrabold text-gray-900 tracking-wide">LOGIN</h2>
    </div>

    <form class="space-y-5" method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- NAMA -->
        <div>
            <label class="text-sm font-semibold text-gray-700">Nama*</label>
            <input 
                type="text" 
                name="name"
                placeholder="Masukkan nama"
                class="w-full mt-1 bg-gray-200/70 rounded-full px-5 py-3 outline-none border border-gray-300 focus:ring-red-500 focus:border-red-500"
                required
            >
        </div>

        <!-- PASSWORD -->
        <div x-data="{ show: false }">
            <label class="text-sm font-semibold text-gray-700">Password*</label>
            <div class="relative">
                <input 
                    :type="show ? 'text' : 'password'"
                    name="password"
                    placeholder="Masukkan password"
                    class="w-full mt-1 bg-gray-200/70 rounded-full px-5 py-3 outline-none border border-gray-300 focus:ring-red-500 focus:border-red-500 pr-12"
                    required
                >

                <!-- ICON EYE -->
                <span 
                    @click="show = !show"
                    class="absolute right-5 top-1/2 -translate-y-1/2 text-gray-600 cursor-pointer text-lg select-none"
                >
                    <span x-show="!show">👁️</span>
                    <span x-show="show">🙈</span>
                </span>
            </div>
        </div>

        <!-- BUTTON -->
        <button
            type="submit"
            class="w-full rounded-full bg-gradient-to-r from-red-500 to-orange-400 text-white py-3 text-xl font-bold shadow-md hover:scale-[1.02] transition duration-200"
        >
            MASUK
        </button>

        <!-- FOOTER -->
        <p class="text-center text-sm text-gray-600 mt-2">
            Belum punya akun?
            <span @click="mode='register'" class="text-red-600 font-bold cursor-pointer">Register</span>
        </p>
    </form>
</div>


          <!-- REGISTER FORM (SCROLL) -->
<div x-show="mode === 'register'" 
     x-transition:enter="transition-opacity duration-200"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100">

    <!-- CONTAINER SCROLL -->
    <div class="h-screen overflow-y-auto pb-10 px-1"
         x-data="{ showPass: false }">

        <!-- HEADER -->
        <div class="text-center mb-6 mt-3">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-wide border-b-2 border-gray-400 inline-block pb-1">
                REGISTRASI
            </h2>
        </div>

        <form class="space-y-5" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NAMA -->
            <div>
                <label class="text-sm font-semibold text-gray-700">Nama<span class="text-red-500">*</span></label>
                <input 
                    type="text"
                    name="name"
                    placeholder="Masukkan nama"
                    class="w-full mt-1 bg-[#E6E6E6] text-gray-800 rounded-full px-5 py-3 outline-none"
                    required
                >
            </div>

            <!-- EMAIL -->
            <div>
                <label class="text-sm font-semibold text-gray-700">Email<span class="text-red-500">*</span></label>
                <input 
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    class="w-full mt-1 bg-[#E6E6E6] text-gray-800 rounded-full px-5 py-3 outline-none"
                    required
                >
            </div>

            <!-- NOMOR HP -->
            <div>
                <label class="text-sm font-semibold text-gray-700">Nomor Handphone<span class="text-red-500">*</span></label>
                <input 
                    type="number"
                    name="phone"
                    placeholder="Masukkan nomor hp"
                    class="w-full mt-1 bg-[#E6E6E6] text-gray-800 rounded-full px-5 py-3 outline-none"
                    required
                >
            </div>

            <!-- PASSWORD -->
            <div x-data="{ show: false }">
                <label class="text-sm font-semibold text-gray-700">Password<span class="text-red-500">*</span></label>

                <div class="relative">
                    <input 
                        :type="show ? 'text' : 'password'"
                        name="password"
                        placeholder="Masukkan password"
                        class="w-full mt-1 bg-[#E6E6E6] text-gray-800 rounded-full px-5 py-3 outline-none pr-10"
                        required
                    >

                    <!-- ICON -->
                    <span 
                        @click="show = !show"
                        class="absolute right-5 top-4 text-gray-500 cursor-pointer"
                    >
                        <span x-show="!show">👁️</span>
                        <span x-show="show">🙈</span>
                    </span>
                </div>
            </div>

            <!-- CHECKBOX -->
            <div class="flex items-center justify-start gap-6 text-sm text-gray-700 pt-1">
                <label class="flex items-center gap-1">
                    <input type="checkbox" name="role_lowongan" value="lowongan" class="accent-red-500">
                    Cari Lowongan
                </label>

                <label class="flex items-center gap-1">
                    <input type="checkbox" name="role_pekerja" value="pekerja" class="accent-red-500">
                    Cari Pekerja
                </label>
            </div>

            <!-- BUTTON -->
            <button
                type="submit"
                class="w-full rounded-full bg-gradient-to-r from-red-600 to-yellow-400 text-white py-3 text-xl font-extrabold shadow-md hover:scale-[1.02] transition duration-200"
            >
                DAFTAR
            </button>

            <!-- FOOTER -->
            <p class="text-center text-sm text-gray-700 mt-1">
                Sudah Punya Akun?
                <span @click="mode='login'" class="text-red-600 font-semibold cursor-pointer">Login</span>
            </p>
        </form>
    </div>
</div>



            </div>
        </div>
    </div>

    <section class="relative -mt-12 pb-20">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d" class="w-full h-full object-cover" alt="" />
            <div class="absolute inset-0 bg-gradient-to-r from-red-600/90 to-red-400/70"></div>
        </div>

        <!-- Content (judul & deskripsi) -->
        <div class="relative w-full px-8 md:px-12 py-24 text-white text-left">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Explore Opportunities <br /> and Learn
            </h1>
            <p class="mt-4 max-w-lg text-sm text-red-100">
                Browse job listings, tutorials, and career resources.
            </p>
        </div>

        <!-- Search + Categories floating di bawah banner (center) -->
        <div class="absolute left-1/2 -bottom-20 transform -translate-x-1/2 w-full max-w-7xl px-8 md:px-12 flex flex-col items-center gap-4">
            <!-- Search Bar -->
            <div class="bg-white rounded-full flex items-center px-4 py-2 shadow-lg w-full max-w-8xl">
                <input type="text" placeholder="Search" class="flex-1 outline-none text-base text-gray-700"/>
                <button class="bg-red-500 text-white w-12 h-12 rounded-full flex items-center justify-center" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z"/>
                    </svg>
                </button>
            </div>

            <!-- Category Buttons -->
            <div class="flex flex-wrap justify-center gap-3">
                <button class="px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">UI/UX</button>
                <button class="px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">Frontend</button>
                <button class="px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">Backend</button>
                <button class="px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">Finance</button>
            </div>
        </div>
    </section>

    <!-- JOB LIST SECTION -->
    <section class="relative pt-36 pb-20">
        <div class="w-full max-w-7xl mx-auto px-8 md:px-12">

            <!-- Section Title -->
            <div class="mb-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Latest Job Vacancies
                </h2>
                <p class="text-gray-500 text-sm mt-2">
                    Find jobs that match your skills and interests
                </p>
            </div>

            <!-- Job Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between">
                    <div>
                        <!-- Company -->
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=Tech+Corp&background=ef4444&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt=""
                            />
                            <div>
                                <h4 class="font-semibold text-gray-800">Tech Corp</h4>
                                <p class="text-xs text-gray-500">Jakarta, Indonesia</p>
                            </div>
                        </div>

                        <!-- Job Title -->
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">
                            Frontend Developer
                        </h3>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 line-clamp-3">
                            We are looking for a Frontend Developer experienced in
                            HTML, CSS, JavaScript, and modern frameworks.
                        </p>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-600">
                                Frontend
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                                Full Time
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Remote
                            </span>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">
                            Rp 6 – 10 Juta
                        </span>
                        <a
                            href="#"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition"
                        >
                            View Detail
                        </a>
                    </div>
                </div>

                <!-- Copy card ini untuk data lain -->

            </div>
        </div>
    </section>

    <script>
        function toggleDropdown() {
            document.getElementById('userDropdown').classList.toggle('hidden');
        }

        document.addEventListener('click', function (e) {
            const dropdown = document.getElementById('userDropdown');
            if (!e.target.closest('.relative')) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
