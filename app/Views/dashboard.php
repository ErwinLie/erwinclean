<style>
  .container-fluid {
    margin-top: -5px; /* Ubah nilai sesuai kebutuhan */
  }
</style>

<div class="container-fluid py-4 px-5">
  <div class="row">
    <div class="col-md-12">
      <div class="d-md-flex align-items-center mb-3 mx-2">
        <div class="mb-md-0 mb-3">
          <h5 class="card-title">Hello, <?= session()->get('username')?></h5>
        </div>
      </div>
    </div>
  </div>
  <hr class="my-0">
  <div class="row">
    <div class="position-relative overflow-hidden text-center"> <!-- Perubahan pada class text-center untuk membuat tombol di tengah -->
      <div class="swiper mySwiper mt-4 mb-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!-- Konten Swiper Slide -->
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <!-- <a class="btn btn-primary btn-lg mt-3" href="<?=base_url('home/menu_clean')?>">Order Let's Clean</a> Tombol besar di tengah -->
    </div>
  </div>
</div>




<!-- <div class="container-fluid py-4 px-5">
      <div class="row">
        <div class="col-md-12">
          <div class="d-md-flex align-items-center mb-3 mx-2">
            <div class="mb-md-0 mb-3">
              <h3 class="font-weight-bold mb-0">Hello, Noah</h3>
              <p class="mb-0">Apps you might like!</p>
            </div>
            
          </div>
        </div>
      </div>
      <hr class="my-0">
      <div class="row">
        <div class="position-relative overflow-hidden">
          <div class="swiper mySwiper mt-4 mb-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div> -->