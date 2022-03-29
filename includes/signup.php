<div class="container">
          <h2 class="pt-5 pl-3">Create a new account</h2>
          <p class="pl-4">
            Welcome! Proceed to create a new account.
          </p>

          <form class="pt-2 pl-4 pb-2" method="post" autocomplete="off">
            <?php new_user(''); ?>

              <div class="form-group">
              <label for="name">Full Name *</label>
              <input
                type="name"
                class="form-control fc"
                id="name"
                name="name"
                aria-describedby="emailHelp"
                required
              />
            </div>

            <div class="form-group">
              <label for="email">Email address *</label>
              <input
                type="email"
                class="form-control fc"
                id="email"
                name="email"
                aria-describedby="emailHelp"
                required
              />
            </div>
            <div class="form-group">
              <label for="phone">Phone Number *</label>
              <input
                type="text"
                class="form-control fc"
                id="phone"
                name="phone"
                aria-describedby="emailHelp"
                required
              />
            </div>
            <div class="form-group">
              <label for="password">Password *</label>
              <input
                type="password"
                class="form-control fc"
                id="password"
                name="password"
                required
              />
            </div>
            <div class="form-group">
              <label for="select">Select User Type *</label>
              <br>
              <select name="user_type" id="select" class=" form-control fc" required>
                  <option value="1" selected>Guest</option>
                  <option value="3">Writer</option>
              </select>
            </div>
            <p class="pt-1 mt-1 pb-2">
              <button type="submit" name="btn_add_user" class="btn login-btn">
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