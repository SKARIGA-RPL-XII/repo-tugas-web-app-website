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
        <img src="/images/LogoWeb.png" alt="" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover">

        <ul class="flex gap-8 text-sm font-medium ml-auto">
            <li><a href="/admin/tools/" class="hover:text-red-600 cursor-pointer">Home</a></li>
            <li class="text-red-600">Admin Tools</li>
        </ul>
    </nav>


    <!-- MAIN -->
    <div class="relative w-full px-8 md:px-16 py-24">

        <h1 class="text-4xl font-bold text-center mb-16">ADMIN TOOLS</h1>

        <!-- USER -->
        <h2 class="text-xl font-bold mb-4">USER</h2>
        <div class="space-y-4">
            @forelse($users as $user)
            <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl
            shadow-[0_-4px_10px_rgba(0,0,0,0.08),0_6px_12px_rgba(0,0,0,0.12)]">
                <span>{{ $user->name }}</span>
                <form action="{{ route('admin.users.destroy', $user->id) }}"
                    method="POST"
                    class="inline"
                    onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
                </form>
            </div>
            @empty
            <div class="text-center text-gray-500 py-8">
                Belum ada user
            </div>
            @endforelse
        </div>

        @if($totalUsers > 4)
        <a href="{{ route('admin.show-more-user') }}"
            class="block text-center text-xs mt-4 underline cursor-pointer">
            SHOW MORE
        </a>
        @endif

        <!-- PERUSAHAAN -->
        <h2 class="text-xl font-bold mt-14 mb-4">PERUSAHAAN</h2>
        <div class="space-y-4">
            @forelse($companies as $company)
            <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl
            shadow-[0_-4px_10px_rgba(0,0,0,0.08),0_6px_12px_rgba(0,0,0,0.12)]">
                <span>{{ $company->name }}</span>
                <form action="{{ route('admin.users.destroy', $company->id) }}"
                    method="POST"
                    class="inline"
                    onsubmit="return confirm('Yakin ingin menghapus perusahaan ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white text-xs px-4 py-1 rounded-full">HAPUS</button>
                </form>
            </div>
            @empty
            <div class="text-center text-gray-500 py-8">
                Belum ada perusahaan
            </div>
            @endforelse
        </div>

        @if($totalCompanies > 4)
        <a href="{{ route('admin.show-more-perusahaan') }}"
            class="block text-center text-xs mt-4 underline cursor-pointer">
            SHOW MORE
        </a>
        @endif

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



        <div class="space-y-3 mb-6">
            @forelse($categories as $category)
            <div class="flex items-center justify-between bg-white border rounded-xl px-5 py-3 shadow-sm">
                <span class="text-sm font-medium text-gray-700">
                    {{ $category->name }}
                </span>
                <div class="flex gap-2">
                    <button onclick="openEditModal({{ $category->id }}, '{{ $category->name }}')"
                        class="px-4 py-1.5 text-xs rounded-full bg-yellow-400 text-white">
                        Edit
                    </button>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-1.5 text-xs rounded-full bg-red-500 text-white">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="text-center text-gray-500 py-8">
                Belum ada kategori
            </div>
            @endforelse
        </div>

        <button onclick="openKategoriModal()"
            class="bg-red-500 text-white px-6 py-2 rounded-full text-sm">
            + TAMBAH KATEGORI
        </button>

    </div>

    <!-- MODAL KATEGORI -->
    <div id="kategoriModal"
        class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">

        <div class="bg-white w-[420px] rounded-2xl p-6 shadow-xl">
            <h2 id="modalTitle" class="text-2xl font-bold text-center underline mb-6">
                TAMBAH KATEGORI
            </h2>

            <form id="kategoriForm" action="{{ route('categories.store') }}" method="POST">
                @csrf
                <input type="hidden" id="methodField" name="_method" value="">
                <input type="hidden" id="categoryId" name="category_id" value="">

                <label class="block text-sm font-medium mb-2">
                    Nama Kategori
                </label>
                <input type="text" id="categoryName" name="name" required
                    placeholder="Masukkan nama kategori"
                    class="w-full px-4 py-2 border rounded-full bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500">

                <div class="flex justify-end gap-3 mt-8">
                    <button type="button" onclick="closeKategoriModal()"
                        class="px-6 py-2 border-2 border-red-500 text-red-500 rounded-full">
                        BATAL
                    </button>
                    <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-full">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- SUCCESS POPUP -->
    <div id="successPopup" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
        <div class="bg-white w-[400px] rounded-2xl p-6 shadow-xl text-center">
            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Berhasil!</h3>
            <p id="successMessage" class="text-gray-600 mb-6"></p>
            <button onclick="closeSuccessPopup()" class="px-6 py-2 bg-green-500 text-white rounded-full hover:bg-green-600">
                OK
            </button>
        </div>
    </div>


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
                        <li><a href="/admin/tools" class="hover:text-red-500 transition">Home</a></li>

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


    <script>
        function openKategoriModal() {
            document.getElementById('kategoriModal').classList.remove('hidden');
            document.getElementById('modalTitle').textContent = 'TAMBAH KATEGORI';
            document.getElementById('kategoriForm').action = '{{ route("categories.store") }}';
            document.getElementById('methodField').value = '';
            document.getElementById('categoryId').value = '';
            document.getElementById('categoryName').value = '';
        }

        function openEditModal(id, name) {
            document.getElementById('kategoriModal').classList.remove('hidden');
            document.getElementById('modalTitle').textContent = 'EDIT KATEGORI';
            document.getElementById('kategoriForm').action = '/admin/categories/' + id;
            document.getElementById('methodField').value = 'PUT';
            document.getElementById('categoryId').value = id;
            document.getElementById('categoryName').value = name;
        }

        function closeKategoriModal() {
            document.getElementById('kategoriModal').classList.add('hidden');
        }

        function showSuccessPopup(message) {
            document.getElementById('successMessage').textContent = message;
            document.getElementById('successPopup').classList.remove('hidden');
        }

        function closeSuccessPopup() {
            document.getElementById('successPopup').classList.add('hidden');
        }

        @if(session('success'))
        document.addEventListener('DOMContentLoaded', function() {
            showSuccessPopup('{{ session("success") }}');
        });
        @endif
    </script>
</body>

</html>