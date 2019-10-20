 
<?php
// This file pre populates the fields of edit page with existing data from the database. 

// Establishing connection with database. 
include_once 'connect_database.php';


// Getting the id of the product from the URL and reading corresponding product details from the database. 

$product_id = $_GET['id'];
$sql = "SELECT * from products where id = '$product_id'";
$result = mysqli_query($db, $sql);
$row=mysqli_fetch_array($result);

// Closing database connection.
mysqli_close($db);

?>


<script type="text/javascript">
// Encoding the above data into JSON

var ar = <?php echo json_encode($row) ?>;

// Displaying the read data into the input fields of the edit pape.
var output = '';
output+='<img src="' + ar.image + '" alt="icon"/>';
document.getElementById('image').innerHTML=output;
document.getElementById('product_title').value = ar.title;
document.getElementById('description').value = ar.description;
document.getElementById('price').value = ar.price;
document.getElementById('category').value = ar.category;
</script>
