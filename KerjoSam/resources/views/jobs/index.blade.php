<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Lowongan | KerjoSam</title>
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

    <!-- SUCCESS ALERT -->
    @if(session('success'))
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <div class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center justify-between">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    </div>
    @endif

    <!-- MAIN CONTENT -->
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <!-- HEADER -->
            <div class="bg-gradient-to-r from-red-500 to-red-600 text-white px-8 py-6 flex justify-between items-center">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold">Kelola Lowongan Pekerjaan</h1>
                    <p class="text-red-100 text-sm mt-1">Daftar semua lowongan yang telah ditambahkan</p>
                </div>
                <a href="{{ route('job.create') }}" class="bg-white text-red-600 px-6 py-3 rounded-full font-semibold hover:bg-red-50 transition flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Lowongan
                </a>
            </div>

            <!-- TABLE -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">No</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Judul</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Perusahaan</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Lokasi</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Gaji</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Kategori</th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($jobs as $index => $job)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-semibold text-gray-900">{{ $job->title }}</div>
                                <div class="text-xs text-gray-500">{{ $job->type }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $job->company }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $job->location }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $job->salary }}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-600">{{ $job->category }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('job.edit', $job->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition text-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('job.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus lowongan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition text-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                                <p class="text-lg font-medium">Belum ada lowongan</p>
                                <p class="text-sm mt-1">Klik tombol "Tambah Lowongan" untuk menambahkan lowongan baru</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-white border-t mt-12">
        <div class="w-full px-8 py-6 text-center text-gray-600 text-sm">
            <p>&copy; 2024 KerjoSam. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
