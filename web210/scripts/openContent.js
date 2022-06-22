/*----------------------------------
Created by: Juan Diaz
fall 2020
Web 210
----------------------------------*/


/***   function that load menu content by hover/clicking on the menu   */
function openContent(evt, contentPage) {
    var i, menuContent, menulinks;
    menuContent = document.getElementsByClassName("menuContent");
    for (i = 0; i < menuContent.length; i++) {
        menuContent[i].style.display = "none";
    }
    menulinks = document.getElementsByClassName("menulinks");
    for (i = 0; i < menulinks.length; i++) {
        menulinks[i].className = menulinks[i].className.replace(" active", "");
    }
    document.getElementById(contentPage).style.display = "block";
    evt.currentTarget.className += " active";
}
/*
El Hover NAV lo saque de: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_hover_tabs
*/

/****   NAV TAB MENU   ***/

function openHobby(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

/**   END NAV TAB --URL: https://www.w3schools.com/howto/howto_js_tabs.asp*/



/***   function for the menu */

function discoveryPhase1() {
    alert("You are already on the discovery Phase 1!");
}