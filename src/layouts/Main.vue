<script setup>
	import { ChevronRightIcon } from '@heroicons/vue/24/solid'
</script>

<template>
  <header class="w-5/6 mx-auto pt-6 flex text-2xl justify-between">
    <a href="#">
      <img src="C:\OSPanel\domains\BIMS-GISIT\src\assets\Logo.png" alt="" />
    </a>
    <ul class="space-x-7 flex my-auto">
      <li>карта</li>
      <li>статистика</li>
      <li>прогноз</li>
      <li>аналитика</li>
    </ul>
    <div class="space-x-5 my-auto">
      <RouterLink to="/Registration">Регистрация</RouterLink>
      <RouterLink class="bg-[#05A8DA] py-3 px-14 rounded-full text-white text-[20px]" to="/Authorisation">Вход</RouterLink>
    </div>
  </header>

  <main>
    <div class="mx-auto w-2/5 pt-40 text-2xl">
      <img src="C:\OSPanel\domains\BIMS-GISIT\src\assets\MainBanner.png" alt="" />
      <p class="mt-2">оценка туристического потенциала Якутии</p>
      <a href="#"
        ><button class="flex bg-[#05A8DA] pb-2 px-7 rounded-full text-white mt-7">
          начать <chevronRightIcon class="text-white h-6 translate-y-2" /></button
      ></a>
    </div>
  </main>
</template>
