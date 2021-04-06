<template>
    <div>
        <v-footer padless class="mt-5">
            <v-col
            class="text-center"
            cols="12"
            >
            {{ new Date().getFullYear() }} — <strong>Wall Of Tears</strong>
            </v-col>
        </v-footer>
    </div>
</template>
<script>
export default {
    name:'toolbar'
}
</script>