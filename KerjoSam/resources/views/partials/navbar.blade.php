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

                @if(!auth()->user()->isPerusahaan())
                <li class="hover:text-red-500 cursor-pointer">
                    <a href="{{ route('history') }}">History</a>
                </li>
                @endif

                <li class="hover:text-red-500 cursor-pointer">
                    <a href="{{ route('about') }}">About</a>
                </li>

                @if(auth()->user()->isPerusahaan() || auth()->user()->isAdmin())
                <li class="hover:text-red-500 cursor-pointer">
                    <a href="{{ route('jobs.index') }}">Tambah Lowongan</a>
                </li>
                @endif
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
                    @if(auth()->user()->isPerusahaan())
                    <a href="/profile/perusahaan" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50">
                        Profile
                    </a>
                    @else
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50">
                        Profile
                    </a>
                    @endif
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
        <div class="px-8 py-4 space-y-1">

            <a href="/dashboard"
                class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">
                Home
            </a>

            @if(!auth()->user()->isPerusahaan())
            <a href="{{ route('history') }}"
                class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">
                History
            </a>
            @endif

            <a href="{{ route('about') }}"
                class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">
                About
            </a>

            @if(auth()->user()->isPerusahaan() || auth()->user()->isAdmin())
            <a href="{{ route('jobs.index') }}"
                class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">
                Tambah Lowongan
            </a>
            @endif

            @if(auth()->user()->isPerusahaan())
            <a href="/profile/perusahaan"
                class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">
                Profile
            </a>
            @else
            <a href="/profile"
                class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:bg-gray-50 hover:text-red-500">
                Profile
            </a>
            @endif

        </div>
    </div>

</nav>

<script>
    function toggleDropdown() {
        document.getElementById('userDropdown').classList.toggle('hidden');
    }

    function toggleMobileMenu() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    }
</script>