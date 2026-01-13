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
    </style>
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

    <section class="relative -mt-12 pb-20">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="/images/about/Overlay6.png" class="w-full h-full object-cover" alt="" />
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
    </section>

    <!-- JOB DETAIL SECTION -->
    <section class="py-12">
        <div class="w-full max-w-4xl mx-auto px-6 md:px-8">

            <!-- Job Header -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-start justify-between mb-6">
                    <div class="flex items-center gap-4">
                        <img
                            src="https://ui-avatars.com/api/?name={{ urlencode($job['company']) }}&background=ef4444&color=fff"
                            class="w-16 h-16 rounded-full"
                            alt="{{ $job['company'] }}"
                        />
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">{{ $job['title'] }}</h1>
                            <div class="flex items-center gap-4 text-gray-600">
                                <span class="font-medium">{{ $job['company'] }}</span>
                                <span>•</span>
                                <span>{{ $job['location'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <div class="text-2xl font-bold text-red-600 mb-2">{{ $job['salary'] }}</div>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-600">{{ $job['category'] }}</span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">{{ $job['type'] }}</span>
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">{{ $job['remote'] }}</span>
                        </div>
                    </div>
                </div>

                <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 rounded-lg font-medium hover:from-red-600 hover:to-red-700 transition-all">
                    Apply Now
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Job Description -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Job Description</h2>
                        <p class="text-gray-600 leading-relaxed">{{ $job['description'] }}</p>
                    </div>

                    <!-- Requirements -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Requirements</h2>
                        <ul class="space-y-3">
                            @foreach($job['requirements'] as $requirement)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">{{ $requirement }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Responsibilities -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Responsibilities</h2>
                        <ul class="space-y-3">
                            @foreach($job['responsibilities'] as $responsibility)
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-blue-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600">{{ $responsibility }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">

                    <!-- Company Info -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">About Company</h3>
                        <div class="text-center mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name={{ urlencode($job['company']) }}&background=ef4444&color=fff"
                                class="w-20 h-20 rounded-full mx-auto mb-3"
                                alt="{{ $job['company'] }}"
                            />
                            <h4 class="font-semibold text-gray-800">{{ $job['company'] }}</h4>
                            <p class="text-sm text-gray-500">Technology Company</p>
                        </div>
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-500">Industry:</span>
                                <span class="text-gray-700">Technology</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500">Company Size:</span>
                                <span class="text-gray-700">50-200 employees</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500">Founded:</span>
                                <span class="text-gray-700">2015</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Apply -->
                    <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-2xl p-6 text-white">
                        <h3 class="text-lg font-bold mb-3">Quick Apply</h3>
                        <p class="text-red-100 text-sm mb-4">Don't miss this opportunity! Apply now and get a chance to join our amazing team.</p>
                        <button class="w-full bg-white text-red-600 py-2 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                            Apply Now
                        </button>
                    </div>

                    <!-- Share Job -->
                    <div class="bg-white rounded-2xl shadow-sm p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Share this Job</h3>
                        <div class="flex gap-3">
                            <button class="flex-1 bg-blue-500 text-white py-2 rounded-lg text-sm hover:bg-blue-600 transition-colors">
                                Facebook
                            </button>
                            <button class="flex-1 bg-blue-400 text-white py-2 rounded-lg text-sm hover:bg-blue-500 transition-colors">
                                Twitter
                            </button>
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg text-sm hover:bg-blue-700 transition-colors">
                                LinkedIn
                            </button>
                        </div>
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
</body>
</html>
