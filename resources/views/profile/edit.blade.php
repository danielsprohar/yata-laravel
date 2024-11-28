<x-app-layout>
  <x-slot name="header">
    <h2
      class="text-xl font-semibold leading-tight text-zinc-900 dark:text-zinc-100"
    >
      {{ __('Profile') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
      <x-card>
        <div class="max-w-xl">
          @include('profile.partials.update-profile-information-form')
        </div>
      </x-card>

      <x-card>
        <div class="max-w-xl">
          @include('profile.partials.update-password-form')
        </div>
      </x-card>

      <x-card>
        <div class="max-w-xl">
          @include('profile.partials.delete-user-form')
        </div>
      </x-card>
    </div>
  </div>
</x-app-layout>
