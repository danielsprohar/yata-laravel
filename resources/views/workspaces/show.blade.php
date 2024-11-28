<x-app-layout>
  <div class="container">
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
            class="block transition hover:text-zinc-700 hover:underline dark:hover:text-zinc-200"
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
          {{ $workspace->name }}
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

    <div class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">My Projects</h1>
      <a
        class="btn-primary"
        href="/workspaces/{{ $workspace->id }}/create/project"
      >
        Create
      </a>
    </div>
    @if (count($workspace->projects) == 0)
      <div>
        <p>Create your first project.</p>
      </div>
    @endif

    <div class="flex items-center gap-4">
      @foreach ($workspace->projects as $project)
        <a
          href="/projects/{{ $project->id }}"
          class="hover:bg-zinc-100 hover:dark:bg-zinc-800"
        >
          <x-card>
            {{ $project->name }}
          </x-card>
        </a>
      @endforeach
    </div>
  </div>
</x-app-layout>
