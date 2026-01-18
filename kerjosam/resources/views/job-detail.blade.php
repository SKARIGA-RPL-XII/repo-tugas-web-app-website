<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer - PT Abang Xpress</title>
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

<body class="bg-gray-50 text-gray-800 antialiased">
<!-- NAVBAR (TETAP) -->
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

<!-- MAIN -->
<section class="relative bg-about min-h-screen overflow-hidden">
    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 py-10 sm:py-12 space-y-10">

        <!-- HEADER CARD -->
        <div class="bg-white border-4 border-white rounded-3xl p-6 sm:p-8 shadow-lg
                    flex flex-col md:flex-row items-center gap-4 md:gap-6
                    text-center md:text-left">
            <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-blue-600 text-white
                        flex items-center justify-center text-xl sm:text-2xl font-bold">
                AX
            </div>
            <div>
                <h1 class="text-2xl sm:text-3xl font-extrabold">WEB DEVELOPER</h1>
                <p class="text-gray-500 mt-1">PT ABANG XPRESS</p>
            </div>
        </div>

        <!-- DESKRIPSI -->
        <div class="bg-white border-4 border-white rounded-3xl p-6 sm:p-10
                    text-center shadow-lg">
            <h2 class="text-lg sm:text-xl font-bold mb-4 border-b-2 border-white inline-block px-6 pb-1">
                DESKRIPSI
            </h2>
            <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto mt-4 text-sm sm:text-base">
                Kami mencari Web Developer yang kreatif dan teknis untuk membangun serta
                memelihara situs web yang responsif, efisien, dan memiliki performa tinggi.
            </p>
        </div>

        <!-- KETENTUAN -->
        <div class="bg-white border-4 border-white rounded-3xl p-6 sm:p-10 shadow-lg">
            <h2 class="text-lg sm:text-xl font-bold mb-6 text-center">KETENTUAN</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-3 max-w-xl mx-auto text-sm sm:text-base">
                <li>Dapat bekerja dalam tim</li>
                <li>Memiliki Keahlian di bidang Web Developer</li>
                <li>Memiliki Pengalaman</li>
            </ul>
        </div>

        <!-- ACTION -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10">

            <!-- AJUKAN CV -->
            <div class="bg-white border-4 border-white rounded-3xl p-6 sm:p-8
                        flex flex-col items-center gap-6 shadow-lg">
                <div id="uploadArea"
                     class="w-full h-36 sm:h-40 border-2 border-dashed border-gray-300
                            rounded-xl flex flex-col items-center justify-center
                            text-gray-400 cursor-pointer hover:border-gray-400 transition"
                     onclick="document.getElementById('fileInput').click()">
                    <span id="uploadText" class="text-sm sm:text-base text-center">
                        Upload File CV (PDF, DOC, DOCX)
                    </span>
                </div>
                <input type="file" id="fileInput" accept=".pdf,.doc,.docx" class="hidden">
                <button class="w-full py-3 rounded-full bg-yellow-400 font-bold text-lg hover:bg-yellow-500 transition">
                    AJUKAN CV
                </button>
            </div>

            <!-- SHARE -->
            <div class="bg-white border-4 border-white rounded-3xl p-6 sm:p-8
                        text-center flex flex-col justify-center shadow-lg">
                <h3 class="text-lg sm:text-xl font-extrabold mb-3">AYO SUKSES!</h3>
                <p class="text-gray-600 mb-6 text-sm sm:text-base">
                    Bagikan Pekerjaan Ini<br>
                    Dengan Orang Lain, Ayo<br>
                    Sukses Bareng!
                </p>
                <button class="mx-auto px-8 py-3 bg-red-500 text-white rounded-full hover:bg-red-600">
                    SALIN TAUTAN
                </button>
            </div>

        </div>

        <!-- BACK -->
        <a href="{{ url()->previous() }}"
           class="inline-flex items-center gap-2 px-6 py-3 bg-red-500 text-white rounded-xl hover:bg-red-600">
            ← KEMBALI
        </a>

    </div>
</section>

<!-- CTA (TETAP) -->
<section class="relative overflow-hidden">
    <img src="/images/about/Overlay6.png" alt="" class="absolute inset-0 w-full h-full object-cover"/>
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-red-600/40 to-transparent"></div>
    <div class="relative z-10 w-full px-6 md:px-12 py-8 md:py-10 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="text-white text-center md:text-left">
            <h2 class="text-2xl md:text-3xl font-bold mb-2">Kita ada Untuk Kalian</h2>
            <p class="text-white/90">Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi</p>
        </div>
        <a href="/dashboard" class="bg-white text-red-600 font-semibold px-8 py-4 rounded-2xl hover:bg-red-50 transition">
            Cari Kerja !
        </a>
    </div>
</section>

<!-- FOOTER (SAMA SEPERTI SEBELUMNYA) -->
<footer class="bg-white border-t">
    <div class="w-full px-4 md:px-8 lg:px-16 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <img src="/images/about/Overlay3.png" class="h-20 mb-4">
            </div>

            <div>
                <h3 class="font-semibold mb-4">Navigasi</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="/dashboard" class="hover:text-red-500">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-red-500">About Us</a></li>
                    <li><a href="{{ route('history') }}" class="hover:text-red-500">History</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Other</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="#" class="hover:text-red-500">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:text-red-500">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-4">Kontak Kami</h3>
                <p class="text-sm text-gray-600">kerjosam@kerjo.id</p>
                <p class="text-sm text-gray-600">+62 822-3456-7890</p>
            </div>
        </div>
    </div>
</footer>

</body>

<script>
    let selectedFile = null;

    function handleFileSelect(event) {
        const file = event.target.files[0];
        if (file) {
            selectedFile = file;
            const uploadText = document.getElementById('uploadText');
            const uploadArea = document.getElementById('uploadArea');
            
            uploadText.textContent = `File terpilih: ${file.name}`;
            uploadArea.classList.remove('border-gray-300');
            uploadArea.classList.add('border-green-400', 'bg-green-50');
        }
    }

    function submitCV() {
        if (!selectedFile) {
            alert('Silakan pilih file CV terlebih dahulu!');
            return;
        }
        
        // Simulasi upload - bisa diganti dengan AJAX request ke server
        alert(`CV ${selectedFile.name} berhasil diajukan!`);
        
        // Reset form
        selectedFile = null;
        document.getElementById('fileInput').value = '';
        document.getElementById('uploadText').textContent = 'Upload File CV (PDF, DOC, DOCX)';
        const uploadArea = document.getElementById('uploadArea');
        uploadArea.classList.remove('border-green-400', 'bg-green-50');
        uploadArea.classList.add('border-gray-300');
    }

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

</html>
