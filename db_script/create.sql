drop database if exists `lab_sys`;
create database `lab_sys` character set utf8;
use `lab_sys`;
#IP、座位号映像
create table ip (
	ip			varchar(200) not null,			#ip地址
    cla     	varchar(200) not null,      	#课室
    num			varchar(200) not null			#座位号
) engine=InnoDB;
#管理、教师、助理
create table man (
	typ			int not null,					#类型，0管理，1教师，2助理
    id			int not null,					#职工号/学号
    nam			varchar(200) not null,			#名字
    cla			varchar(200),					#课室
    wDay		int,							#上班是周几，1一，2二
    claTim		varchar(200),					#上班时段
    primary 	key(typ,id,wDay,claTim)
) engine=InnoDB;
#学生
create table stu (
    id			int not null primary key,		#学号
    nam 		varchar(200) not null,			#名字
    wDay		int not null,					#上课是周几，1一，2二...
    claTim		varchar(200) not null,			#上课时段
    teaId		int not null,					#上课教师
    flag		boolean default false			#是否填写问卷
) engine=InnoDB;
#异常
create table excp (
	dat			datetime,						#时间
    id			int not null,					#学号
    nam     	varchar(200) not null,      	#名字
    cla     	varchar(200) not null,      	#课室
    num     	int not null,               	#机号
    delId		int,							#处理人学号
    delNam		varchar(200),					#处理人姓名
    sts			varchar(200) not null,			#处理状态，完全未处理，处理不成功，处理完毕
    delWay		varchar(200),					#处理方式
    delTim		datetime,						#处理时间
    pc			boolean,						#电脑，0没问题，1有问题
    wire		boolean,						#导线，0没问题，1有问题
    box			boolean,						#电路箱，0没问题，1有问题
    oscp		boolean,						#示波器，0没问题，1有问题
    gen			boolean,						#函数发生器，0没问题，1有问题
    oth			boolean,						#其他，0没选，1选中
    des			varchar(200),					#描述
    primary key(dat,id),
    foreign key(id) references stu(id)
) engine=InnoDB;
#异常统计
create table excpsta (
	cla			varchar(200) not null,			#课室
    num			int not null,					#座位号
    pc			int,							#电脑故障数
    wire		int,							#导线故障数
    box			int,							#电路箱故障数 
    oscp		int,							#示波器故障数
    gen			int,							#函数发生器故障数
    oth			int								#其他故障数
) engine=InnoDB;
#原始问卷
create table fbori (
	id			int primary key auto_increment, #问卷id
    creTim      datetime,                       #创建时间
    bId			int,							#创建人id
    bNam		varchar(200),					#创建人名字
	tit			varchar(200) default null,		#问卷标题
    q1			varchar(200) default null,		#问题1
    a1_q1		varchar(200) default null,		#问题1第一选项
    a2_q1		varchar(200) default null,		#问题1第二选项
    a3_q1		varchar(200) default null,		#问题1第三选项
    a4_q1		varchar(200) default null,		#问题1第四选项
    a5_q1		varchar(200) default null,		#问题1第五选项
    q2			varchar(200) default null,		#问题2
    a1_q2		varchar(200) default null,		#问题2第一选项
    a2_q2		varchar(200) default null,		#问题2第二选项
    a3_q2		varchar(200) default null,		#问题2第三选项
    a4_q2		varchar(200) default null,		#问题2第四选项
    a5_q2		varchar(200) default null,		#问题2第五选项
    q3			varchar(200) default null,		#问题3
    a1_q3		varchar(200) default null,		#问题3第一选项
    a2_q3		varchar(200) default null,		#问题3第二选项
    a3_q3		varchar(200) default null,		#问题3第三选项
    a4_q3		varchar(200) default null,		#问题3第四选项
    a5_q3		varchar(200) default null,		#问题3第五选项
    q4			varchar(200) default null,		#问题4
    a1_q4		varchar(200) default null,		#问题4第一选项
    a2_q4		varchar(200) default null,		#问题4第二选项
    a3_q4		varchar(200) default null,		#问题4第三选项
    a4_q4		varchar(200) default null,		#问题4第四选项
    a5_q4		varchar(200) default null,		#问题4第五选项
    q5			varchar(200) default null,		#问题5
    a1_q5		varchar(200) default null,		#问题5第一选项
    a2_q5		varchar(200) default null,		#问题5第二选型
    a3_q5		varchar(200) default null,		#问题5第三选项
    a4_q5		varchar(200) default null,		#问题5第四选项
    a5_q5		varchar(200) default null,		#问题5第五选项
    q6			varchar(200) default null,		#问题6
    a1_q6		varchar(200) default null,		#问题6第一选项
    a2_q6		varchar(200) default null,		#问题6第二选型
    a3_q6		varchar(200) default null,		#问题6第三选项
    a4_q6		varchar(200) default null,		#问题6第四选项
    a5_q6		varchar(200) default null,		#问题6第五选项
    q7			varchar(200) default null,		#问题7
    a1_q7		varchar(200) default null,		#问题7第一选项
    a2_q7		varchar(200) default null,		#问题7第二选型
    a3_q7		varchar(200) default null,		#问题7第三选项
    a4_q7		varchar(200) default null,		#问题7第四选项
    a5_q7		varchar(200) default null,		#问题7第五选项
    q8			varchar(200) default null,		#问题8
    a1_q8		varchar(200) default null,		#问题8第一选项
    a2_q8		varchar(200) default null,		#问题8第二选型
    a3_q8		varchar(200) default null,		#问题8第三选项
    a4_q8		varchar(200) default null,		#问题8第四选项
    a5_q8		varchar(200) default null,		#问题8第五选项
    q9			varchar(200) default null,		#问题9
    a1_q9		varchar(200) default null,		#问题9第一选项
    a2_q9		varchar(200) default null,		#问题9第二选型
    a3_q9		varchar(200) default null,		#问题9第三选项
    a4_q9		varchar(200) default null,		#问题9第四选项
    a5_q9		varchar(200) default null,		#问题9第五选项
    q10			varchar(200) default null,		#问题10
    a1_q10		varchar(200) default null,		#问题10第一选项
    a2_q10		varchar(200) default null,		#问题10第二选型
    a3_q10		varchar(200) default null,		#问题10第三选项
    a4_q10		varchar(200) default null,		#问题10第四选项
    a5_q10		varchar(200) default null		#问题10第五选项
) auto_increment=1 engine=InnoDB;
#已发布问卷
create table fbrls (
	id			int primary key auto_increment,	#问卷id
    teaId		int not null,					#发布者id
    teaName		varchar(200) not null,			#发布者名字
    rlsTim      datetime,                       #发布时间
    ddl			datetime,						#截止时间
    cla			varchar(200) not null,			#问卷发放到的班级的所在课室
    wDay		int,							#问卷发放到的班级的对应上课日，1一，2二
    claTim		varchar(200),					#问卷发放到的班级的上课时段
    stuNum		int default 0,					#问卷已填写人数
    tit			varchar(200) default null,		#问卷标题
    q1			varchar(200) default null,		#问题1
    a1_q1		varchar(200) default null,		#问题1第一选项
    a1_q1_Num	int default 0,					#问题1第一选项选中人数
    a2_q1		varchar(200) default null,		#问题1第二选项
    a2_q1_Num	int default 0,					#问题1第二选项选中人数
    a3_q1		varchar(200) default null,		#问题1第三选项
    a3_q1_Num	int default 0,					#问题1第三选项选中人数
    a4_q1		varchar(200) default null,		#问题1第四选项
    a4_q1_Num	int default 0,					#问题1第四选项选中人数
    a5_q1		varchar(200) default null,		#问题1第五选项
    a5_q1_Num	int default 0,					#问题1第五选项选中人数
    q2			varchar(200) default null,		#问题2
    a1_q2		varchar(200) default null,		#问题2第一选项
    a1_q2_Num	int default 0,					#问题2第一选项选中人数
    a2_q2		varchar(200) default null,		#问题2第二选项
    a2_q2_Num	int default 0,					#问题2第二选项选中人数
    a3_q2		varchar(200) default null,		#问题2第三选项
    a3_q2_Num	int default 0,					#问题2第三选项选中人数
    a4_q2		varchar(200) default null,		#问题2第四选项
    a4_q2_Num	int default 0,					#问题2第四选项选中人数
    a5_q2		varchar(200) default null,		#问题2第五选项
    a5_q2_Num	int default 0,					#问题2第五选项选中人数
    q3			varchar(200) default null,		#问题3
    a1_q3		varchar(200) default null,		#问题3第一选项
    a1_q3_Num	int default 0,					#问题3第一选项选中人数
    a2_q3		varchar(200) default null,		#问题3第二选项
    a2_q3_Num	int default 0,					#问题3第二选项选中人数
    a3_q3		varchar(200) default null,		#问题3第三选项
    a3_q3_Num	int default 0,					#问题3第三选项选中人数
    a4_q3		varchar(200) default null,		#问题3第四选项
    a4_q3_Num	int default 0,					#问题3第四选项选中人数
    a5_q3		varchar(200) default null,		#问题3第五选项
    a5_q3_Num	int default 0,					#问题3第五选项选中人数
    q4			varchar(200) default null,		#问题4
    a1_q4		varchar(200) default null,		#问题4第一选项
    a1_q4_Num	int default 0,					#问题4第一选项选中人数
    a2_q4		varchar(200) default null,		#问题4第二选项
    a2_q4_Num	int default 0,					#问题4第二选项选中人数
    a3_q4		varchar(200) default null,		#问题4第三选项
    a3_q4_Num	int default 0,					#问题4第三选项选中人数
    a4_q4		varchar(200) default null,		#问题4第四选项
    a4_q4_Num	int default 0,					#问题4第四选项选中人数
    a5_q4		varchar(200) default null,		#问题4第五选项
    a5_q4_Num	int default 0,					#问题4第五选项选中人数
    q5			varchar(200) default null,		#问题5
    a1_q5		varchar(200) default null,		#问题5第一选项
    a1_q5_Num	int default 0,					#问题5第一选项选中人数
    a2_q5		varchar(200) default null,		#问题5第二选型
    a2_q5_Num	int default 0,					#问题5第二选型选中人数
    a3_q5		varchar(200) default null,		#问题5第三选项
    a3_q5_Num	int default 0,					#问题5第三选项选中人数
    a4_q5		varchar(200) default null,		#问题5第四选项
    a4_q5_Num	int default 0,					#问题5第四选项选中人数
    a5_q5		varchar(200) default null,		#问题5第五选项
    a5_q5_Num	int default 0,					#问题5第五选项选中人数
    q6			varchar(200) default null,		#问题6
    a1_q6		varchar(200) default null,		#问题6第一选项
    a1_q6_Num	int default 0,					#问题6第一选项选中人数
    a2_q6		varchar(200) default null,		#问题6第二选型
    a2_q6_Num	int default 0,					#问题6第二选型选中人数
    a3_q6		varchar(200) default null,		#问题6第三选项
    a3_q6_Num	int default 0,					#问题6第三选项选中人数
    a4_q6		varchar(200) default null,		#问题6第四选项
    a4_q6_Num	int default 0,					#问题6第四选项选中人数
    a5_q6		varchar(200) default null,		#问题6第五选项
    a5_q6_Num	int default 0,					#问题6第五选项选中人数
    q7			varchar(200) default null,		#问题7
    a1_q7		varchar(200) default null,		#问题7第一选项
    a1_q7_Num	int default 0,					#问题7第一选项选中人数
    a2_q7		varchar(200) default null,		#问题7第二选型
    a2_q7_Num	int default 0,					#问题7第二选型选中人数
    a3_q7		varchar(200) default null,		#问题7第三选项
    a3_q7_Num	int default 0,					#问题7第三选项选中人数
    a4_q7		varchar(200) default null,		#问题7第四选项
    a4_q7_Num	int default 0,					#问题7第四选项选中人数
    a5_q7		varchar(200) default null,		#问题7第五选项
    a5_q7_Num	int default 0,					#问题7第五选项选中人数
    q8			varchar(200) default null,		#问题8
    a1_q8		varchar(200) default null,		#问题8第一选项
    a1_q8_Num	int default 0,					#问题8第一选项选中人数
    a2_q8		varchar(200) default null,		#问题8第二选型
    a2_q8_Num	int default 0,					#问题8第二选型选中人数
    a3_q8		varchar(200) default null,		#问题8第三选项
    a3_q8_Num	int default 0,					#问题8第三选项选中人数
    a4_q8		varchar(200) default null,		#问题8第四选项
    a4_q8_Num	int default 0,					#问题8第四选项选中人数
    a5_q8		varchar(200) default null,		#问题8第五选项
    a5_q8_Num	int default 0,					#问题8第五选项选中人数
    q9			varchar(200) default null,		#问题9
    a1_q9		varchar(200) default null,		#问题9第一选项
    a1_q9_Num	int default 0,					#问题9第一选项选中人数
    a2_q9		varchar(200) default null,		#问题9第二选型
    a2_q9_Num	int default 0,					#问题9第二选型选中人数
    a3_q9		varchar(200) default null,		#问题9第三选项
    a3_q9_Num	int default 0,					#问题9第三选项选中人数
    a4_q9		varchar(200) default null,		#问题9第四选项
    a4_q9_Num	int default 0,					#问题9第四选项选中人数
    a5_q9		varchar(200) default null,		#问题9第五选项
    a5_q9_Num	int default 0,					#问题9第五选项选中人数
    q10			varchar(200) default null,		#问题10
    a1_q10		varchar(200) default null,		#问题10第一选项
    a1_q10_Num	int default 0,					#问题10第一选项选中人数
    a2_q10		varchar(200) default null,		#问题10第二选型
    a2_q10_Num	int default 0,					#问题10第二选型选中人数
    a3_q10		varchar(200) default null,		#问题10第三选项
    a3_q10_Num	int default 0,					#问题10第三选项选中人数
    a4_q10		varchar(200) default null,		#问题10第四选项
    a4_q10_Num	int default 0,					#问题10第四选项选中人数
    a5_q10		varchar(200) default null,		#问题10第五选项
    a5_q10_Num	int default 0					#问题10第五选项选中人数
) auto_increment=1 engine=InnoDB;

DELIMITER //
create trigger `tri_insert_excpsta` after insert on `excp` for each row
begin
    select count(*) into @cnt from excpsta where cla=new.cla and num=new.num;
    if @cnt<>0 then
		if new.pc<>0 then
			update excpsta set pc=pc+1 where cla=new.cla and num=new.num;
		end if;
		if new.wire<>0 then
			update excpsta set wire=wire+1 where cla=new.cla and num=new.num;
		end if;
		if new.box<>0 then
			update excpsta set box=box+1 where cla=new.cla and num=new.num;
		end if;
        if new.oscp<>0 then
			update excpsta set oscp=oscp+1 where cla=new.cla and num=new.num;
		end if;
        if new.gen<>0 then
			update excpsta set gen=gen+1 where cla=new.cla and num=new.num;
		end if;
        if new.oth<>0 then
			update excpsta set oth=oth+1 where cla=new.cla and num=new.num;
		end if;
    else
		insert into excpsta(cla,num,pc,wire,box,oscp,gen,oth) values(new.cla,new.num,new.pc,new.wire,new.box,new.oscp,new.gen,new.oth);
    end if;
end;
//
DELIMITER ;