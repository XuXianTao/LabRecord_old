<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>lab_sys</title>
		<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
		<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/main_log.css">
		<script src="http://pv.sohu.com/cityjson"></script>
		<script type="text/javascript" src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="/sysulab/Public/lab_sys/js/init.js"></script>
		<script type="text/javascript" src="/sysulab/Public/lab_sys/js/btn.js"></script>
		<script type="text/javascript" src="/sysulab/Public/lab_sys/js/ent.js"></script>
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
	</head>
	<body onload="init()">
		<div id="header_wrapper">
			<div id="header">
				<div id="logo"><img src="/sysulab/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
				<div id="welcome">欢迎！</div>
			</div>
		</div>
		<div id="main">
			<div id="login">
				<p>请输入学号：</p><input type="text" name="num"/><br>
				<button id="btn1" name="btn_log">登入</button>
			</div>
		</div>
	</body>
</html>