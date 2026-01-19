<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buat Pekerjaan - KerjoSam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50">

    @include('partials.navbar')

    <!-- ================= FORM BUAT PEKERJAAN ================= -->
    <section class="min-h-screen bg-white relative">

        <!-- Background motif -->
        <div class="absolute inset-0 bg-[url('/images/LogoB.png')] bg-no-repeat opacity-40"></div>

        <div class="relative z-10 max-w-2xl mx-auto px-6 py-16">

            <h1 class="text-center text-3xl font-bold mb-10">BUAT PEKERJAAN</h1>

            <!-- Upload Foto -->
            <div class="flex justify-center mb-10">
                <label class="w-32 h-32 
    border-2 border-dashed border-gray-400 
    bg-gray-100
    rounded-xl 
    flex flex-col items-center justify-center gap-2
    cursor-pointer 
    hover:bg-gray-200 
    transition">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1M12 12l-4 4m4-4l4 4m-4-4V4" />
                    </svg>

                    <span class="text-sm font-medium text-gray-600 text-center">
                        Tambahkan Foto
                    </span>

                    <input type="file" class="hidden">
                </label>

            </div>

            <form action="{{ route('jobs.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm mb-1">Nama Pekerjaan</label>
                    <input type="text" name="title" class="w-full bg-gray-200 border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-red-400" required>
                </div>

                <div>
                    <label class="block text-sm mb-1">Nama Perusahaan</label>
                    <input type="text" name="company" class="w-full bg-gray-200 border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-red-400" required>
                </div>

                

               
              

                

                <div>
                    <label class="block text-sm mb-1">Deskripsi</label>
                    <textarea name="description" rows="4" class="w-full bg-gray-200 border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-red-400" required></textarea>
                </div>

                <div>
                    <label class="block text-sm mb-1">Kategori</label>
                    <select name="category" class="w-full bg-gray-200 border border-gray-300 rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-red-400" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="frontend">Frontend Developer</option>
                        <option value="backend">Backend Developer</option>
                        <option value="ui-ux">UI/UX Designer</option>
                        <option value="mobile">Mobile Developer</option>
                        <option value="data">Data Analyst</option>
                        <option value="devops">DevOps Engineer</option>
                        <option value="finance">Finance</option>
                    </select>
                </div>

                <div class="flex justify-center pt-6">
                    <button type="submit"
                        class="bg-orange-400 hover:bg-orange-500 text-white font-semibold px-12 py-3 rounded-xl shadow-md">
                        SIMPAN
                    </button>
                </div>

            </form>
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





</body>

</html>