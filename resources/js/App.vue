<template>
	<header>
		<!-- //SECTION - Header -->
		<nav class="main-nav fixed-top navbar-white bg-white shadow">
			<div class="container-lg d-flex justify-content-between align-items-stretch h-100 px-0">
				<div
					class="nav-item d-flex d-lg-none justify-content-center align-items-center text-black-50 navbar-toggler"
					type="button"
					data-bs-toggle="offcanvas"
					data-bs-target="#mainMenuOffcanvas"
					aria-controls="mainMenuOffcanvas"
				>
					<i class="fa-solid fa-bars"></i>
				</div>

				<div class="nav-item d-flex px-2 justify-content-start justify-content-md-start align-items-center">
					<router-link class="navbar-brand d-flex align-items-center p-0" to="/">
						<img src="/storage/images/main/logo.png" alt="Logo" height="40" class="p-0" />
						<p class="fs-6 my-0 ps-2">Дом Вкуса</p>
					</router-link>
				</div>

				<div
					class="nav-item btn btn-white shadow-none border-0 rounded-0 d-none d-lg-flex justify-content-center align-items-center text-danger text-uppercase dropdown-toggle"
					type="button"
					id="dropdownMenuButton1"
					data-bs-toggle="dropdown"
					aria-expanded="false"
				>
					<i class="fa-solid fa-bars pe-2"></i>
					<p>Каталог</p>
				</div>

				<div class="collapse w-100 shadow dropdown-menu border-0" aria-labelledby="dropdownMenuButton1">
					<div class="py-3 px-2 bg-white d-none d-lg-block">
						<div class="container p-0">
							<div class="row g-2">
								<router-link
									v-for="category in this.$store.state.categories"
									:key="category.id"
									:to="`/category/${category.id}`"
									class="dropdown-item rounded-sm col-lg-4 col-xxl-3 text-wrap"
								>
									<span class="text-wrap">{{ category.title }}</span>
								</router-link>
							</div>
						</div>
					</div>
				</div>

				<div class="nav-item d-flex flex-grow-1 justify-content-end dropdown">
					<div class="nav-item d-none d-md-flex flex-grow-1 px-2 justify-content-around align-items-center text-black-50">
						<div class="d-flex align-items-center w-100 bg-white border-1 border">
							<input type="search" class="item-search rounded-0 border-0 w-100 shadow-none" placeholder="Поиск товаров" />
							<button class="btn bg-white rounded-0 border-0 text-muted shadow-none h-100">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
					<router-link
						to="/profile/favorite"
						class="nav-item btn btn-white shadow-none border-0 rounded-0 d-none d-md-flex justify-content-center align-items-center text-black-50"
					>
						<i class="fa-regular fa-heart"></i>
					</router-link>

					<router-link
						v-if="!this.$store.state.isLoginUser"
						to="/signin"
						class="nav-item btn btn-white shadow-none border-0 rounded-0 d-flex justify-content-center align-items-center text-black-50"
					>
						<i class="fa-solid fa-right-to-bracket pe-lg-2"></i>
						<p class="d-none d-lg-block">Вход</p>
					</router-link>
					<template v-else>
						<div class="dropdown d-none d-lg-flex">
							<div
								class="nav-item btn btn-white h-100 shadow-none border-0 rounded-0 d-flex justify-content-center align-items-center text-black-50"
								type="button"
								id="dropdownProfile"
								data-bs-toggle="dropdown"
							>
								<i class="fa-regular fa-circle-user pe-2"></i>
								<p>Профиль</p>
							</div>

							<ul class="dropdown-menu" aria-labelledby="dropdownProfile" ref="profileMenu">
								<li v-if="this.$store.state.user?.position_id === 4"><a type="button" @click="goAdmin" class="dropdown-item text-wrap px-4">Админ панель</a></li>
								<li><router-link to="/profile/orders" class="dropdown-item text-wrap px-4">Мои заказы</router-link></li>
								<li><router-link to="/profile/favorite" class="dropdown-item text-wrap px-4">Избранное</router-link></li>
								<li><router-link to="/profile" class="dropdown-item text-wrap px-4">Учётная запись</router-link></li>
								<li><a type="button" @click.prevent="quitAccount" class="dropdown-item border-top text-wrap px-4">Выйти</a></li>
							</ul>
						</div>

						<!-- //NOTE - Скрываемый профиль -->
						<router-link
							to="/profile/orders"
							class="nav-item btn btn-white shadow-none border-0 rounded-0 d-flex d-lg-none justify-content-center align-items-center text-black-50"
							type="button"
							data-bs-toggle="offcanvas"
							data-bs-target="#profileOffcanvas"
							aria-controls="profileOffcanvas"
						>
							<i class="fa-regular fa-circle-user"></i>
						</router-link>
					</template>
					<router-link to="/cart" class="nav-item btn btn-white shadow-none border-0 rounded-0 d-flex justify-content-center align-items-center text-black-50 position-relative">
						<div class="d-flex justify-content-center align-items-center">
							<div class="me-lg-2 position-relative">
								<i class="fa-solid fa-basket-shopping"></i>
								<span v-if="this.$store.state.totalPrice" class="translate-middle badge rounded-pill bg-danger position-absolute top-0">
									{{ this.$store.state.countCartDiff > 99 ? "99+" : this.$store.state.countCartDiff }}
								</span>
							</div>
							<p class="d-none d-lg-block my-0 text-danger ps-1 text-nowrap" v-if="this.$store.state.totalPrice">{{ this.$store.state.totalPrice }} ₽</p>
							<p class="d-none d-lg-block my-0" v-else>Корзина</p>
						</div>
					</router-link>
				</div>
			</div>
		</nav>

		<!-- //SECTION - Главный канвас -->
		<div class="offcanvas offcanvas-start w-30" tabindex="-1" id="mainMenuOffcanvas" aria-labelledby="mainMenuOffcanvasLabel">
			<div class="offcanvas-header">
				<div class="offcanvas-title d-flex px-2 justify-content-between align-items-center w-100" id="mainMenuOffcanvasLabel" data-bs-dismiss="offcanvas">
					<router-link class="navbar-brand d-flex align-items-center p-0" to="/">
						<img src="/storage/images/main/logo.png" alt="Logo" height="40" class="p-0" />
						<p class="fs-6 my-0 ps-2">Дом Вкуса</p>
					</router-link>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
				</div>
			</div>
			<div class="d-flex justify-content-around align-items-center text-black-50 w-100">
				<div class="d-flex w-100 bg-light border-1 border">
					<input type="search" class="item-search w-100 rounded-0 border-0 shadow-none" placeholder="Поиск товаров" />
					<button class="btn bg-white rounded-0 border-0 text-muted shadow-none">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
			<div class="offcanvas-body px-0" data-bs-dismiss="offcanvas">
				<div class="px-4">
					<h3>Главные страницы</h3>
					<p><router-link to="/">Главная</router-link></p>
					<p><router-link to="/contacts">Контакты</router-link></p>
					<p><router-link to="/how-to-buy">Как купить</router-link></p>
					<p><router-link to="/about">О нас</router-link></p>
					<p><router-link to="/payment-orders">Оплата заказов</router-link></p>
					<p><router-link to="/return-and-trade">Возврат и обмен</router-link></p>
				</div>

				<hr />

				<h3 class="px-4">Категории</h3>
				<router-link v-for="category in this.$store.state.categories" :key="category.id" :to="`/category/${category.id}`" class="dropdown-item text-wrap px-4">
					<span>{{ category.title }}</span>
				</router-link>

				<hr />

				<div class="px-4">
					<h3>Документы</h3>
					<p><router-link to="#">Для юридических лиц</router-link></p>
					<p><router-link to="#">Договор купли-продажи</router-link></p>
					<p><router-link to="#">Договор поставки</router-link></p>
					<p><router-link to="#">Персональные данные</router-link></p>
					<p><router-link to="#">Политика конфиденциальности</router-link></p>
					<p><router-link to="#">Регламент</router-link></p>
				</div>

				<hr />

				<div class="px-4">
					<p class="fw-bold my-0">Служба поддержки</p>
					<a href="tel:+78009999999">8 800 999 99 99</a><br />
					<a href="mailto:info@shop.ru">info@shop.ru</a>
				</div>
			</div>
		</div>
		<!-- //!SECTION -->

		<!-- //SECTION - Канвас профиля -->
		<div v-if="this.$store.state.isLoginUser" class="offcanvas offcanvas-end w-30" tabindex="-1" id="profileOffcanvas" aria-labelledby="profileOffcanvasLabel">
			<div class="offcanvas-header">
				<div class="offcanvas-title d-flex px-2 justify-content-start justify-content-md-start align-items-center" id="profileOffcanvasLabel" style="height: 40px;">
					<div class="navbar-brand d-flex align-items-center p-0">
						<i class="fa-regular fa-circle-user fa-lg text-danger"></i>
						<p class="fs-6 my-0 ps-2">Профиль</p>
					</div>
				</div>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
			</div>
			<div class="offcanvas-body p-0 d-flex flex-column" data-bs-dismiss="offcanvas">
				<a v-if="this.$store.state.user?.position_id === 4" type="button" @click="goAdmin" class="dropdown-item text-wrap px-4">Админ панель</a>
				<router-link to="/profile/orders" class="dropdown-item text-wrap px-4">Мои заказы</router-link>
				<router-link to="/profile/favorite" class="dropdown-item text-wrap px-4">Избранное</router-link>
				<router-link to="/profile" class="dropdown-item text-wrap px-4">Учётная запись</router-link>
				<a type="button" @click.prevent="quitAccount" class="dropdown-item mt-auto border-top text-wrap px-4 py-4">Выйти</a>
			</div>
		</div>
		<!-- //!SECTION -->
	</header>

	<!-- //!SECTION -->

	<main class="mb-3 container-lg d-flex flex-column flex-fill h-100">
		<router-view class="py-3"></router-view>
	</main>

	<footer class="footer mt-auto py-3 border-top bg-white">
		<!-- //SECTION - Footer -->
		<div class="container">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 justify-content-between">
				<div class="col-6 col-md-3 d-flex flex-column justify-content-between align-items-between">
					<div>
						<p>
							<a href="#" class="d-flex align-items-center">
								<i class="fa-brands fa-telegram fs-3"></i>
								<span class="ps-2">Telegram</span>
							</a>
						</p>
						<p>
							<a href="#" class="d-flex align-items-center">
								<i class="fa-brands fa-vk fs-3"></i>
								<span class="ps-2">VK</span>
							</a>
						</p>
						<p>
							<a href="#" class="d-flex align-items-center">
								<i class="fa-solid fa-share-from-square fs-3"></i>
								<span class="ps-2">Share</span>
							</a>
						</p>
					</div>
					<small class="text-wrap text-start text-muted fw-light">Дом Вкуса © 2023</small>
				</div>

				<div class="col d-none d-lg-flex flex-column justify-content-between">
					<p><router-link to="/">Главная</router-link></p>
					<p><router-link to="/contacts">Контакты</router-link></p>
					<p><router-link to="/how-to-buy">Как купить</router-link></p>
					<p><router-link to="/about">О нас</router-link></p>
					<p><router-link to="/payment-orders">Оплата заказов</router-link></p>
					<p><router-link to="/return-and-trade">Возврат и обмен</router-link></p>
				</div>

				<div class="col d-none d-lg-flex flex-column justify-content-between">
					<p><a href="#">Для юридических лиц</a></p>
					<p><a href="#">Договор купли-продажи</a></p>
					<p><a href="#">Договор поставки</a></p>
					<p><a href="#">Персональные данные</a></p>
					<p><a href="#">Политика конфиденциальности</a></p>
					<p><a href="#">Регламент</a></p>
				</div>

				<div class="col-6 col-md-3 d-flex flex-column justify-content-start">
					<p>
						Служба поддержки <br />
						<a href="tel:+78009999999">8 800 999 99 99</a> <br />
						<a href="mailto:info@shop.ru">info@shop.ru</a>
					</p>

					<small class="text-wrap text-start text-muted fw-light">
						7 дней в неделю с 05:00 до 22:00 по ект (GMT+5), для звонков по РФ, звонок бесплатный
					</small>
				</div>
			</div>
		</div>
		<!-- //!SECTION -->
	</footer>
</template>
<script>
import elem from "./components/Header.vue";

export default {
	name: "App",
	components: { elem },
	watch: {
		"$store.getters.statusUser": function (statusUser) {
			if (!statusUser) this.$router.push({ name: "main" });
		},
	},
	methods: {
		goAdmin() {
			let webApiUrl = "/admin";
			let tokenStr = localStorage.getItem("access_token");
			document.cookie = "user=" + tokenStr;
			this.axios
				.get(webApiUrl, {
					headers: { Authorization: `Bearer ${tokenStr}` },
				})
				.then((res) => {
					window.open("/admin?token=" + tokenStr, "_self");
				});
		},

		//SECTION - Профль
		quitAccount() {
			document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
			this.$store.commit("LOGOUT");
			this.$router.push({ name: "main" });
		},
		//!SECTION
	},
};
</script>
<style></style>
