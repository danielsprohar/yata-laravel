<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >

  <title>YATA</title>

  <!-- Fonts -->
  <link
    rel="preconnect"
    href="https://fonts.bunny.net"
  >
  <link
    href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
    rel="stylesheet"
  />

  @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased dark:bg-zinc-950 dark:text-white">
  <div class="flex">
    {{-- Sidenav --}}
    <div
      class="flex h-screen w-52 flex-col justify-between border-e bg-white dark:border-zinc-800 dark:bg-zinc-900"
    >
      <div class="px-2 py-4">
        <ul class="mt-6 space-y-1">
          <li>
            <x-nav-link
              href="/"
              :active="request()->is('/')"
            >
              Home
            </x-nav-link>
          </li>

          <li>
            <x-nav-link
              href="/about"
              :active="request()->is('about')"
            >
              About
            </x-nav-link>
          </li>

          <li>
            <x-details>
              <x-slot:title>
                Workspaces
              </x-slot:title>
              <ul>
                <li>
                  <x-nav-link
                    href="/"
                    type="button"
                  >
                    workspace 1
                  </x-nav-link>
                </li>
                <li>
                  <x-nav-link
                    href="/"
                    type="button"
                  >
                    workspace 2
                  </x-nav-link>
                </li>
              </ul>
            </x-details>
          </li>
        </ul>
      </div>

      <div class="sticky inset-x-0 bottom-0 px-4 py-6">
        Sticky footer
      </div>
    </div>
    {{-- Content --}}
    <main>
      {{ $slot }}
    </main>
  </div>
</body>

</html>
