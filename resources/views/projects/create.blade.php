<x-app-layout>
  <div class="container">
    <h1 class="text-2xl font-bold">{{ $workspace->name }}</h1>

    <x-card class="mt-4">
      <h2 class="text-2xl font-bold">Create Project</h2>

      <form
        action="/projects"
        method="post"
        class="mt-4 flex flex-col gap-y-4"
      >
        @csrf
        <input
          type="hidden"
          id="workspaceId"
          name="workspaceId"
          data-test-id="workspaceId"
          value="{{ $workspace->id }}"
        />

        <div class="flex flex-col gap-x-2">
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
          @error('name')
            <div class="error">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="flex flex-col">
          <label for="view">View</label>
          <select
            id="view"
            name="view"
            class="select"
          >
            @foreach ($viewOptions as $option)
              <option value="{{ $option }}">
                {{ $option }}
              </option>
            @endforeach
          </select>
          @error('view')
            <div class="error">
              {{ $message }}
            </div>
          @enderror
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
