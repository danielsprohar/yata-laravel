<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-bold leading-tight">
      {{ __('Inbox') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <p>
        {{ __("You're logged in!") }}
      </p>
    </div>
  </div>
</x-app-layout>
