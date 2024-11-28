<x-app-layout>
  <div class="container">
    <h1 class="text-2xl font-bold">Create Workspace</h1>

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
            required
          />
          @error('name')
            <div class="error">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="flex items-center justify-end gap-x-2">
          <button
            form="cancelForm"
            aria-label="Cancel"
            class="btn"
          >
            Cancel
          </button>
          <button
            type="submit"
            class="btn-primary"
            aria-label="Create workspace"
          >
            Create
          </button>
        </div>
      </form>
      <form
        id="cancelForm"
        action="/workspaces"
        method="get"
      ></form>
    </x-card>
  </div>
</x-app-layout>
