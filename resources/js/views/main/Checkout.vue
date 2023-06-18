<template>
	<form class="row g-2 position-relative" @submit.prevent="orderConfirm">
		<div class="col-12 col-xl-6">
			<div class="bg-white px-4 py-2 h-100">
				<div class="d-flex justify-content-between flex-column py-2">
					<h1>Оформление заказа</h1>
					<h4 class="mb-0">Доставка</h4>
					<div class="row mb-3">
						<label for="address" class="col-sm-4 col-form-label">Адрес доставки<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="address" v-model="address" required />
							<div class="my-3">
								<label for="description" class="form-label">Комментарий</label>
								<textarea class="form-control" id="description" rows="3" v-model="description"></textarea>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="datetime_delivery" class="col-sm-4 col-form-label">Дата и время<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input type="date" class="form-control" id="datetime_delivery" v-model="datetime_delivery" :min="today" :max="maxDate" :disabledDates="disabledDates" required />
							<small class="text-wrap text-start text-muted fw-light">Доставка в течении дня</small>
						</div>
					</div>
					<h4 class="mb-0">Детали</h4>
					<div class="row mb-3">
						<label for="payment" class="col-sm-4 col-form-label">Способ оплаты<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<select id="payment" class="form-select" required v-model="payment">
								<option selected disabled hidden value="">Не выбрано</option>
								<option v-for="payment in paymentTypes" :key="payment.id" :value="payment.id">{{ payment.title }}</option>
							</select>
						</div>
					</div>
					<h4 class="mb-0">Контактные данные</h4>
					<div class="row mb-3">
						<label for="email" class="col-sm-4 col-form-label" required>Адрес (Email) для получения чеков<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" v-model="email" />
							<small class="text-wrap text-start text-muted fw-light">Электронный чек будет направлен на указанный адрес электронной почты</small>
						</div>
					</div>
					<div class="row mb-3">
						<label for="first_name" class="col-sm-4 col-form-label" required>Имя<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input type="first_name" class="form-control" id="first_name" v-model="first_name" />
						</div>
					</div>
					<div class="row mb-3">
						<label for="last_name" class="col-sm-4 col-form-label" required>Фамилия<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input type="last_name" class="form-control" id="last_name" v-model="last_name" />
						</div>
					</div>
					<div class="row mb-3">
						<label for="number" class="col-sm-4 col-form-label" required>Телефон<span class="text-danger">*</span></label>
						<div class="col-sm-8">
							<input type="tel" class="form-control" id="number" v-model="number" v-mask="'+7 (###) ###-##-##'" maxlength="18" />
						</div>
					</div>
					<div class="row mb-3" v-if="error">
						<p class="text-danger">{{ error }}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-xl-6">
			<div class="bg-white h-100 d-flex flex-column">
				<div class="d-flex flex-column justify-content-between p-4">
					<div class="mb-3 py-2 d-flex justify-content-between align-items-center flex-wrap">
						<h4 class="mb-0">Состав заказа</h4>
						<router-link to="/cart">Редактировать <i class="fa-solid fa-pen-to-square"></i></router-link>
					</div>

					<table class="table orderInfo">
						<tbody>
							<tr v-for="product in cart" :key="product.id">
								<td>
									<small>{{ product.title }}</small>
								</td>
								<td>
									<small>{{ product.quantity }} шт.</small>
								</td>
								<td>
									<small>{{ product.price }}₽</small>
								</td>
								<td>
									<small>{{ (product.quantity * product.price).toFixed(2) }}₽</small>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="d-flex flex-column justify-content-between p-4 border-bottom order-xl-first">
					<h4 class="d-none d-lg-block">Подтверждение заказа</h4>
					<p class="text-muted d-none d-lg-block">
						<span>Общее кол-во в корзине: {{ totalCount ?? "0" }} {{ getProductWord(totalCount) }}</span>
					</p>
					<p class="mb-0">Предварительный итог:</p>
					<div class="mb-0 py-2 d-flex justify-content-between align-items-center flex-wrap">
						<div class="fs-2 text-wrap text-danger d-flex align-items-end">
							<span class="fs-2">{{ totalPrice ?? "0" }}</span
							>₽
						</div>
						<button type="submit" class="btn btn-danger" :disabled="(totalPrice ?? 0) < 500 || !buttonActive">
							<p v-if="!totalPrice || totalPrice < 500">
								До заказа ещё: <span>{{ totalPrice ? (500 - totalPrice).toFixed(2) : "500" }}</span
								>₽
							</p>
							<p v-if="totalPrice >= 500">Оформить заказ</p>
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div class="mymodal" v-if="modalShow" :aria-hidden="modalShow" @click="hideModal">
		<div class="d-block text-center bg-white border rounded-2 p-4">
			<h4>Информация о покупке</h4>
			<hr />
			<p>Благодарим за покупку в нашем интернет магазине!</p>
			<p>ПИнформация о заказе была отправлена вам на указанную почту.</p>
			<hr />
			<p>Окно автоматически закроется через 10 сек.</p>

			<button type="button" class="btn btn-outline-danger" @click.prevent="hideModal">На глвную</button>
		</div>
	</div>
</template>
<script>
export default {
	name: "checkout",
	data() {
		return {
			paymentTypes: [],
			user_id: null,
			email: null,
			payment: null,
			number: null,
			first_name: null,
			last_name: null,
			address: null,
			description: null,
			datetime_delivery: this.getTodayF(),
			total_price: null,
			products: [],

			buttonActive: true,

			today: this.getTodayF(),
			maxDate: this.maxDateF(),

			weekends: [6, 0],

			modalShow: false,

			error: null,
		};
	},
	mounted() {
		if (!localStorage.getItem("cart")) {
			this.$router.push("/cart");
		}

		this.getPaymentTypes();
		this.setUser();
		this.getCart();
	},

	watch: {
		"$store.getters.statusUser": function (statusUser) {
			if (statusUser) {
				this.setUser();
			}
		},
	},

	computed: {
		disabledDates() {
			let dates = [];
			const today = new Date();

			// Цикл по 365 дням от сегодняшней даты и проверка каждой даты на выходной день
			for (let i = 0; i < 365; i++) {
				const date = new Date(today.getFullYear(), today.getMonth(), today.getDate() + i);
				if (this.isWeekend(date)) {
					dates.push(this.formatDate(date));
				}
			}

			return dates;
		},
	},

	methods: {
		getTodayF() {
			let today = new Date();
			today.setDate(today.getDate() + 1);
			today = today.toISOString().substr(0, 10);
			this.datetime_delivery = today;
			return today;
		},

		maxDateF() {
			let today = new Date();
			today = new Date(today.setDate(today.getDate() + 7));
			return today.toISOString().substr(0, 10);
		},

		isWeekend(date) {
			// Проверяем, является ли день выходным
			const day = date.getDay();
			return this.weekends.includes(day);
		},
		formatDate(date) {
			// Форматирование даты для соответствия формату input[type=date]
			const year = date.getFullYear();
			const month = ("0" + (date.getMonth() + 1)).slice(-2);
			const day = ("0" + date.getDate()).slice(-2);
			return `${year}-${month}-${day}`;
		},

		getPaymentTypes() {
			this.axios.get("/api/getPaymentTypes").then((response) => {
				this.paymentTypes = response.data;
			});
		},

		setUser() {
			this.user_id = this.$store.state.user?.id;
			this.email = this.$store.state.user?.email;
			this.number = this.$store.state.user?.number;
			this.first_name = this.$store.state.user?.first_name;
			this.last_name = this.$store.state.user?.last_name;
			this.address = this.$store.state.user?.address;
			this.total_price = this.totalPrice;
		},

		orderConfirm() {
			if (!this.email || !this.payment || !this.first_name || !this.last_name || !this.address || !this.datetime_delivery || !this.number) {
				this.error = "Заполните обязательные поля!";
				return;
			}

			this.buttonActive = false;

			let products = JSON.parse(localStorage.getItem("cart"));

			this.axios
				.post("/api/orderBuy", {
					user_id: this.user_id,
					email: this.email,
					number: this.number,
					first_name: this.first_name,
					last_name: this.last_name,
					address: this.address,
					description: this.description,
					datetime_delivery: this.datetime_delivery,
					total_price: this.totalPrice,
					payment_id: this.payment,
					products: products,
				})
				.then((res) => {
					this.buttonActive = true;
					this.clearCart();
					this.showModal();
				})
				.catch((err) => {
					this.buttonActive = true;
					this.error = err;
				});
		},

		showModal() {
			this.modalShow = true;
			setTimeout(() => {
				this.hideModal();
			}, 10000);
		},

		hideModal() {
			this.modalShow = false;
			this.$router.push("/");
		},
	},
};
</script>
<style></style>
