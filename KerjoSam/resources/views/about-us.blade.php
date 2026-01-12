<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About | KerjoSam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        /* Background Wave Sections */
        .wave-section {
            position: absolute;
            width: 100%;
            left: 0;
            overflow: hidden;
            z-index: 0;
        }
        
        /* Top Wave Section */
        .wave-section-top {
            top: 0;
            height: 40%;
            background: linear-gradient(135deg, rgba(255, 240, 240, 0.9) 0%, rgba(255, 245, 245, 0.7) 100%);
        }
        
        /* Top Wave Layer 1 */
        .top-wave-1 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path d="M0 60L50 55C100 50 200 40 300 45C400 50 500 70 600 75C700 80 800 70 900 60C1000 50 1100 40 1150 35L1200 30V120H1150C1100 120 1000 120 900 120C800 120 700 120 600 120C500 120 400 120 300 120C200 120 100 120 50 120H0Z" fill="rgba(230, 190, 190, 0.5)"/></svg>');
            background-size: cover;
        }
        
        /* Top Wave Layer 2 */
        .top-wave-2 {
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 150px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 150" xmlns="http://www.w3.org/2000/svg"><path d="M0 80L50 75C100 70 200 60 300 65C400 70 500 90 600 95C700 100 800 90 900 80C1000 70 1100 60 1150 55L1200 50V150H1150C1100 150 1000 150 900 150C800 150 700 150 600 150C500 150 400 150 300 150C200 150 100 150 50 150H0Z" fill="rgba(245, 220, 220, 0.4)"/></svg>');
            background-size: cover;
        }
        
        /* Middle Wave Section */
        .wave-section-middle {
            top: 40%;
            height: 20%;
            background: linear-gradient(to bottom, rgba(255, 245, 245, 0.3) 0%, rgba(255, 250, 250, 0.2) 100%);
        }
        
        /* Bottom Wave Section */
        .wave-section-bottom {
            bottom: 0;
            height: 40%;
            background: linear-gradient(45deg, rgba(255, 240, 240, 0.9) 0%, rgba(255, 245, 245, 0.7) 100%);
        }
        
        /* Bottom Wave Layer 1 */
        .bottom-wave-1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path d="M0 60L50 65C100 70 200 80 300 75C400 70 500 50 600 45C700 40 800 50 900 60C1000 70 1100 80 1150 85L1200 90V0H1150C1100 0 1000 0 900 0C800 0 700 0 600 0C500 0 400 0 300 0C200 0 100 0 50 0H0Z" fill="rgba(230, 190, 190, 0.5)"/></svg>');
            background-size: cover;
            transform: rotate(180deg);
        }
        
        /* Bottom Wave Layer 2 */
        .bottom-wave-2 {
            position: absolute;
            top: -10px;
            left: 0;
            width: 100%;
            height: 150px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 150" xmlns="http://www.w3.org/2000/svg"><path d="M0 80L50 85C100 90 200 100 300 95C400 90 500 70 600 65C700 60 800 70 900 80C1000 90 1100 100 1150 105L1200 110V0H1150C1100 0 1000 0 900 0C800 0 700 0 600 0C500 0 400 0 300 0C200 0 100 0 50 0H0Z" fill="rgba(245, 220, 220, 0.4)"/></svg>');
            background-size: cover;
            transform: rotate(180deg);
        }
        
        /* Side Wave Sections */
        .wave-section-left {
            position: absolute;
            top: 0;
            left: 0;
            width: 15%;
            height: 100%;
            background: linear-gradient(90deg, rgba(240, 200, 200, 0.35) 0%, transparent 100%);
            clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
        }
        
        .wave-section-right {
            position: absolute;
            top: 0;
            right: 0;
            width: 15%;
            height: 100%;
            background: linear-gradient(270deg, rgba(240, 200, 200, 0.35) 0%, transparent 100%);
            clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
        }

        /* Arc Decorations */
        .arc-ring {
            position: absolute;
            border-radius: 50%;
            border-style: solid;
        }
        
        /* Main content container */
        .main-content {
            position: relative;
            z-index: 10;
        }

        /* Hero Section Styles */
        .hero-section {
            margin-top: -3rem;
            position: relative;
            z-index: 20;
        }
        
        /* Category Button Active State */
        .category-btn.active {
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-white relative">

<!-- Background Wave Sections -->
<div class="wave-section wave-section-top">
    <div class="top-wave-1"></div>
    <div class="top-wave-2"></div>
</div>

<div class="wave-section wave-section-middle"></div>

<div class="wave-section wave-section-bottom">
    <div class="bottom-wave-1"></div>
    <div class="bottom-wave-2"></div>
</div>

<div class="wave-section-left"></div>
<div class="wave-section-right"></div>

<!-- ================= NAVBAR ================= -->
<nav class="w-full bg-white shadow-sm relative z-20">
    <div class="w-full px-8 md:px-16 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="/images/logo.png" alt="Logo" class="w-12 h-12 md:w-32 md:h-10 rounded-full object-cover" />
        </div>

        <div class="flex items-center gap-6">
            <!-- MENU KIRI -->
            <ul class="hidden md:flex gap-8 text-sm text-gray-600">
                <li class="hover:text-red-500 cursor-pointer">
                    <a href="/dashboard">Home</a>
                </li>
                <li class="hover:text-red-500 cursor-pointer">
                    <a href="#jobs">Jobs</a>
                </li>
                <li class="hover:text-red-500 cursor-pointer">
                    <a href="{{ route('about') }}">About</a>
                </li>
            </ul>

            <!-- USER PROFILE -->
            <div class="relative">
                <!-- Trigger -->
                <button onclick="toggleDropdown()" class="flex items-center gap-2 focus:outline-none">
                    <div class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center text-white text-sm font-semibold">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <span class="text-sm text-gray-600">
                        {{ auth()->user()->name }}
                    </span>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <div id="userDropdown" class="absolute right-0 mt-3 w-40 bg-white rounded-xl shadow-lg border border-gray-100 hidden">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-50">
                        Profile
                    </a>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-50">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- ================= MAIN CONTENT ================= -->
<main class="main-content w-full">
    <div class="max-w-7xl mx-auto px-6 md:px-16 py-24 mt-16">
        
        <!-- TOP SECTION: KerjoSam + Image -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
            
            <!-- LEFT: Large KerjoSam Text -->
            <div class="relative">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-black leading-none tracking-tight">
                    <span class="text-red-500">Kerjo</span><span class="text-orange-400">Sam</span>
                </h1>
            </div>

            <!-- RIGHT: Team Image -->
            <div class="relative max-w-lg mx-auto md:ml-auto">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&auto=format&fit=crop&q=80" 
                         alt="Team collaboration"
                         class="w-full rounded-3xl shadow-2xl object-cover aspect-video">
                    
                    <!-- Decorative circles -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-red-400 rounded-full opacity-25"></div>
                    <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-orange-400 rounded-full opacity-25"></div>
                </div>
            </div>
        </div>

        <!-- BOTTOM SECTION: Description + ABOUT KerjoSam -->
        <div class="grid md:grid-cols-2 gap-16 items-center">
            
            <!-- LEFT: Description Box -->
            <div class="">
                <div class="space-y-6 text-gray-700 text-base leading-relaxed">
                    <p>
                        <span class="font-bold text-red-600">KerjoSam</span> adalah platform pencarian 
                        kerja yang berfokus pada wilayah Malang dan sekitarnya, yang menghubungkan 
                        pencari kerja dengan perusahaan, UMKM, dan usaha lokal.
                    </p>
                    
                    <p>
                        Kami mempermudah proses pencari kerja dengan perusahaan, UMKM, 
                        dan usaha lokal. Kami hadir untuk membantu mendapatkan 
                        kerja terbaru mulai dari pekerjaan full-time, part-time, 
                        hingga freelance dengan proses yang mudah dan cepat.
                    </p>
                    
                </div>

                <div class="mt-10 text-center">
                    <p class="text-xl text-gray-800">
                        Kerjo Bareng, Sukses Bareng
                    </p>
                </div>
            </div>

            <!-- RIGHT: Large ABOUT Text -->
            <div class="relative text-center md:text-right">
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black leading-tight tracking-tight">
    <div class="text-red-500 mb-1 md:mb-2">ABOUT</div>
    <div>
        <span class="text-red-600">Kerjo</span><span class="text-orange-500">Sam</span>
    </div>
</h2>
                <!-- Arc Decorations (Bottom Right) -->
                <div class="arc-ring hidden md:block" style="bottom: -40px; right: -40px; width: 100px; height: 100px; border-width: 6px; border-color: rgba(239, 68, 68, 0.15);"></div>
                <div class="arc-ring hidden md:block" style="bottom: -75px; right: -75px; width: 140px; height: 140px; border-width: 6px; border-color: rgba(239, 68, 68, 0.12);"></div>
                <div class="arc-ring hidden md:block" style="bottom: -110px; right: -110px; width: 180px; height: 180px; border-width: 6px; border-color: rgba(239, 68, 68, 0.09);"></div>
            </div>
        </div>
    </div>
</main>

</body>
</html>