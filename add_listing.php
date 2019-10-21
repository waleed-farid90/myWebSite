<?php include_once 'include/session_start.php' ?>


<!DOCTYPE HTML>

<?php include_once 'include/header.php' ?>

<html>


<head>
    <title>Threadz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/add_listing/add_listing.css">
    <script type="text/javascript" src="js/add_listing/add_listing.js"></script>
</head>


<body>
    <div id="title">
        <h2>Add Product Details</h2>
    </div>

    <div id="image">

    </div>

    <div id="form">

        <form  onsubmit="return validate_listing();" method="post" enctype="multipart/form-data">
            <label>
                Add Image:
            </label>
            <input type="file" id="change_button" name="change_button" accept="image/*">
            <label id="iresult" class="err_msg"></label><br><br><br>
            <label>
                Product Title:&emsp;
            </label>
           
            <input type="text" name="product_title" id="product_title">
            <label id="tresult" class="err_msg"></label><br><br><br>
            <label>
                Description:&emsp;
            </label>
            <textarea rows="4" cols="100" name="description" id="description"></textarea>
            <label id="dresult" class="err_msg"></label><br><br><br>
            <label>
                Category: &emsp;
            </label>
            <select name="category" id="category">
                <option value="Select">Select</option>
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="kids">Kids</option>
                <option value="sale">Sale</option>
            </select>            
            <label id="sresult" class="err_msg"></label><br><br><br>
            <label>
                Price CAD:&emsp;
            </label>
            <input type="number" name="price" id="price">
            <label id="presult" class="err_msg"></label><br><br><br>

            <button type="submit" id="form_button"  onclick="window.location.href = '';"><a href="userlisting.php?page=0">Cancel</a></button>
            <button type="submit" id="form_button" onclick="validate_listing();" name="apply">Add</button>
        </form>


    </div>
</body>



</html>
<?php include_once 'include/add_listing.php' ?>
<?php include_once 'include/footer.php' ?>