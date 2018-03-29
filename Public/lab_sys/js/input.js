jQuery(document).ready(function() {
    if (jQuery("[name='oth']").attr("checked") == "checked") {
        jQuery("[name='des']").removeAttr("disabled");
    } else {
        jQuery("[name='des']").attr("disabled", "disabled");
    }
});