<!DOCTYPE HTML>


<?php include_once 'include/header.php' ?>
<?php include('include/server.php') ?>


<html>


<head>
    <title>Threadz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/loginpage/loginpage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/loginpage/loginpage.js"></script>

</head>


<body>

    <?php include_once 'include/menu.php' ?>

    <?php

    if (isset($_SESSION['username'])) {
        echo '<script type="text/javascript">',
            'hide_both();',
            'already_logged()',
            '</script>';
    } else if (isset($_GET['id'])) {
        if ($_GET['id'] == 'register') {
            echo '<script type="text/javascript">',
                'show_register();',
                '</script>';
        } else {
            echo '<script type="text/javascript">',
                'show_login();',
                '</script>';
        }
    }

    ?>

    <div id="main_Content">
        <div id="login_error">
            <?php include('include/errors.php'); ?>
        </div>
        <?php include('include/success.php'); ?>

        <h1 id="logged_in"></h1>

        <div id="container">

            <form id="loginform" method="post" action="loginpage.php">

                <label for="username">Username:</label>
                <label id="uresult1" class="err_msg"></label>
                <input type="text" id="username" name="username2">
                <label for="password">Password:</label>
                <label id="presult1" class="err_msg"></label>
                <input type="password" id="password" name="password2">
                <div id="lower">
                    <label for="register" style="color:white; margin-top:17px;">Not a member?</label>
                    <button type="submit" value="Login" id="login" name="login">Login</button>
                    <input type="button" value="Sign Up" id="register" name="register" onclick="show_register()">
                </div>
            </form>
        </div>


        <div id="register_container">


            <form name="registerform " id="registerform" onsubmit="return validate_register();" method="post" action="loginpage.php">

                <label for="name">Name:</label>
                <label id="nresult" class="err_msg"></label>
                <input type="text" id="name" name="name1">

                <label for="emailID">Email ID:</label>
                <label id="result" class="err_msg"></label>
                <input type="text" id="emailID" name="emailID1" value="<?php echo $email; ?>">
                <label for="username">Username:</label>
                <label id="uresult" class="err_msg"></label>
                <input type="text" id="username1" name="username1" value="<?php echo $username; ?>">

                <label for="password">Password:</label>
                <label id="presult" class="err_msg"></label>
                <input type="password" id="password1" name="password1">
                <label for="re-password">Re-Type Password:</label>
                <input type="password" id="re-password" name="re-password1">
                <div id="lower">
                    <label for="login" style="color:white; margin-top:17px;">Already a member?</label>
                    <button type="submit" value="Sign Up" id="register" name="register1">Sign Up</button>
                    <input type="button" value="Login" id="login2" name="login" onclick=" show_login()">

                </div>
            </form>
        </div>


    </div>

</body>

</html>

<?php include_once 'include/footer.php' ?>