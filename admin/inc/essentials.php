<?php

function redirect($url)
{
    echo"<script>window.location.href='$url';</script>";
}


function adminLogin()
{
    session_start();
    if(!(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']==true)){
        echo"<script>window.location.href='index.php';</script>";
    }

    session_regenerate_id(true);

}


function alert($type, $msg)
{
    // Determine Bootstrap class based on the type (success, danger, etc.)
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    // Output the alert using heredoc syntax
    echo <<<alert
        <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">$msg</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    alert;
}

?>