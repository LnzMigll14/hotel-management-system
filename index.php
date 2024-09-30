<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RED DRAGON HOTEL | HOME</title>

  <?php require('inc/links.php'); ?>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <!-- Swiper -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.jpg" class="h-50 w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.jpg" class="h-50 w-100 d-block" />
        </div>
        <div class="swiper-slide" id="carousel">
          <img src="images/carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- Availability Form -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-2">
              <label class="form-label" style="font-weight: 500">Check in</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-2">
              <label class="form-label" style="font-weight: 500">Check out</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-2">
              <label class="form-label" style="font-weight: 500">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-2">
              <label class="form-label" style="font-weight: 500">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1">
              <button
                type="submit"
                class="btn text-white shadow-none custom-bg">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">OUR ROOMS</h2>

  <!-- Rooms -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div
          class="card border-0 shadow"
          style="max-width: 350px; margin: auto">
          <img src="/images/rooms/1.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Deluxe Suite with Garden View</h5>
            <h6>&#8369;5150.00 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                King-sized bed
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Private balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                24/7 room service
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Flat Screen Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Free-wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Aircon
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <a
              href="#"
              class="btn btn-primary d-flex justify-content-center mb-2">Book</a>
            <a
              href="#"
              class="btn btn-sm btn-outline-dark shadow-none d-flex justify-content-center">More Details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div
          class="card border-0 shadow"
          style="max-width: 350px; margin: auto">
          <img src="/images/rooms/1.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Deluxe Suite with Garden View</h5>
            <h6>&#8369;5150.00 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                King-sized bed
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Private balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                24/7 room service
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Flat Screen Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Free-wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Aircon
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>

            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <a
              href="#"
              class="btn btn-primary d-flex justify-content-center mb-2">Book</a>
            <a
              href="#"
              class="btn btn-sm btn-outline-dark shadow-none d-flex justify-content-center">More Details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div
          class="card border-0 shadow"
          style="max-width: 350px; margin: auto">
          <img src="/images/rooms/1.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Deluxe Suite with Garden View</h5>
            <h6>&#8369;5150.00 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                King-sized bed
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Private balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                24/7 room service
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Flat Screen Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Free-wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Aircon
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>

            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <a
              href="#"
              class="btn btn-primary d-flex justify-content-center mb-2">Book</a>
            <a
              href="#"
              class="btn btn-sm btn-outline-dark shadow-none d-flex justify-content-center">More Details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a
          href="#"
          class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">OUR FACILITIES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div
        class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-playstation icon-100"></i>
        <h5 class="mt-2">Playstation</h5>
      </div>
      <div
        class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi icon-100"></i>
        <h5 class="mt-2">Wifi</h5>
      </div>
      <div
        class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi icon-100"></i>
        <h5 class="mt-2">Wifi</h5>
      </div>
      <div
        class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <i class="bi bi-wifi icon-100"></i>
        <h5 class="mt-2">Wifi</h5>
      </div>
    </div>
  </div>

  <!-- Reach Us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">REACH US</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe
          class="w-100"
          height="320px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.518724033255!2d125.60279307737683!3d7.0656922747250865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d785701cf6d%3A0x2508af7838845384!2s123%20San%20Pedro%20St%2C%20Poblacion%20District%2C%20Davao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1727324084638!5m2!1sen!2sph"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a
            href="tel:(082)296-2606"
            class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-telephone-fill"></i> (082)296-2606
          </a>

        </div>

        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6">
              <i class="bi bi-facebook"></i> Facebook
            </span>
          </a>

          <br />

          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6">
              <i class="bi bi-twitter-x"></i> Twitter/X
            </span>
          </a>

          <br />

          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6">
              <i class="bi bi-instagram"></i> Instagram
            </span>
          </a>
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
      breakpoints: {
        320: {
          sliderPerView: 1,
        },
        640: {
          sliderPerView: 1,
        },
        768: {
          sliderPerView: 2,
        },
        1024: {
          sliderPerView: 3,
        },
      }
    });
  </script>
</body>

</html>