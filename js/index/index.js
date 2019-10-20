// This code is for the search bar in the index page. 
function browse_search(){

    var keyword =document.getElementById('search').value
    if(keyword == ""){
    document.getElementById('error').innerHTML = "<br>Please Enter Search Keyword";
    }
    else{
    window.location.href = 'browsepage.php?page=0&id=&search='+keyword;
    document.getElementById('error').innerHTML = "";

}
}