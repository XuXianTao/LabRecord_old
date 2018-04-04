html部分
	
	1、login

		(1)log.html
		学生登录页，默认首页。
	
		(2)logm.html
		管理、教师、助理登录页。
	
	2、main
	
		(1)main.html
		学生主页，可选：课堂反馈，异常反馈。
	
		(2)main_m.html
		管理、教师、助理主页，管理可选：查看异常情况（所有实验室），助理可选查看异常情况（对应实验室），
		教师可选查看异常情况（对应实验室），查看课堂反馈（对应实验室）。
	
	3、feedback

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

	4、exception

		(1)excp.html
		学生异常反馈页。

		(2)excpsts.html
		异常情况查看页。

	5、breakdown

		(1)bd.html
		故障数统计页。


CSS部分

	1、header.css
	设定logo与欢迎字样。
	
	2、nav.css
	设定导航栏。
	
	3、tb_xxx.css
	设定table，不存在共用。
	
	4、main_xxx.css
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

	8、page_change.js
	bd.html使用，换页。

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


img部分

	1、logo.jpg
	中大logo。


