<template>
    <div class="flex py-6 bg-blue-400 justify-evenly text-xl">
        <RouterLink :to="{name : 'home'}"
        class=" duration-200 hover:text-white">
            Ver Funcionarios
        </RouterLink>

        <RouterLink :to="{name: 'home'}"
        class="transition-all hover:text-white">
            Cadastrar Funcionario
        </RouterLink>
    </div>

    <RouterView />
</template>