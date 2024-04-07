<template>
  <header class="w-5/6 mx-auto pt-6 flex text-2xl justify-between">
	<RouterLink to="/"><img src="../assets/Logo.png" alt="" /></RouterLink>
    <ul class="space-x-7 flex my-auto">
      <RouterLink to="/Map">Карта</RouterLink>
      <RouterLink to="/Statisctics">Статистика</RouterLink>
      <li>прогноз</li>
      <li>аналитика</li>
    </ul>
    <div class="space-x-5 my-auto">
      <RouterLink to="/Registration">Регистрация</RouterLink>
      <RouterLink
        class="bg-[#05A8DA] py-3 px-14 rounded-full text-white text-[20px]"
        to="/Authorisation"
        >Вход</RouterLink
      >
    </div>
  </header>
</template>
