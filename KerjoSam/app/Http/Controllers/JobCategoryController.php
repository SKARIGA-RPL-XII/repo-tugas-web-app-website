<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use App\Models\User;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function index()
    {
        $categories = JobCategory::all();
        $users = User::where('role', 'user')->take(4)->get();
        $companies = User::where('role', 'perusahaan')->take(4)->get();
        $totalUsers = User::where('role', 'user')->count();
        $totalCompanies = User::where('role', 'perusahaan')->count();
        
        return view('tools', compact('categories', 'users', 'companies', 'totalUsers', 'totalCompanies'));
    }

    public function showMoreUsers()
    {
        $users = User::where('role', 'user')->get();
        return view('show-moreuser', compact('users'));
    }

    public function showMoreCompanies()
    {
        $companies = User::where('role', 'perusahaan')->get();
        return view('show-more-perusahaan', compact('companies'));
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success', 'User berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:job_categories,name'
        ]);

        JobCategory::create([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name),
            'is_active' => true
        ]);

        return redirect()->route('admin.tools')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:job_categories,name,' . $id
        ]);

        $category = JobCategory::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'slug' => \Illuminate\Support\Str::slug($request->name)
        ]);

        return redirect()->route('admin.tools')->with('success', 'Kategori berhasil diupdate!');
    }

    public function destroy($id)
    {
        $category = JobCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.tools')->with('success', 'Kategori berhasil dihapus!');
    }
}