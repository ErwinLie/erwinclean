

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pembayaran</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('home/data_kantor')?>">Kantor</a></li>
          <li class="breadcrumb-item active">Pembayaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">

              <!-- General Form Elements -->
              <form action="<?=base_url('home/aksi_pembayaran_rumah')?>"method="POST" enctype="multipart/form-data">  
              
              <div class="mb-3 mt-3">
              <?php
    // Ambil nilai harga dan durasi dari parameter URL
    $harga = isset($_GET['harga']) ? $_GET['harga'] : '';
    $durasi = isset($_GET['durasi']) ? $_GET['durasi'] : '';

    // Tampilkan nilai harga dan durasi di input yang sesuai
?>
                                    <label for="inputText" class="formal-label">Durasi (JAM)</label>
                                    <div class="col-sm-10">
                                    <input type="time" class="form-control durasi" id="durasi" name="durasi" readonly value="<?= $durasi ?>">
                                    </div>
                               

                                    <label for="inputText" class="formal-label">Harga</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga" name="harga" readonly value="<?= $harga ?>">
                                    </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Tanggal</label>
                                    <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tgl" name="tgl">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Waktu Mulai</label>
                                    <div class="col-sm-10">
                                    <input type="time" class="form-control" id="waktu" name="waktu">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Kota</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kota" name="kota">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Kecamatan</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                    </div>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="inputText" class="formal-label">Alamat Lengkap</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                    </div>
                                </div>
                                </div>
                  
                  <div class="row mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="id" value="<?= $satu->id_rumah ?>">
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

