<?php
include 'session_start.php';

// Checking if user is logged in, else redirect to login page!
if (!isset($_SESSION['username'])) {
    header('location: loginpage.php');
}

// Establishing connection with database. 
include 'connect_database.php';

// Getting username from session 
$username = $_SESSION['username'];

// Checking if delete action passed in url

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        $id = $_GET['id'];
        $sql = "DELETE FROM `products` where id = $id ;";
        $result = mysqli_query($db, $sql);
        echo '<script type="text/javascript">';
        echo 'alert("Deleted Successfully!");';
        echo 'window.location.href = "userlisting.php?page=0";';
        echo '</script>';
    }
}

// Getting the id of username from database
$sql2 = "SELECT * from users where username = '$username'";
$result2 = mysqli_query($db, $sql2);
$row = mysqli_fetch_array($result2);
$user_id = $row['id'];

// Using the id to fetch all the products posted by user, form the database.
$listingsPerPage = "SELECT * from products where user_id = '$user_id' limit 10 Offset ".$_GET['page'];
$totalListings = "SELECT * from products where user_id = '$user_id'";
$totalResults = mysqli_query($db, $totalListings);
$row_count = mysqli_num_rows($totalResults);
$resultPerPage = mysqli_query($db, $listingsPerPage);
$resultArray = array();

// Closing the connection with the database
mysqli_close($db);

// Creating an account details button.
echo '<a href="accountinfopage.php?id='.$username.'"><input type="button" value="Account Details" id="account_button"></a>';

// Generating list items for all listings from user
if ($row_count == 0) {
    echo "<h1 style='text-align:center'>No Listings Found!</h1>";
} else {
    while ($row = mysqli_fetch_assoc($resultPerPage)) {

        echo '<li class="service-list">' . '<a href="detailspage.php?id=' . $row['id'] . '">' .
            '<img src="' . $row['image'] . '" alt="icon"/>' .
            '</a>' .
            '<h1>' . '<a href="detailspage.php?id=' . $row['id'] . '">' .
            $row['title'] . '</a>' . '</h1>' .
            '<h2>' . '<br>' . 'CAD : ' .
            $row['price'] . '</h2>'. '<input type="button" value="Delete" id="delete_button"  onclick="delete_listing('.$row['id'].')">'.'<a href="editpage.php?id='.$row['id'].'"><input type="button" value="Edit" id="edit_button"></a>'.'</li>';
    }

}
// Creating pagination.
$limit = 0;
$show_rows = 0;
if ($row_count % 10 == 0) {
    $show_rows = $row_count / 10;
} else {
    $show_rows = (floor($row_count / 10) + 1);
}
for ($x = 0; $x < $show_rows; $x++) {
    echo '<button type=button; class="pageButtons"; id="' . ($limit) . '" onclick="setPage(this.id)">' . ($x + 1) . '</button>';
    $limit = $limit + 10;
}

?>