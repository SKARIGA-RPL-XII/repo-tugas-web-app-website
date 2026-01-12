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
<body class="bg-gray-50" x-data="{ open: false, mode: 'login' }" @open-login-modal.window="open = true; mode = 'login'">
    <!-- NAVBAR -->
    <nav class="w-full bg-white shadow-sm rounded-b-[50px] relative z-10">
        <div class="w-full px-8 md:px-16 py-4 flex items-center justify-between">
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
            <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-4 text-white relative">
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
            </div>

            <!-- Form Content -->
            <div class="p-6">
                <!-- LOGIN FORM -->
                <div x-show="mode === 'login'" x-transition:enter="transition-opacity duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="text-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Welcome Back</h2>
                        <p class="text-gray-600 text-sm mt-1">Sign in to your account</p>
                    </div>

                    <form class="space-y-4" method="POST" action="/login">
                        @csrf
                        <div class="space-y-1">
                            <label class="text-sm font-medium text-gray-700">Email Address</label>
                            <div class="relative">
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors"
                                    required
                                >
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="text-sm font-medium text-gray-700">Password</label>
                            <div class="relative">
                                <input
                                    type="password"
                                    name="password"
                                    id="loginPassword"
                                    placeholder="Enter your password"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10 pr-10 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors"
                                    required
                                >
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <button type="button" onclick="togglePassword('loginPassword', 'loginEyeIcon')" class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600">
                                    <svg id="loginEyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <span class="ml-2 text-gray-600">Remember me</span>
                            </label>
                            <a href="#" class="text-red-600 hover:text-red-700 font-medium">Forgot password?</a>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 rounded-lg font-medium hover:from-red-600 hover:to-red-700 transform hover:scale-[1.02] transition-all duration-200 shadow-lg"
                        >
                            Sign In
                        </button>
                    </form>
                </div>

                <!-- REGISTER FORM -->
                <div x-show="mode === 'register'" x-transition:enter="transition-opacity duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="text-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Create Account</h2>
                        <p class="text-gray-600 text-sm mt-1">Join us today</p>
                    </div>

                    <form class="space-y-4" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="space-y-1">
                            <label class="text-sm font-medium text-gray-700">Full Name</label>
                            <div class="relative">
                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Enter your full name"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors"
                                    required
                                >
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="text-sm font-medium text-gray-700">Email Address</label>
                            <div class="relative">
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors"
                                    required
                                >
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="text-sm font-medium text-gray-700">Password</label>
                            <div class="relative">
                                <input
                                    type="password"
                                    name="password"
                                    id="registerPassword"
                                    placeholder="Create a password"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10 pr-10 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors"
                                    required
                                >
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <button type="button" onclick="togglePassword('registerPassword', 'registerEyeIcon')" class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600">
                                    <svg id="registerEyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="text-sm font-medium text-gray-700">Confirm Password</label>
                            <div class="relative">
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="confirmPassword"
                                    placeholder="Confirm your password"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10 pr-10 focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors"
                                    required
                                >
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <button type="button" onclick="togglePassword('confirmPassword', 'confirmEyeIcon')" class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600">
                                    <svg id="confirmEyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="text-sm">
                            <label class="flex items-start">
                                <input type="checkbox" name="terms" class="rounded border-gray-300 text-red-600 focus:ring-red-500 mt-0.5" required>
                                <span class="ml-2 text-gray-600 leading-relaxed">
                                    I agree to the <a href="#" class="text-red-600 hover:text-red-700 font-medium">Terms of Service</a> and <a href="#" class="text-red-600 hover:text-red-700 font-medium">Privacy Policy</a>
                                </span>
                            </label>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 rounded-lg font-medium hover:from-red-600 hover:to-red-700 transform hover:scale-[1.02] transition-all duration-200 shadow-lg"
                        >
                            Create Account
                        </button>
                    </form>
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
        <div class="relative w-full px-8 md:px-16 py-24 text-white text-left">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Explore Opportunities <br /> and Learn
            </h1>
            <p class="mt-4 max-w-lg text-sm text-red-100">
                Browse job listings, tutorials, and career resources.
            </p>
        </div>

        <!-- Search + Categories floating di bawah banner (center) -->
        <div class="absolute left-1/2 -bottom-20 transform -translate-x-1/2 w-full px-8 md:px-16 flex flex-col items-center gap-4">
            <!-- Search Bar -->
            <div class="bg-white rounded-full flex items-center px-4 py-2 shadow-lg w-full max-w-7xl">
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
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between">
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
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all p-6 flex flex-col justify-between">
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

        // Auto open login modal if redirected from auth middleware
        document.addEventListener('DOMContentLoaded', function() {
            if (window.location.hash === '#login') {
                // Use Alpine.js to open modal
                window.dispatchEvent(new CustomEvent('open-login-modal'));
            }
        });

        // Toggle password visibility
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                `;
            } else {
                input.type = 'password';
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        }
    </script>
</body>
</html>
