<?php

// Check if username is logged in. Else redirect to login page.
if (!isset($_SESSION['username'])) {
    header('location: loginpage.php');
}

// Getting id attribute from URL and the corresponding values from database.
else if (isset($_POST['apply'])) {
    include_once 'connect_database.php';
    $prod_id = $_GET['id'];
    $title = mysqli_real_escape_string($db, $_POST['product_title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $category = mysqli_real_escape_string($db, $_POST['category']);

    $uploaddir = 'images/browsepage/';
    $uploadfile = basename($_FILES['change_button']['name']);
    
    // Setting values to the database.

    $edit_title = "UPDATE products SET title='$title' WHERE id='$prod_id'";
    mysqli_query($db, $edit_title);


    $edit_description = "UPDATE products SET description='$description' WHERE id='$prod_id'";
    mysqli_query($db, $edit_description);


    $edit_price = "UPDATE products SET price='$price' WHERE id='$prod_id'";
    mysqli_query($db, $edit_price);

    $edit_category = "UPDATE products SET category='$category' WHERE id='$prod_id'";
    mysqli_query($db, $edit_category);
    
    if (!$uploadfile == "") {
        $uploadfile = $uploaddir.$category.'/' . basename($_FILES['change_button']['name']);
        $edit_image = "UPDATE products SET image='$uploadfile' WHERE id='$prod_id'";
        mysqli_query($db, $edit_image);
    }

    // Closing databse connection and redirecting to userlisting page.
    mysqli_close($db);
    header('location: userlisting.php?page=0');
}
