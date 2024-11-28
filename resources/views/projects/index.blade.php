<x-app-layout>
  <div class="mx-auto flex max-w-5xl flex-col gap-y-4 p-4">
    <div class="flex items-center justify-between">
      <nav aria-label="Breadcrumb">
        <ol
          class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-300"
        >
          <li class="rtl:rotate-180">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="size-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m9 20.247 6-16.5"
              />
            </svg>
          </li>

          <li>
            <a
              href="/workspaces"
              class="block transition hover:text-zinc-700 dark:hover:text-zinc-200"
            >
              Workspaces
            </a>
          </li>

          <li class="rtl:rotate-180">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="size-4"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m9 20.247 6-16.5"
              />
            </svg>
          </li>

          <li>
            Projects
          </li>
        </ol>
      </nav>
      <x-nav-link
        class="btn-primary"
        href="/workspaces/create"
        aria-label="Create workspace"
      >
        Create
      </x-nav-link>
    </div>
  </div>
</x-app-layout>
