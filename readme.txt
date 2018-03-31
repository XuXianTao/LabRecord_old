img部分

	1、logo.jpg
	中大logo。


html部分
	
	1、log.html
	学生登录页，默认首页。
	
	2、logm.html
	管理、教师、助理登录页。
	
	3、main.html
	学生主页，可选：课堂反馈，异常反馈。
	
	4、main_m.html
	管理、教师、助理主页，管理可选：查看异常情况（所有实验室），助理可选查看异常情况（对应实验室），
	教师可选查看异常情况（对应实验室），查看课堂反馈（对应实验室）。
	
	5、fb.html
	学生课堂反馈页。
	
	6、excp.html
	学生异常反馈页。
	
	7、fbsts.html
	课堂反馈查看页。
	
	8、excpsts.html
	助理异常情况查看页。

	9、bd.html
	故障统计页。


CSS部分

	1、header.css
	设定logo与欢迎字样。
	
	2、nav.css
	设定导航栏。
	
	3、tb.css
	设定table，不存在共用。
	
	4、main.css
	设定main，存在共用。


JS部分

	1、jquery-1.11.1.min.js
	引入jQuery。
	
	2、init.js
	设定body载入后的欢迎部分内容重置事件。

	3、ent.js
	设定回车事件。

	4、input.js
	excp.html使用，勾选“其他”选项后解锁文字输入框。

	5、cfm.js
	excpsts.html使用，确认处理方式。

	6、disp.js
	excpsts.html使用，确定按钮的显示。

	7、set_val.js
	excpsts.html使用，设定hidden值。

DB部分

	1、create.sql
	数据库创建，建立触发器。

	2、	insert-man.sql
	插入助理、教师、管理信息。

	3、insert-stu.sql
	插入学生信息。

	4、insert-excp.sql
	插入异常信息。

	5、insert-fb.sql
	插入反馈信息，待更新。
