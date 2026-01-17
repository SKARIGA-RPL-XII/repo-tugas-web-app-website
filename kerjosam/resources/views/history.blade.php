<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History - KerjoSam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-batik {
            background-image: url("{{ asset('images/batik.png') }}");
            background-size: 300px;
            background-repeat: repeat;
            background-color: #fffafa; 
        }
        .banner-jawa-overlay {
            background-image: url("{{ asset('images/Jawa.png') }}");
            background-color: #D97C7C; 
            background-blend-mode: multiply; 
            background-size: cover;
            background-position: center 15%; 
            position: relative;
        }
    </style>
</head>
<body class="bg-white">

    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/kerjosam.png') }}" class="h-10" alt="Logo">
            </div>

            <div class="hidden md:flex items-center space-x-10 font-medium text-gray-700">
                <a href="#" class="hover:text-orange-500">Home</a>
                <a href="/about" class="hover:text-orange-500">About us</a>
                <a href="#" class="border-b-2 border-orange-500 pb-1 text-gray-900 font-bold">History</a>
            </div>

            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-gray-300"></div>
                    <span class="hidden sm:inline font-semibold text-gray-700">User</span>
                </div>
                <button id="btn-menu" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path id="icon-menu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b px-6 py-4 space-y-3">
            <a href="#" class="block text-gray-700 font-medium">Home</a>
            <a href="/about" class="block text-gray-700 font-medium">About us</a>
            <a href="#" class="block text-orange-500 font-bold">History</a>
        </div>
    </nav>

    <main class="bg-batik min-h-screen pb-20">
        <div class="max-w-7xl mx-auto px-6 pt-12">
            
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 underline underline-offset-8 decoration-2 uppercase">HISTORY</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                
                <div class="bg-white rounded-[2rem] overflow-hidden shadow-md border border-gray-100">
                    <img src="{{ asset('images/Jawa.png') }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Copy Writing Artikel</h3>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <span class="px-3 py-1 text-[10px] font-bold text-red-500 border border-red-500 rounded-full uppercase">Copy Writing</span>
                                <span class="px-3 py-1 text-[10px] font-bold text-red-500 border border-red-500 rounded-full uppercase">Artikel</span>
                            </div>
                            <span class="px-6 py-2 bg-[#E14F4F] text-white text-xs font-bold rounded-lg uppercase">Ditolak</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] overflow-hidden shadow-md border border-gray-100">
                    <img src="{{ asset('images/Jawa.png') }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Copy Writing Artikel</h3>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <span class="px-3 py-1 text-[10px] font-bold text-red-500 border border-red-500 rounded-full uppercase">Copy Writing</span>
                            </div>
                            <span class="px-6 py-2 bg-[#F2B01E] text-white text-xs font-bold rounded-lg uppercase">Menunggu</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] overflow-hidden shadow-md border border-gray-100">
                    <img src="{{ asset('images/Jawa.png') }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Copy Writing Artikel</h3>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <span class="px-3 py-1 text-[10px] font-bold text-red-500 border border-red-500 rounded-full uppercase">Copy Writing</span>
                            </div>
                            <span class="px-6 py-2 bg-[#F2B01E] text-white text-xs font-bold rounded-lg uppercase">Menunggu</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] overflow-hidden shadow-md border border-gray-100">
                    <img src="{{ asset('images/Jawa.png') }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Copy Writing Artikel</h3>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <span class="px-3 py-1 text-[10px] font-bold text-red-500 border border-red-500 rounded-full uppercase">Copy Writing</span>
                            </div>
                            <span class="px-6 py-2 bg-[#4CAF50] text-white text-xs font-bold rounded-lg uppercase">Diterima</span>
                        </div>
                    </div>
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
        const btn = document.getElementById('btn-menu');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('icon-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            if (menu.classList.contains('hidden')) {
                icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            } else {
                icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        });
    </script>
</body>
</html>