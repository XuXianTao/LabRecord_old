/*
create table tea (
	cla 	varchar(200) not null,		#课室
    id		int not null,				#职工号
    nam 	varchar(200) not null,		#名字
    wDay	int,						#上课是周几，1一，2二...
    bTim	time,						#上课时间
    eTim	time,						#下课时间
    primary key(id,wDay,bTim,eTim)
);
*/
use `lab_sys`;
select * from tea;
insert into tea(`cla`,`id`,`nam`,`wDay`,`bTim`,`eTim`) values('C102','100000','TEA','1','10:00','11:40');
insert into tea(`cla`,`id`,`nam`,`wDay`,`bTim`,`eTim`) values('C103','100001','TEA','2','14:20','16:00');
insert into tea(`cla`,`id`,`nam`,`wDay`,`bTim`,`eTim`) values('C104','100002','TEA','3','14:20','16:00');
insert into tea(`cla`,`id`,`nam`,`wDay`,`bTim`,`eTim`) values('C303','100003','TEA','4','10:00','11:40');