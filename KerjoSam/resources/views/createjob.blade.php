<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lowongan Kerja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Optional: Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Tambah Lowongan Kerja</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('createjob') }}" method="POST">
                @csrf

                <!-- Judul -->
                <div class="mb-3">
                    <label class="form-label">Judul Lowongan</label>
                    <input type="text" name="judul" class="form-control" placeholder="Contoh: Web Developer" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi Pekerjaan</label>
                    <textarea name="deskripsi" rows="4" class="form-control" placeholder="Deskripsikan pekerjaan..." required></textarea>
                </div>

                <!-- Tipe Pekerjaan -->
                <div class="mb-3">
                    <label class="form-label">Tipe Pekerjaan</label>
                    <select name="tipe_pekerjaan" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Freelance">Freelance</option>
                    </select>
                </div>

                <!-- Lokasi -->
                <div class="mb-3">
                    <label class="form-label">Lokasi Kerja</label>
                    <select name="lokasi" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Remote">Remote</option>
                        <option value="Onsite">Onsite</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>
                </div>

                <!-- Gaji -->
                <div class="mb-3">
                    <label class="form-label">Gaji</label>
                    <input type="text" name="gaji" class="form-control" placeholder="Rp 5.000.000 - Rp 8.000.000" required>
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori_id" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('createjob') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        Simpan Lowongan
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>
