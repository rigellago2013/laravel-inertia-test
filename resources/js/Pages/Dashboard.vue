<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Users from '@/Pages/Users'

    export default {
        components: {
            AppLayout
        }
    }
</script>
