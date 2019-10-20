<?php

// Starting session
include_once 'session_start.php';

// initializing variables
$username = "";
$email    = "";
$errors = array();
$success = array();

// Establishing connection with database. 
include_once 'connect_database.php';

// REGISTER USER
if (isset($_POST['register1'])) {
  // receive all input values from the form

  $name = mysqli_real_escape_string($db, $_POST['name1']);
  $username = mysqli_real_escape_string($db, $_POST['username1']);
  $email = mysqli_real_escape_string($db, $_POST['emailID1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['re-password1']);


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO users (name, email, username, password) 
  			  VALUES('$name', '$email','$username', '$password')";
    mysqli_query($db, $query);
    array_push($success, "Successfully Registered! Please Log In.");
  }
}

// LOGIN USER
if (isset($_POST['login'])) {
  // Getting username and password values from the login form
  $username = mysqli_real_escape_string($db, $_POST['username2']);
  $password = mysqli_real_escape_string($db, $_POST['password2']);

  // Checking if the fields are empty
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  // If the fields are not empty, check username and password against the database
  if (count($errors) == 0) {
    $password_new = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password_new'";
    $results = mysqli_query($db, $query);
    // If there is a match, save username, name and timestamp in session, and redirect to homepage. 
    if (mysqli_num_rows($results) == 1) {
      $name = $results->fetch_object()->name;
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['timestamp'] = time();
      header('location: index.php');
    } else {
      // If no match, display error. 
      array_push($errors, "Wrong username/password combination ");
    }
  }
}
// Closing the connection with the database
mysqli_close($db);
?>