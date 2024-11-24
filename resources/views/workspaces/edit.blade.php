<x-layout>
  <div class="mx-auto flex max-w-5xl flex-col gap-y-4 p-4">
    <h1 class="text-2xl font-bold">Edit Workspace</h1>

    <x-card>
      <form
        action="/workspaces"
        method="POST"
        class="flex flex-col gap-y-4"
      >
        @csrf
        <div class="flex flex-col gap-y-1">
          <label for="workspaceName">Name</label>
          <input
            type="text"
            name="name"
            id="name"
            class="input"
            autocomplete="off"
            maxlength="128"
            value="{{ $workspace->name }}"
            required
          />
          @error('name')
            <div class="error">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="flex items-center justify-end gap-x-2">
          <a
            href="/workspaces/{{ $workspace->id }}"
            class="btn"
          >
            Cancel
          </a>
          <button
            type="submit"
            class="btn-primary"
          >
            Save
          </button>
        </div>

      </form>
    </x-card>
  </div>
</x-layout>
