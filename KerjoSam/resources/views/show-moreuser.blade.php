<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin - Show More User</title>
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

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-6 pt-32 pb-24">

        <h1 class="text-3xl font-bold text-center mb-16 underline">
            USER
        </h1>

        <!-- GRID USER -->
        <div class="grid grid-cols-2 gap-8">
            @forelse($users as $user)
            <div class="bg-white px-8 py-6 rounded-xl shadow">
                <p class="font-medium">{{ $user->name }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $user->email }}</p>
                <form action="{{ route('admin.users.destroy', $user->id) }}"
                    method="POST"
                    class="inline"
                    onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-3 bg-red-500 text-white text-xs px-5 py-1.5 rounded-full hover:bg-red-600">
                        HAPUS
                    </button>
                </form>
            </div>
            @empty
            <div class="col-span-2 text-center text-gray-500 py-8">
                Belum ada user
            </div>
            @endforelse
        </div>

        <!-- KEMBALI -->
        <div class="text-center mt-14">
            <a href="{{ route('admin.tools') }}"
                class="text-xs underline cursor-pointer text-gray-700">
                ← Kembali ke Admin Tools
            </a>
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
                        <li><a href="/admin/tools/" class="hover:text-red-500 transition">Home</a></li>

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