<script setup>
	import Header from '../components/header.vue'
</script>
<template>
	<Header/>

	<main>
		<div class="py-[5vh] grid gap-y-16 mx-auto w-4/5">
			<div class="grid gap-y-10">
				<h1 class="text-5xl font-medium">Ежегодная статистика</h1>
				<div class="text-2xl grid grid-cols-4">
					<div class="w-fit">
						<img src="../assets/1.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика туристов</p>
					</div>
					<div class="w-fit">
						<img src="../assets/2.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика отелей</p>
					</div>
					<div class="w-fit">
						<img src="../assets/3.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика тур. баз</p>
					</div>
					<div class="w-fit">
						<img src="../assets/4.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика доходов от туризма</p>
					</div>
				</div>
			</div>
			<div class="grid gap-y-10">
				<h1 class="text-5xl font-medium">Статистика за все время</h1>
				<div class="text-2xl grid grid-cols-4 gap-x-2">
					<div class="w-fit">
						<img src="../assets/1.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика туристов</p>
					</div>
					<div class="w-fit">
						<img src="../assets/2.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика отелей</p>
					</div>
					<div class="w-fit">
						<img src="../assets/3.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика тур. баз</p>
					</div>
					<div class="w-fit">
						<img src="../assets/4.png" class="w-fit mx-auto" alt="">
						<p class="mt-2">Статистика доходов от туризма</p>
					</div>
				</div>
			</div>
			<img src="../assets/Statis.png" alt="">
		</div>
	</main>
</template>