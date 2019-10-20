<?php

// Checking if user is logged in. Otherwise redirect to login page. 
if (!isset($_SESSION['username'])) {
    header('location: loginpage.php');
}

// Getting id of the user from URL and the corresponding values from database.
else if (isset($_POST['apply'])) {
    include_once 'connect_database.php';
    $username = $_GET['id'];
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);

    // Setting the name of user in database.
    $edit_name = "UPDATE users SET name='$name' WHERE username='$username'";
    mysqli_query($db, $edit_name);

    // Setting email address of user in database.
    $edit_email = "UPDATE users SET email='$email' WHERE username='$username'";
    mysqli_query($db, $edit_email);

    // Check if user wants to change the password, by checking input field on webpage. If it is not empty, set the new password in the database.
    if (!empty($password1)) {
        $password = md5($password1);
        $edit_password = "UPDATE users SET password ='$password' WHERE username='$username'";
        mysqli_query($db, $edit_password);
    }

    echo'<script>alert("Updated Successfully");
    window.location = "userlisting.php?page=0";</script>';

    // Closing databse connection and redirecting to userlisting page.
    mysqli_close($db);

}
