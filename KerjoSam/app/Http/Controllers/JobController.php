<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        // Ambil lowongan berdasarkan user yang login
        $jobs = Job::where('user_id', Auth::id())->latest()->get();

        return view('jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        // Data dummy untuk demo
        $job = [
            'id' => $id,
            'title' => 'Frontend Developer',
            'company' => 'Tech Corp',
            'location' => 'Jakarta, Indonesia',
            'salary' => 'Rp 6 – 10 Juta',
            'type' => 'Full Time',
            'remote' => 'Remote',
            'category' => 'Frontend',
            'description' => 'We are looking for a Frontend Developer experienced in HTML, CSS, JavaScript, and modern frameworks like React or Vue.js. You will be responsible for creating user-friendly web applications.',
            'requirements' => [
                'Bachelor degree in Computer Science or related field',
                'Minimum 2 years experience in Frontend Development',
                'Proficient in HTML, CSS, JavaScript',
                'Experience with React.js or Vue.js',
                'Understanding of responsive design',
                'Good communication skills'
            ],
            'responsibilities' => [
                'Develop user-facing features using modern frameworks',
                'Collaborate with design team to implement UI/UX',
                'Optimize applications for maximum speed and scalability',
                'Maintain code quality and organization',
                'Participate in code reviews'
            ]
        ];

        return view('job-detail', compact('job'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'type' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
        ]);

        // Tambahkan user_id dari user yang login
        $validated['user_id'] = Auth::id();

        // Simpan ke database
        Job::create($validated);

        return redirect()->route('job.index')->with('success', 'Lowongan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil job milik user yang login
        $job = Job::where('user_id', Auth::id())->findOrFail($id);

        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'type' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
        ]);

        // Update hanya job milik user yang login
        $job = Job::where('user_id', Auth::id())->findOrFail($id);
        $job->update($validated);

        return redirect()->route('job.index')->with('success', 'Lowongan berhasil diupdate!');
    }

    public function destroy($id)
    {
        // Hapus hanya job milik user yang login
        $job = Job::where('user_id', Auth::id())->findOrFail($id);
        $job->delete();

        return redirect()->route('job.index')->with('success', 'Lowongan berhasil dihapus!');
    }
}