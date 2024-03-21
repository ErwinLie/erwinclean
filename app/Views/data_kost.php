<div class="pagetitle">
      <h1 align="center">Data Kost</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('home/data_kost')?>">Data Kost</a></li>
          <!-- <li class="breadcrumb-item active"><a href="<?= base_url('home/bk')?>">Barang Keluar</a></li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->


              <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Datatables</h5>

	<a href="<?= base_url("home/t_dkost")?>">
		<button class="btn btn-success">+ Tambah</button>
  </a>
  
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th align="center" scope="col">No</th>
                    <th align="center" scope="col">Durasi</th>
                    <th align="center" scope="col">Harga</th>
                    <th align="center" scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                 <?php
			$no=1;
			foreach ($erwin as $wkwk){
			?>

			<tr>
				<td><?= $no++ ?></td>
				<td><?= $wkwk->durasi ?></td>
                <td>Rp <?= number_format($wkwk->harga, 0, ',', '.') ?></td>
				
				

              


        <td>

        
        <a href="<?= base_url('home/e_dkost/'.$wkwk->id_kost) ?>">
    <button class="btn btn-warning">
        <i class="fas fa-pen"></i>
    </button>
</a>

			<a href="<?= base_url('home/hapus_dkost/'.$wkwk->id_kost) ?>">
    <button class="btn btn-danger">
        <i class="fas fa-eraser"></i>
    </button>
</a>
		
</td>



                      <?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
              </div>