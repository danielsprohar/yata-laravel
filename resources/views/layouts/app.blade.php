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
  id="yata-app"
  class="flex h-full w-full font-sans antialiased dark:bg-zinc-950 dark:text-white"
>
  <x-sidebar>
    <!-- Page Heading -->
    @isset($header)
      <header>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endisset
    {{ $slot }}
  </x-sidebar>
</body>

</html>
