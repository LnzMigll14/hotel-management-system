<?php
// Including the database configuration file to establish a connection to the database.
require('inc/essentials.php');
require('inc/db_config.php');

session_start();
if((isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']==true)){
    redirect('dashboard.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character encoding, IE compatibility, and responsive design -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>RED DRAGON HOTEL | ADMIN PANEL</title>

    <!-- Including external CSS and other link resources -->
    <?php require('inc/links.php'); ?>

    <!-- Inline CSS to style the login form -->
    <style>
        /* Centering the login form using position, transform, and width */
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Login form container with a white background, rounded corners, and a shadow -->
    <div class="login-form text-center rounded bg-white shadow over overflow-none">
        <!-- Form for admin login, using POST method -->
        <form method="POST">
            <!-- Header for the login panel -->
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <!-- Input field for admin name, required with centered text -->
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name" />
                </div>
                <!-- Input field for password, required with centered text -->
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password" />
                </div>
                <!-- Submit button for logging in -->
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php
    // Checking if the login form is submitted.
    if (isset($_POST['login'])) 
    {
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        $datatypes = "ss";
        $res = select($query, $values, "ss");
        if ($res->num_rows == 1) {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminlogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');
        } else {
            alert('error', 'Login Failed - Invalid Credentials');
        }
    }
    ?>

    <!-- Including external JavaScript files -->
    <?php require('inc/scripts.php'); ?>
</body>

</html>