<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        
      </div>
    </div>
  </div>
  
            <div class="col-md-4 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8" style="background-color: #f0f0f0; /* warna abu-abu */">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-black text-dark display-6">Sign up</h3>
                  <p class="mb-0">Nice to meet you! Please enter your details.</p>
                </div>
                <div class="card-body">
                <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_sign')?>"method="POST">
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Enter your username" aria-label="username" aria-describedby="name-addon" name="username">
                    </div>
                    <label>Phone Number</label>
                    <div class="mb-3">
                      <input type="phone" class="form-control" placeholder="Enter your phone number" aria-label="no_hp" aria-describedby="name-addon" name="no_hp">
                    </div>
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Enter your email address" aria-label="email" aria-describedby="email-addon" name="email">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Create a password" aria-label="password" aria-describedby="password-addon" name="password">
                    </div>
                    <!-- <div class="form-check form-check-info text-left mb-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="font-weight-normal text-dark mb-0" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bold">Terms and Conditions</a>.
                      </label>
                    </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Sign up</button>
                     
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-xs mx-auto">
                    Already have an account?
                    <a href="<?=base_url('home/login')?>" class="text-dark font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>