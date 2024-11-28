<x-guest-layout>
  <x-card>
    <h1 class="mb-4 text-center text-2xl font-bold">Sign in</h1>
    <!-- Session Status -->
    <x-auth-session-status
      class="mb-4"
      :status="session('status')"
    />

    <form
      method="POST"
      action="{{ route('login') }}"
    >
      @csrf

      <!-- Email Address -->
      <div>
        <x-input-label
          for="email"
          :value="__('Email')"
        />
        <x-text-input
          id="email"
          class="mt-1 block w-full"
          type="email"
          name="email"
          :value="old('email')"
          required
          autofocus
          autocomplete="username"
        />
        <x-input-error
          :messages="$errors->get('email')"
          class="mt-2"
        />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-input-label
          for="password"
          :value="__('Password')"
        />

        <x-text-input
          id="password"
          class="mt-1 block w-full"
          type="password"
          name="password"
          required
          autocomplete="current-password"
        />

        <x-input-error
          :messages="$errors->get('password')"
          class="mt-2"
        />
      </div>

      <!-- Remember Me -->
      <div class="mt-4 block">
        <label
          for="remember_me"
          class="inline-flex items-center"
        >
          <input
            id="remember_me"
            type="checkbox"
            name="remember"
            class="rounded border border-zinc-600 bg-inherit"
          >
          <span
            class="ms-2 text-sm text-zinc-600 dark:text-zinc-400">{{ __('Remember me') }}</span>
        </label>
      </div>

      <div class="mt-4 flex items-center justify-end">
        @if (Route::has('password.request'))
          <a
            class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
            href="{{ route('password.request') }}"
          >
            {{ __('Forgot your password?') }}
          </a>
        @endif

        <x-primary-button class="ms-3">
          {{ __('Log in') }}
        </x-primary-button>
      </div>
    </form>
  </x-card>
</x-guest-layout>
