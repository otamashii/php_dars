<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'University System' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen">
  
  <!-- NAVBAR -->
  <nav class="bg-gradient-to-r from-gray-900 via-indigo-900 to-gray-900 shadow-lg">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <!-- Left section -->
        <div class="flex items-center space-x-3">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
               alt="Logo"
               class="w-8 h-8 bg-white p-1 rounded-full shadow-md" />
          <span class="text-white font-bold text-xl tracking-wide">University System</span>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-2">
          <a href="/" aria-current="page"
            class="{{ request()->is('/') ? 'bg-white/10 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition">
            Home
          </a>
          <a href="/jobs"
            class="{{ request()->is('jobs') ? 'bg-white/10 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition">
            Jobs
          </a>
          <a href="/contact"
            class="{{ request()->is('contact') ? 'bg-white/10 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition">
            Contact
          </a>
          <a href="/students"
            class="{{ request()->is('students') ? 'bg-white/10 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition">
            Students
          </a>
          <a href="/teachers"
            class="{{ request()->is('teachers') ? 'bg-white/10 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition">
            Teachers
          </a>
          <a href="/subjects"
            class="{{ request()->is('subjects') ? 'bg-white/10 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition">
            Subjects
          </a>
          <a href="/users"
            class="{{ request()->is('users') ? 'bg-white/10 text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition">
            Users
          </a>
        </div>

        <!-- Profile -->
        <div class="hidden md:flex items-center space-x-3">
          <img src="https://i.postimg.cc/h43gfxsL/photo-1-2025-10-15-11-35-54.jpg"
               alt="User"
               class="w-9 h-9 rounded-full ring-2 ring-white shadow-lg" />
          <span class="text-gray-200 text-sm font-semibold">Shoxrux</span>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800 border-t border-gray-700">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="/" class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">Home</a>
        <a href="/jobs" class="{{ request()->is('jobs') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">Jobs</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">Contact</a>
        <a href="/students" class="{{ request()->is('students') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">Students</a>
        <a href="/teachers" class="{{ request()->is('teachers') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">Teachers</a>
        <a href="/subjects" class="{{ request()->is('subjects') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">Subjects</a>
        <a href="/users" class="{{ request()->is('users') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">Users</a>
      </div>
    </div>
  </nav>

  <!-- PAGE HEADER -->
  <header class="bg-white shadow-md mt-4 mx-6 rounded-xl">
    <div class="mx-auto max-w-7xl px-4 py-6 flex justify-between items-center">
      <h1 class="text-3xl font-bold tracking-tight text-gray-800">{{ $heading }}</h1>
      <span class="text-sm text-gray-500">{{ date('F j, Y') }}</span>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <main class="mx-6 mt-6 bg-white/80 backdrop-blur-md rounded-2xl shadow-lg border border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-8">
      {{ $slot }}
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="mt-10 bg-gray-900 text-gray-400 text-center py-4 rounded-t-xl">
    <p>© 2025 University Management System — <span class="text-indigo-400">Shoxrux</span></p>
  </footer>

  <script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
