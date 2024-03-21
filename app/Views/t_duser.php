<main id="main" class="main">

    <div class="container">
        <form action="<?= base_url('home/aksi_t_duser')?>" method="post">
    <div class="pagetitle">
      <h1>Tambah User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('home/data_user')?>">Data User</a></li>
          <li class="breadcrumb-item active">Tambah User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah User</h5>

              <!-- General Form Elements -->
             <form>

             <div class="mb-3 mt-3">
    <label for="no" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username">
</div>

<div class="mb-3 mt-3">
        <label for="tgl" class="form-label">Password</label>
        <input type="password" class="form-control" id="password"  name="password">
    </div>

<div class="mb-3 mt-3">
        <label for="tgl" class="form-label">Email</label>
        <input type="email" class="form-control" id="email"  name="email">
    </div>

    <div class="mb-3 mt-3">
        <label for="tgl" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="no_hp"  name="no_hp">
    </div>

    <div class="mb-3 mt-3">
        <label for="metode" class="form-label">Level</label>
        <select class="form-select" id="level" name="level" required>
            <option value="">----Pilih Level----</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
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
                        