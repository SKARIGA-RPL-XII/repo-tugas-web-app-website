<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')
                ->with('success', 'Login berhasil! Selamat datang kembali.');
        }

        // Jika gagal, kembalikan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }

    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'role' => 'required|in:user,perusahaan',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',

            // Company fields
            'company_name' => 'required_if:role,perusahaan|nullable|string|max:255',
            'company_email' => 'nullable|email|unique:companies,email',
            'company_phone' => 'nullable|string|max:20',
            'company_website' => 'nullable|url',
            'industry' => 'nullable|string|max:255',
            'employees_count' => 'nullable|integer|min:1',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'about' => 'nullable|string|max:1000',
        ], [
            // Custom error messages
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'birth_place.required_if' => 'Tempat lahir wajib diisi untuk user.',
            'birth_date.required_if' => 'Tanggal lahir wajib diisi untuk user.',
            'company_name.required_if' => 'Nama perusahaan wajib diisi.',
        ]);

        try {
            DB::beginTransaction();

            // Create user
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role'],
                'email_verified_at' => now(),
            ]);

            // Create company if role is perusahaan
            if ($validated['role'] === 'perusahaan') {
                Company::create([
                    'user_id' => $user->id,
                    'name' => $validated['company_name'],
                    'email' => $validated['company_email'] ?? null,
                    'phone' => $validated['company_phone'] ?? null,
                    'website' => $validated['company_website'] ?? null,
                    'industry' => $validated['industry'] ?? null,
                    'employees_count' => $validated['employees_count'] ?? null,
                    'address' => $validated['address'] ?? null,
                    'city' => $validated['city'] ?? null,
                    'province' => $validated['province'] ?? null,
                    'about' => $validated['about'] ?? null,
                ]);
            }

            DB::commit();

            return redirect('/')
                ->with('success', 'Registrasi berhasil! Silakan login.');

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Register gagal: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'input' => $request->except('password', 'password_confirmation')
            ]);

            return back()
                ->withErrors(['register' => 'Terjadi kesalahan saat registrasi. Silakan coba lagi.'])
                ->withInput($request->except('password', 'password_confirmation'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Berhasil logout.');
    }
}
