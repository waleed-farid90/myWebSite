// Using ajax to filter listing!
var $page=0;
var $id="";
var $search="";

// Sets page number in the url when page button is clicked in the html.
function setPage(str){
    $page = str;
    get_Data($page, $id, $search);
}

// Sets the id in url, when a category is clicked in the sidebar of html page. 
function setID(str){
    $id = str;
    $page = 0;
    get_Data($page, $id, $search);
}

// Sets search term in the url when a search for products is made. 
function setSearch(str){
    $page = 0;
    $search = document.getElementById("search").value;
    get_Data($page, $id, $search);
}

// creates the url and sends an xmlhttp request. 

function get_Data(page, id, search) {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("browselist").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "include/browselisting.php?page=" + page +"&id=" + id + "&search=" + search, true);
        window.history.replaceState("object or string", "Title", "browsepage.php?page=" + page +"&id=" + id + "&search=" + search);
        xmlhttp.send();
    
}
