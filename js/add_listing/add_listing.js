// This function ensures none of the fields in the add listing form are empty!.
function validate_listing() {
    let $title = document.getElementById("product_title" ).value;
    let $description = document.getElementById("description").value;
    let $price = document.getElementById("price").value;
    let $category = document.getElementById("category").value;
    let $image = document.getElementById("change_button").files.length;
    let flag1 = false;
    let flag2 = false;
    let flag3 = false;
    let flag4 = false;
    let flag5 = false;

    if ($title.length == 0) {
        document.getElementById("tresult").innerHTML = ("Please Enter Title");
    }
    else {
        flag1 = true;
        document.getElementById("tresult").innerHTML = ("");
    }

    if ($description.length == 0) {
        document.getElementById("dresult").innerHTML = ("Please Enter Description");
        flag2 = false;
    }
    else {
        flag2 = true;
        document.getElementById("dresult").innerHTML = ("");
    }

    if ($price.length == 0) {
        document.getElementById("presult").innerHTML = ("Please Enter Price");
        flag3 = false;
    }
    else {
        flag3 = true;
        document.getElementById("presult").innerHTML = ("");
    }

    
    if ($category == "Select") {
        document.getElementById("sresult").innerHTML = ("Please Choose a Category");
        flag4 = false;
    }
    else {
        flag4 = true;
        document.getElementById("sresult").innerHTML = ("");
    }
    if ($image == 0) {
        document.getElementById("iresult").innerHTML = ("Please Choose an image");
        flag5 = false;
    }
    else {
        flag5 = true;
        document.getElementById("iresult").innerHTML = ("");
    }


    
    return (flag1 && flag2 && flag3 && flag4 && flag5); 
   

}