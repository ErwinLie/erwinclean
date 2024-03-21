<main id="main" class="main">

    <div class="container">
        <form action="<?= base_url('home/aksi_t_dkantor')?>" method="post">
    <div class="pagetitle">
      <h1>Tambah Kantor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('home/data_kantor')?>">Data Kantor</a></li>
          <li class="breadcrumb-item active">Tambah Kantor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kantor</h5>

              <!-- General Form Elements -->
             <form>

             <div class="mb-3 mt-3">
    <label for="no" class="form-label">Durasi</label>
    <input type="time" class="form-control" id="durasi" name="durasi">
</div>

<div class="mb-3 mt-3">
        <label for="tgl" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga"  name="harga">
    </div>


    <div class="row mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
          </div>

        </div>
      </div>




            
    </section>

</form>
                        </div>
                        </main>
                        