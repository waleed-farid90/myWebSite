<?php

// Check if username is logged in. Else redirect to login page.
if (!isset($_SESSION['username'])) {
    header('location: loginpage.php');
}

// Getting values from the form.
else if (isset($_POST['apply'])) {
    include_once 'connect_database.php';
    $title = mysqli_real_escape_string($db, $_POST['product_title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $category = mysqli_real_escape_string($db, $_POST['category']);

    $uploaddir = 'images/browsepage/';
    $uploadfile = $uploaddir . $category . '/' . basename($_FILES['change_button']['name']);

    $user = $_SESSION['username'];
    $user_ID = "SELECT * FROM USERS WHERE USERNAME ='$user'";
    $query_UserId = mysqli_query($db, $user_ID);
    $row = mysqli_fetch_assoc($query_UserId);
    $get_UserId = $row['id']; 
    // Setting values to the database.
    
    $add_listing = "INSERT INTO `PRODUCTS` (`ID`, `IMAGE`, `TITLE`, `PRICE`, `DESCRIPTION`, `CATEGORY`, `USER_ID`)
    VALUES (NULL, '$uploadfile', '$title', '$price', '$description', '$category', $get_UserId);";
    mysqli_query($db, $add_listing);

    // Closing databse connection and redirecting to userlisting page.
    mysqli_close($db);
    header('location: userlisting.php?page=0');
}
