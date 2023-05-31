<template>
	<div class="row">
		<div class="col-12 col-lg-8 bg-white p-4">
			<div class="d-flex justify-content-between align-items-center">
				<h1>Корзина</h1>
				<div>
					<div class="btn btn-outline-danger">Очистить корзину</div>
				</div>
			</div>
			<hr />
			<div class="w-100">
				<div class="d-none flex-column align-items-center p-md-5">
					<img class="w-25 py-5" src="storage/images/main/cart-none.png" />
					<h4>Корзина пока пуста</h4>
					<p class="w-50 text-center">Вернитесь в каталог или воспользуйтесь поиском, чтобы продолжить свои покупки</p>
					<router-link class="btn btn-danger rounded-3" to="/">На главную страницу</router-link>
				</div>
				<div class="row">
					<div class="col-2"><img src="storage/images/main/vert.png" class="fit-img" /></div>
					<div class="col">Продукт 1</div>
				</div>
				<div class="row">
					<div class="col-2"><img src="storage/images/main/horz.png" class="fit-img" /></div>
					<div class="col">sdfsdfds</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-3 offset-lg-1 bg-white p-4">
			<div class="d-flex flex-column justify-content-between">
				<h4>Итого:</h4>
				<p class="text-muted d-none d-lg-block"><span>x</span> товар</p>
				<div class="mb-0 py-2">
					На сумму:
					<div class="fs-2 text-wrap text-danger d-flex align-items-center"><span class="fs-2">x,xx</span>₽</div>
				</div>

				<button type="button" href="#" class="btn btn-danger" disabled>
					<p>До заказа ещё: <span>x</span>₽</p>
					<p>Перейти к оформлению</p>
				</button>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "cart",
};
</script>
<style></style>
