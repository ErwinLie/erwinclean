<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8" style="background-color: #f0f0f0; /* warna abu-abu */">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-black text-dark display-6">Welcome to Let's Clean</h3>
                  <p class="mb-0">Welcome back! Please enter your details.</p>
                </div>
                <div class="card-body" style="margin-bottom: 50px;">
                <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksilogin')?>"method="POST">
                    <label>Name</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Enter your name" aria-label="Name" aria-describedby="name-addon" name="username">
                    </div>
                   
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password">
                    </div>
                    <!-- <div class="d-flex align-items-center">
                      <div class="form-check form-check-info text-left mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="font-weight-normal text-dark mb-0" for="flexCheckDefault">
                          Remember for 14 days
                        </label>
                      </div>
                      <a href="javascript:;" class="text-xs font-weight-bold ms-auto">Forgot password</a>
                    </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Sign in</button>
                      
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-xs mx-auto">
                    Don't have an account?
                    <a href="<?=base_url('home/signup')?>" class="text-dark font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>
