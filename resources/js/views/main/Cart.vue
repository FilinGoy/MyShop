<template>
	<div class="row g-2">
		<div class="col-12 col-lg-8">
			<div class="bg-white px-4 py-2">
				<div class="d-flex justify-content-between align-items-center py-2">
					<h1 class="my-0">Корзина</h1>
					<div>
						<div class="btn btn-outline-danger" @click="clearCart">Очистить корзину</div>
					</div>
				</div>
				<hr />
				<div class="w-100">
					<div v-if="cart" class="row gutters-mobile"></div>
					<div v-else class="flex-column align-items-center p-md-5" :class="this.$store.state.countCartAll == 0 ? 'd-flex' : 'd-none'">
						<img class="w-25 py-5" src="storage/images/main/cart-none.png" />
						<h4>Корзина пока пуста</h4>
						<p class="w-50 text-center">Вернитесь в каталог или воспользуйтесь поиском, чтобы продолжить свои покупки</p>
						<router-link class="btn btn-danger rounded-3" to="/">На главную страницу</router-link>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<div class="d-flex flex-column justify-content-between bg-white p-4">
				<h4 class="d-none d-lg-block mb-0">Итого:</h4>
				<p class="text-muted d-none d-lg-block">
					<span>{{ totalCount ?? "0" }} {{ getProductWord(totalCount) }}</span>
				</p>
				<div class="mb-0 py-2 d-flex justify-content-between align-items-center flex-wrap">
					<p class="mb-0 d-lg-none">Сумма заказа:</p>
					<p class="mb-0 d-none d-lg-block">На сумму:</p>
					<div class="fs-2 text-wrap text-danger d-flex align-items-center">
						<span class="fs-2">{{ totalPrice ?? "0" }}</span
						>₽
					</div>
				</div>

				<button type="button" href="#" class="btn btn-danger" :disabled="(totalPrice ?? 0) < 500 ? true : false">
					<p v-if="!totalPrice || totalPrice < 500">
						До заказа ещё: <span>{{ totalPrice ? 500 - totalPrice : "500" }}</span
						>₽
					</p>
					<p v-if="totalPrice >= 500">Перейти к оформлению</p>
				</button>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "cart",
	mounted() {
		this.getCart();
	},
};
</script>
<style></style>
