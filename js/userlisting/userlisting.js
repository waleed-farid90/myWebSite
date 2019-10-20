// Using ajax to page user listings!
var $page=0;

// Sets page when the page button is clicked. 
function setPage(str){
    $page = str;
    get_Data($page);
}

// Sends xmlhttp request to get data for the corresponding page. 
function get_Data(page) {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("browselist").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "include/user_listing.php?page=" + page, true);
        window.history.replaceState("object or string", "Title", "userlisting.php?page=" + page);
        xmlhttp.send();
    
}

// Code to delete a user listing 
function delete_listing(listing_id) {
    var r = confirm("Are you sure you want to delete listing?");
    if (r == true) {
        window.location.href = "userlisting.php?page=0&action=delete&id=" + listing_id;
    }
}
