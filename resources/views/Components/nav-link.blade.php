@props([
    'active' => false,
    'type' => 'a',
])

@if ($type == 'a')
  <a
    {{ $attributes }}
    class="{{ $active ? 'bg-gray-100 dark:bg-zinc-950' : '' }} block rounded-lg px-4 py-2 text-sm font-medium hover:bg-gray-100 dark:hover:bg-zinc-800"
    aria-current="{{ $active ? 'page' : 'false' }}"
  >
    {{ $slot }}
  </a>
@elseif ($type == 'button')
  <button
    class="{{ $active ? 'bg-gray-100 dark:bg-zinc-950' : '' }} block rounded-lg px-4 py-2 text-sm font-medium hover:bg-gray-100 dark:hover:bg-zinc-800"
  >
    {{ $slot }}
  </button>
@endif
