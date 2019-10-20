<?php include 'include/session_start.php' ?>


<!DOCTYPE HTML>

<?php include_once 'include/header.php' ?>

<html>


<head>
    <title>Threadz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/userlisting/userlisting.css">
    <script type="text/javascript" src="js/userlisting/userlisting.js"></script>
</head>



<body>
    <?php include_once 'include/menu.php' ?>
    <div id="account_details">    
    </div>
    <h1>Your Listings</h1>
    <div id="main_Content">


        <div id="listing">
            <ul id="browselist">
                <?php include_once 'include/user_listing.php' ?>
            </ul>
        </div>

    </div>

    <?php include_once 'include/footer.php' ?>

</body>


</html>