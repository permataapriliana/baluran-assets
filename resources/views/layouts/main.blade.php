<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Baluran Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @stack('styles')
</head>
<body class="bg-gray-100 font-sans antialiased text-gray-800">
    <div class="flex min-h-screen">

        <aside class="w-64 bg-green-800 text-white shadow-lg hidden md:flex flex-col">
            <div class="p-6 text-2xl font-extrabold text-white border-b border-green-700">
                <span class="text-green-300">Baluran</span> Admin
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="/dashboard" class="flex items-center space-x-3 py-2 px-4 rounded-lg transition-colors duration-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-chart-line fa-fw"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/berita" class="flex items-center space-x-3 py-2 px-4 rounded-lg transition-colors duration-200 hover:bg-green-700 hover:text-white">
                    <i class="far fa-newspaper fa-fw"></i>
                    <span>Berita</span>
                </a>
                <a href="/announcements" class="flex items-center space-x-3 py-2 px-4 rounded-lg transition-colors duration-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-bullhorn fa-fw"></i>
                    <span>Pengumuman</span>
                </a>
                <a href="/event" class="flex items-center space-x-3 py-2 px-4 rounded-lg transition-colors duration-200 hover:bg-green-700 hover:text-white">
                    <i class="far fa-calendar-alt fa-fw"></i>
                    <span>Event</span>
                </a>
                <a href="{{ route('admin.galeri.index') }}" class="flex items-center space-x-3 py-2 px-4 rounded-lg transition-colors duration-200 hover:bg-green-700 hover:text-white">
                    <i class="far fa-image fa-fw"></i>
                    <span>Galeri</span>
                </a>
            </nav>
            <div class="p-4 border-t border-green-700">
                <a href="{{ route('logout') }}" class="flex items-center space-x-3 py-2 px-4 rounded-lg transition-colors duration-200 text-red-400 hover:bg-green-700">
                    <i class="fas fa-sign-out-alt fa-fw"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto">
            <header class="bg-white shadow-sm p-4 sticky top-0 z-10">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-gray-800">@yield('title')</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm font-medium text-gray-600 hidden sm:block">Selamat datang, Admin!</span>
                        <img class="h-10 w-10 rounded-full object-cover" src="https://ui-avatars.com/api/?name=AD&background=22c55e&color=fff&bold=true" alt="Avatar">
                    </div>
                </div>
            </header>

            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>
    @yield('scripts')
</body>
</html>