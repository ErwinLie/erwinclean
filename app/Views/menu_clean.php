<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Clean</title>
<style>
  .container {
    width: 370px; /* Lebar diperbesar */
    padding: 30px; /* Padding diperbesar */
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    float: left;
    display: flex;
    flex-direction: column;
  }

  .title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .description {
    margin-bottom: 15px;
  }

  .button-container {
    margin-top: auto;
    text-align: right;
  }

  .button {
    padding: 6px 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .button:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<h1 style="text-align: center;">Menu Let's Clean</h1>

<div class="container">
  <div class="title">Kost</div>
  <div class="description">Layanan kebersihan kost anda dengan menggunakan jasa Let's Clean.</div>
  <div class="button-container">
    <a class="btn btn-success" href="<?=base_url('home/kost')?>">Pilih</a>
  </div>
</div>

<div class="container">
  <div class="title">Rumah</div>
  <div class="description">Layanan kebersihan rumah anda dengan menggunakan jasa Let's Clean.</div>
  <div class="button-container">
    <a class="btn btn-success" href="<?=base_url('home/rumah')?>">Pilih</a>
  </div>
</div>

<div class="container">
  <div class="title">Kantor</div>
  <div class="description">Layanan kebersihan kantor anda dengan menggunakan jasa Let's Clean.</div>
  <div class="button-container">
    <a class="btn btn-success" href="<?=base_url('home/kantor')?>">Pilih</a>
  </div>
</div>

</body>
</html>
