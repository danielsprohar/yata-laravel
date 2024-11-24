<x-layout>
  {{-- <Modal /> --}}
  <div class="mx-auto flex max-w-5xl flex-col gap-y-4 p-4">
    <div class="flex items-center gap-x-2">
      <h1 class="text-2xl font-bold">Workspaces</h1>
      <a
        href="/workspaces/create"
        aria-label="Create workspace"
        title="Create workspace"
        class="btn-icon"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 4.5v15m7.5-7.5h-15"
          />
        </svg>
      </a>
    </div>

    <div
      class="overflow-x-auto rounded-lg border border-gray-200 dark:border-zinc-800"
    >
      <table
        class="min-w-full divide-y-2 divide-zinc-200 text-left text-sm dark:divide-zinc-700 dark:bg-zinc-900"
      >
        <thead>
          <tr>
            <th
              class="whitespace-nowrap px-4 py-2 font-bold text-gray-900 dark:text-white"
            >
              ID
            </th>
            <th
              class="whitespace-nowrap px-4 py-2 font-bold text-gray-900 dark:text-white"
            >
              Name
            </th>
            <th class="px-4 py-2"></th>
          </tr>
        </thead>

        <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
          @foreach ($workspaces as $workspace)
            <tr>
              <td
                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"
              >
                {{ $workspace['id'] }}
              </td>
              <td
                class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200"
              >
                {{ $workspace['name'] }}
              </td>
              <td>
                <div class="flex items-center gap-x-1">
                  <a
                    class="hover:underline"
                    href="/workspaces/{{ $workspace['id'] }}"
                  >
                    View
                  </a>
                  <span>&vert;</span>
                  <a
                    href="/workspaces/{{ $workspace['id']}}/delete"
                    class="hover:underline"
                  >
                    Delete
                  </a>
                </div>
              </td>
          @endforeach

        </tbody>
      </table>
    </div>
    <div>
      {{ $workspaces->links() }}
    </div>
  </div>
</x-layout>
