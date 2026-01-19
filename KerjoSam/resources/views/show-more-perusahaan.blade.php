<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Semua Perusahaan - Admin Tools</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-white">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 w-full bg-white shadow px-12 py-4 flex items-center z-50">
        <img src="/images/LogoWeb.png" alt="" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover">
        <ul class="flex gap-8 text-sm font-medium ml-auto">
            <li><a href="{{ route('admin.tools') }}" class="hover:text-red-600 cursor-pointer">Admin Tools</a></li>
            <li class="text-red-600">Semua Perusahaan</li>
        </ul>
    </nav>

    <!-- MAIN -->
    <div class="relative w-full px-8 md:px-16 py-24">
        <h1 class="text-4xl font-bold text-center mb-16">SEMUA PERUSAHAAN</h1>

        <div class="space-y-4">
            @forelse($companies as $company)
            <div class="flex justify-between items-center bg-white px-6 py-4 rounded-xl shadow-lg">
                <div>
                    <span class="font-medium">{{ $company->name }}</span>
                    <p class="text-sm text-gray-500">{{ $company->email }}</p>
                </div>
                <form action="{{ route('admin.users.destroy', $company->id) }}" method="POST" class="inline"
      onsubmit="return confirm('Yakin ingin menghapus perusahaan ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white text-xs px-4 py-2 rounded-full hover:bg-red-600">
                        HAPUS
                    </button>
                </form>
            </div>
            @empty
            <div class="text-center text-gray-500 py-8">
                Belum ada perusahaan
            </div>
            @endforelse
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('admin.tools') }}" class="bg-gray-500 text-white px-6 py-2 rounded-full hover:bg-gray-600">
                Kembali
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