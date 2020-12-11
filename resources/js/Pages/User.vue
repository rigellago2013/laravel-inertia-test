<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                User Information
            </h2>
        </template>
            <tr>
              <td>{{ user.prefixname }}</td>
              <td>{{ user.firstname  }}</td>
              <td>{{ user.middlename }}</td>
              <td>{{ user.lastname }}</td>
              <td>{{ user.suffixname }}</td>
              <td>{{ user.username }}</td>
              <td>{{ user.email }}</td>
              <td>{{ user.type }}</td>
     
            </tr>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        props: {
          user : {}
        },
        components: {
            AppLayout
        },
        data() {
            return {};
        },
    }
</script>
