<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
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
}