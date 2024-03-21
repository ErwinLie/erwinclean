
<body class="g-sidenav-show bg-gray-100">
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Sidenav Top -->
    <nav class="navbar bg-slate-900 navbar-expand-lg flex-wrap top-0 px-0 py-0">
      <div class="container py-2">
        <nav aria-label="breadcrumb">
          <div class="d-flex align-items-center">
            <span class="px-3 font-weight-bold text-lg text-white me-4">Let's Clean</span>
          </div>
        </nav>
        <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
          <a href="<?=base_url('home/dashboard')?>" class="nav-link text-white p-0">
              Dashboard
            </a>
          </li>

          <?php
      if (session()->get('level') == 3){
      ?>
          <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
          <a href="<?=base_url('home/menu_clean')?>" class="nav-link text-white p-0">
              Order
            </a>
          </li>
          <?php
     } else {

     }
      ?>

          <?php
      if (session()->get('level') == 3){
      ?>
          <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
            <a href="<?=base_url('home/history_order')?>" class="nav-link text-white p-0">
              History Order
            </a>
          </li>
          <?php
     } else {

     }
      ?>
      <?php
      if (session()->get('level') == 2){
      ?>
          <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
          <a href="<?=base_url('home/data_order')?>" class="nav-link text-white p-0">
              Data Order
            </a>
          </li>
        </ul>
        
        <?php
     } else {

     }
      ?>
      </div>
      <hr class="horizontal w-100 my-0 dark">
      <div class="container pb-3 pt-3">
        <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item border-radius-sm px-3 py-3 me-2 bg-slate-800 d-flex align-items-center">
            <a href="<?=base_url('home/profile')?>" class="nav-link text-white p-0">
              Profile
            </a>
          </li>
          <!-- <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
            <a href="<?=base_url('home/login')?>" class="nav-link text-white p-0">
              Sign In
            </a>
          </li>
          <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
            <a href="<?=base_url('home/data_order')?>" class="nav-link text-white p-0">
              Sign Up
            </a>
          </li> -->
          <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
            <a href="<?=base_url('home/logout')?>" class="nav-link text-white p-0">
              Log Out
            </a>
          </li>
        </ul>
        
      </div>
    </nav>
    <!-- End Sidenav Top -->
    <div class="pt-7 pb-6 bg-cover" style="background-image: url('../assets/img/header-orange-purple.jpg'); background-position: bottom;">
  </div>
    <div class="container">
      <div class="card card-body py-2 bg-transparent shadow-none">
        <div class="row">
          <div class="col-auto">
            <div class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
              <img src="<?= base_url('img/'.$satu->foto)?>" alt="profile_image" class="w-100">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h3 class="mb-0 font-weight-bold">
              <?=$satu->username?>
              </h3>
              <p class="mb-0">
              <?=$satu->username?>
              </p>
            </div>
          </div>
          <form action="<?= base_url('home/e_foto')?>" method="post" enctype="multipart/form-data" style="margin-top: 50px;">
          <a href="<?= base_url('home/e_foto/'.$satu->id_user)?>" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="	fas fa-cloud-upload-alt"></i></a>
          </form>
        </div>
      </div>
    </div>
    <div class="container my-3 py-3">
      <div class="row">
        
        <div class="col-12 col-xl-4 mb-4">
          <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 col-9">
                  <h6 class="mb-0 font-weight-semibold text-lg">Profile information</h6>
                  <p class="text-sm mb-1">Edit the information about you.</p>
                </div>
                <div class="col-md-4 col-3 text-end">
                <form action="<?= base_url('home/aksi_e_profile')?>" method="post" enctype="multipart/form-data">
                  
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm mb-4">
               PROFILE
              </p>
              <ul class="list-group">
              <div class="col-md-12 px-1">
                      <div class="form-group">
                      <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$satu->username?>">
                      </div>
                    </div>
                    <div class="col-md-12 px-1">
                      <div class="form-group">
                      <label>Mobile</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="Mobile" value="<?=$satu->no_hp?>">
                      </div>
                    </div>
                    <div class="col-md-12 px-1">
                      <div class="form-group">
                      <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?=$satu->email?>">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-white btn-icon px-2 py-2">Save
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                    </svg>
                  </button>
              </ul>
            </div>
          </div>
          </form>
        </div>
       
          
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-xs text-muted text-lg-start">
                Copyright
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                Corporate UI by
                <a href="https://www.creative-tim.com" class="text-secondary" target="_blank">Creative Tim</a>.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-xs text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-xs text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-xs text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link text-xs pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"></i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/corporate-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/corporate-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>