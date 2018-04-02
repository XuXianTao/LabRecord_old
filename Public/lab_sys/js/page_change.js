function pagedown(event) {
    var offset = document.getElementsByName("btn");
    if ({$page} > 1)
    {
        alert({$page});
        var page = {$page} - 1;
        offset.value = page;
    } else {
        alert('已是第一页');
        offset.value = 1;
    }
}

function pageup(event) {
    //var offset = document.getElementsByName("btn");
    alert({$page});
    if ({$page} < {$num}) {
        var page = {$page} + 1;
        offset.value = page;
    } else {
        alert('已是最后一页');
        offset.value = {$num};
    }
}