function init() {
	var myDate = new Date();
	jQuery("#welcome").html("欢迎，"+returnCitySN["cip"]+"！<br>当前时间："+
	myDate.getFullYear().toString()+"年"+myDate.getMonth().toString()+"月"+
	myDate.getDate().toString()+"日"+myDate.getHours().toString()+"时"+
	myDate.getMinutes().toString()+"分"+myDate.getSeconds().toString()+"秒");
	window.setTimeout(init, 1000);
}