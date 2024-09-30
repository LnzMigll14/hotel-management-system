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
                    <a class="nav-link active fw-bold" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="about.php">About</a>
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