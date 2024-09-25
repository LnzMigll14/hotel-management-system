<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RED DRAGON HOTEL | FACILITIES</title>

    <?php require('inc/links.php'); ?>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

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
      </div>
    </div>

    <!-- Footer section -->
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
      });
    </script>
  </body>
</html>
