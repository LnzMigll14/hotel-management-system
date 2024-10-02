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
      <h2 class="fw-bold text-center">CONTACT US</h2>
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

    <!-- Container-Cards -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe
              class="w-100"
              height="320px"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.518724033255!2d125.60279307737683!3d7.0656922747250865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d785701cf6d%3A0x2508af7838845384!2s123%20San%20Pedro%20St%2C%20Poblacion%20District%2C%20Davao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1727324084638!5m2!1sen!2sph"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <h5>Address</h5>
            <a
              href="https://maps.app.goo.gl/3oME9ruHHibATsZ29"
              target="_blank"
              class="d-inline-block text-decoration-none text-dark"
              ><i class="fa-solid fa-location-dot"></i> 123 San Pedro Street,
              Barangay 12-B, Poblacion District, Davao City, 8000,
              Philippines</a
            >
            <h5 class="mt-4">Call Us</h5>
            <a
              href="tel:(082)296-2606"
              class="d-inline-block text-decoration-none text-dark mb-2"
            >
              <i class="bi bi-telephone-fill"></i> (082)296-2606
            </a>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
            <form>
              <h5>Send a message</h5>
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none" />
              </div>
              <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea type="text" class="form-control shadow-none"rows="5" style="resize: none;"></textarea>   
              </div>
              <button type="submit" class="btn text-white shadow-none custom-bg mt-3">SUBMIT</button>
            </form>
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
