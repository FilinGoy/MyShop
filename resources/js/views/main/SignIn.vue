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
								<input type="email" id="loginName" class="form-control" v-model="login" />
								<label class="form-label" for="loginName">Логин</label>
							</div>

							<!-- Password input -->
							<div class="form-outline mb-4">
								<input type="password" id="loginPassword" class="form-control" v-model="password" />
								<label class="form-label" for="loginPassword">Пароль</label>
							</div>

							<!-- 2 column grid layout -->
							<div class="row mb-4">
								<div class="col-md-6 d-flex justify-content-center">
									<!-- Checkbox -->
									<div class="form-check mb-3 mb-md-0">
										<input class="form-check-input" type="checkbox" value="" id="loginCheck" v-model="checked" />
										<label class="form-check-label" for="loginCheck">Запомнить меня</label>
									</div>
								</div>

								<p v-if="error" class="text-danger">
									{{ error }}
								</p>

								<div class="col-md-6 d-flex justify-content-center">
									<!-- Simple link -->
									<a>Забыли пароль?</a>
								</div>
							</div>

							<!-- Submit button -->
							<button @click.prevent="getToken()" class="btn btn-primary btn-block mb-4">Вход</button>
						</form>
					</div>
					<div class="tab-pane active border border-danger" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
						<form>
							<!-- Name input -->
							<div class="form-outline mb-4">
								<input type="text" id="registerName" class="form-control" />
								<label class="form-label" for="registerName">Name</label>
							</div>

							<!-- Username input -->
							<div class="form-outline mb-4">
								<input type="text" id="registerUsername" class="form-control" />
								<label class="form-label" for="registerUsername">Username</label>
							</div>

							<!-- Email input -->
							<div class="form-outline mb-4">
								<input type="email" id="registerEmail" class="form-control" />
								<label class="form-label" for="registerEmail">Email</label>
							</div>

							<!-- Password input -->
							<div class="form-outline mb-4">
								<input type="password" id="registerPassword" class="form-control" />
								<label class="form-label" for="registerPassword">Password</label>
							</div>

							<!-- Repeat Password input -->
							<div class="form-outline mb-4">
								<input type="password" id="registerRepeatPassword" class="form-control" />
								<label class="form-label" for="registerRepeatPassword">Repeat password</label>
							</div>

							<!-- Checkbox -->
							<div class="form-check d-flex justify-content-center mb-4">
								<input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
								<label class="form-check-label" for="registerCheck">
									I have read and agree to the terms
								</label>
							</div>

							<!-- Submit button -->
							<button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
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
			login: "",
			password: "",
			checked: false,
			error: null,
		};
	},
	methods: {
		getToken() {
			if (this.login !== "" && this.password !== "") {
				this.axios
					.post("/api/auth/login", {
						login: this.login,
						password: this.password,
					})
					.then((res) => {
                        this.$store.commit('ADD_AUTH', {token: res.data.access_token, remember: this.checked})
                        this.$store.commit('SET_IS_LOGED_IN', true)
                        this.$router.push({name: 'main'})
					})
					.catch((err) => {
						this.error = err.response.data.error;
					});
			} else {
				this.error = "Не все поля заполнены!";
			}
		},
	},
};
</script>
<style></style>
