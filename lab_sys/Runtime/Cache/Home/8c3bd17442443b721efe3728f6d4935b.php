<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<meta charset="UTF-8">
		<title>lab_sys</title>
		<script src="http://pv.sohu.com/cityjson"></script>  
		<script src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
		<script src="/sysulab/Public/lab_sys/js/init.js"></script>
		<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
		<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
		<script>
			window.onbeforeunload = function() {
				return "确认退出？";
			}
		</script>
		<style type="text/css">
			html, body {
				width: 100%;
				height: 100%;
				margin: 0;
				padding: 0;
			}
			* {
				font-family: Arial, sans-serif, "微软雅黑";
				font-size: large;
			}
			p {
				display: inline-block;
			}
			a {
				color: black;
				text-decoration: none;
			}
		</style>
	<body onload="init()">
		<div id="header_wrapper">
			<div id="header">
				<div id="logo"><img src="/sysulab/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
				<div id="welcome">欢迎！</div>
			</div>
		</div>
		<div id="navigation_wrapper">
			<div id="navigation">
				<div class="nav"><a href="main/main.html">主页</a></div>
				<div class="nav"><a href="feedback/fb.html">课堂情况</a></div>
				<div class="nav"><a href="exception/excp.html">异常情况</a></div>
			</div>
		</div>
		<div id="main"></div>
	</body>
</html>