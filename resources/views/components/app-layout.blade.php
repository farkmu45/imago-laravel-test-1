<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
          <div class="flex">
            <!-- Logo -->
            <div class="flex flex-shrink-0 items-center">
              <a class="text-xl font-bold text-gray-800" href="/">
                {{ config('app.name', 'Laravel') }}
              </a>
            </div>
          </div>

          <!-- Navigation Links -->
          <div class="flex items-center">
            @guest
              <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900"
                href="{{ route('login') }}">
                Login
              </a>
              <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900"
                href="{{ route('register') }}">
                Register
              </a>
            @else
              <span class="rounded-md px-3 py-2 text-sm font-medium text-gray-600">
                {{ Auth::user()->username }}
              </span>
              <form class="inline" method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900" type="submit">
                  Logout
                </button>
              </form>
            @endguest
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
</body>

</html>
