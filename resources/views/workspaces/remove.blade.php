<x-layout>
  <div class="mx-auto flex max-w-5xl flex-col gap-y-4 p-4">
    <h1 class="text-2xl font-bold">Delete Workspace</h1>
    <div>
      <p class="mb-4">
        You will lose all data that is associated with this
        workspace.
      </p>
      <form
        class="w-full"
        action=""
        method="POST"
      >
        @csrf
        <button
          type="submit"
          class="btn-danger w-full"
        >
          Delete
        </button>
      </form>
    </div>
  </div>
</x-layout>