<div class="container">
          <h2 class="pt-5 pl-3">Create a new account</h2>
          <p class="pl-4">
            Welcome! Proceed to create a new account.
          </p>

          <form class="pt-3 pl-4 pb-4">
              <div class="form-group">
              <label for="name">Full Name *</label>
              <input
                type="name"
                class="form-control fc"
                id="name"
                aria-describedby="emailHelp"
              />
            </div>

            <div class="form-group">
              <label for="email">Email address *</label>
              <input
                type="email"
                class="form-control fc"
                id="email"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="form-group">
              <label for="password">Password *</label>
              <input
                type="password"
                class="form-control fc"
                id="password"
              />
            </div>
            <div class="form-group">
              <label for="select">Select User Type *</label>
              <br>
              <select name="select" id="select" class=" form-control">
                  <option selected>Guest</option>
                  <option value="visitor">Visitor</option>
                  <option value="teacher">Teacher</option>
                  <option value="student">Student</option>
              </select>
            </div>
            <p class="pt-4 mt-4 pb-4">
              <button type="submit" name="signup_btn" class="btn login-btn">
              Signup
              </button>
            </p>

            <small
              >Returning User?
              <span style="color: aqua"
                ><a href="?return">Log into already existing account</a></span
              ></small
            >
          </form>
        </div>