<x-app-layout>
  <div class="container">
    <h1 class="text-2xl font-bold">Create Project</h1>
    <x-card class="mt-4">
      <form
        action="/projects"
        method="post"
        class="flex flex-col gap-y-4"
      >
        @csrf
        <input
          type="hidden"
          id="workspaceId"
          name="workspaceId"
          data-test-id="workspaceId"
          value="{{ $workspace->id }}"
        />

        <div>
          <x-input-label
            for="name"
            :value="__('Name')"
          />
          <input
            id="name"
            name="name"
            class="input mt-1 block w-full"
            type="text"
            :value="old('name')"
            required
            autofocus
          />
        </div>

        <div class="flex flex-col">
          <label for="projectView">View</label>
          <select
            id="projectView"
            name="projectView"
            class="select"
          >
            @foreach ($viewOptions as $option)
              <option value="{{ $option }}">
                <span class="uppercase">
                  {{ $option }}
                </span>
              </option>
            @endforeach
          </select>
        </div>

        <div class="mt-4 flex items-center justify-end gap-x-2">
          <a
            class="btn"
            href="/workspaces/{{ $workspace->id }}"
          >
            Cancel
          </a>
          <button
            class="btn-primary"
            type="submit"
          >
            Create
          </button>
        </div>
      </form>
    </x-card>
  </div>
</x-app-layout>
