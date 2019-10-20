 <?php
    // This file pre populates the fields of edit account page with existing data from the database. 

    // Establishing connection with database. 
    include_once 'connect_database.php';


    // Getting the id of the user from the URL and reading corresponding details from the database. 

    $username = $_SESSION['username'];
    $sql = "SELECT * from users where username = '$username'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);

    // Closing database connection.
    mysqli_close($db);

    ?>


 <script type="text/javascript">
     // Encoding the above data into JSON

     var ar = <?php echo json_encode($row) ?>;

     // Displaying the read data into the input fields of the edit account pape.

     document.getElementById('name').value = ar.name;
     document.getElementById('email').value = ar.email;


     // Checking if the password meets all the requirements of the following regex.
     function validatepassword(password) {
         var pw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
         return password.match(pw);
     }

     // Checking if the email address is in the proper format.
     function validateEmail(email) {
         var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         return email.match(re);
     }

     // Ensuring none of the values are being set as empty. Also running the above defined functions to check email and password. 

     function validate_update() {
         let $name = document.getElementById("name").value;
         let $email = document.getElementById("email").value;
         let $pword1 = document.getElementById("password").value;
         let $pword2 = document.getElementById("re-password").value;

         let flag1 = false;
         let flag2 = false;
         let flag3 = false;

         if ($email.length == 0) {
             document.getElementById("eresult").innerHTML = ("Please Enter Email Address");
             flag1 = false;
         } else if (!validateEmail($email)) {
             document.getElementById("eresult").innerHTML = ($email + " is not valid :(");
             flag1 = false;
         } else {
             flag1 = true;
             document.getElementById("eresult").innerHTML = ("");
         }

         // Ensuring the two password fields match.
         if ($pword1 != $pword2) {
             document.getElementById("presult").innerHTML = ("Passwords Do Not Match");
             flag2 = false;
         
         // if the password field is not empty and the two password fields match, validate the password.    
         } else if ($pword1 != "") {
             if (!validatepassword($pword1)) {
                 document.getElementById("presult").innerHTML = ("Passwords Must Contain 8-15 characters with atleast one lowercase, one uppercase, one digit and one special character");
                 flag2 = false;
             } else {
                 // If all conditions are satisfied return true.
                 flag2 = true;
                 document.getElementById("presult").innerHTML = ("");
             }
         } else {
             // If password fields are left empty, then the password will not be changed in the database!
             flag2 = true;
             document.getElementById("presult").innerHTML = ("");
         }


         if ($name.length == 0) {
             document.getElementById("nresult").innerHTML = ("Please Enter Name");
             flag3 = false;
         } else {
             flag3 = true;
             document.getElementById("nresult").innerHTML = ("");
         }

         return (flag1 && flag2 && flag3);


     }
 </script>