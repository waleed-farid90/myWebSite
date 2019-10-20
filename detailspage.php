<?php include_once 'include/session_start.php' ?>


<!DOCTYPE HTML>

<?php include_once 'include/header.php' ?>
<?php include_once 'include/menu.php' ?>


<html>


<head>
    <title>Threadz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/detailspage/detailspage.css">
</head>



<body>
    <div id="navigation_Bar">

    </div>

    <div id="title">
        <h2 id="title_text"></h2>
    </div>


    <div id="main_content">

        <div id="image">
        </div>

        <div id="right">


            <h2>Description</h2>
            <ul id="description"></ul>
            <h2 id="price"></h2>
            <label>Quantity</label>
            <input type="number" name="quantity" id="qty">
            <button type="submit" id="buttons"><a href="">Add To Cart</a></button>

        </div>
    </div>
</body>


<?php include_once 'include/detailsproductinfo.php' ?>


</html>

<?php include_once 'include/footer.php' ?>