<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
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
    <h2 class="fw-bold text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
      egestas ultrices purus et efficitur. Proin porta velit vel pretium
      vestibulum. Morbi vestibulum, ligula mollis pharetra facilisis, odio
      turpis malesuada mauris, ac lobortis nisl mauris at risus. Fusce
      auctor, sapien ac tempor varius, neque orci ultrices sem, finibus
      mattis quam turpis in justo. Vivamus elit ligula, euismod quis dolor
      sit amet, aliquam consequat lorem. Suspendisse posuere fringilla
      pretium.</p>
  </div>

  <!-- Container-Cards -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-playstation icon-100" style="font-size: 40px;"></i>
            <h5 class="m-0 ms-3">Playstation</h5>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac luctus erat. Sed pretium, massa in pellentesque auctor, libero odio rutrum leo, iaculis pellentesque quam urna at lectus. Fusce cursus elementum sapien ut gravida</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-playstation icon-100" style="font-size: 40px;"></i>
            <h5 class="m-0 ms-3">Playstation</h5>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac luctus erat. Sed pretium, massa in pellentesque auctor, libero odio rutrum leo, iaculis pellentesque quam urna at lectus. Fusce cursus elementum sapien ut gravida</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-playstation icon-100" style="font-size: 40px;"></i>
            <h5 class="m-0 ms-3">Playstation</h5>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac luctus erat. Sed pretium, massa in pellentesque auctor, libero odio rutrum leo, iaculis pellentesque quam urna at lectus. Fusce cursus elementum sapien ut gravida</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-playstation icon-100" style="font-size: 40px;"></i>
            <h5 class="m-0 ms-3">Playstation</h5>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac luctus erat. Sed pretium, massa in pellentesque auctor, libero odio rutrum leo, iaculis pellentesque quam urna at lectus. Fusce cursus elementum sapien ut gravida</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-playstation icon-100" style="font-size: 40px;"></i>
            <h5 class="m-0 ms-3">Playstation</h5>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac luctus erat. Sed pretium, massa in pellentesque auctor, libero odio rutrum leo, iaculis pellentesque quam urna at lectus. Fusce cursus elementum sapien ut gravida</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-playstation icon-100" style="font-size: 40px;"></i>
            <h5 class="m-0 ms-3">Playstation</h5>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac luctus erat. Sed pretium, massa in pellentesque auctor, libero odio rutrum leo, iaculis pellentesque quam urna at lectus. Fusce cursus elementum sapien ut gravida</p>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer section -->
  <?php require('inc/footer.php'); ?>

  <br /><br /><br />
  <br /><br /><br />

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