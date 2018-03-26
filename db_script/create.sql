drop database if exists `lab_sys`;
create database `lab_sys` character set utf8;
use `lab_sys`;
#助理
create table ass (
	cla 	varchar(200) not null,		#课室
    id		int not null,				#学号
    nam 	varchar(200) not null,		#名字
    wDay	int,						#值班是周几，1一，2二...
    bTim	time,						#值班开始时间
    eTim	time,						#值班结束时间
    primary key(id,wDay,bTim,eTim)
);
#教师
create table tea (
	cla 	varchar(200) not null,		#课室
    id		int not null,				#职工号
    nam 	varchar(200) not null,		#名字
    wDay	int,						#上课是周几，1一，2二...
    bTim	time,						#上课时间
    eTim	time,						#下课时间
    primary key(id,wDay,bTim,eTim)
);
#管理
create table man (
    id		int not null primary key,	#职工号
    nam 	varchar(200) not null		#名字
);
#学生
create table stu (
	cla 	varchar(200) not null,		#课室
    num		int not null,				#机号
    id		int not null primary key,	#学号
    nam 	varchar(200) not null,		#名字
    wDay	int,						#上课是周几，1一，2二...
    bTim	time,						#上课时间
    eTim	time,						#下课时间
    teaId	int not null,				#上课教师
    foreign key(teaId) references tea(id)
);
#异常
create table excp (
	dat		datetime,					#时间
    id		int not null,				#学号
    sts		boolean,					#处理状态，0未处理，1已处理
    pc		boolean,					#电脑，0没问题，1有问题
    wire	boolean,					#导线，0没问题，1有问题
    box		boolean,					#电路箱，0没问题，1有问题
    oscp	boolean,					#示波器，0没问题，1有问题
    gen		boolean,					#函数发生器，0没问题，1有问题
    primary key(dat,id),
    foreign key(id) references stu(id)
);
#课堂
create table fb (
	dat		datetime,					#时间
    id		int not null,				#学号
    kno		int not null				#知识点掌握程度，由完全掌握到完全不掌握1-5
);