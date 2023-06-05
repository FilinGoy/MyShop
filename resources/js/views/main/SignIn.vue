<template>
	<div class="row flex-fill">
		<div class="col-12 py-5 px-4 d-flex justify-content-center align-items-center">
			<div class="border w-50">
				<!-- Pills navs -->
				<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="tab-login" data-mdb-toggle="pill" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="tab-register" data-mdb-toggle="pill" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
					</li>
				</ul>
				<!-- Pills navs -->

				<!-- Pills content -->
				<div class="tab-content">
					<div class="tab-pane active border border-danger" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
						<form>
							<!-- Email input -->
							<div class="form-outline mb-4">
								<label class="form-label" for="loginName">Логин</label>
								<input type="email" id="loginName" class="form-control" v-model="loginLogin" />
							</div>

							<!-- Password input -->
							<div class="form-outline mb-4">
								<label class="form-label" for="loginPassword">Пароль</label>
								<input type="password" id="loginPassword" class="form-control" v-model="loginPassword" />
							</div>

							<!-- 2 column grid layout -->
							<div class="row mb-4">
								<div class="col-md-6 d-flex justify-content-center">
									<!-- Checkbox -->
									<div class="form-check mb-3 mb-md-0">
										<label class="form-check-label" for="loginChecked">Запомнить меня</label>
										<input class="form-check-input" type="checkbox" value="" id="loginChecked" v-model="loginChecked" />
									</div>
								</div>

								<div class="col-md-6 d-flex justify-content-center">
									<!-- Simple link -->
									<a>Забыли пароль?</a>
								</div>

								<p v-if="errorLogin" class="text-danger">
									{{ errorLogin }}
								</p>
							</div>

							<!-- Submit button -->
							<button @click.prevent="getToken()" class="btn btn-primary btn-block mb-4">Вход</button>
						</form>
					</div>

					<div class="tab-pane active border border-danger" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
						<form>
							<!-- Username input -->
							<div class="form-outline mb-4">
								<label class="form-label" for="registerUsername">Логин</label>
								<input type="text" id="registerUsername" class="form-control" v-model="registerLogin" />
							</div>

							<!-- Email input -->
							<div class="form-outline mb-4">
								<label class="form-label" for="registerEmail">Почта (E-Mail)</label>
								<input type="email" id="registerEmail" class="form-control" placeholder="inbox@mail.ru" v-model="registerEmail" />
							</div>

							<!-- Password input -->
							<div class="form-outline mb-4">
								<label class="form-label" for="registerPassword">Пароль</label>
								<input type="password" id="registerPassword" class="form-control" placeholder="Придумайте пароль" v-model="registerPassword" />
							</div>

							<!-- Repeat Password input -->
							<div class="form-outline mb-4">
								<label class="form-label" for="registerRepeatPassword">Повторите пароль</label>
								<input type="password" id="registerRepeatPassword" class="form-control" placeholder="Подтвердите пароль" v-model="registerPassword_confirm" />
							</div>

							<!-- Checkbox -->
							<div class="form-check d-flex justify-content-center mb-4">
								<input class="form-check-input me-2" type="checkbox" id="registerCheck" checked aria-describedby="registerCheckHelpText" v-model="registerChecked" />
								<label class="form-check-label" for="registerCheck">
									Я соглашаюсь с требованиями сервиса
								</label>
							</div>

							<p v-if="errorRegister" class="text-danger">
								{{ errorRegister }}
							</p>

							<!-- Submit button -->
							<button @click.prevent="register()" class="btn btn-primary btn-block mb-3">Регистрация</button>
						</form>
					</div>
				</div>
				<!-- Pills content -->
			</div>
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
