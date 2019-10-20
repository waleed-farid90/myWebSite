<?php include_once 'include/session_start.php' ?>
<?php

?>


<!DOCTYPE HTML>

<?php include_once 'include/header.php' ?>

<html>

<head>
    <title>Threadz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/homepage/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/index/imageslideshow.js"></script>
    <script type="text/javascript" src="js/index/index.js"></script>
    <link rel="stylesheet" type="text/css" href="css/homepage/homepage.css">
</head>


<body>

    <?php include_once 'include/menu.php' ?>
    <div id="main_Content">
        <?php include_once 'include/sidebar.php' ?>
        <div id="main_Right">
            <?php include_once 'include/searchbar_index.php' ?>
            <div class="w3-content w3-section" id="main_Image">
                <img class="mySlides w3-animate-right" src="images/homepage/Kids.jpg" style="width:100%; border-radius: 10px;">
                <img class="mySlides w3-animate-right" src="images/homepage/Men.jpg" style="width:100%; border-radius: 10px;">
                <img class="mySlides w3-animate-right" src="images/homepage/Women.jpg" style="width:100%; border-radius: 10px;">
                <img class="mySlides w3-animate-right" src="images/homepage/Sale.jpg" style="width:100%; border-radius: 10px;">
            </div>
            <script>
                carousel();
            </script>

        </div>
    </div>
</body>


</html>

<?php include_once 'include/footer.php' ?>