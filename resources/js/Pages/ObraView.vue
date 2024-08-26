<template>
  <Nav />
  <div class="flex flex-col justify-end items-center max-w-7xl mx-auto bg-stone-300 h-[100px] md:h-[200px] mb-10">
  <p class="text-3xl md:text-6xl font-bold uppercase pb-5">{{obra.name}}</p>
    </div>
    <div class="bg-black w-[5px] h-[88px] flex flex-row mb-10 mx-auto"></div>

    <div class=" flex flex-col max-w-7xl md:mx-auto md:grid grid-cols-2 pb-10 p-5 gap-5">

      <div class="col-span-1 flex flex-col items-center justify-center">
        <img :src="obra.image" alt="" class="h-full">

      </div>

      <div class="col-span-1 flex flex-col gap-5 ">

        <p>{{obra.description}}</p>

        <h2><span class="uppercase font-semibold text-xl ">ubicacion:</span><br>{{ obra.ubication }} </h2>
        <h2><span class="uppercase font-semibold text-xl ">Año de realizacion:</span><br>{{ obra.year }} </h2>
        <h2><span class="uppercase font-semibold text-xl ">tiempo de obra:</span><br>{{ obra.duration }}</h2>
        <h2><span class="uppercase font-semibold text-xl ">area de intervencion:</span><br>{{ obra.area }} mts.</h2>
        

      </div>

    </div>

    <Footer />
</template>

<script setup>
import { ref , onMounted } from 'vue'
import Nav from '@/Components/Custom/nav.vue'
import Footer from '@/Components/Custom/footer.vue'




defineProps({ 
  obra: Object
})



</script>

