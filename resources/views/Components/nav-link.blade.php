<a
  {{ $attributes->merge([
      'class' => 'block rounded-lg px-4 py-2 text-sm font-medium hover:bg-gray-100 dark:hover:bg-zinc-800',
  ]) }}>
  {{ $slot }}
</a>
