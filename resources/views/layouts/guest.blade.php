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
            class="rounded-md bg-cyan-500 px-3 py-2 text-sm font-medium text-black hover:bg-cyan-400"
          >
            Sign in
          </a>
          <a
            href="/register"
            class="rounded-md px-3 py-2 text-sm font-medium text-zinc-300 hover:bg-zinc-700 hover:text-white"
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
