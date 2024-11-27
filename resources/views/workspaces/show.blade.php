<x-app-layout>
  <div class="flex flex-col gap-y-4">
    <h1 class="text-2xl font-bold">Workspace</h1>
    <div class="flow-root">
      <dl class="-my-3 divide-y divide-gray-100 text-sm dark:divide-gray-700">
        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900 dark:text-white">ID</dt>
          <dd class="text-gray-700 dark:text-gray-200 sm:col-span-2">
            {{ $workspace['id'] }}
          </dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900 dark:text-white">Name</dt>
          <dd class="text-gray-700 dark:text-gray-200 sm:col-span-2">
            {{ $workspace['name'] }}
          </dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900 dark:text-white">Created at</dt>
          <dd class="text-gray-700 dark:text-gray-200 sm:col-span-2">
            {{ $workspace['created_at'] }}
          </dd>
        </div>
      </dl>
    </div>
    <div>
      <a href="/workspaces">Back to list</a>
    </div>
  </div>
</x-app-layout>
