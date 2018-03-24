jQuery(document).ready(function() {
	jQuery("button").click(function() {
		var name = jQuery("button").attr("name");
		switch(name) {
			case "btn_log": 
				var num = jQuery("input").val();
				if (num != "") {
					jQuery.post("php/xxx.php",
						{
							"TYPE": "stu",
							"NUM": num
						},
						function(data) {
							if (data.err != "null") {
								alert("不存在该学号");
							}
							else {
								//跳转并保留身份、学号、姓名、台号
								
								window.location.href = "main.html";
							}
						},"json")
				}
				else {
					alert("输入不能为空");
				}
				break;
			case "btn_loga": 
				var num = jQuery("input").val();
				if (num != "") {
					jQuery.post("php/xxx.php",
						{
							"TYPE": "ass",
							"NUM": num
						},
						function(data) {
							if (data.err != "null") {
								alert("不存在该学号");
							}
							else {
								//跳转并保留身份、学号、姓名、台号
								
								window.location.href = "main.html";
							}
						},"json")
				}
				else {
					alert("输入不能为空");
				}
				break;
			case "btn_logm": 
				var num = jQuery("input").val();
				if (num != "") {
					jQuery.post("php/xxx.php",
						{
							"TYPE": "man",
							"NUM": num
						},
						function(data) {
							if (data.err != "null") {
								alert("不存在该职工号");
							}
							else {
								//跳转并保留身份、学号、姓名、台号
								
								window.location.href = "main.html";
							}
						},"json")
				}
				else {
					alert("输入不能为空");
				}
				break;
			case "btn_logt": 
				var num = jQuery("input").val();
				if (num != "") {
					jQuery.post("php/xxx.php",
						{
							"TYPE": "tea",
							"NUM": num
						},
						function(data) {
							if (data.err != "null") {
								alert("不存在该职工号");
							}
							else {
								//跳转并保留身份、学号、姓名、台号
								
								window.location.href = "main.html";
							}
						},"json")
				}
				else {
					alert("输入不能为空");
				}
				break;
			case "btn_fb": 
				
				break;
			case "btn_excp": 
				
				break;
			case "btn_fba": 
				
				break; //暂留
			case "btn_fbc": 
				
				break;
			case "btn_excpa": 
				
				break;
			case "btn_excpc": 
				
				break;
		}
		
	})
})
