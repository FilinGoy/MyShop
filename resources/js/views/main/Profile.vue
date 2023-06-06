<template>
	<div class="row flex-fill g-2">
		<div class="d-none d-lg-block col-12 col-lg-4">
			<div class="d-flex flex-column bg-white">
				<h4 class="d-none d-lg-block mb-0 p-4">Личный кабинет</h4>
				<div class="d-flex flex-column flex-fill">
					<router-link to="/profile/orders" class="dropdown-item text-wrap py-3 px-4">Мои заказы</router-link>
					<router-link to="/profile/favorite" class="dropdown-item text-wrap py-3 px-4">Избранное</router-link>
					<router-link to="/profile" class="dropdown-item text-wrap py-3 px-4 active">Учётная запись</router-link>
				</div>
				<a type="button" @click="quitAccount" class="dropdown-item mt-auto border-top text-wrap p-4">Выйти</a>
			</div>
		</div>
		<div class="d-flex col-12 col-lg-8 flex-fill">
			<div class="bg-white flex-fill px-4 pt-2 pb-4">
				<div class="row">
					<div class="d-flex justify-content-between align-items-center py-4">
						<div class="d-flex align-items-end">
							<h1 class="my-0 lh-1">Учетная запись</h1>
						</div>
					</div>
				</div>
				<div class="row g-3">
					<h4 class="">Личные данные</h4>
					<div class="col-md-6">
						<label for="firstName" class="form-label">Имя</label>
						<input type="text" class="form-control" id="firstName" placeholder="Иван" max="255" v-model="firstName" />
					</div>
					<div class="col-md-6">
						<label for="lastName" class="form-label">Фамилия</label>
						<input type="text" class="form-control" id="lastName" placeholder="Иванов" max="255" v-model="lastName" />
					</div>
					<div class="col-md-6">
						<label for="number" class="form-label">Номер</label>
						<input type="tel" class="form-control col" id="number" v-model="number" v-mask="'+7 (###) ###-##-##'" maxlength="18" />
					</div>
					<div class="col-md-6">
						<label for="email" class="form-label">Почта (E-Mail)<span class="text-danger">*</span></label>
						<input type="email" class="form-control" id="email" placeholder="example@mail.ru" max="255" v-model="email" />
					</div>
					<div class="col-12">
						<label for="adress" class="form-label">Адрес</label>
						<input type="text" class="form-control" id="adress" placeholder="г.Челябинск, Проспект Ленина, д.1, 1" max="255" v-model="adress" />
					</div>
					<hr />
					<div class="col-md-6">
						<label for="newPassword" class="form-label">Новый пароль</label>
						<input type="password" class="form-control" id="newPassword" max="255" v-model="newPassword" />
					</div>
					<div class="col-md-6">
						<label for="newPasswordConfirm" class="form-label">Повторите пароль</label>
						<input type="password" class="form-control" id="newPasswordConfirm" max="255" v-model="newPasswordConfirm" />
					</div>
					<div class="col-12">
						<a type="button" @click.prevent="editAccount" class="btn btn-primary">Сохранить изменения</a>
					</div>
					<div class="col-12" v-if="error">
						<p class="text-danger">{{ error }}</p>
					</div>
					<div class="col-12">
						<small class="text-wrap text-start text-muted fw-light"> Заполненные данные помогут вам быстрее оформлять заказы! </small>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import { mapState } from "vuex";
import { mask } from "vue-the-mask";

export default {
	name: "profile",
	directives: { mask },
	computed: {
		...mapState(["user"]),
	},
	data() {
		return {
			id: "",
			email: "",
			firstName: "",
			lastName: "",
			number: "",
			adress: "",
			newPassword: "",
			newPasswordConfirm: "",
			error: "",
		};
	},
	updated() {
		if (!this.$store.getters.statusUser) {
			this.$router.push({ name: "signIn" });
		}
	},
	watch: {
		"$store.state.user": function (value) {
			this.id = value.id;
			this.email = value.email;
			this.firstName = value.first_name;
			this.lastName = value.last_name;
			this.number = value.number;
			this.adress = value.adress;
		},
	},
	methods: {
		async editAccount() {
			let data = { id: this.id };
			if (this.email !== this.$store.state.user.email) data.email = this.email;
			if (this.firstName !== this.$store.state.user.first_name) data.first_name = this.firstName;
			if (this.lastName !== this.$store.state.user.last_name) data.last_name = this.lastName;
			if (this.number !== this.$store.state.user.number) data.number = this.number;
			if (this.adress !== this.$store.state.user.adress) data.adress = this.adress;
			if (this.newPassword !== this.$store.state.user.newPassword && this.newPassword) {
				if (this.newPassword != this.newPasswordConfirm) {
					return (this.error = "Пароли не совпадают");
				}
				data.password = this.newPassword;
			}

			this.axios
				.post("/api/editProfile", data)
				.then((res) => {
					if (res.data.status) {
						window.location.reload();
					}
				})
				.catch((err) => {
					if (err.response.status === 403) {
						this.error = err.response.data.message;
					}
                    if (err.response.status === 422) {
						this.error = err.response.data.message;
					}
					if (!err.response.status) {
						window.location.reload();
					}
				});
		},
	},
};
</script>
<style></style>
