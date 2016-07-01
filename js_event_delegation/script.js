// Answer the questions here:

// - What do you think is going to happen?
//      It's going to console log "Delegated Button #5 Handler"
// - What happened?
//      It worked.
// - Why?
//      Because I used "#list" as the parent element and "button" as the child.

//========== Write your code below ===========//
$(document).ready(function () {
    $("#list").on("click", "button", function () {
        console.log($(this).text());
    });

    var newButton = $("<li><button style='margin-top: 10px'>Delegated Button #5 Handler</button></li>");
    $("#list").append(newButton);

    var googleButton = $("<li><button style='margin-top: 10px'><a href=http://google.com alt=google.com target=_blank style='text-decoration: none; color: black'>For Shits and Googles</a></button></li>");
    $("#list").append(googleButton);
});

