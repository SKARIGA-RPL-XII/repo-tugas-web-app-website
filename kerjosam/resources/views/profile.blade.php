<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KerjoSam | Sistem Mencari Lowongan Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        *::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen py-12">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
            <div class="text-center">
                <div class="w-20 h-20 rounded-full bg-red-500 flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ auth()->user()->name }}</h1>
                <p class="text-gray-600 mb-6">{{ auth()->user()->email }}</p>

                <div class="space-y-3">
                    <a href="/" class="block w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition-colors">
                        Back to Home
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition-colors">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
