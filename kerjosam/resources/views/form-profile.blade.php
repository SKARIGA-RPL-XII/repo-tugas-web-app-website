<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white flex flex-col">

<!-- ===================== -->
<!-- NAVBAR -->
<!-- ===================== -->
<nav class="bg-white px-16 py-4 flex items-center justify-between
            border-b border-gray-200 shadow-md relative z-50">
    <!-- LOGO -->
    <div class="text-2xl font-bold">
        <span class="text-red-600">Kerjo</span>
        <span class="text-yellow-400">Sam.</span>
    </div>

    <!-- MENU -->
    <ul class="flex items-center gap-10 text-sm font-medium text-gray-700">
        <li class="hover:text-red-600 cursor-pointer">Home</li>
        <li class="hover:text-red-600 cursor-pointer">Cari Kerja</li>
        <li class="hover:text-red-600 cursor-pointer">History</li>
        <li class="hover:text-red-600 cursor-pointer">Profile</li>
    </ul>
</nav>

<!-- ===================== -->
<!-- BG KONTEN (BUKAN NAVBAR) -->
<!-- ===================== -->
<section
    class="relative bg-repeat bg-top"
    style="
        height: 16.666vh;
        background-image: url('images/bg3.png');
    "
>
    <!-- overlay -->
    <div class="absolute inset-0 bg-white/55"></div>

    <!-- KONTEN -->
    <div class="relative z-10 max-w-3xl mx-auto px-6 pt-10">
        <h1 class="text-center text-3xl font-extrabold">
            EDIT PROFIL
        </h1>
    </div>
</section>

    <!-- ===================== -->
    <!-- MAIN CONTENT -->
    <!-- ===================== -->
    <main class="relative z-10">
        <div class="max-w-3xl mx-auto px-6 py-16">

            <!-- TITLE -->
            <h1 class="text-center text-3xl font-extrabold text-black mb-10">
                EDIT PROFIL
            </h1>

            <!-- FOTO PROFIL -->
            <div class="flex justify-center mb-10">
                <label
                    class="w-40 h-40 bg-gray-200 rounded-xl
                           border-2 border-dashed border-gray-400
                           flex flex-col items-center justify-center
                           text-center cursor-pointer"
                >
                    <span class="text-sm text-gray-600">
                        Tambahkan Foto<br>Profil
                    </span>
                    <span class="text-2xl mt-2">📷</span>
                    <input type="file" class="hidden">
                </label>
            </div>

            <!-- FORM -->
            <form class="space-y-6">

                <div>
                    <label class="block text-sm font-medium mb-2">Nama</label>
                    <input type="text"
                        class="w-full bg-gray-200 rounded-full px-5 py-3 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Email</label>
                    <input type="email"
                        class="w-full bg-gray-200 rounded-full px-5 py-3 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">
                        Nomor Handphone
                    </label>
                    <input type="text"
                        class="w-full bg-gray-200 rounded-full px-5 py-3 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">
                        Deskripsi
                    </label>
                    <textarea rows="5"
                        class="w-full bg-gray-200 rounded-xl px-5 py-3 outline-none resize-none"></textarea>
                </div>

                <!-- BUTTON -->
                <div class="flex justify-center gap-6 pt-6">
                    <button type="button"
                        class="px-10 py-3 rounded-xl bg-red-500 text-white font-bold shadow">
                        KEMBALI
                    </button>

                    <button type="submit"
                        class="px-10 py-3 rounded-xl bg-yellow-400 text-black font-bold shadow">
                        SIMPAN
                    </button>
                </div>

            </form>
        </div>
    </main>
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

</body>
</html>
