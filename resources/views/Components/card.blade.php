<div
  {{ $attributes->merge([
      'class' =>
          'border border-zinc-200 p-4 shadow dark:border-0 dark:bg-zinc-900 sm:rounded-lg sm:p-8',
  ]) }}
>
  {{ $slot }}
</div>
