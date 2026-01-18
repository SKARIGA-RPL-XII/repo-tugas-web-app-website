<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        // ambil semua data perusahaan
        $companies = Company::latest()->get();

        return view('admin.perusahaan.index', compact('companies'));
    }

    public function destroy($id)
    {
        // cari perusahaan berdasarkan id
        $company = Company::findOrFail($id);

        // hapus perusahaan
        $company->delete();

        return redirect()
            ->route('admin.perusahaan.index')
            ->with('success', 'Perusahaan berhasil dihapus');
    }
}
