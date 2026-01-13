<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History | KerjoSam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
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
    <!-- NAVBAR -->
    <nav class="w-full bg-white shadow-sm relative z-10">
        <div class="w-full px-8 md:px-16 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="/images/LogoWeb.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover"/>
            </div>
            <div class="flex items-center gap-6">
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

    <!-- CONTENT -->
    <div class="w-full px-8 md:px-16 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            History
        </h1>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <p class="text-gray-500 text-center py-8">No job applications yet.</p>
        </div>
    </div>

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
    </script>
</body>
</html>
