$(document).ready(function() {
    if ($("#qt0").prop("checked")) {
        $("[class='corAns']").each(function(index) {
            $(this).css("display", "none");
        });
    } else {
        $("[class='corAns']").each(function (index) {
            $(this).css("display", "block");
        });
    }
    $("#qt0").click(function() {
        $("[class='corAns']").each(function (index) {
            $(this).css("display", "none");
        });
    });
    $("#qt1").click(function() {
        $("[class='corAns']").each(function (index) {
            $(this).css("display", "block");
        });
    });
});