// Answer the questions here:

// - What do you think is going to happen?

// - What happened?

// - Why?

//========== Write your code below ===========//
$(document).ready (function() {
    $("#list button").on("click", function() {
        console.log ( $(this).text());
    });
    var newButton = $("<li><button style='margin-top: 10px'>Delegated Button #5 Handler</button></li>");
    $("#list").append(newButton);
});

