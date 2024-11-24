<template>
    <div
        v-if="isVisible"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
    >
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <div class="flex justify-between items-center border-b pb-2 mb-4">
                <h3 class="text-lg font-semibold">Modal Title</h3>
                <button
                    @click="closeModal"
                    class="text-gray-600 hover:text-gray-900"
                >
                    &times;
                </button>
            </div>
            <div>
                <p class="text-gray-700">This is the modal content.</p>
            </div>
            <div class="flex justify-end mt-4">
                <button
                    @click="closeModal"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                >
                    Close
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

const isVisible = ref(true);

function closeModal() {
    isVisible.value = !isVisible.value;
}
</script>
