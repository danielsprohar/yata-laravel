<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >

  <title>{{ config('app.name', 'YATA') }}</title>

  <!-- Fonts -->
  <link
    rel="preconnect"
    href="https://fonts.bunny.net"
  >
  <link
    href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
    rel="stylesheet"
  />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
  id="app"
  class="font-sans antialiased dark:bg-zinc-950 dark:text-white"
>
  <nav class="bg-zinc-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-end">
        <div class="flex space-x-4">
          <a
            href="/login"
            class="btn-primary"
          >
            Sign in
          </a>
          <a
            href="/register"
            class="btn-primary"
          >
            Sign up
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="flex min-h-screen flex-col items-center justify-center p-2">
    <div class="w-full sm:max-w-md">
      {{ $slot }}
    </div>
  </div>
</body>

</html>
