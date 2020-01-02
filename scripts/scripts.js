var scene = document.getElementById('background-main');

var parallaxInstance = new Parallax(scene, {
    realtiveInput: true,
    clipRelativeInput: true,
    hoverOnly: true,

})

function navbarToggler() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}