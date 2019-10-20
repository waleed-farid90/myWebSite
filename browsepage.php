<?php include_once 'include/session_start.php' ?>


<!DOCTYPE HTML>

<?php include_once 'include/header.php' ?>

<html>


<head>
    <title>Threadz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/browsepage/browsepage.css">
    <script type="text/javascript" src="js/browsepage/browsepage.js"></script>
</head>



<body>
    <?php include_once 'include/menu.php' ?>
    <div id="main_Content">
        <?php include_once 'include/sidebar_browsepage.php' ?>

        <div id="main_Right">

            <?php include_once 'include/searchbar.php' ?>

            <div id="listing">
                <ul id="browselist">
                    <?php include_once 'include/browselisting.php' ?>
                </ul>
            </div>

        </div>
    </div>

    <?php include_once 'include/footer.php' ?>

</body>


</html>