<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Laporan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
          <li class="breadcrumb-item">Form Laporan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Laporan Data Order</h5>

              <!-- Horizontal Form -->
              <form action="<?= base_url('home/aksi_printb_laporan')?>"method="POST" target="_blank">
    <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Awal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="awal" name="awal">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="akhir" name="akhir">
                  </div>
                </div>
                
                
      
                
                <div class="text-center">
                
                  <button type="submit" class="btn btn-secondary"><i class="ri-printer-fill"> Print</i></button>
                
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          
      </div>
    </section>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Laporan Data Order</h5>

              <!-- Horizontal Form -->
              <form action="<?= base_url('home/print_do')?>"
    method="POST" enctype="multipart/form-data">
    <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Awal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="awal" name="awal">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="akhir" name="akhir">
                  </div>
                </div>
                
                
      
                
                <div class="text-center">
                <button type="submit" class="btn btn-danger"><i class="ri-file-pdf-fill"> PDF</i></button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          
      </div>
    </section>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Laporan Data Order</h5>

              <!-- Horizontal Form -->
              <form action="<?= base_url('home/PrintToExcel')?>"
    method="POST" enctype="multipart/form-data">
    <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Awal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="awal" name="awal">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="akhir" name="akhir">
                  </div>
                </div>
                
                
      
                
                <div class="text-center">
                <button type="submit" class="btn btn-success"><i class="ri-file-excel-2-fill"> Excel</i></button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          
      </div>
    </section>
    

  </main><!-- End #main -->