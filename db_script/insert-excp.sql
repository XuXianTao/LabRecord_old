/*
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
*/
use `lab_sys`;
select * from excp order by dat ASC;
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values('2018-03-20 14:20:00','16000000','0','0','1','1','0','0');
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values('2018-03-21 9:30:01','16301004','0','0','0','0','0','1');
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values(now(),'16301082','0','0','0','0','1','0');
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values(now(),'16301056','0','0','0','0','1','0');