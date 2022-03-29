<div class="container">
          <h2 class="pt-5 pl-3">Sign In or Create a new account</h2>
          <p class="pl-4">
            If you are a returning user, please Sign in if not, create a new
            account.
          </p>

          <form class="pt-1 pl-4 pb-2" method="post" autocomplete="off">
          <?php login(); ?>
            <div class="form-group">
              <label for="email">Email address *</label>
              <input
                type="email"
                class="form-control fc"
                id="email"
                name="email"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="form-group">
              <label for="password">Password *</label>
              <input
                type="password"
                class="form-control fc"
                id="password"
                name="password"
              />
            </div>
            <div class="form-group">
              <label for="select">Select User Type *</label>
              <br>
              <select name="user_type" id="select" class="form-control fc">
                  <option value="1" selected>Guest</option>
                  <option value="3">Writer</option>
                  <option value="2">Admin</option>
              </select>
            </div>
            <p class="pt-1 mt-2 pb-1">
              <button type="submit" name="btn_login" class="btn login-btn">
                Login
              </button>
            </p>

            <small
              >New User?
              <span style="color: aqua"
                ><a href="?new-user">Create an account</a></span
              ></small
            >
          </form>
        </div>