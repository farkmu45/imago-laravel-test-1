<x-app-layout>
  <div class="flex min-h-screen items-center justify-center bg-gray-50 px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Create your account
        </h2>
      </div>
      <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="space-y-4 rounded-md shadow-sm">
          <div>
            <label class="sr-only" for="username">Username</label>
            <input
              class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
              id="username" name="username" type="text" value="{{ old('username') }}" required
              placeholder="Username">
            @error('username')
              <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label class="sr-only" for="email">Email address</label>
            <input
              class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
              id="email" name="email" type="email" value="{{ old('email') }}" required
              placeholder="Email address">
            @error('email')
              <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label class="sr-only" for="password">Password</label>
            <input
              class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
              id="password" name="password" type="password" required placeholder="Password">
            @error('password')
              <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label class="sr-only" for="password_confirmation">Confirm Password</label>
            <input
              class="relative block w-full appearance-none rounded-lg border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
              id="password_confirmation" name="password_confirmation" type="password" required
              placeholder="Confirm Password">
          </div>
        </div>

        <div>
          <button
            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            type="submit">
            Register
          </button>
        </div>
      </form>
      <div class="text-center">
        <p class="text-sm text-gray-600">
          Already have an account?
          <a class="font-medium text-indigo-600 hover:text-indigo-500" href="{{ route('login') }}">
            Login here
          </a>
        </p>
      </div>
    </div>
  </div>
</x-app-layout>
