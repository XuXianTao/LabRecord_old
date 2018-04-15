$(document).ready(function() {
    $("#btn1").click(function() {
        $("button").each(function(index) {
            $(this).attr("disabled", "disabled");
        });
        $("#form").submit();
    })
});