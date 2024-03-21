<div class="pagetitle">
      <h1 align="center">Data Order</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('home/data_order')?>">Data Order</a></li>
          <!-- <li class="breadcrumb-item active"><a href="<?= base_url('home/bk')?>">Barang Keluar</a></li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <!-- <div class="input-group w-sm-25 ms-auto">
                  <span class="input-group-text text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                    </svg>
                  </span>
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </div> -->
              <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Datatables</h5>

	<!-- <a href="<?= base_url("home/menu_clean")?>">
		<button class="btn btn-success">+ Tambah</button>
  </a> -->
  <a href="<?= base_url("home/print_do")?>">
		<button class="btn btn-success">LAPORAN</button>
  </a>
  
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th align="center" scope="col">No</th>
                    <th align="center" scope="col">Lokasi</th>
                    <th align="center" scope="col">Menu Tempat</th>
                    <th align="center" scope="col">Tanggal</th>
                    <th align="center" scope="col">Durasi</th>
                    <th align="center" scope="col">Harga</th>
                    <th align="center" scope="col">Pengerjaan</th>
                    <th align="center" scope="col">Waktu</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php 
foreach ($erwin as $key => $wkwk) { // Gunakan $key sebagai indeks loop
    $no = $key + 1; // Hitung nomor baris untuk setiap loop
?>
    <tr>
        <td><?= $no ?></td>
        <td ><?= $wkwk->lokasi ?></td>
        <td ><?= $wkwk->menu_tempat ?></td>
        <td ><?= $wkwk->tgl ?></td>
        <td ><?= $wkwk->durasi ?></td>
        <td><?= $wkwk->total_harga ?></td>
        <td ><?= $wkwk->waktu ?></td>
        <td>
            <span id="countdown_<?= $no ?>"></span>
           <script>
<?php foreach ($erwin as $key => $wkwk) { ?>
    var waktu<?= $key + 1 ?> = <?= json_encode($wkwk->waktu) ?>; // Gunakan variabel unik untuk setiap countdown

    function updateCountdown<?= $key + 1 ?>() {
        var waktu_timestamp = new Date(waktu<?= $key + 1 ?>).getTime();
        var now = new Date().getTime();
        var selisih = waktu_timestamp - now;
        var jam = Math.floor(selisih / (1000 * 60 * 60));
        var menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
        var detik = Math.floor((selisih % (1000 * 60)) / 1000);
        var countdownElement = document.getElementById("countdown_<?= $key + 1 ?>");
        countdownElement.innerHTML = jam + " jam " + menit + " menit " + detik + " detik ";

        // Perbarui status jika waktu habis
        if (selisih <= 0) {
            countdownElement.innerHTML = "Status Selesai";
            // Mengirim permintaan AJAX ke server untuk memperbarui status
            
        }

        // Perbarui setiap 1 detik
        if (selisih > 0) {
            setTimeout(updateCountdown<?= $key + 1 ?>, 1000);
        }
    }
    updateCountdown<?= $key + 1 ?>(); // Panggil fungsi updateCountdown pertama kali
<?php } ?>
</script>


        </td>
       
    </tr>
<?php } ?>



                  </tbody>
                </table>
              </div>
              </div>
              </div>