<div class="pagetitle">
      <h1 align="center">Data Rumah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('home/dashboard')?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('home/data_rumah')?>">Data Rumah</a></li>
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

	<a href="<?= base_url("home/t_drumah")?>">
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

        
        <a href="<?= base_url('home/e_drumah/'.$wkwk->id_rumah) ?>">
    <button class="btn btn-warning">
        <i class="fas fa-pen"></i>
    </button>
</a>

			<a href="<?= base_url('home/hapus_drumah/'.$wkwk->id_rumah) ?>">
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