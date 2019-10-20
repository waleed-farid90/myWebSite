// Code for various checks for the login and register page.

// Shows registration form and hides login form on the login page, upon cliking register button. 
function show_register() {
    $(document).ready(function () {
        $("#container").hide();
        $("#login_error").hide();
        $("#register_container").show();
    });
}

// Shows login form and hides the registration form on the login page, upon clicking login button.
function show_login() {
    $(document).ready(function () {
        $("#container").show();
        $("#register_container").hide();
    });
}

// Hides both login and registration forms on the login page, if the user is already logged in. 
function hide_both() {
    $(document).ready(function () {
        $("#container").hide();
        $("#register_container").hide();
    });
}

// Displays message on the login page if the user is already logged in.
function already_logged(){
    $(document).ready(function () {
    document.getElementById('logged_in').innerHTML = "You are already logged in !";
    });}

// Ensures the password satisfies the requirements set in the regex.
function validatepassword(password) {
    var pw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    return password.match(pw);
}

// Ensures the email address is in the proper format.
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return email.match(re);
}

/*
Code to ensure the username and password fields for login are not empty.
Don't need this code, since we will check these in the php file. 

function validate_login() {
    let $username = document.getElementById("username").value;
    let $pword = document.getElementById("password").value;
    let flag1 = false;
    let flag2 = false;

    if ($username.length == 0) {
        document.getElementById("uresult1").innerHTML = ("Please Enter Username");
        flag1 = false;
    }
    else {
        flag1 = true;
    }

    if ($pword.length == 0) {
        document.getElementById("presult1").innerHTML = ("Please Enter Password");
        flag2 = false;
    }
    else {
        flag2 = true;
    }

    if (flag1 && flag2) {
    }
    else {
    }

    return false;

}
*/

// Ensures all the registration fields are coorrectly filled out before passing values to the php file for processing.
function validate_register() {
    let $name = document.getElementById("name").value;
    let $email = document.getElementById("emailID").value;
    let $pword1 = document.getElementById("password1").value;
    let $pword2 = document.getElementById("re-password").value;
    let $username = document.getElementById("username1").value;
    let flag1 = false;
    let flag2 = false;
    let flag3 = false;
    let flag4 = false;

    if ($email.length == 0) {
        document.getElementById("result").innerHTML = ("Please Enter Email Address");
    }

    else if (!validateEmail($email)) {
        document.getElementById("result").innerHTML = ($email + " is not valid :(");
        flag1 = false;
    }
    else {
        flag1 = true;
        document.getElementById("result").innerHTML = ("");
    }

    if ($username.length == 0) {
        document.getElementById("uresult").innerHTML = ("Please Enter Username");
        flag2 = false;
    }
    else {
        flag2 = true;
        document.getElementById("uresult").innerHTML = ("");
    }

    if ($pword1.length == 0 && $pword2.length == 0) {
        document.getElementById("presult").innerHTML = ("Please Enter Password");
        flag3 = false;
    }
    else if ($pword1 != $pword2) {
        document.getElementById("presult").innerHTML = ("Passwords Do Not Match");
        flag3 = false;

    }
    else if (!validatepassword($pword1)) {
        document.getElementById("presult").innerHTML = ("Passwords Must Contain 8-15 characters with atleast one lowercase, one uppercase, one digit and one special character");
        flag3 = false;
    }
    else {
        flag3 = true;
        document.getElementById("presult").innerHTML = ("");
    }


    if ($name.length == 0) {
        document.getElementById("nresult").innerHTML = ("Please Enter Name");
        flag4 = false;
    }
    else {
        flag4 = true;
        document.getElementById("nresult").innerHTML = ("");
    }

    return (flag1 && flag2 && flag3 && flag4); 
   

}

