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
    <h2 class="fw-bold text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <!-- Container-Cards -->
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <a class="navbar-brand" href="#">FILTERS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check in</label>
                <input type="date" class="form-control shadow-none mb-3" />
                <label class="form-label">Check out</label>
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f1">Facility One</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f2">Facility Two</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f2">Facility Three</label>
                </div>
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label">Adults</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-2 px-md-3 px-0">
              <h5 class="mb-3">Deluxe Suite with Garden View</h5>
              <div class="features mb-3">
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

              <div class="facilities mb-3">
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

              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                </span>
              </div>

            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4">&#8369;5150.00 per night</h6>
              <a
                href="#"
                class="btn btn-primary w-100 d-flex justify-content-center mb-2">Book</a>
              <a
                href="#"
                class="btn btn-sm w-100 btn-outline-dark shadow-none d-flex justify-content-center">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-2 px-md-3 px-0">
              <h5 class="mb-3">Deluxe Suite with Garden View</h5>
              <div class="features mb-3">
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

              <div class="facilities mb-3">
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

              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                </span>
              </div>

            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4">&#8369;5150.00 per night</h6>
              <a
                href="#"
                class="btn btn-primary w-100 d-flex justify-content-center mb-2">Book</a>
              <a
                href="#"
                class="btn btn-sm w-100 btn-outline-dark shadow-none d-flex justify-content-center">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-2 px-md-3 px-0">
              <h5 class="mb-3">Deluxe Suite with Garden View</h5>
              <div class="features mb-3">
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

              <div class="facilities mb-3">
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

              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                </span>
              </div>

            </div>
            <div class="col-md-2 text-center">
              <h6 class="mb-4">&#8369;5150.00 per night</h6>
              <a
                href="#"
                class="btn btn-primary w-100 d-flex justify-content-center mb-2">Book</a>
              <a
                href="#"
                class="btn btn-sm w-100 btn-outline-dark shadow-none d-flex justify-content-center">More Details</a>
            </div>
          </div>
        </div>
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