function cfm_inc(event) {
    var target = event.target;
    var delWay = prompt("处理不成功，简单描述处理方式：", "");
    if (delWay != null && delWay != "") {
        var delWay1 = target.previousElementSibling;
        delWay1.value = delWay;
        return true;
    } else
        return false;
}

function cfm_com(event) {
    var target = event.target;
    var delWay = prompt("处理成功，简单描述处理方式：", '');
    if (delWay != null && delWay != "") {
        var delWay2 = target.previousElementSibling;
        delWay2.value = delWay;
        return true;
    } else
        return false;
}