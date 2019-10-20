<?php 

$db = mysqli_connect('localhost', 'root', '', 'mysite');

if (!$db) {
    die('Could not connect: ' . mysql_error());
}
?>