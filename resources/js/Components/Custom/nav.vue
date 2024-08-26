<template>


  <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4">


      <a class="flex items-center space-x-3 rtl:space-x-reverse" :href="route('home')">
        <img src="@/Images/Logo Casa Arquitectura.png" class="h-16" alt="Casa Logo" />
      </a>





      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

          <li v-for="route in routes">

            <Link class="uppercase font-bold hover:underline hover:decoration-orange-500 hover:decoration-2 decoration-offset-2 " :href="route.url"> {{ route.name }} </Link>
            
          </li>

          <li>
            <Link class="uppercase font-bold hover:underline hover:decoration-orange-500 hover:decoration-2 decoration-offset-2 " :href="route('contact')">Contacto</Link>
          </li>
        

        </ul>
      </div>
    </div>
  </nav>




</template>

<script setup>
import { onMounted, ref } from 'vue'
import { initFlowbite } from 'flowbite'
import { Link } from '@inertiajs/vue3';


onMounted(() => {
  initFlowbite();
})

const routes = ref([

  { name: 'Estudio', url: '#estudio' },
  { name: 'Servicios', url: '#servicios' },
  { name: 'Obras', url: '#obras' }
]);

</script>
