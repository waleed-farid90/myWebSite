<?php
// Establishing connection with database. 
include_once 'connect_database.php';

// Initializing variables
$sql = "";
$row_count = 0;
$result;
$offset = "limit 10 Offset " . $_GET['page'];
list($id, $and, $search, $where, $category) = "";


//checking if id or search is passed in url

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchParameter = $_GET['search'];
    $search = "title like '%$searchParameter%' ";
    $where = "where ";
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    if ($search != "") {
        $and = "and ";
    }
    $categoryParameter = $_GET['id'];
    $category = $and . "category = '$categoryParameter' ";
    if (empty($where)) {
        $where = "where ";
    }
}

// Checking if page number is set. 
if (isset($_GET['page']) && $_GET['page'] != 0) {

    $page = $_GET['page'];
}

// Building the query.
$productQueryTen = "SELECT * from products " . $where . $search . $category . $offset;
$totalProducts = "SELECT * from products " . $where . $search . $category;
$resultProductsTen = mysqli_query($db, $productQueryTen);
$resultTotalProducts = mysqli_query($db, $totalProducts);
$row_count = mysqli_num_rows($resultTotalProducts);

//If nothing is returned from the database
if ($row_count == 0) {
    echo "<h1 style='text-align:center'>No Results Found!</h1>";
} else { // Otherwise create a list items in html for the results from the database.
    while ($row = mysqli_fetch_assoc($resultProductsTen)) {

        echo '<li class="service-list">' . '<a href="detailspage.php?id=' . $row['id'] . '">' .
            '<img src="' . $row['image'] . '" alt="icon"/>' .
            '</a>' .
            '<h1>' . '<a href="detailspage.php?id=' . $row['id'] . '">' .
            $row['title'] . '</a>' . '</h1>' .
            '<h2>' . '<br>' . 'CAD : ' .
            $row['price'] . '</h2>' .
            '</li>';
    }
    // Creating the pagination, based on the number of results returned from the database.
    $limit = 0;
    $show_rows = 0;
    if ($row_count % 10 == 0) {
        $show_rows = $row_count / 10;
    } else {
        $show_rows = (floor($row_count / 10) + 1);
    }
    for ($x = 0; $x < $show_rows; $x++) {
        if ($_GET['page'] == $limit) {
            echo '<button type=button; class="thispagebutton"; id="' . ($limit) . '" onclick="setPage(this.id)">' . ($x + 1) . '</button>';
        } else {
            echo '<button type=button; class="pageButtons"; id="' . ($limit) . '" onclick="setPage(this.id)">' . ($x + 1) . '</button>';
        }
        $limit = $limit + 10;
    }
}


// Closing database connection
mysqli_close($db);
