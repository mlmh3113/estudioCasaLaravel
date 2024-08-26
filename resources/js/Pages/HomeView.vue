<template>

<Head title="Home" />

<Nav />

<Carrusel />

<Estudio />

<Servicios />

<Obras :obras="obras" />

<Footer />

</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import Nav from '@/Components/Custom/nav.vue'
import Carrusel from '@/Components/Custom/carrousel.vue'
import Estudio from '@/Components/Custom/estudio.vue'
import Servicios from '@/Components/Custom/servicios.vue'
import Obras from '@/Components/Custom/obras.vue'
import Footer from '@/Components/Custom/footer.vue'
import { onMounted } from 'vue';

onMounted(() => {
  window.scrollTo(0, 0)
})

defineProps({
  obras : Object
})


</script>
