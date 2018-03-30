function input() {
    jQuery(document).ready(function() {
        if (jQuery("[name='oth']").prop("checked")) {
            jQuery("[name='des']").removeAttr("disabled");
        } else {
            jQuery("[name='des']").attr("disabled", "disabled");
            jQuery("[name='des']").val("");
            jQuery("[name='des']").prop("placeholder", "输入文字进行描述");
        }
    });
    window.setTimeout(input, 50);
}