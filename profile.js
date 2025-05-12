function copy_toclip() {
    /* Get the text field */
    var copyText = document.getElementById("user_id");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999999999); /* For mobile devices */

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
}

function img_alert() {

    var x = document.getElementById("img_alert");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function req_id1() {

    var x = document.getElementById("req_id1");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function req_id2() {

    var x = document.getElementById("req_id2");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function req_pre1() {

    var x = document.getElementById("req_pre1");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function u_logout(){
    window.location.href = "./../index.php";
}


