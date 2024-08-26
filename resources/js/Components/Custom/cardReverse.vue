<template>


    <div
        class="max-w-lg mb-5 bg-stone-200  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="p-5">

            <h5 class="mb-2 uppercase text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ title }}
            </h5>
            <div class="bg-black h-[3px] lg:my-3 my-2 sm:w-28 w-16"></div>

            <p class="flex flex-col font-arial text-dgray gap-1 leading-4 lg:leading-5 sm:text-sm text-xs">{{ text }}
            </p>
        </div>

        <img class="rounded-b-lg" :src=img alt="" />

    </div>

</template>

<script setup>
defineProps({
    img: String,
    text: String,
    title: String

})

</script>
