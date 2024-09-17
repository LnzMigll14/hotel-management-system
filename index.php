<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RED DRAGON HOTEL</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/common.css" />
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
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-custom-red fw-bold fs-3 me-5" href="#">RED DRAGON HOTEL</a>
            <button
                class="navbar-toggler shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarScroll"
                aria-controls="navbarScroll"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul
                    class="navbar-nav me-auto mb-2 my-lg-0 navbar-nav-scroll"
                    style="--bs-scroll-height: 100px">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <button
                        type="button"
                        class="btn btn-outline-dark shadow-none me-lg-2 me-3 fw-bold"
                        data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        LOGIN
                    </button>
                </div>
                <div class="d-flex" role="search">
                    <button
                        type="button"
                        class="btn btn-outline-dark shadow-none me-lg-2 me-3 fw-bold"
                        data-bs-toggle="modal"
                        data-bs-target="#registerModal">
                        REGISTER
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Form -->
    <div
        class="modal fade"
        id="loginModal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5
                            class="modal-title bi bi-person-circle fs-3 me-2 alig-items-center">
                            User Login
                        </h5>
                        <button
                            type="reset"
                            class="btn-close shadow-none"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" />
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadoww">
                                LOGIN
                            </button>
                            <a
                                href="javascript: void(0)"
                                class="text-secondary text-decoration-none">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Registration Form -->
    <div
        class="modal fade"
        id="registerModal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5
                            class="modal-title bi bi-person-lines-fill fs-3 me-2 align-items-center">
                            User Registration
                        </h5>
                        <button
                            type="reset"
                            class="btn-close shadow-none"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span
                            class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Important Notice: Please ensure that the details you provide
                            match those on your identification documents (e.g., Passport,
                            Driver's License). These documents will be required for
                            verification at check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                    <textarea
                                        class="form-control shadow-none"
                                        rows="3"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="Number" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none" />
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none" />
                                </div>
                                <div class="text-center my-1">
                                    <button type="submit" class="btn btn-dark shadow-none">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                <iframe class="w-100" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506609.9131584569!2d125.45107234999999!3d7.253364699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d9f519e327f%3A0xb53a24589f79c573!2sDavao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1726122385524!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                
            <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel:(082)296-2606" class="d-inline-block text-decoration-none text-dark mb-2">
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

                    <br>

                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6">
                            <i class="bi bi-twitter-x"></i> Twitter/X
                        </span>
                    </a>
                    
                    <br>

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
     <div>
        
     </div>



    <br /><br /><br />
    <br /><br /><br />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
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