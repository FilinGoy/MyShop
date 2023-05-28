<template>
	<header> <!-- //SECTION - Header -->
		<nav class="fixed-top navbar-white bg-white shadow dropdown">
			<div class="container d-flex justify-content-center align-items-stretch h-100 px-0">
				<div
					class="col-1 d-md-none nav-item d-flex justify-content-center align-items-center text-black-50 navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarToggler"
					aria-controls="navbarToggler"
					aria-expanded="false"
					aria-label="Переключатель навигации"
				>
					<i class="fa-solid fa-bars"></i>
				</div>

				<div class="col-4 col-md-2 col-lg-2 nav-item d-flex justify-content-start justify-content-md-start align-items-center">
					<router-link class="navbar-brand d-flex align-items-center p-0" to="/">
						<img src="/storage/images/main/logo.svg" alt="Logo" height="40" class="p-0 d-none d-xl-block" />
						<p class="fs-6 my-0 ps-lg-2">CapyProducts</p>
					</router-link>
				</div>

				<div
					class="col-2 col-lg-2 col-xl-1 nav-item btn btn-white shadow-none border-0 rounded-0 d-none d-md-flex justify-content-center align-items-center text-danger text-uppercase dropdown"
					data-bs-toggle="collapse"
					href="#categories"
					role="button"
					aria-expanded="false"
					aria-controls="categories"
					data-bs-auto-close="true"
				>
					<i class="fa-solid fa-bars pe-2"></i>
					<p>Каталог</p>
				</div>

				<div class="col-5 col-lg-4 col-xl-5 col-xxl nav-item d-none d-md-flex justify-content-around align-items-center text-black-50">
					<div class="form-group-icon w-100">
						<button class="btn bg-white border py-1 px-2 mr-2 text-muted">
							Поиск
						</button>
						<input type="text" class="form-control bg-light" placeholder="Найти товар" />
					</div>
				</div>
				<div class="col-xxl-1 nav-item btn btn-white shadow-none border-0 rounded-0 d-none d-xxl-flex justify-content-center align-items-center text-black-50">
					<i class="fa-regular fa-heart"></i>
				</div>

				<div
					class="col-2 col-md-1 col-lg-2 col-xxl-1 offset-3 offset-md-0 nav-item btn btn-white shadow-none border-0 rounded-0 d-flex justify-content-center align-items-center text-black-50"
				>
					<i class="fa-regular fa-circle-user pe-lg-2"></i>
					<p class="d-none d-lg-block">Профиль</p>

					<!-- //TODO - Изменение состояния кнопки при входе
                        <i class="fa-solid fa-right-to-bracket pe-lg-2 flex-fill"></i>
                        <p class="d-none d-xl-block flex-fill">Войти</p> -->
				</div>

				<div class="col-2 col-md-1 col-lg-2 col-xxl-1 nav-item btn btn-white shadow-none border-0 rounded-0 d-flex justify-content-center align-items-center text-black-50">
					<i class="fa-solid fa-basket-shopping pe-lg-2"></i>
					<p class="d-none d-lg-block">Корзина</p>
				</div>
			</div>
		</nav>
	</header>

    <main class="my-3">
        <router-view></router-view>
    </main>

	<footer class="footer mt-auto py-3 border-top bg-white"> <!-- //SECTION - Footer -->
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 justify-content-between align-items-center">
                <div class="col mb-3 text-center">
                    <a href="#" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <i class="fa-solid fa-frog fa-bounce fa-2x" style="color: #2f7402;"></i>
                    <p class="text-body-secondary">Суворов Денис © 2023</p>
                </div>

                <div class="col">
                    Информация
                </div>
            </div>
        </div>
	</footer>
</template>
<script>
import elem from "./components/Header.vue";

export default {
	name: "App",
	components: { elem },
	data() {
		return {
			categories: []
		};
	},
	mounted() {
		this.getCategories();
	},
	methods: {
		getCategories() {
			this.axios.get("/api/categories").then((res) => {
				this.categories = res.data.data;
			});
		}
	},
};
</script>
<style></style>
