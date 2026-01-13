<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KerjoSam | Sistem Mencari Lowongan Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        .category-btn.active {
            background: white !important;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        .category-btn {
            cursor: pointer;
            pointer-events: auto;
            z-index: 10;
            position: relative;
        }
        /* Hide scrollbars */
        * {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        *::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Success Alert -->
    <div id="successAlert" class="fixed top-4 right-4 z-50 max-w-sm w-full bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg hidden">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span id="alertMessage" class="font-medium"></span>
            </div>
            <button onclick="hideAlert()" class="ml-4 text-white hover:text-gray-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
    <!-- NAVBAR -->
    <nav class="w-full bg-white shadow-sm relative z-10">
        <div class="w-full px-8 md:px-16 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="/images/LogoWeb.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover"/>
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
                <div class="relative hidden md:block">
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
                    <div id="userDropdown" class="absolute right-0 mt-3 w-40 bg-white rounded-xl shadow-lg border border-gray-100 hidden">
                        <a href="/profile" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50">
                            Profile
                        </a>
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-50">
                                Logout
                            </button>
                        </form>
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

    <section class="relative -mt-12 pb-20">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="/images/about/Overlay6.png" class="w-full h-full object-cover" alt="" />
            <div class="absolute inset-0 bg-gradient-to-r from-red-600/90 to-red-400/70"></div>
        </div>

        <!-- Content -->
        <div class="relative w-full px-8 md:px-16 py-24 text-white text-left">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Welcome back, {{ auth()->user()->name }}! <br /> Find Your Dream Job
            </h1>
            <p class="mt-4 max-w-lg text-sm text-red-100">
                Discover amazing opportunities and advance your career with us.
            </p>
        </div>

        <!-- Search + Categories -->
        <div class="absolute left-1/2 -bottom-32 md:-bottom-20 transform -translate-x-1/2 w-full px-8 md:px-16 flex flex-col items-center gap-4 z-40">
            <!-- Search Bar -->
            <div class="bg-white rounded-full flex items-center px-4 py-2 shadow-lg w-full max-w-7xl">
                <input type="text" id="searchInput" placeholder="Search jobs..." class="flex-1 outline-none text-base text-gray-700" onkeyup="searchJobs()"/>
                <button onclick="searchJobs()" class="bg-red-500 text-white w-12 h-12 rounded-full flex items-center justify-center" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                    </svg>
                </button>
            </div>

            <!-- Category Buttons -->
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="filterByCategory('all')" class="category-btn active px-4 py-2 bg-white backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">All</button>
                <button onclick="filterByCategory('ui-ux')" class="category-btn px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">UI/UX</button>
                <button onclick="filterByCategory('frontend')" class="category-btn px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">Frontend</button>
                <button onclick="filterByCategory('backend')" class="category-btn px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">Backend</button>
                <button onclick="filterByCategory('finance')" class="category-btn px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full text-sm font-medium text-gray-800 hover:bg-white hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">Finance</button>
            </div>
        </div>
    </section>

    <!-- JOB LIST SECTION -->
    <section class="relative pt-48 md:pt-36 pb-20">
        <!-- Overlay Left -->
        <img src="/images/about/Overlay5.png" alt="" class="absolute left-0 top-0 h-full object-cover opacity-40 pointer-events-none">
        <!-- Overlay Right -->
        <img src="/images/about/Overlay5.png" alt="" class="absolute right-0 top-0 h-full object-cover opacity-40 pointer-events-none scale-x-[-1]">
        <div class="relative z-10 w-full px-8 md:px-16">
            <!-- Section Title -->
            <div class="mb-12 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Latest Job Vacancies
                </h2>
                <p class="text-gray-500 text-sm mt-2">
                    Find jobs that match your skills and interests
                </p>
            </div>

            <!-- Job Cards -->
            <div id="jobCards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- Card 1 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="frontend" data-title="Frontend Developer" data-company="Tech Corp">
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
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Frontend Developer
                        </h3>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            We are looking for a Frontend Developer experienced in
                            HTML, CSS, JavaScript, and modern frameworks.
                        </p>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2">
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
                            href="{{ route('job.detail', 1) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition"
                        >
                            View Detail
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="ui-ux" data-title="UI/UX Designer" data-company="Digital Agency">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=Digital+Agency&background=3b82f6&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt=""
                            />
                            <div>
                                <h4 class="font-semibold text-gray-800">Digital Agency</h4>
                                <p class="text-xs text-gray-500">Bandung, Indonesia</p>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            UI/UX Designer
                        </h3>

                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            Looking for creative UI/UX Designer to join our team and create amazing user experiences.
                        </p>

                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full bg-purple-100 text-purple-600">
                                UI/UX
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                                Full Time
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">
                                On-site
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">
                            Rp 5 – 8 Juta
                        </span>
                        <a
                            href="{{ route('job.detail', 2) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition"
                        >
                            View Detail
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="backend" data-title="Backend Developer" data-company="StartupXYZ">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=StartupXYZ&background=10b981&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt=""
                            />
                            <div>
                                <h4 class="font-semibold text-gray-800">StartupXYZ</h4>
                                <p class="text-xs text-gray-500">Surabaya, Indonesia</p>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Backend Developer
                        </h3>

                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            Join our backend team to build scalable applications using modern technologies.
                        </p>

                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Backend
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                                Full Time
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Remote
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">
                            Rp 8 – 12 Juta
                        </span>
                        <a
                            href="{{ route('job.detail', 3) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition"
                        >
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

            <div id="jobCards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 my-12">
                <!-- Card 1 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="frontend" data-title="Frontend Developer" data-company="Tech Corp">
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
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Frontend Developer
                        </h3>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            We are looking for a Frontend Developer experienced in
                            HTML, CSS, JavaScript, and modern frameworks.
                        </p>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2">
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
                            href="{{ route('job.detail', 1) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition"
                        >
                            View Detail
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="ui-ux" data-title="UI/UX Designer" data-company="Digital Agency">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=Digital+Agency&background=3b82f6&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt=""
                            />
                            <div>
                                <h4 class="font-semibold text-gray-800">Digital Agency</h4>
                                <p class="text-xs text-gray-500">Bandung, Indonesia</p>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            UI/UX Designer
                        </h3>

                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            Looking for creative UI/UX Designer to join our team and create amazing user experiences.
                        </p>

                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full bg-purple-100 text-purple-600">
                                UI/UX
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                                Full Time
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">
                                On-site
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">
                            Rp 5 – 8 Juta
                        </span>
                        <a
                            href="{{ route('job.detail', 2) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition"
                        >
                            View Detail
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="backend" data-title="Backend Developer" data-company="StartupXYZ">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=StartupXYZ&background=10b981&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt=""
                            />
                            <div>
                                <h4 class="font-semibold text-gray-800">StartupXYZ</h4>
                                <p class="text-xs text-gray-500">Surabaya, Indonesia</p>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Backend Developer
                        </h3>

                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            Join our backend team to build scalable applications using modern technologies.
                        </p>

                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Backend
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                                Full Time
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Remote
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">
                            Rp 8 – 12 Juta
                        </span>
                        <a
                            href="{{ route('job.detail', 3) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition"
                        >
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job Cards -->
            <div id="jobCards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="frontend" data-title="Frontend Developer" data-company="Tech Corp">
                    <div>
                        <!-- Company -->
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=Tech+Corp&background=ef4444&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt="" />
                            <div>
                                <h4 class="font-semibold text-gray-800">Tech Corp</h4>
                                <p class="text-xs text-gray-500">Jakarta, Indonesia</p>
                            </div>
                        </div>

                        <!-- Job Title -->
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Frontend Developer
                        </h3>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            We are looking for a Frontend Developer experienced in
                            HTML, CSS, JavaScript, and modern frameworks.
                        </p>

                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2">
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
                            href="{{ route('job.detail', 1) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition">
                            View Detail
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="ui-ux" data-title="UI/UX Designer" data-company="Digital Agency">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=Digital+Agency&background=3b82f6&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt="" />
                            <div>
                                <h4 class="font-semibold text-gray-800">Digital Agency</h4>
                                <p class="text-xs text-gray-500">Bandung, Indonesia</p>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            UI/UX Designer
                        </h3>

                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            Looking for creative UI/UX Designer to join our team and create amazing user experiences.
                        </p>

                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full bg-purple-100 text-purple-600">
                                UI/UX
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                                Full Time
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">
                                On-site
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">
                            Rp 5 – 8 Juta
                        </span>
                        <a
                            href="{{ route('job.detail', 2) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition">
                            View Detail
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="job-card bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between" data-category="backend" data-title="Backend Developer" data-company="StartupXYZ">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <img
                                src="https://ui-avatars.com/api/?name=StartupXYZ&background=10b981&color=fff"
                                class="w-10 h-10 rounded-full"
                                alt="" />
                            <div>
                                <h4 class="font-semibold text-gray-800">StartupXYZ</h4>
                                <p class="text-xs text-gray-500">Surabaya, Indonesia</p>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-gray-900 mb-3">
                            Backend Developer
                        </h3>

                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            Join our backend team to build scalable applications using modern technologies.
                        </p>

                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Backend
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
                                Full Time
                            </span>
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Remote
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">
                            Rp 8 – 12 Juta
                        </span>
                        <a
                            href="{{ route('job.detail', 3) }}"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-600 transition">
                            View Detail
                        </a>
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
            document.getElementById('userDropdown').classList.toggle('hidden');
        }

        function toggleMobileMenu() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        }

        document.addEventListener('click', function (e) {
            const dropdown = document.getElementById('userDropdown');
            const mobileMenu = document.getElementById('mobileMenu');
            if (!e.target.closest('.relative')) {
                dropdown.classList.add('hidden');
            }
            if (!e.target.closest('button[onclick="toggleMobileMenu()"]') && !e.target.closest('#mobileMenu')) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Show success/error alerts
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                showAlert('{{ session('success') }}');
            @endif
        });

        // Show alert function
        function showAlert(message) {
            const alert = document.getElementById('successAlert');
            const messageEl = document.getElementById('alertMessage');
            messageEl.textContent = message;
            alert.classList.remove('hidden');

            setTimeout(() => {
                alert.classList.add('hidden');
            }, 5000);
        }

        function hideAlert() {
            document.getElementById('successAlert').classList.add('hidden');
        }

        // Search jobs function
        function searchJobs() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const jobCards = document.querySelectorAll('.job-card');

            jobCards.forEach(card => {
                const title = card.getAttribute('data-title')?.toLowerCase() || '';
                const company = card.getAttribute('data-company')?.toLowerCase() || '';

                if (searchTerm === '' || title.includes(searchTerm) || company.includes(searchTerm)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Filter by category function
        function filterByCategory(category) {
            const jobCards = document.querySelectorAll('.job-card');
            const categoryBtns = document.querySelectorAll('.category-btn');

            // Update active button
            categoryBtns.forEach(btn => {
                btn.classList.remove('active');
                const btnText = btn.textContent.toLowerCase().replace('/', '-');
                if (btnText === category || (category === 'all' && btn.textContent === 'All')) {
                    btn.classList.add('active');
                }
            });

            // Filter cards
            jobCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (category === 'all' || cardCategory === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>