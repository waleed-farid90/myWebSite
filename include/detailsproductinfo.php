
<?php

// Establishing connection with database. 
include_once 'connect_database.php';

// Reading product id from the URL and fetching associated product details. 
$passed_id=$_GET['id'];
$sql = "SELECT * from products where id=$passed_id";
$result = mysqli_fetch_assoc(mysqli_query($db, $sql));
// Closing database connection
mysqli_close($db);

?>


<script type="text/javascript">
// Converting received data into JSON
var ar = <?php echo json_encode($result) ?>;
var output = '';

// Displaying data in html.
output+='<img src="' + ar.image + '" alt="icon"/>'
document.getElementById('title_text').innerHTML = ar.title;
document.getElementById('image').innerHTML = output;
document.getElementById('price').innerHTML = 'Price :  ' + ar.price;

// Creating a list item for every sentence of product description. 
var temp = ar.description.split(".");

var temp2 = "";


for (var i = 0; i < temp.length-1; i++) {
    temp2 += '<li>'+temp[i]+'</li>';
}
document.getElementById('description').innerHTML = temp2;


</script>
