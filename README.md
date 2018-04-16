##html部分
	
####1、login

	(1)log.html
	学生登录页，默认首页。
	
	(2)logm.html
	管理、教师、助理登录页。
	
####2、main
	
	(1)main.html
	学生主页，可选：课堂反馈，异常反馈。
	
	(2)main_m.html
	管理、教师、助理主页，管理可选：查看异常情况（所有实验室），助理可选查看异常情况（对应实验室），
	教师可选查看异常情况（对应实验室），查看课堂反馈（对应实验室）。
	
####3、feedback

	(1)fb.html
	学生反馈问卷填写页。

	(2)fbcre.html
	反馈问卷创建页。

	(3)fbrls.html
	反馈问卷发放页。

	(4)fbupdt.html
	反馈问卷修改页。

	(5)fbman.html
	反馈问卷管理页，整体创建问卷按钮、发放问卷按钮，对应的问卷有修改按钮、删除按钮、查看统计按钮。

	(4)fbsts.html
	反馈问卷情况查看、统计页。

####4、exception

	(1)excp.html
	学生异常反馈页。

	(2)excpsts.html
	异常情况查看页。

####5、breakdown

	(1)bd.html
	故障数统计页。

##CSS部分

####1、header

	(1)header.css
	设定logo与欢迎字样。
	
####2、nav

	(1)nav.css
	设定导航栏。
	
####3、main

	(1)main_xxx.css
	设定xxx.html的main部分。logm.html与log.html共用该css。


##Javascript

####1、jQuery

	(1)jquery-1.11.1.min.js
	引入jQuery。

####2、自定义

	(1)init.js
	用于所有页面，设定body载入后的欢迎部分内容重置事件。

	(2)cfm.js
	用于异常状态查看页（excpsts.html），确认处理方式。

	(3)del.js
	用于原始问卷管理页（fbman.html），确认删除原始问卷。

	(4)dis_btn.js
	用于原始问卷创建页（fbcre.html），异常反馈页（excp.html），点击 提交/修改/保存 后禁止所有按钮。

	(5)disp.js
	用于异常状态查看页（excpsts.html），根据情况不同显示不同的按钮。

	(6)ent.js
	用于登录页（log.html，logm.html），设定回车事件。

	(7)input.js
	用于学生异常反馈页（excp.html），勾选“其他”选项后解锁文字输入框。
	
	(8)page_change.js
	用于异常状态统计页（excpsta.html），换页。

	(9)set_val.js
	用于异常状态查看页（excpsts.html），设定hidden值。

	(10)type.js
	用于原始问卷创建页（fbcre.html），原始问卷修改页（fbupdt.html），根据问卷类型改变可填选项。

##Database

####1、创建

	(1)create.sql
	数据库创建，建立触发器。

####2、测试数据插入

	(1)ip.sql
	插入ip与对应课室、桌号。

	(2)insert-man.sql
	插入助理、教师、管理信息。

	(3)insert-stu.sql
	插入学生信息。

	(4)insert-excp.sql
	插入异常信息。