<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Perusahaan - KerjoSam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
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

    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 md:px-6 h-20 flex justify-between items-center">
            <img src="{{ asset('images/kerjosam.png') }}" class="h-10" alt="Logo">

            <div class="hidden md:flex items-center space-x-10 font-medium text-gray-700">
                <a href="#" class="hover:text-orange-500">Home</a>
                <a href="/about" class="hover:text-orange-500">About us</a>
                <a href="#" class="hover:text-orange-500">History</a>
            </div>

            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-gray-300"></div>
                    <span class="hidden sm:inline font-semibold text-gray-700">User</span>
                </div>
                
                <button id="hamburger-btn" class="md:hidden p-2 text-gray-600 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-100 px-6 py-4 space-y-4 shadow-inner">
            <a href="#" class="block text-gray-700 font-semibold hover:text-orange-500">Home</a>
            <a href="/about" class="block text-gray-700 font-semibold hover:text-orange-500">About us</a>
            <a href="#" class="block text-gray-700 font-semibold hover:text-orange-500 border-b pb-2">History</a>
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

            <div class="mt-20 max-w-5xl mx-auto">
                <div class="banner-jawa-overlay rounded-3xl overflow-hidden flex flex-col md:flex-row items-center p-8 md:p-14 text-center md:text-left">
                    <div class="flex-1 text-white z-10">
                        <h2 class="text-3xl md:text-5xl font-extrabold mb-3">Kita ada Untuk Kalian</h2>
                        <p class="text-lg opacity-90">Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi</p>
                    </div>
                    <button class="mt-8 md:mt-0 z-10 bg-[#C92424] text-white px-10 py-4 rounded-2xl font-bold text-xl hover:scale-105 transition shadow-xl">
                        Cari Kerja !
                    </button>
                </div>
            </div>
        </div>
    </main>
<footer class="bg-white pt-16 pb-8 border-t border-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1">
                    <img src="{{ asset('images/kerjosam.png') }}" class="h-10 mb-4" alt="Logo">
                    <p class="text-[#E14F4F] font-bold text-lg leading-tight">
                        Kerjo Bareng, <br><span class="text-gray-900">Sukses Bareng</span>
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 mb-4 text-lg">Link</h4>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><a href="#" class="hover:text-red-500">Home</a></li>
                        <li><a href="/about" class="hover:text-red-500">About Us</a></li>
                        <li><a href="#" class="hover:text-red-500">History</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 mb-4 text-lg">Other</h4>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><a href="#" class="hover:text-red-500">Term & Condition</a></li>
                        <li><a href="#" class="hover:text-red-500">Privacy Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 mb-4 text-lg">Our Contact</h4>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 bg-[#F8D7DA] p-3 rounded-2xl text-gray-800 font-bold text-xs">
                            <span class="text-base">📞</span> +52946747
                        </div>
                        <div class="flex items-center gap-3 bg-[#F8D7DA] p-3 rounded-2xl text-gray-800 font-bold text-xs">
                            <span class="text-base">✉️</span> kerjosam@kerjo.id
                        </div>
                        <div class="flex items-center gap-3 bg-[#F8D7DA] p-3 rounded-2xl text-gray-800 font-bold text-xs">
                            <span class="text-base">📸</span> kerjosam_
                        </div>
                        <div class="flex items-center gap-3 bg-[#F8D7DA] p-3 rounded-2xl text-gray-800 font-bold text-xs">
                            <span class="font-black text-base">f</span> kerjosam
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-gray-100 text-gray-400 text-xs">
                &copy; 2024 KerjoSam. All rights reserved.
            </div>
        </div>
    </footer>
    <script>
        const btn = document.getElementById('hamburger-btn');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('hamburger-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            
            // Ganti icon jika menu terbuka/tertutup
            if (menu.classList.contains('hidden')) {
                icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16'); // Icon Garis 3
            } else {
                icon.setAttribute('d', 'M6 18L18 6M6 6l12 12'); // Icon Silang (X)
            }
        });
    </script>

</body>
</html> 