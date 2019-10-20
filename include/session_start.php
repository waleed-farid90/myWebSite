<?php

if (!isset($_SESSION)) {
    session_start();
}


// Logout if user stays on the same page for 15 mins or more
if (isset($_SESSION['username'])) {
    if (time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=timeout" />';
    } else {
        $_SESSION['timestamp'] = time(); //set new timestamp
    }
}

// If URL attribute action is set, then check if it is logout or timeout
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'logout') {
        unset($_SESSION['username'], $_SESSION['timestamp']);
        header('Location:index.php');
    } else if ($_GET['action'] == 'timeout') {
        unset($_SESSION['username']);
        unset($_SESSION['timestamp']);
        unset($_SESSION['name']);
        echo '<script type="text/javascript">';
        echo 'alert("Session timeout. Please Login Again.");';
        echo 'window.location.href = "loginpage.php";';
        echo '</script>';
    }
}
?>