<?php
   define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/hotel-management-system/images/');
   define('ABOUT_FOLDER', 'about/');
   
   
function redirect($url)
{
    echo"<script>window.location.href='$url';</script>";
    exit;
}


function adminLogin()
{
    session_start();
    if(!(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']==true)){
        echo"<script>window.location.href='index.php';</script>";
        exit;
    }

 

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

function uploadImage($image)
{
    // Define valid mime types
    $valid_mime = ['image/png', 'image/jpeg', 'image/webp'];
    $img_mime = $image['type'];

    // Check if the mime type is valid
    if (!in_array($img_mime, $valid_mime)) {
        return "inv_img";  // Invalid image type
    }

    // Check if the file size is within the limit (2MB)
    else if ($image['size'] / (1024 * 1024) > 2) {
        return "inv_size";  // Invalid size
    }

    // If both conditions are met, proceed with the upload
    else {
        // Generate a random name for the image
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG' . random_int(11111, 99999) . ".$ext";

        // Define the specific existing folder path
        $folder = 'D:/School/LnzMigll/Hotel Booking System/hotel-management-system/images/about/';

        // Combine folder and file name to get the full image path
        $img_path = $folder . $rname;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rname;  // Return the new file name on success
        } else {
            return "fail";  // Return "fail" if file couldn't be moved
        }
    }
}




    


?>