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

<!-- ===================== -->
<!-- BANNER MERAH -->
<!-- ===================== -->
<!-- CTA / KITA ADA UNTUK KALIAN -->
<section
    class="relative px-16 py-10 flex items-center justify-between"
    style="background-image: url('images/bg4.png');
           background-size: cover;
           background-position: center;"
>
    <!-- overlay merah (DIPERBAIKI) -->
    <div class="absolute inset-0 bg-red-700/25"></div>

    <div class="relative z-10 text-white flex w-full items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold">Kita ada Untuk Kalian</h2>
            <p class="text-sm">
                Ayo Mulai Golek Kerjo Rek, Cek Ndang Rabi
            </p>
        </div>

        <button class="bg-red-500 px-6 py-3 rounded-lg font-semibold shadow">
            Cari Kerja !
        </button>
    </div>
</section>

<!-- ===================== -->
<!-- FOOTER -->
<!-- ===================== -->
<footer class="bg-white px-16 py-14">
    <div class="grid grid-cols-4 gap-10">

        <div>
            <h3 class="text-2xl font-bold">
                <span class="text-red-600">Kerjo</span>
                <span class="text-yellow-400">Sam.</span>
            </h3>
            <p class="text-sm text-gray-500">
                Kerjo Bareng, Sukses Bareng
            </p>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Link</h4>
            <ul class="text-sm text-gray-500 space-y-2">
                <li>Home</li>
                <li>About Us</li>
                <li>History</li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Other</h4>
            <ul class="text-sm text-gray-500 space-y-2">
                <li>Terms & Condition</li>
                <li>Privacy Policy</li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-4">Our Contact</h4>
            <ul class="space-y-3 text-sm">

                <li class="flex items-center gap-3 bg-white px-4 py-2 rounded-full
                           border border-red-300 shadow-sm w-fit">
                    <span class="text-red-500">📞</span>
                    <span class="text-gray-800">+62 946747</span>
                </li>

                <li class="flex items-center gap-3 bg-white px-4 py-2 rounded-full
                           border border-red-300 shadow-sm w-fit">
                    <span class="text-red-500">📧</span>
                    <span class="text-gray-800">kerjosam@kerjo.id</span>
                </li>

                <li class="flex items-center gap-3 bg-white px-4 py-2 rounded-full
                           border border-red-300 shadow-sm w-fit">
                    <span class="text-red-500">📷</span>
                    <span class="text-gray-800">kerjosam_</span>
                </li>

                <li class="flex items-center gap-3 bg-white px-4 py-2 rounded-full
                           border border-red-300 shadow-sm w-fit">
                    <span class="text-red-500">📘</span>
                    <span class="text-gray-800">kerjosam</span>
                </li>

            </ul>
        </div>

    </div>
</footer>

</body>
</html>
