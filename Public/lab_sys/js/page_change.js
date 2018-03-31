function page_down(event) {
    var page = document.getElementsByName("list");
    if(page.offset >= 10){
        page.offset = page.offset - 10;
    }else{
        alert('已是第一页');
    }
}
function page_up(event) {
    var page = document.getElementsByName("list");
    var num_list = document.getElementsByName("num_list");
    if(page.offset < num_list){
        page.offset = page.offset + 10;
    }else{
        alert('已是最后一页');
    }
}