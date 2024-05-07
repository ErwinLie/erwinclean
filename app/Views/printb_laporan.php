<?php

$currentDate = date("d");
$currentMonth = date("m");
$currentYear = date("Y");

// Format nomor laporan sesuai dengan yang diinginkan
$nomorLaporan = "LO/".$currentDate."/".$currentMonth."/".$currentYear;


$imagePath = FCPATH. 'img/kop.jpeg';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
        }
        table {
            font-family: 'Times New Roman', Times, serif;
            width: 100%;
        
        }
        table, th, td {
           
            padding: 5px 5px;
            text-align: center;
           
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 65%;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        hr{
            height: 1px;
            background-color: black;
        }
        .atas {
            margin-top: 5px;
        }
        .kanan {
            margin-left: 1400px;
            margin-top: -75px;
        }
        .judul{
            width: 100%;
            text-align: center;
            align-items: center;
        }
        .judul h1{
            font-size: 30px;
        }
   </style>
</head>
<body>
    <div class="judul">
        <h1>LAPORAN ORDER</h1>
    </div>
<table style="font-size: 15px;">
<tr>
    <td style="text-align: left;">
      <!-- <p>Nomor : LO/001/2024</p> -->
      <p>Nomor : <?= $nomorLaporan ?></p>
      <p>Lamp : -</p>
      <p>Perihal : Data Order</p>
      <p></p>
      <p></p>
      <p></p>
    </td>
    
    <td style="text-align: right;">
      <p style="margin-bottom: 10px;">Batam, <?php echo date("D-d-M-Y"); ?></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
    </td>
  </tr>
</table>

<!-- <table style="font-size: 15px;"> 
    <tr>
        <td style="text-align: left;"><p>ERWIN LIE</p></td>
    </tr>
    <tr>
        <td style="text-align: left;"><p>BERSIH - BERSIH</p></td>
    </tr>
    <tr>
        <td style="text-align: left;"><p>Di Tempat</p></td>
    </tr>
</table> -->
       

<p>LAPORAN CLEANING SERVICE</p> <br>
  <table class="table-container" style="font-size: 10px;" border="1px">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Jenis Tempat</th>
                <th scope="col">Tanggal</th>              
                <th scope="col">Durasi</th> 
                <th scope="col">Pengerjaan</th>
                <th scope="col">Total Harga</th> 
                 
            </tr>
        </thead>
        <tbody>
        <?php
$total = 0; // Inisialisasi variabel total harga
$no = 1;
foreach ($wkwk as $key => $data) {
    $total += $data->total_harga; // Menambahkan total harga dari setiap data ke variabel total
   
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $data->username ?></td>
        <td><?= $data->lokasi ?></td>
        <td><?= $data->menu_tempat ?></td>
        <td><?= $data->tgl ?></td>  
        <td><?= $data->durasi ?></td>
        <td><?= $data->waktu ?></td>         
        <td><?= $data->total_harga ?></td>   
    </tr>
<?php } ?>

<tr>
    <td colspan="7">Total Harga</td>
    <td><?= $total ?></td>    
</tr>
            
        </tbody>
    </table>
    </div>

   
 
         <table style="width: 100%; margin-top:30;">
  <tr>
    <td style="text-align: left;">
      <p>Tanda Terima</p>
      <p></p>
      <p></p>
      <p></p>
    </td>
    
    <td style="text-align: right;">
      <p>Hormat Kami</p>
      <p></p>
      <p></p>
      <p></p>
    </td>
  </tr>
</table>

<script type="text/javascript">
        window.print();
    </script>
</body>
</html>