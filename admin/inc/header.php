<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
                <a href="dashboard.php" class="text-decoration-none">
                    <h3 class="mb-0 text-white">ADMIN PANEL</h3>
                </a>
                <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
            </div>

            <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <a class="navbar-brand" href="#">ADMIN PANEL</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Rooms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="settings.php">Settings</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>