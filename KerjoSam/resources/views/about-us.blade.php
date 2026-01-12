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
        }
        
        .flowing-wave-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 0;
        }
        
        .flowing-wave-bg::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: 
                radial-gradient(ellipse 800px 500px at 15% 20%, rgba(230, 190, 190, 0.35) 0%, transparent 50%),
                radial-gradient(ellipse 700px 600px at 85% 30%, rgba(250, 210, 210, 0.25) 0%, transparent 50%),
                radial-gradient(ellipse 900px 400px at 10% 75%, rgba(240, 200, 200, 0.3) 0%, transparent 50%),
                radial-gradient(ellipse 600px 500px at 90% 80%, rgba(255, 220, 220, 0.2) 0%, transparent 50%);
        }
        
        .flowing-wave-bg::after {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            top: -25%;
            right: -25%;
            background: 
                radial-gradient(ellipse 600px 400px at 70% 40%, rgba(245, 205, 205, 0.2) 0%, transparent 60%),
                radial-gradient(ellipse 500px 600px at 20% 60%, rgba(235, 195, 195, 0.25) 0%, transparent 60%);
        }

        .arc-ring {
            position: absolute;
            border-radius: 50%;
            border-style: solid;
        }
    </style>
</head>

<body class="bg-white relative">

<!-- Flowing Wave Background -->
<div class="flowing-wave-bg"></div>

<!-- ================= NAVBAR ================= -->
 <nav class="w-full bg-white shadow-sm relative z-10">
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
<!-- ================= END NAVBAR ================= -->

<!-- ================= MAIN CONTENT ================= -->
<section class="relative w-full min-h-screen overflow-hidden">

    <!-- Arc Decorations (Top Right) -->
    <div class="arc-ring" style="top: 60px; right: 80px; width: 120px; height: 120px; border-width: 6px; border-color: rgba(239, 68, 68, 0.15);"></div>
    <div class="arc-ring" style="top: 90px; right: 110px; width: 150px; height: 150px; border-width: 6px; border-color: rgba(239, 68, 68, 0.12);"></div>
    <div class="arc-ring" style="top: 130px; right: 150px; width: 180px; height: 180px; border-width: 6px; border-color: rgba(239, 68, 68, 0.09);"></div>
    <div class="arc-ring" style="top: 180px; right: 200px; width: 220px; height: 220px; border-width: 6px; border-color: rgba(239, 68, 68, 0.06);"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 py-12 relative z-10">
        
        <!-- TOP SECTION: KerjoSam + Image -->
        <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
            
            <!-- LEFT: Large KerjoSam Text -->
            <div class="relative">
                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black leading-none tracking-tight">
                    <span class="text-red-500">Kerjo</span><span class="text-orange-400">Sam</span>
                </h1>
            </div>

            <!-- RIGHT: Team Image -->
            <div class="relative max-w-md mx-auto md:ml-auto">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&auto=format&fit=crop" 
                     alt="Team collaboration"
                     class="w-full rounded-2xl shadow-xl object-cover">
                
                <!-- Decorative circles -->
                <div class="absolute -top-3 -right-3 w-12 h-12 bg-red-400 rounded-full opacity-20"></div>
                <div class="absolute -bottom-3 -left-3 w-16 h-16 bg-orange-400 rounded-full opacity-20"></div>
            </div>
        </div>

        <!-- BOTTOM SECTION: Description + ABOUT KerjoSam -->
        <div class="grid md:grid-cols-2 gap-12 items-center mt-20">
            
            <!-- LEFT: Description Box -->
            <div class="">
                <div class="space-y-5 text-gray-700 text-sm md:text-base leading-relaxed">
                    <p>
                        <span class="font-bold text-red-600">KerjoSam</span> adalah platform pencarian 
                        kerja yang berfokus pada wilayah Malang dan sekitarnya, yang menghubungkan 
                        pencari kerja dengan perusahaan, UMKM, dan usaha lokal.
                    </p>
                    
                    <p>
                        Kami mempermudahkan proses pencari kerja dengan perusahaan, UMKM, 
                        dan usaha lokal. Kami hadir untuk membantu mendapatkan 
                        kerja terbaru mulai dari pekerjaan full-time, part-time, 
                        hingga freelance dengan proses yang mudah dan cepat.
                    </p>
                </div>

                <div class="mt-8 text-center">
                    <p class="text-lg md:text-xl text-gray-800 italic">
                        Kerjo Bareng, Sukses Bareng
                    </p>
                </div>
            </div>

            <!-- RIGHT: Large ABOUT Text -->
            <div class="relative text-center md:text-right">
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight tracking-tight">
                    <div class="text-red-500 mb-2">ABOUT</div>
                    <div>
                        <span class="text-red-600">Kerjo</span><span class="text-orange-500">Sam</span>
                    </div>
                </h2>

                <!-- Arc Decorations (Bottom Right) -->
                <div class="arc-ring hidden md:block" style="bottom: -30px; right: -30px; width: 90px; height: 90px; border-width: 5px; border-color: rgba(239, 68, 68, 0.15);"></div>
                <div class="arc-ring hidden md:block" style="bottom: -60px; right: -60px; width: 120px; height: 120px; border-width: 5px; border-color: rgba(239, 68, 68, 0.12);"></div>
                <div class="arc-ring hidden md:block" style="bottom: -90px; right: -90px; width: 150px; height: 150px; border-width: 5px; border-color: rgba(239, 68, 68, 0.09);"></div>
            </div>
        </div>
    </div>
</section>

</body>
</html>