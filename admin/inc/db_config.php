<?php

// Define database connection variables: hostname, username, password, and database name.
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hbsystem';

// Establish a connection to the MySQL database using the mysqli extension.
$con = mysqli_connect($hname, $uname, $pass, $db);

// Check if the connection failed. If so, output an error message and stop the script.
if (!$con) {
    die("Cannot Establish Connection" . mysqli_connect_error());
}

// A function to sanitize input data. The purpose is to clean data from potential malicious content.
function filteration($data)
{
    // Loop through the array of data to sanitize each value.
    foreach ($data as $key => $value) {
        // Remove extra spaces from the beginning and end of the string.
        $data[$key] = trim($value);
        // Remove slashes from the string.
        $data[$key] = stripslashes($value);
        // Convert special characters into HTML entities to prevent cross-site scripting (XSS).
        $data[$key] = htmlspecialchars($value);
        // Strip HTML and PHP tags from the string.
        $data[$key] = strip_tags($value);
    }

    // Return the sanitized data.
    return $data;
}

// Function to execute SELECT queries securely using prepared statements.
function select($sql, $values, $datatypes)
{
    // Use the global $con variable for database connection inside the function.
    $con = $GLOBALS['con'];

    // Prepare the SQL query to avoid SQL injection.
    if ($stmt = mysqli_prepare($con, $sql)) {
        // Bind the parameters to the prepared statement. Use the correct datatypes for each value.
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        
        // Execute the prepared statement.
        if (mysqli_stmt_execute($stmt)){
            // Retrieve the result set from the executed statement.
            $res = mysqli_stmt_get_result($stmt);
            // Close the statement to release resources.
            mysqli_stmt_close($stmt);
            // Return the result of the query.
            return $res;
        } else {
            // If the query execution fails, output an error message and stop the script.
            die("Query cannot be executed - Select");
        }
    } else {
        // If preparing the statement fails, output an error message and stop the script.
        die("Query cannot be prepared - Select");
    }
}

function update($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
      
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        
        if (mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
        
            die("Query cannot be executed - Update");
        }
    } else {
    
        die("Query cannot be prepared - Update");
    }
}


function insert($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
      
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        
        if (mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
        
            die("Query cannot be executed - Update");
        }
    } else {
    
        die("Query cannot be prepared - Update");
    }
}

?>