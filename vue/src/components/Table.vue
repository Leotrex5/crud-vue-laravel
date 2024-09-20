<template>
    <table class="border border-slate-400 table-auto rounded bg-white text-lg shadow-md text-center">
        <thead>
            <tr>
                <th class="border-slate-600 py-2 border-y">Nome</th>
                <th class="border-slate-600 py-2 border-y">Email</th>
                <th class="border-slate-600 py-2 border-y">Cargo</th>
                <th class="border-slate-600 py-2 border-y">#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-slate-400 px-10 border">Joao</td>
                <td class="border-slate-400 px-10 border">email@email.com</td>
                <td class="border-slate-400 px-10 border">Supervisor</td>
                <td class="border-y border-slate-400">
                    <button @click="toggleModal" class="hover:text-blue-400 transition-all px-1">
                        Editar</button>
                    <button class="hover:text-red-600 hover:scale-105 transition-all px-1">
                        Excluir
                    </button>
                </td>
            </tr>
            <tr>
                <td class="border-slate-400 min-w-32 px-10 border">Joao</td>
                <td class="border-slate-400 min-w-32 px-10 border">
                    email@email.com
                </td>
                <td class="border-slate-400 min-w-32 px-10 border">
                    Supervisor
                </td>
                <td class="border-y border-slate-400">
                    <button class="hover:text-blue-400 transition-all">
                        Editar</button><button class="hover:text-red-600 hover:scale-105 transition-all">
                        Excluir
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    <Modal :modal-active="modalActive" @close-modal="toggleModal">
        teste
    </Modal>
</template>

<script setup>
import { ref } from 'vue';
import Modal from '../components/Modal.vue'

const modalActive = ref(false)

const toggleModal = () => {
    console.log(modalActive.value)
    modalActive.value = !modalActive.value
}
</script>