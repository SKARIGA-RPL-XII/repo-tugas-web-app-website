<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User - KerjoSam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-batik {
            /* Mengacu pada file LogoB.png di folder images sesuai screenshot VS Code */
            background-image: url("{{ asset('images/LogoB.png') }}");
            background-size: 300px;
            background-repeat: repeat;
            background-color: #fffafa; 
        }
        .card-shadow {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
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
                <a href="#" class="hover:text-orange-500">History</a>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gray-300"></div>
                <span class="font-semibold text-gray-700">User</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
        </div>
    </nav>

    <main class="bg-batik min-h-screen py-12 px-4 sm:px-6">
        <div class="max-w-5xl mx-auto space-y-8">
            
            <div class="bg-white rounded-[2rem] p-8 card-shadow border border-gray-50 flex flex-col md:flex-row items-center gap-8">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden border-4 border-gray-100">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=200" alt="Profile" class="w-full h-full object-cover">
                </div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight text-center md:text-left">AHMAD SURADI</h1>
            </div>

            <div class="bg-white rounded-[2rem] p-8 md:p-12 card-shadow border border-gray-50 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4 uppercase tracking-widest">Deskripsi</h2>
                <div class="w-32 h-1 bg-gray-800 mx-auto mb-8"></div>
                <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto">
                    Saya adalah seorang web developer dan seorang copy writer yang berdedikasi tinggi dalam menciptakan solusi digital yang kreatif dan fungsional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-[2.5rem] p-10 card-shadow border border-gray-50">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 uppercase text-center">Hubungi :</h2>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 text-gray-700">
                            <span class="text-xl">✉️</span>
                            <span class="font-medium">SumardiGmailcom</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-700">
                            <span class="text-xl">📞</span>
                            <span class="font-medium">0812457386234</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] p-10 card-shadow border border-gray-50 text-center flex flex-col justify-center items-center">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 uppercase">Ayo Sukses!</h2>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed px-4">
                        Bagikan Pekerjaan Ini Dengan Orang Lain, Ayo Sukses Bareng!
                    </p>
                    <button class="bg-[#E14F4F] text-white px-8 py-3 rounded-xl font-bold shadow-lg hover:bg-red-700 transition-all active:scale-95">
                        SALIN TAUTAN
                    </button>
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
</body>
</html>