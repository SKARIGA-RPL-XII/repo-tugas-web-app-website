<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lowongan Kerja | KerjoSam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- NAVBAR -->
    <nav class="w-full bg-white shadow-sm">
        <div class="w-full px-8 md:px-16 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="/images/LogoWeb.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover"/>
            </div>
            <a href="{{ route('dashboard') }}" class="text-sm text-gray-600 hover:text-red-500">
                Kembali ke Dashboard
            </a>
        </div>
    </nav>

    <!-- FORM SECTION -->
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-red-500 to-red-600 text-white px-8 py-6">
                <h1 class="text-2xl md:text-3xl font-bold">Tambah Lowongan Pekerjaan</h1>
                <p class="text-red-100 text-sm mt-1">Isi form di bawah untuk menambahkan lowongan baru</p>
            </div>

            <form action="{{ route('job.store') }}" method="POST" class="p-8">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Judul Lowongan -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-semibold mb-2">Judul Lowongan <span class="text-red-500">*</span></label>
                        <input type="text" name="title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition" placeholder="Contoh: Frontend Developer" required>
                    </div>

                    <!-- Nama Perusahaan -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Nama Perusahaan <span class="text-red-500">*</span></label>
                        <input type="text" name="company" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition" placeholder="Contoh: Tech Corp" required>
                    </div>

                    <!-- Lokasi -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Lokasi <span class="text-red-500">*</span></label>
                        <input type="text" name="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition" placeholder="Contoh: Jakarta, Indonesia" required>
                    </div>

                    <!-- Gaji -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Gaji <span class="text-red-500">*</span></label>
                        <input type="text" name="salary" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition" placeholder="Rp 5 - 8 Juta" required>
                    </div>

                    <!-- Tipe Pekerjaan -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Tipe Pekerjaan <span class="text-red-500">*</span></label>
                        <select name="type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition" required>
                            <option value="">-- Pilih Tipe --</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Freelance">Freelance</option>
                            <option value="Internship">Internship</option>
                        </select>
                    </div>

                    <!-- Kategori -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-semibold mb-2">Kategori <span class="text-red-500">*</span></label>
                        <select name="category" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition" required>
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

                    <!-- Deskripsi Pekerjaan -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-semibold mb-2">Deskripsi Pekerjaan <span class="text-red-500">*</span></label>
                        <textarea name="description" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition" placeholder="Deskripsikan pekerjaan, tanggung jawab, dan kualifikasi yang dibutuhkan..." required></textarea>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row justify-between gap-4 mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('dashboard') }}" class="px-8 py-3 bg-gray-500 text-white rounded-full hover:bg-gray-600 transition text-center font-medium">
                        Batal
                    </a>
                    <button type="submit" class="px-8 py-3 bg-red-500 text-white rounded-full hover:bg-red-600 transition font-medium shadow-lg hover:shadow-xl">
                        Simpan Lowongan
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t mt-12">
        <div class="w-full px-8 py-6 text-center text-gray-600 text-sm">
            <p>&copy; 2024 KerjoSam. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>