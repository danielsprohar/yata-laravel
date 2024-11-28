<x-app-layout>
  <div class="container">
    <h1 class="text-2xl font-bold">{{ $workspace->name }}</h1>
    <hr />
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-bold">My Projects</h2>
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
