<template>
	<div class="row flex-fill">
		<div class="col-12 py-5 px-4 d-flex justify-content-center align-items-center">
			<div class="border w-50">
				<template>
  <div>
    <MDBTabs v-model="form7ActiveTab">
      <!-- Tabs navs -->
      <MDBTabNav pills justify tabsClasses="mb-3">
        <MDBTabItem tabId="form7-login" href="form7-login"
          >Login</MDBTabItem
        >
        <MDBTabItem tabId="form7-register" href="form7-register"
          >Register</MDBTabItem
        >
      </MDBTabNav>
      <!-- Tabs navs -->
      <!-- Tabs content -->
      <MDBTabContent>
        <MDBTabPane tabId="form7-login">
          <form>
            <div class="text-center mb-3">
              <p>Sign in with:</p>
              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="facebook-f" />>
              </MDBBtn>

              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="google" />
              </MDBBtn>

              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="twitter" />
              </MDBBtn>

              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="github" />
              </MDBBtn>
            </div>

            <p class="text-center">or:</p>

            <!-- Email input -->
            <MDBInput
              type="email"
              label="Email address"
              id="form7LoginEmail"
              v-model="form7LoginEmail"
              wrapperClass="mb-4"
            />

            <!-- Password input -->
            <MDBInput
              type="password"
              label="Password"
              id="form7LoginPassword"
              v-model="form7LoginPassword"
              wrapperClass="mb-4"
            />

            <!-- 2 column grid layout for inline styling -->
            <MDBRow class="mb-4">
              <MDBCol class="d-flex justify-content-center">
                <!-- Checkbox -->
                <MDBCheckbox
                  label="Remember me"
                  id="form7LoginCheck"
                  v-model="form7LoginCheck"
                  wrapperClass="mb-3 mb-md-0"
                />
              </MDBCol>

              <MDBCol>
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </MDBCol>
            </MDBRow>

            <!-- Submit button -->
            <MDBBtn color="primary" block class="mb-4"> Sign in </MDBBtn>

            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a href="#!">Register</a></p>
            </div>
          </form>
        </MDBTabPane>
        <MDBTabPane tabId="form7-register">
          <form>
            <div class="text-center mb-3">
              <p>Sign up with:</p>
              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="facebook-f" />>
              </MDBBtn>

              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="google" />
              </MDBBtn>

              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="twitter" />
              </MDBBtn>

              <MDBBtn color="secondary" floating class="mx-1">
                <MDBIcon iconStyle="fab" icon="github" />
              </MDBBtn>
            </div>

            <p class="text-center">or:</p>

            <!-- Name input -->
            <MDBInput
              type="text"
              label="Name"
              id="form7RegisterName"
              v-model="form7RegisterName"
              wrapperClass="mb-4"
            />

            <!-- Username input -->
            <MDBInput
              type="text"
              label="Username"
              id="form7RegisterUsername"
              v-model="form7RegisterUsername"
              wrapperClass="mb-4"
            />

            <!-- Email input -->
            <MDBInput
              type="email"
              label="Email"
              id="form7RegisterEmail"
              v-model="form7RegisterEmail"
              wrapperClass="mb-4"
            />

            <!-- Password input -->
            <MDBInput
              type="password"
              label="Password"
              id="form7RegisterPassword"
              v-model="form7RegisterPassword"
              wrapperClass="mb-4"
            />

            <!-- Repeat Password input -->
            <MDBInput
              type="password"
              label="Repeat password"
              id="form7RegisterPasswordRepeat"
              v-model="form7RegisterPasswordRepeat"
              wrapperClass="mb-4"
            />

            <!-- Checkbox -->
            <MDBCheckbox
              label="I have read and agree to the terms"
              id="form7RegsiterTermsCheck"
              v-model="form7RegsiterTermsCheck"
              wrapperClass="d-flex justify-content-center mb-4"
            />

            <!-- Submit button -->
            <MDBBtn color="primary" block class="mb-3">
              Sign in
            </MDBBtn>
          </form>
        </MDBTabPane>
      </MDBTabContent>
      <!-- Tabs content -->
    </MDBTabs>
  </div>
</template>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "signIn",
};
</script>
<style></style>
