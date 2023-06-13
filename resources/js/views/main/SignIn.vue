<template>
	<div class="row flex-fill">
		<div class="col-12 d-flex justify-content-center align-items-center">
			<div class="border bg-white rounded-3 p-3">
				<ul class="nav nav-tabs nav-lavalamp justify-content-center mb-4" id="productTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Вход</a>
					</li>
					<li class="nav-item">
						<div class="nav-link">/</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false"> Регистрация </a>
					</li>
				</ul>
				<div class="tab-content" id="productTabContent">
					<!-- Login tab content -->
					<div class="tab-pane fade active show" id="login" role="tabpanel" aria-labelledby="login-tab">
						<div class="row mb-4 g-3">
							<div class="col-12">
								<label for="loginName" class="form-label">Логин<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="loginName" placeholder="Пользователь" max="255" v-model="loginLogin" />
							</div>
							<div class="col-12">
								<label for="loginPassword" class="form-label">Пароль<span class="text-danger">*</span></label>
								<input type="password" class="form-control" id="loginPassword" placeholder="Пароль" max="255" v-model="loginPassword" />
							</div>
							<div class="col-12 form-outline">
								<input class="form-input me-2" type="checkbox" id="loginCheck" checked aria-describedby="loginCheckHelpText" v-model="loginChecked" />
								<label class="form-check-label" for="loginCheck">
									Запомнить меня
								</label>
							</div>
							<div class="col-12">
								<button @click.prevent="getToken()" class="btn btn-outline-danger w-100">Вход</button>
							</div>
							<p v-if="errorLogin" class="text-danger col-12">
								{{ errorLogin }}
							</p>
						</div>
					</div>
					<!-- Registration tab content -->
					<div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">
						<div class="row mb-4 g-3">
							<div class="col-12">
								<label class="form-label" for="registerUsername">Логин<span class="text-danger">*</span></label>
								<input type="text" id="registerUsername" class="form-control" placeholder="Пользователь" v-model="registerLogin" minlength="4" max="255" />
							</div>
							<div class="col-12">
								<label class="form-label" for="registerEmail">Почта (Email адрес)<span class="text-danger">*</span></label>
								<input type="email" id="registerEmail" class="form-control" placeholder="inbox@mail.ru" v-model="registerEmail" max="255" />
							</div>
							<div class="col-12">
								<label class="form-label" for="registerPassword">Пароль<span class="text-danger">*</span></label>
								<input type="password" id="registerPassword" class="form-control" placeholder="Придумайте пароль" v-model="registerPassword" max="255" />
							</div>
							<div class="col-12">
								<label class="form-label" for="registerRepeatPassword">Подтвердите пароль<span class="text-danger">*</span></label>
								<input type="password" id="registerRepeatPassword" class="form-control" placeholder="Подтвердите пароль" v-model="registerPassword_confirm" max="255" />
							</div>
							<div class="col-12">
								<input class="form-input me-2" type="checkbox" id="registerCheck" aria-describedby="registerCheckHelpText" v-model="registerChecked" required />
								<label class="form-check-label" for="registerCheck"> Я соглашаюсь с требованиями сервиса<span class="text-danger">*</span> </label>
							</div>
							<div class="col-12">
								<button @click.prevent="register()" class="btn btn-outline-danger w-100">Регистрация</button>
							</div>

							<div class="col-12">
								<p v-if="errorRegister" class="text-danger">
									{{ errorRegister }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Pills content -->
		</div>
	</div>
</template>
<script>
export default {
	name: "signIn",
	data() {
		return {
			loginLogin: "",
			loginPassword: "",
			loginChecked: false,

			registerLogin: "",
			registerEmail: "",
			registerPassword: "",
			registerPassword_confirm: "",
			registerChecked: false,

			errorLogin: null,
			errorRegister: null,
		};
	},
	methods: {
		getToken() {
			if (!this.loginLogin) {
				this.errorLogin = "Заполните поле логина!";
				return;
			}
			if (!this.loginPassword) {
				this.errorLogin = "Заполните поле пароля!";
				return;
			}

			if (this.loginLogin !== "" && this.loginPassword !== "") {
				this.axios
					.post("/api/auth/login", {
						login: this.loginLogin,
						password: this.loginPassword,
					})
					.then((res) => {
						this.$store.commit("ADD_AUTH", { token: res.data.access_token, remember: this.loginChecked });
						this.$store.commit("SET_IS_LOGED_IN", true);
						this.$router.push({ name: "main" });
					})
					.catch((err) => {
						this.errorLogin = err.response.data.error;
					});
			} else {
				this.errorLogin = "Не все поля заполнены!";
			}
		},

		register() {
			if (!this.registerLogin) {
				this.errorRegister = "Заполните поле логина!";
				return;
			}
			if (!this.registerEmail) {
				this.errorRegister = "Заполните поле почты!";
				return;
			}
			if (!this.registerPassword) {
				this.errorRegister = "Заполните поле пароля!";
				return;
			}
			if (!this.registerPassword_confirm) {
				this.errorRegister = "Заполните поле подтверждения пароля!";
				return;
			}

			if (!this.registerChecked) {
				this.errorRegister = "Согласителсь с требованиями магазина!";
				return;
			}

			if (this.registerLogin && this.registerPassword && this.registerPassword_confirm && this.registerEmail) {
				this.axios
					.post("/api/auth/register", {
						email: this.registerEmail,
						login: this.registerLogin,
						password: this.registerPassword,
						password_confirmation: this.registerPassword_confirm,
					})
					.then((res) => {
						localStorage.setItem("access_token", res.data.access_token);
						this.$router.push({ name: "main" });
					})
					.catch((err) => {
						this.errorRegister = err.response.data.message;
					});
			} else {
				this.errorRegister = "Не все поля заполнены!";
			}
		},
	},
};
</script>
<style></style>
