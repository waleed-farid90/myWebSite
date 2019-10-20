
<div id="navigation_Bar">
    <ul>
        <li class="navbuttons"><a href="index.php">Home</a></li>
        <li class="navbuttons"><a href="browsepage.php?page=0&id=&search=">Browse</a></li>
        <li class="navbuttons"><a href="">About</a></li>
        <li class="navbuttons"><a href="">Contact</a></li>
        <?php
        // If user is logged in, display logout and username buttons, instead of login and register buttons
        if(isset($_SESSION['username'])){
            $user = $_SESSION['name'];
            echo'<li class="navbuttons" id="login_button" style="float:right; margin-right:40px;"><a href="index.php?action=logout">Logout</a></li>
            <li class="navbuttons" id="login_button" style="float:right; margin-right:20px;"><a href="userlisting.php?page=0">'.$user.'</a></li>';
        } else{
            // If user is not logged in, display login and register buttons instead of logout and username buttons
            echo'<li class="navbuttons" id="login_button" style="float:right; margin-right:40px;"><a href="loginpage.php?id=login">Login</a></li>
        <li class="navbuttons" id="register_button" style="float:right; margin-right:20px;"><a href="loginpage.php?id=register">Register</a></li>';
        }
        ?>
        
    </ul>

</div>
