function page_down(event) {
    var offset = document.getElementsByName("vo");
    alert(offset);
    if (offset >= 2) {
        offset = list.offset - 2;
    } else {
        alert('已是第一页');
    }
}

function page_up(event) {
    var offset = document.getElementById("vo");
    var num_list = jQuery("#num_list")[0].value;
    alert(offset);
    alert(num_list);
    if (offset < num_list) {
        offset = offset + 2;
    } else {
        alert('已是最后一页');
    }
}