<template>
    <Teleport to="body">
        <div v-if="modalActive"
            class="absolute top-0 left-0 bg-black bg-opacity-40 h-screen w-screen flex justify-center items-center">
            <div class="bg-white rounded-md p-6 max-w-screen-md relative">
                <div class=" absolute top-1 right-2">
                    <button class="hover:text-red-500 transition-all" @click="$emit('closeModal')">X</button>
                </div>

                <div>
                    <slot></slot>
                </div>
            </div>
        </div>
    </Teleport>
</template>

<script setup>
defineEmits([
    "closeModal"
])
defineProps({
    modalActive: {
        type: Boolean,
        default: false,
    }
})
</script>