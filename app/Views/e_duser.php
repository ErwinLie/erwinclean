<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit User</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('home/data_user')?>">User</a></li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="<?=base_url('home/aksi_e_duser')?>"method="POST" enctype="multipart/form-data">  
              
              <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $satu->username?>" name="username">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $satu->password?>" name="password">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $satu->no_hp?>" name="no_hp">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $satu->email?>" name="email">
                                    </div>
                                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="formal-label">Level</label>
                  <div class="col-sm-10">
                  <select name="level" type="password" class="form-control" id="level" >
                        
                        <option> <?= $satu->level ?> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                  </div>
                </div>

                <div class="row mb-3">
                
                  
                  <div class="row mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="id" value="<?= $satu->id_user ?>">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

           

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

