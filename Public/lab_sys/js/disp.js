jQuery(document).ready(function() {
    jQuery("[name='sts']").each(function(index) {
        if (this.innerHTML == "处理成功") {
            jQuery("[name='btn1']").eq(index).css("display", "none");
            jQuery("[name='btn2']").eq(index).css("display", "none");
        } else if (this.innerHTML == "处理不成功") {
            jQuery("[name='btn1']").eq(index).css("display", "none");
        }
    });
})