<x-layout>
  <div class="mx-auto flex max-w-5xl flex-col gap-y-4 p-4">
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

        <button
          type="submit"
          class="btn-primary"
        >
          Submit
        </button>
      </form>
    </x-card>
  </div>
</x-layout>
