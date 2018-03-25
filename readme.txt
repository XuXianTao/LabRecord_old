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
	管理、教师、助理主页，管理可选：查看异常情况（所有实验室），助理可选查看异常情况（对应实验室），教师可选查看异常情况（对应实验室），查看课堂反馈（对应实验室）。
	点击自己不允许访问的连接则弹框拒绝。
	
	5、fb.html
	学生课堂反馈页。
	
	6、excp.html
	学生异常反馈页。
	
	7、fbsts.html
	课堂反馈查看页。
	
	8、excpsts.html
	助理异常情况查看页。


CSS部分

	1、header.css
	设定logo与欢迎字样。
	
	2、nav.css
	设定导航栏。
	
	3、table.css
	设定table。
	
	4、main_xx.css
	设定xx.html的主要部分，存在共用。


JS部分

	1、jquery-1.11.1.min.js
	引入jQuery。
	
	2、init.js
	设定body载入后的欢迎部分内容重置事件。

	3、ent.js
	设定回车事件。
	

DB部分

	1、create.sql
	数据库创建，暂缺课堂反馈表，最后根据问卷而定。

	2、insert-stu.sql
	插入学生信息。

	3、insert-ass.sql
	插入助理信息。

	4、insert-tea.sql
	插入教师信息。

	5、insert-man.sql
	插入管理信息。

	6、insert-excp.sql
	插入异常信息。

	7、insert-fb.sql
	插入反馈信息。
