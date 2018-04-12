function type() {
    jQuery(document).ready(function() {
        if (jQuery("#qt0").prop("checked")) {
            jQuery("[class='q']").each(function(index) {
                var div = jQuery("[class='q']").eq(index)[0];
                var childNodes = div.childNodes;
                var len = childNodes.length;
                while (len != 30) {
                    childNodes[len - 1].parentNode.removeChild(childNodes[len - 1]);
                    len--;
                }
            });
        } else {
            jQuery("[class='q']").each(function(index) {
                var div = jQuery("[class='q']").eq(index)[0];
                var childNodes = div.childNodes;
                var len = childNodes.length;
                var node = "<br><br><div>&emsp;&emsp;正确选项：" +
                    "<input id = \"a_q" + (index + 1) + "_1\" name = \"a_q" + (index + 1) + "\" type = \"radio\" value = \"1\" checked > 1" +
                    "<input id = \"a_q" + (index + 1) + "_2\" name = \"a_q" + (index + 1) + "\" type = \"radio\" value = \"2\" > 2" +
                    "<input id = \"a_q" + (index + 1) + "_3\" name = \"a_q" + (index + 1) + "\" type = \"radio\" value = \"3\" > 3" +
                    "<input id = \"a_q" + (index + 1) + "_4\" name = \"a_q" + (index + 1) + "\" type = \"radio\" value = \"4\" > 4" +
                    "<input id = \"a_q" + (index + 1) + "_5\" name = \"a_q" + (index + 1) + "\" type = \"radio\" value = \"5\" > 5" +
                    "</div>";
                if (len != 33) {
                    div = jQuery("[class='q']").eq(index);
                    div.append(node);
                }
            });
        }
    });
    window.setTimeout(type, 5);
}