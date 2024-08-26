<template>


    <div id="default-carousel" class="relative w-full container mx-auto max-w-screen-xl pb-20" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[58vh] overflow-hidden md:h-[70vh] 2xl:[877vh] ">
            <!-- Item 1 -->
            <div class="absolute hidden duration-7000 ease-in-out  " data-carousel-item>
                <img src="@/Images/fondo-1.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="...">
                    <div class="absolute inset-0 bg-gradient-to-l from-black via-transparent from-8% to-transparent"></div>
                <div
                    class=" absolute flex flex-col justify-between transform -translate-y-1/2 right-20 top-1/2 space-y-5">
                    <h1 class="md:text-4xl font-semibold uppercase text-white ">
                        Diseño<br />
                        <strong class="font-normal">arquitectonico <br>y de interiores
                        </strong>
                    </h1>
                    

                </div>

            </div>
            <!-- Item 2 -->
            <div class="hidden duration-7000 ease-in-out" data-carousel-item>
                <img src="@/Images/fondo-2.png"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent from-8% to-transparent"></div>

                
            <div class=" absolute flex flex-col justify-between transform -translate-y-1/2 left-20 top-1/2 space-y-5">
                <h1 class="md:text-4xl font-semibold uppercase text-white ">
                    Construccion<br />
                    <strong class="font-normal">ejecucion <br>y direccion de obras
                    </strong>
                </h1>
             

            </div>
            </div>

        </div>


    </div>

</template>

<script setup>

import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

onMounted(() => {
    initFlowbite();
})

</script>
