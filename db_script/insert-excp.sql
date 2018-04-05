/*
create table excp (
	dat		datetime,					#时间
    id		int not null,				#学号
    nam     varchar(200) not null,      #名字
    cla     varchar(200) not null,      #课室
    num     int not null,               #机号
    delId	int,						#处理人学号
    delNam	varchar(200),				#处理人姓名
    sts		varchar(200) not null,		#处理状态，完全未处理，处理不成功，处理完毕
    delWay	varchar(200),				#处理方式
    delTim	datetime,					#处理时间
    pc		boolean,					#电脑，0没问题，1有问题
    wire	boolean,					#导线，0没问题，1有问题
    box		boolean,					#电路箱，0没问题，1有问题
    oscp	boolean,					#示波器，0没问题，1有问题
    gen		boolean,					#函数发生器，0没问题，1有问题
    oth		boolean,					#其他，0没选，1选中
    des		varchar(200),				#描述
    primary key(dat,id),
    foreign key(id) references stu(id)
) engine=InnoDB;
*/
use `lab_sys`;
insert into excp(dat,id,nam,cla,num,delID,delNam,sts,delWay,delTim,pc,wire,box,oscp,gen,oth,des) values('2018-03-20 14:20:00','16000000','STU','C102','1','15000009','王杏婷','处理不成功','导线更换；电路箱不知道什么问题','2018-03-20 14:49:50','0','1','1','0','0','0','');
insert into excp(dat,id,nam,cla,num,delID,delNam,sts,delWay,delTim,pc,wire,box,oscp,gen,oth,des) values('2018-03-27 14:30:05','16000000','STU','C102','1','15000009','王杏婷','处理成功','导线更换','2018-03-20 14:49:50','0','1','0','0','0','0','');
insert into excp(dat,id,nam,cla,num,delID,delNam,sts,delWay,delTim,pc,wire,box,oscp,gen,oth,des) values('2018-03-21 9:30:01','16301004','蔡泽帆','C103','1','10000','MAN','处理成功','线松','2018-03-21 9:37:46','0','0','0','0','1','0','');
insert into excp(dat,id,nam,cla,num,sts,pc,wire,box,oscp,gen,oth,des) values('2018-03-30 15:00:39','16301082','刘竞妍','C104','24','未处理','0','0','0','1','0','0','');
insert into excp(dat,id,nam,cla,num,sts,pc,wire,box,oscp,gen,oth,des) values('2018-03-28 21:52:15','16301056','康生晶','C103','18','未处理','0','0','0','1','0','0','');
select * from bd;
select * from excp order by dat ASC;