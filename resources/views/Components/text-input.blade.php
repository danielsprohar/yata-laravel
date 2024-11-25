@props(['disabled' => false])

<input
  @disabled($disabled)
  {{ $attributes->merge(['class' => 'border-zinc-300 dark:border-zinc-800 dark:bg-zinc-900 focus:border-zinc-500 dark:focus:border-zinc-600 focus:ring-zinc-500 dark:focus:ring-zinc-600 rounded-md shadow-sm']) }}
>
