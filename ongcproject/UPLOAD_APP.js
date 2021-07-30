/* When the user clicks on the button,
toggle between hiding and showing the drop_down_menu content */

function myFunction() {
    document.getElementById("mydrop_down_menu").classList.toggle("show");
}

// Close the drop_down_menu menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var drop_down_menus = document.getElementsByClassName("drop_down_menu-content");
        var i;
        for (i = 0; i < drop_down_menus.length; i++) {
            var opendrop_down_menu = drop_down_menus[i];
        }
    }

}
window.onclick = function(event) {
    document.getElementById("mydrop_down_menu").classList.toggle("hide");
}