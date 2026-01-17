<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white relative overflow-x-hidden">

<!-- BACKGROUND -->
<div class="absolute inset-0 -z-10 bg-no-repeat bg-cover bg-center"
     style="background-image: url('{{ asset('images/Group 36.png') }}');">
</div>

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 w-full bg-white shadow px-12 py-4 flex items-center z-50">
    <span class="text-xl font-bold">
        <span class="text-red-600">Kerjo</span>
        <span class="text-yellow-400">Sam.</span>
    </span>

    <ul class="flex gap-8 text-sm font-medium ml-auto">
        <li>Home</li>
        <li>About Us</li>
        <li class="text-red-600">Admin Tools</li>
        <li>Admin ▾</li>
    </ul>
</nav>

<!-- MAIN -->
<div class="max-w-6xl mx-auto px-10 pt-32 pb-24">

    <h1 class="text-4xl font-bold text-center mb-16">ADMIN TOOLS</h1>

    <!-- USER -->
    <h2 class="text-xl font-bold mb-4">USER</h2>
    <div class="space-y-4">
        <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl shadow">
            <span>Inad</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl shadow">
            <span>Danu</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl shadow">
            <span>Wisnu</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
    </div>

    <p class="text-center text-xs mt-4 underline cursor-pointer">SHOW MORE</p>

    <!-- PERUSAHAAN -->
    <h2 class="text-xl font-bold mt-14 mb-4">PERUSAHAAN</h2>
    <div class="space-y-4">
        <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl shadow">
            <span>PT Saveria</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl shadow">
            <span>PT. Matahari</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
        <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl shadow border-2 border-blue-400">
            <span>CV. Cahaya</span>
            <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
        </div>
    </div>

    <p class="text-center text-xs mt-4 underline cursor-pointer">SHOW MORE</p>

    <!-- PEKERJAAN -->
    <h2 class="text-xl font-bold mt-14 mb-6">PEKERJAAN</h2>

    <div class="grid grid-cols-2 gap-8">
        <!-- CARD -->
        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job1.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">Copy Writing Artikel</h3>
                <div class="flex gap-2 text-xs text-red-500 mt-2">
                    <span class="border border-red-500 px-2 py-0.5 rounded-full">Remote</span>
                    <span class="border border-red-500 px-2 py-0.5 rounded-full">Freelance</span>
                </div>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">
                    HAPUS
                </button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job2.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">Heuristic Evaluation Aplikasi Jurnal</h3>
                <div class="flex gap-2 text-xs text-red-500 mt-2">
                    <span class="border border-red-500 px-2 py-0.5 rounded-full">Testing</span>
                </div>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">
                    HAPUS
                </button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job3.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">Maintenance Website SPMB</h3>
                <div class="flex gap-2 text-xs text-red-500 mt-2">
                    <span class="border border-red-500 px-2 py-0.5 rounded-full">Maintenance</span>
                </div>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">
                    HAPUS
                </button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <img src="{{ asset('images/job4.jpg') }}" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-sm">UAT Website</h3>
                <div class="flex gap-2 text-xs text-red-500 mt-2">
                    <span class="border border-red-500 px-2 py-0.5 rounded-full">Testing</span>
                </div>
                <button class="bg-red-500 text-white text-xs px-4 py-1 rounded-full mt-3">
                    HAPUS
                </button>
            </div>
        </div>
    </div>

    <p class="text-center text-xs mt-6 underline cursor-pointer">SHOW MORE</p>

    <!-- KATEGORI -->
    <h2 class="text-xl font-bold mt-14 mb-4">KATEGORI</h2>
    <div class="flex flex-wrap gap-2 mb-6">
        <span class="border border-red-500 text-red-500 text-xs px-3 py-1 rounded-full">Copy Writing</span>
        <span class="border border-red-500 text-red-500 text-xs px-3 py-1 rounded-full">UI/UX</span>
        <span class="border border-red-500 text-red-500 text-xs px-3 py-1 rounded-full">Testing</span>
        <span class="border border-red-500 text-red-500 text-xs px-3 py-1 rounded-full">Maintenance</span>
    </div>

    <button onclick="openKategoriModal()"
        class="bg-red-500 text-white px-6 py-2 rounded-full text-sm flex items-center gap-2">
        + TAMBAH KATEGORI
    </button>

</div>

<!-- MODAL KATEGORI -->
<div id="kategoriModal"
     class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">

    <div class="bg-white w-[420px] rounded-2xl p-6 shadow-xl">
        <h2 class="text-2xl font-bold text-center underline mb-6">KATEGORI</h2>

        <label class="block text-sm font-medium mb-2">Nama Kategori</label>
        <input type="text"
            class="w-full px-4 py-2 border rounded-full bg-gray-100">

        <div class="flex justify-between mt-8">
            <button onclick="closeKategoriModal()"
                class="px-6 py-2 border-2 border-red-500 text-red-500 rounded-full">
                BATAL
            </button>
            <button class="px-6 py-2 bg-yellow-400 text-white rounded-full">
                EDIT
            </button>
            <button class="px-6 py-2 bg-red-500 text-white rounded-full">
                HAPUS
            </button>
        </div>
    </div>
</div>

<!-- FOOTER BANNER -->
<div class="bg-red-700 text-white px-16 py-12 flex items-center justify-between">
    <div>
        <h2 class="text-3xl font-bold">Kita ada Untuk Kalian</h2>
        <p class="text-sm mt-2">
            Ayo Mulai Golek Kerjo Rek, Cek Ndang Rabi
        </p>
    </div>
    <button class="bg-red-500 px-8 py-3 rounded-lg font-semibold">
        Cari Kerja!
    </button>
</div>

<!-- FOOTER -->
<footer class="bg-white px-16 py-16">
    <div class="grid grid-cols-4 gap-12">
        <div>
            <h3 class="text-3xl font-bold">
                <span class="text-red-600">Kerjo</span>
                <span class="text-yellow-400">Sam.</span>
            </h3>
            <p class="text-sm text-orange-500 mt-2">
                Kerjo Bareng, Sukses Bareng
            </p>
        </div>

        <div>
            <h4 class="font-bold mb-4">Link</h4>
            <ul class="text-sm space-y-2">
                <li>Home</li>
                <li>About Us</li>
                <li>History</li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-4">Other</h4>
            <ul class="text-sm space-y-2">
                <li>Term & Condition</li>
                <li>Privacy Policy</li>
            </ul>
        </div>

        <div>
            <h4 class="font-bold mb-4">Our Contact</h4>
            <ul class="space-y-3 text-sm">
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">📞 +52946747</li>
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">✉ kerjosam@kerjo.id</li>
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">📷 kerjosam_</li>
                <li class="bg-red-100 px-4 py-2 rounded-full w-fit">📘 kerjosam</li>
            </ul>
        </div>
    </div>
</footer>

<script>
function openKategoriModal() {
    document.getElementById('kategoriModal').classList.remove('hidden');
}
function closeKategoriModal() {
    document.getElementById('kategoriModal').classList.add('hidden');
}
</script>
</body>
</html>
