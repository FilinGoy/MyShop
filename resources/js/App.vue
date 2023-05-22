<template>
	<header style="height: 60px">
		<nav class="fixed-top navbar-white bg-white shadow" style="height: 60px">
			<div class="container d-flex justify-content-between align-items-stretch h-100 g-0">
                <div class="collapse navbar-collapse navbar-collapse-sidebar" id="navbarToggler">
					<div class="d-block d-lg-none">
						<div class="p-3">
							<div class="d-flex justify-content-between align-items-center">
								<router-link to="/">
									<img src="storage/images/logo.svg" height="40" alt="Logo" />
								</router-link>
								CapyProducts
								<button
									class="btn py-1 px-2 navbar-toggler"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#navbarToggler"
									aria-controls="navbarToggler"
									aria-expanded="true"
								>
									<i class="fa-solid fa-xmark"></i>
								</button>
							</div>
						</div>
						<div class="bg-light">
							<div class="form-group form-group-icon m-0">
								<button class="btn bg-white border py-1 px-2 mr-2">
									Поиск
								</button>
								<input type="text" class="form-control bg-light" placeholder="Найти товар" />
							</div>
						</div>
					</div>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
					</ul>
				</div>
                    <!-- //REVIEW - Кнопка открытия / закрытия боковой панели -->

					<div class="col-1 d-lg-none nav-item d-flex flex-grow-1 justify-content-center align-items-center text-black-50 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Переключатель навигации">
                        <i class="fa-solid fa-bars"></i>
					</div>

					<div class="col-4 nav-item d-flex flex-grow-1 justify-content-around align-items-center">
						<router-link class="navbar-brand d-flex align-items-center p-0" to="/">
							<img src="storage/images/logo.svg" alt="Logo" height="40" class="p-0 d-none"/>
							<h5 class="fs-6 my-0">CapyProducts</h5>
						</router-link>
					</div>

                    <div class="col nav-item btn btn-white shadow-none border-0 rounded-0 d-none d-lg-flex flex-grow-1 justify-content-around align-items-center text-danger text-uppercase px-5 py-2">
                        <i class="fa-solid fa-bars pe-2"></i>
                        <p>Каталог</p>
                    </div>

					<div class="col nav-item d-none d-lg-flex flex-grow-1 justify-content-around align-items-center text-black-50 py-2">
						<div class="form-group-icon w-100">
							<button class="btn bg-white border py-1 px-2 mr-2 text-muted">
								Поиск
							</button>
							<input type="text" class="form-control bg-light" placeholder="Найти товар"/>
						</div>
					</div>

                    <div class="col nav-item btn btn-white shadow-none border-0 rounded-0 d-none flex-grow-1 justify-content-around align-items-center text-black-50 px-5 py-2">
                        <i class="fa-regular fa-heart"></i>
                    </div>

                    <div class="col-2 offset-3 nav-item btn btn-white shadow-none border-0 rounded-0 d-flex flex-grow-1 justify-content-around align-items-center text-black-50 py-2">
                        <i class="fa-regular fa-circle-user"></i>
                        <p class="d-none d-lg-block">Профиль</p>
                    </div>

<!--                     <button class="col nav-item btn btn-white shadow-none border-0 rounded-0 d-flex flex-grow-1 justify-content-around align-items-center text-black-50 py-2">
                        <i class="fa-solid fa-right-to-bracket pe-2"></i>
                        <p class="d-none d-lg-block">Войти</p>
                    </button> -->

                    <div class="col-2 nav-item btn btn-white shadow-none border-0 rounded-0 d-flex flex-grow-1 justify-content-around align-items-center text-black-50 py-2">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <p class="d-none d-lg-block">Корзина</p>
                    </div>
			</div>
		</nav>
	</header>
	<router-view></router-view>
	<footer>
		<div class="container sticky-top">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top justify-content-between">
				<div class="col mb-3">
					<a href="#" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
						<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
					</a>
					<p class="text-body-secondary">© 2023</p>
				</div>

				<div class="col mb-3">
					<h5>Section</h5>
					<ul class="nav flex-column">
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
					</ul>
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
};
</script>
<style></style>
