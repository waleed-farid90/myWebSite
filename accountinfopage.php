<?php include_once 'include/session_start.php' ?>


<!DOCTYPE HTML>

<?php include_once 'include/header.php' ?>

<html>


<head>
    <title>Threadzzzzzz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/accountinfo/accountinfo.css">
</head>


<body>
    <div id="title">
        <h2>Edit Account Info</h2>
    </div>

    <div id="form">

        <form id = "myform"  onsubmit="return validate_update();" method="post" >
            <div id="errors">
            <label id="nresult"></label><br>
            <label id="eresult"></label><br>
            <label id="presult"></label><br>
            </div>

            <label>
                Name:&emsp;&emsp;&nbsp;&nbsp;
            </label>
            
            <input type="text" name="name" id="name"><br><br><br>
            <label>
                Email:&emsp;&emsp;&nbsp;&nbsp;
                
            </label>
            <input type="text" name="email" id="email"><br><br><br>
            <label>
                Password:&emsp;
                
            </label>
            <input type="password" name="password" id="password"><br><br><br>
            <label>
                Re-type<br> Password:&emsp;
            </label>
            <input type="password" name="re-password" id="re-password"><br><br><br>

            <button type="button"  id="change_button" onclick="window.location.href = 'userlisting.php?page=0';"><a href="userlisting.php?page=0">Cancel</a></button>
            <button type="submit" id="change_button" name="apply">Apply</button>
        </form>


    </div>
</body>



</html>

<?php include_once 'include/account_edit.php' ?>
<?php include_once 'include/account_info.php' ?>
<?php include_once 'include/footer.php' ?>