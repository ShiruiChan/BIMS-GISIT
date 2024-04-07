<script setup>
	import { ChevronRightIcon } from '@heroicons/vue/24/solid'
	import Header from '../components/header.vue'
</script>

<template>
  <Header/>

  <main>
    <div class="mx-auto w-2/5 pt-40 text-2xl">
      <img src="../assets/MainBanner.png" alt="" />
      <p class="mt-2">оценка туристического потенциала Якутии</p>
      <a href="#"
        ><button class="flex bg-[#05A8DA] pb-2 px-7 rounded-full text-white mt-7">
          начать <chevronRightIcon class="text-white h-6 translate-y-2" /></button
      ></a>
    </div>
  </main>
</template>
