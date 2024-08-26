<template>

<div id="obras" class="flex flex-col items-center">
  
  <div class="bg-black w-[5px] h-[88px]"></div>

  <h2 class="text-5xl text-center uppercase pt-5 pb-20 font-bold">obras</h2>


  <div class="flex flex-col-reverse md:flex-row w-4/5 mx-auto pb-20">
    
    <div class="border-black border-2 h-fit  p-10 pr-40 -mr-10 -mt-10 md:mt-20 -z-10 md:z-0 ">
        <h2 class="uppercase text-2xl font-semibold">
            cocina vs
        </h2>
        <p>
            Una reforma integral que le cambió el carácter a la casa. El cliente nos da total libertad para crear, y el resultado es espectacular, el cambio de iluminación es lo que más llama la atención.
        </p>


        
        <Link  :href="route('obra', {id:1})"  class="hover:text-slate-500 capitalize font-semibold flex items-center flex-row" ><span>Ver Mas</span><svg height="18" viewBox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg" ><g id="icono-flecha" transform="translate(18 18) rotate(180)"><path d="M6,0,4.909,1.091l4.13,4.13H0V6.779H9.039l-4.13,4.13L6,12l6-6Z" data-name="Path 10" id="Path_10" transform="translate(15 15) rotate(180)" fill="currentColor"></path></g></svg>
        </Link>
        
    </div>
    <img class=" -z-10" src="@/Images/cocinaVs.png" alt="barcacoaImagen">
  </div>
  <div class="flex flex-col md:flex-row w-4/5 mx-auto pb-20">
    <img class=" z-10" src="@/Images/barbacoaMr.png" alt="barcacoaImagen">
    <div class="border-black border-2 h-fit p-10 pl-40 -ml-16 -mt-10 ">
        <h2 class="uppercase text-2xl font-semibold">
            barbacoa mr
        </h2>
        <p>
            Esta ampliación surge de la necesidad de tener un espacio cerrado fuera de la casa principal. Se utilizó de base un parrillero techado para generar una barbacoa completa.
        </p>

        <Link :href="route('obra', {id:2})" class="hover:text-slate-500 capitalize font-semibold flex items-center flex-row" ><span>Ver Mas</span><svg height="18" viewBox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg" ><g id="icono-flecha" transform="translate(18 18) rotate(180)"><path d="M6,0,4.909,1.091l4.13,4.13H0V6.779H9.039l-4.13,4.13L6,12l6-6Z" data-name="Path 10" id="Path_10" transform="translate(15 15) rotate(180)" fill="currentColor"></path></g></svg>
        </Link>
    </div>

  </div>
  <div class="w-full justify-center pb-10 hidden">
    <button class="bg-black text-white px-10 py-5 capitalize font-semibold text-2xl hover:opacity-55 ">ver todas las obras</button>
  </div>
</div>





</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    obra: Object
})

</script>

