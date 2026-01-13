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

                <!-- USER PROFILE -->
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
    </nav>

    <section class="relative -mt-12 pb-20">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d" class="w-full h-full object-cover" alt="" />
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
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z"/>
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
        <div class="w-full px-8 md:px-16">
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
