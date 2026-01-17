<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Show More Pekerjaan | KerjoSam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* === BACKGROUND SAMA SEPERTI ABOUT US === */
        .bg-about {
            background-image: url('/images/about/Overlay1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .bg-about-section {
            background-image: url('/images/about/Overlay2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        * {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        *::-webkit-scrollbar {
            display: none;
        }

        .bg-image-position {
            object-position: center 15%;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->
    <nav class="w-full bg-white border-b shadow-sm relative z-20">
    <div class="w-full max-w-7xl mx-auto px-8 py-4 flex items-center justify-between">

        <!-- LOGO -->
        <div class="flex items-center">
            <img src="/images/LogoWeb.png" alt="KerjoSam Logo"
                class="h-12 w-auto object-contain" />
        </div>

        <!-- MENU & USER ADMIN -->
        <div class="flex items-center gap-10">
            <!-- MENU -->
            <ul class="hidden md:flex items-center gap-10 text-sm font-medium text-gray-800">
                <li>
                    <a href="/dashboard" class="hover:text-red-500 transition">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="hover:text-red-500 transition">
                        About us
                    </a>
                </li>
                <li>
                    <a href="/admin-tools" class="hover:text-red-500 transition">
                        Admin Tools
                    </a>
                </li>
            </ul>

            <!-- USER ADMIN -->
            <div class="relative flex items-center gap-3 cursor-pointer">
                <!-- Avatar -->
                <div class="w-9 h-9 rounded-full bg-gray-300 flex items-center justify-center">
                    <span class="text-sm font-semibold text-gray-700">A</span>
                </div>

                <!-- Select + Icon -->
                <span class="text-sm text-gray-800">Admin</span>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>

    </div>
</nav>


    <!-- ================= HERO / BACKGROUND ================= -->
    <section class="bg-about min-h-screen pt-32 pb-20">
        <div class="max-w-6xl mx-auto px-6">

            <h1 class="text-5xl md:text-6xl font-black text-center text-red-500 mb-20">
                PEKERJAAN
            </h1>

            <!-- JOB LIST -->
            <div id="jobList" class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- CARD -->
                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">Copy Writing Artikel</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Copy Writing
                            </span>
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Artikel
                            </span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">Heuristic Evaluation Aplikasi</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">UI/UX</span>
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Testing</span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">Maintenance Website</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Web Development
                            </span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

                <div class="job-card hidden bg-white rounded-3xl shadow-xl overflow-hidden">
                    <img src="/images/job.jpg" class="h-44 w-full object-cover">

                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-3">Copy Writing Artikel</h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Copy Writing
                            </span>
                            <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">
                                Artikel
                            </span>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HAPUS
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

      <!-- CTA SECTION -->
    <section class="relative overflow-hidden">
        <img src="/images/about/Overlay6.png" alt="" class="absolute inset-0 w-full h-full object-cover object-[50%_15%]" />
        <!-- Overlay merah biar teks kebaca -->
        <div class="absolute inset-0 bg-gradient-to-r  from-red-600/50  via-red-600/30  to-white">
        </div>
        <div class="relative z-10 w-full px-6 md:px-12 py-8 md:py-10 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="text-white text-center md:text-left">
                <h2 class="text-2xl md:text-3xl font-bold mb-2">
                    Kita ada Untuk Kalian
                </h2>
                <p class="text-white/90">
                    Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi
                </p>
            </div>

            <a href="/dashboard" class="bg-[#CC1E1E] text-white font-semibold px-8 py-4 rounded-2xl border-2 border-transparent hover:bg-white hover:border-[#CC1E1E] hover:text-[#CC1E1E] transition-all duration-300">
                Cari Kerja !
            </a>
        </div>
    </section>

    <footer class="bg-white border-t">
        <div class="w-full px-4 md:px-8 lg:px-16 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo -->
                <div class="md:col-span-1 flex flex-col items-start">
                    <img
                        src="/images/WhatsApp-Image-2026-01-06-at-22.57.16-7.png"
                        alt="KerjoSam Logo"
                        class="w-full max-w-[240px] h-auto object-contain mb-3" />

                    <p class="text-base md:text-lg font-semibold">
                        <span class="text-[#FD721D]">Kerjo Bareng,</span>
                        <span class="text-[#CC0000]"> Sukses Bareng</span>
                    </p>
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



    <!-- ================= SCRIPT SHOW MORE ================= -->
    <script>
        const cards = document.querySelectorAll('.job-card');
        const btn = document.getElementById('showMoreBtn');
        let visible = 4;

        function showCards() {
            for (let i = 0; i < visible; i++) {
                if (cards[i]) cards[i].classList.remove('hidden');
            }
        }

        showCards();

        btn.addEventListener('click', () => {
            visible += 2;
            showCards();
            if (visible >= cards.length) btn.style.display = 'none';
        });
    </script>

</body>

</html>