<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RED DRAGON HOTEL | FACILITIES</title>

  <?php require('inc/links.php'); ?>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .pop:hover {
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body class="bg-light">
  <!-- Header section -->
  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas
      ultrices purus et efficitur. Proin porta velit vel pretium vestibulum.
      Morbi vestibulum, ligula mollis pharetra facilisis, odio turpis
      malesuada mauris, ac lobortis nisl mauris at risus. Fusce auctor, sapien
      ac tempor varius, neque orci ultrices sem, finibus mattis quam turpis in
      justo. Vivamus elit ligula, euismod quis dolor sit amet, aliquam
      consequat lorem. Suspendisse posuere fringilla pretium.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-1">
        <h3 class="mb-3">Lorem ipsum dolor sit</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque
          obcaecati quaerat beatae officiis corrupti omnis.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2 order-md-2">
        <img src="images/about/winston.jpg" class="w-100" />
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
          <i class="fa-solid fa-hotel" style="font-size:50px; width: 70px;"></i>
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
          <i class="fa-solid fa-user" style="font-size:50px; width: 70px;"></i>
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
          <i class="fa-solid fa-star" style="font-size:50px; width: 70px;"></i>
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
          <i class="fa-solid fa-users" style="font-size:50px; width: 70px;"></i>
          <h4 class="mt-3">150+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>

<!-- Management Section -->
  <h3 class="my-5 fw-bold text-center text-custom-red">MANAGEMENT</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/winston-2.jpg" class="w-100">
          <h5 class="mt-2">Winston Scott</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Footer section -->
  <?php require('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper -->
   <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });
  </script>
</body>

</html>