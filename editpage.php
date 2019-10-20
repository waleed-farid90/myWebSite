<?php include_once 'include/session_start.php' ?>


<!DOCTYPE HTML>

<?php include_once 'include/header.php' ?>

<html>


<head>
    <title>Threadz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/editpage/editpage.css">
</head>


<body>
    <div id="title">
        <h2>Edit Product Details</h2>
    </div>

    <div id="image">

    </div>

    <div id="form">

        <form method="post" enctype="multipart/form-data">
            <label>
                Change Image:
            </label>
            <input type="file" id="change_button" name="change_button" accept="image/*"><br><br><br>
            <label>
                Product Title:&emsp;
            </label>
            <input type="text" name="product_title" id="product_title"><br><br><br>
            <label>
                Description:&emsp;
            </label>
            <textarea rows="4" cols="100" name="description" id="description"></textarea><br><br><br>
            <label>
                Category: &emsp;
            </label>
            <select name="category" id="category">
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="kids">Kids</option>
                <option value="sale">Sale</option>
            </select><br><br><br>
            <label>
                Price CAD:&emsp;
            </label>
            <input type="number" name="price" id="price"><br><br><br>

            <button type="submit" id="form_button" id="change_button" onclick="window.location.href = '';"><a href="userlisting.php?page=0">Cancel</a></button>
            <button type="submit" id="form_button" id="change_button" name="apply">Apply</button>
        </form>


    </div>
</body>



</html>
<?php include_once 'include/editing.php' ?>
<?php include_once 'include/edit_page.php' ?>
<?php include_once 'include/footer.php' ?>