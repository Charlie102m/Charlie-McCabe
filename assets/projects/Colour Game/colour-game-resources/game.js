var numSquares = 6;
// colours of squares - link to Square Color Control functions
var colors = generateRandomColors(numSquares);
// correct square - set initial
var pickedColor = colors[0];
// coloured squares - link from html
var squares = document.querySelectorAll(".square");
// display for pickedColor - link from html
var colorDisplay = document.getElementById("colorDisplay");
// display for message alert - link from html
var messageDisplay = document.querySelector("#message");
// header div for background color change - link from html
var header = document.getElementById("header");
// reset button - link from html
var resetButton = document.querySelector("#reset");
// difficulty buttons - link from html
var modeBtns = document.querySelectorAll(".mode");
// hint image - link from html
var hintImg = document.getElementById("hint");

// on load - run game
init();
// concatenated function to run game
function init() {
    modeBtnSet();
    squareSet();
    reset();
}
// ***********************************************
// set square interaction logic
function squareSet() {
    // loop through each square
    for (i = 0; i < squares.length; i++) {
        // add event listeners to squares
        squares[i].addEventListener("click", function () {

            // grab colour of clicked square
            var clickedColor = this.style.backgroundColor;

            // compare colour to pickedColor
            if (clickedColor === pickedColor) {
                messageDisplay.textContent = "Correct!";
                changeColors(pickedColor);
                resetButton.textContent = "Play Again?"
            } else {
                this.style.backgroundColor = "#232323";
                messageDisplay.textContent = "Try again";
            }
        });
    }
}
// when correct square is clicked
function changeColors(clr) {
    // loop through all squares
    for (i = 0; i < squares.length; i++) {
        // change each square to match given color
        squares[i].style.backgroundColor = clr;
        header.style.backgroundColor = clr;
    }
}
// pick random target color
function pickColor() {
    var random = Math.floor(Math.random() * colors.length);
    return colors[random];
}
// generate random colors
function randomColor() {
    // pick a red from 0-255
    var r = Math.floor(Math.random() * 256);
    // pick a blue from 0-255
    var g = Math.floor(Math.random() * 256);
    // pick a green from 0-255
    var b = Math.floor(Math.random() * 256);
    // concatenate and return randomColor
    return "rgb(" + r + ", " + g + ", " + b + ")";
}
// push random colors to array
function generateRandomColors(num) {
    // make an array
    var arr = [];
    // add num random to array
    for (var i = 0; i < num; i++) {
        // push random color to array
        arr.push(randomColor());
    }
    // return that array
    return arr;
}
// assign random colors to squares
function colorAssign() {
    squares[i].style.backgroundColor = colors[i];
}
// clear & reset
function reset() {
    // generate all new random colors
    colors = generateRandomColors(numSquares);
    // pick a new random color from array
    pickedColor = pickColor();
    // update color display
    colorDisplay.textContent = pickedColor;
    // change color of header
    header.style.backgroundColor = "#1A6B85";
    // reset message from play again to new colours
    resetButton.textContent = "New Colours?"
    // change colors of squares
    for (i = 0; i < squares.length; i++) {
        if (colors[i]) {
            squares[i].style.display = "block";
            colorAssign();
        } else {
            squares[i].style.display = "none";
        }
    }
    // reset message display
    messageDisplay.textContent = "Guess The Colour";
}
// reset button listener
resetButton.addEventListener("click", function () {
    reset();

});
// difficulty button interaction logic
function modeBtnSet() {
    for (i = 0; i < modeBtns.length; i++) {
        modeBtns[i].addEventListener("click", function () {
            modeBtns[0].classList.remove("selected");
            modeBtns[1].classList.remove("selected");
            this.classList.add("selected");
            if (this === modeBtns[0]) {
                numSquares = 3;
                // show hint image
                hintImg.style.display = "inline";
            } else {
                numSquares = 6;
                hintImg.style.display = "none";
            }
            reset();
        });
    }
}