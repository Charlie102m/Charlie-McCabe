// when clicking the + icon
$(".fa-plus").click(function () {
    // toggle input field with type="text"
    $("input[type='text']").fadeToggle();
});
// listen to enter key press on input form
$("input[type = 'text']").on("keypress", function (event) {
    // if key press = enter
    if (event.which === 13) {
        // grab new todo text from input
        var newTodoText = $(this).val();
        $(this).val("");
        // append new todo as an li to the parent ul
        $("ul").append("<li><span><i class='fas fa-trash-alt'></i></span>" + newTodoText + "</li>");
    }
})
// click on li to strikethrough
$("ul").on("click", "li", function () {
    // toggles css class which represents a completed to-do
    $(this).toggleClass("done");
});
// click on span to delete li
$("ul").on("click", "span", function (event) {
    // fadeout on click
    $(this).parent().fadeOut(500, function () {
        // remove once fadeout is complete
        $(this).remove();
    });
    // prevent click from triggering other events
    event.stopPropagation();
})