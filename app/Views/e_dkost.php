<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Kost</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('home/data_kost')?>">Kost</a></li>
          <li class="breadcrumb-item active">Edit Kost</li>
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
              <form action="<?=base_url('home/aksi_e_dkost')?>"method="POST" enctype="multipart/form-data">  
              
              <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Durasi</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" value="<?= $satu->durasi?>" name="durasi">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $satu->harga?>" name="harga">
                                    </div>
                                </div>

                <div class="row mb-3">
                
                  
                  <div class="row mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="id" value="<?= $satu->id_kost ?>">
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

