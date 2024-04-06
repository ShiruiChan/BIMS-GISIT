<template>
  <div class="flex justify-between">
    <!-- Left column -->
    <div
      class="h-fit mx-auto grid px-12 gap-y-8 my-auto py-14 shadow-2xl rounded-[20px] text-[#182D36]"
    >
      <h3 class="text-5xl">Регистрация</h3>
      <div class="mx-auto h-[1px] bg-[#767676] w-5/6 mt-12"></div>
      <form action="server.php" method="POST" class="w-[calc(25vw*0.8)] grid gap-y-6">
        <input
          type="text"
          class="w-[calc(25vw*0.8)] pl-4 py-2 rounded-[20px] border border-[#767676]"
          placeholder="Электронная почта"
          required name="mail"
        />
        <input
          type="text"
          class="w-[calc(25vw*0.8)] pl-4 py-2 rounded-[20px] border border-[#767676]"
          placeholder="Пароль"
          required name="pass1"
        />
		<input
          type="text"
          class="w-[calc(25vw*0.8)] pl-4 py-2 rounded-[20px] border border-[#767676]"
          placeholder="Повторите пароль"
          required name="pass2"
        />
        <div class="mx-auto h-[1px] bg-[#767676] w-5/6"></div>
        <button class="w-[calc(25vw*0.8)] pl-4 py-2 rounded-[20px] border border-[#767676]" name="reg_user">
          Регистрация
        </button>
      </form>

      <p class="text-center">
        У вас уже есть учётная запись? <RouterLink to="/Authorisation">Войдите</RouterLink>
      </p>
    </div>
    <!-- Right column -->
    <RouterLink to="/"
      ><div>
        <img
          class="h-screen"
          src="C:\OSPanel\domains\BIMS-GISIT\src\assets\RightPic.png"
          alt=""
        /></div
    ></RouterLink>
  </div>
</template>
