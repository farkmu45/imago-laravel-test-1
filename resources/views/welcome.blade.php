<x-app-layout>
    @guest
    <h1 class="text-center mt-32 text-3xl font-bold text-gray-800">
        Hello, guest, you're not authenticated.
      </h1>
    @else
      <h1 class="text-center mt-32 text-3xl font-bold text-gray-800">
        Hello, {{ Auth::user()->username }}, you're authenticated.
      </h1>
    @endguest
</x-app-layout>
