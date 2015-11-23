function myStart() {
    'use strict';

    document.getElementById("plusimage").addEventListener("click", function () {
        fontsizeplus();
    });
    
    document.getElementById("minimage").addEventListener("click", function () {
        fontsizemin();
    });
}

myStart();

function fontsizeplus() {
    var elem1 = document.getElementById("body");
    var style = window.getComputedStyle(elem1, null).getPropertyValue("font-size");
    var fontsize = parseFloat(style);

    elem1.style.fontSize = (fontsize + 3) + "px";
}

function fontsizemin() {
    var elem1 = document.getElementById("body");
    var style = window.getComputedStyle(elem1, null).getPropertyValue("font-size");
    var fontsize = parseFloat(style);

    elem1.style.fontSize = (fontsize - 3) + "px";
}