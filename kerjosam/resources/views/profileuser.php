<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - KerjoSam</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fafafa] relative overflow-hidden">

<!-- BACKGROUND IMAGE KIRI -->
<img src="{{ asset('images/b.png') }}"
     class="absolute left-0 top-0 h-full object-cover -z-10">

<!-- BACKGROUND IMAGE KANAN -->
<img src="{{ asset('images/b.png') }}"
     class="absolute right-0 top-0 h-full object-cover -z-10">

<!-- HEADER -->
<div class="max-w-7xl mx-auto px-10 py-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-red-500">KerjoSam</h1>
    <div class="flex gap-8 text-sm text-gray-600">
        <a href="#">HOME</a>
        <a href="#">ABOUT US</a>
        <a href="#">HISTORY</a>
    </div>
</div>

<!-- MAIN -->
<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md p-10">

    <!-- Avatar -->
    <div class="flex flex-col items-center mb-10">
        <img src="{{ asset('images/b.png'}}"
             class="w-24 h-24 rounded-full object-cover mb-4">
        <button class="border border-red-400 text-red-500 px-6 py-2 rounded-full text-sm">
            Upload file
        </button>
    </div>

    <!-- FORM -->
    <div class="space-y-6">
        <div>
            <label class="text-sm text-gray-600">Nama</label>
            <input type="text" value="Olivia Amelia Ayu Putri Ramadani"
                   class="w-full border border-red-300 rounded-lg px-4 py-3 focus:outline-none">
        </div>

        <div>
            <label class="text-sm text-gray-600">Email</label>
            <input type="email" value="oliviaameliaayuputriramadani@gmail.com"
                   class="w-full border border-red-300 rounded-lg px-4 py-3 focus:outline-none">
        </div>

        <div>
            <label class="text-sm text-gray-600">No. Handphone</label>
            <input type="text" value="0823245789879"
                   class="w-full border border-red-300 rounded-lg px-4 py-3 focus:outline-none">
        </div>

        <div>
            <label class="text-sm text-gray-600">Deskripsi</label>
            <textarea rows="4"
                      class="w-full border border-red-300 rounded-lg px-4 py-3 focus:outline-none">saya adalah anak pgri jurusan rpl anjay mabar ayo semua nya berbahagia bersama-sama</textarea>
        </div>

        <div class="flex justify-center gap-6 mt-8">
            <button class="bg-red-500 text-white px-10 py-2 rounded-full">
                Edit
            </button>
            <button class="bg-yellow-400 text-black px-10 py-2 rounded-full">
                Simpan
            </button>
        </div>
    </div>
</div>

<!-- BANNER BAWAH -->
<div class="max-w-6xl mx-auto mt-20 relative">
    <img src="{{ asset('images/b.png'}}"
         class="w-full rounded-xl object-cover">

    <div class="absolute inset-0 flex items-center justify-between px-10">
        <div class="text-white">
            <h2 class="text-2xl font-bold">Kita ada Untuk Kalian</h2>
            <p class="text-sm">Ayo Mulai Golek Kerjo Rek!, Cek Ndang Rabi</p>
        </div>
        <button class="bg-red-500 text-white px-8 py-3 rounded-full">
            Cari Kerja!
        </button>
    </div>
</div>

<!-- FOOTER -->
<footer class="max-w-7xl mx-auto px-10 py-16 grid grid-cols-4 gap-10 text-sm">
    <div>
        <h3 class="text-red-500 font-bold text-xl">KerjoSam</h3>
        <p class="text-gray-500">Kerjo Bareng, Sukses Bareng</p>
    </div>

    <div>
        <h4 class="font-semibold mb-3">Link</h4>
        <p>Home</p>
        <p>About Us</p>
        <p>History</p>
    </div>

    <div>
        <h4 class="font-semibold mb-3">Other</h4>
        <p>Term & Condition</p>
        <p>Privacy Policy</p>
    </div>

    <div>
        <h4 class="font-semibold mb-3">Our Contact</h4>
        <p>+62946747</p>
        <p>kerjosam@kerjo.id</p>
        <p>@kerjosam_</p>
        <p>@kerjosam</p>
    </div>
</footer>

</body>
</html>
