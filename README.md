# 系统部分

- 环境：Windows10 xampp latest，Deepin xampp latest
- 框架：ThinkPHP框架
- 引入库：jQuery
- 编辑器：VSCode，Sublime
- 数据库工具：MySQL，Navicat

# html部分

## 1、login

- log.html：学生登录页，默认首页。
- logm.html：管理、教师、助理登录页。

## 2、main

- main.html：学生主页，可选：课堂反馈，异常反馈。
- main_m.html：管理、教师、助理主页，管理可选：查看异常情况（所有实验室），助理可选查看异常情况（对应实验室），教师可选查看异常情况（对应实验室），查看课堂反馈（对应实验室）。

## 3、feedback

- fb.html：学生反馈问卷填写页。
- fbcre.html：反馈问卷创建页。
- fbrls.html：反馈问卷发放页。
- fbupdt.html：反馈问卷修改页。
- fbman.html：反馈问卷管理页，整体创建问卷按钮、发放问卷按钮，对应的问卷有修改按钮、删除按钮、查看统计按钮。
- fbsts.html：反馈问卷情况查看、统计页。

## 4、exception

- excp.html：学生异常反馈页。
- excpsts.html：异常情况查看页。

## 5、breakdown

- bd.html：故障数统计页。

# CSS部分

## 1、header

- header.css：设定logo与欢迎字样。

## 2、nav

- nav.css：设定导航栏。

## 3、main

- main_xxx.css：设定xxx.html的main部分。logm.html与log.html共用css。

# Javascript

## 1、jQuery

- jquery-1.11.1.min.js：引入jQuery。

## 2、自定义

- init.js：用于所有页面，设定body载入后的欢迎部分内容重置事件。
- cfm.js：用于异常状态查看页（excpsts.html），确认处理方式。
- del.js：用于原始问卷管理页（fbman.html），确认删除原始问卷。
- dis_btn.js：用于原始问卷创建页（fbcre.html），异常反馈页（excp.html），点击 提交/修改/保存 后禁止所有按钮。
- disp.js：用于异常状态查看页（excpsts.html），根据情况不同显示不同的按钮。
- ent.js：用于登录页（log.html，logm.html），设定回车事件。
- input.js：用于学生异常反馈页（excp.html），勾选“其他”选项后解锁文字输入框。
- page_change.js：用于异常状态统计页（excpsta.html），换页。
- set_val.js：用于异常状态查看页（excpsts.html），设定hidden值。
- type.js：用于原始问卷创建页（fbcre.html），原始问卷修改页（fbupdt.html），根据问卷类型改变可填选项。

# Database部分

## 1、创建

- create.sql：数据库创建，建立触发器。

## 2、测试数据插入

- ip.sql：插入ip与对应课室、桌号。
- insert-man.sql：插入助理、教师、管理信息。
- insert-stu.sql：插入学生信息。
- insert-excp.sql：插入异常信息。