/*
create table man (
	typ		int not null,				#类型，0管理，1教师，2助理
    id		int not null,				#职工号/学号
    nam		varchar(200) not null,		#名字
    cla		varchar(200),				#课室
    wDay	int,						#上班是周几，1一，2二
    bTim	time,						#开始时间
    eTim	time,						#结束时间
    primary key(typ,id,wDay,bTim,eTim)
) engine=InnoDB;
*/
use `lab_sys`;

insert into man(`typ`,`id`,`nam`) values('0','10000','MAN');

insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('1','100000','man0','C102','1','10:00-11:40');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('1','100001','man1','C103','2','14:20-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('1','100002','man2','C104','3','14:20-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('1','100003','man3','C303','4','10:00-11:40');

insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000000','张水清','C104','1','07:30-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000001','刘佳镕','C104','1','08:00-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000002','陈鑫妍','C104','1','12:00-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000000','张水清','C104','1','12:00-17:30');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000001','刘佳镕','C104','1','12:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000003','方楚丽','C104','1','16:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000004','李创丰','C104','1','17:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000003','方楚丽','C104','1','18:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000005','刘楠','C103','1','17:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000006','张穗安','C103','1','19:00-22:00');

insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000005','刘楠','C103','2','07:30-12:30');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000006','梁贺舟','C103','2','07:30-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000007','黄弘庆','C104','2','07:30-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000008','彭劲','C104','2','08:00-10:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000009','王杏婷','C102','2','08:00-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000006','梁贺舟','C104','2','12:00-15:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000007','黄弘庆','C104','2','12:00-17:30');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000010','薛小涵','C104','2','14:00-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000011','黄棉烽','C104','2','16:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000009','王杏婷','C102','2','12:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000012','郑陶然','C303','2','14:00-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000013','姜淼','C303','2','14:00-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000010','薛小涵','C104','2','18:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000011','黄棉烽','C104','2','18:00-22:00');

insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000014','吴瑞钊','C103','3','07:30-12:30');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000006','梁贺舟','C103','3','07:30-10:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000015','刘寅一','C104','3','10:00-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000012','郑陶然','C303','3','09:30-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000013','姜淼','C303','3','09:30-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000016','李小雨','C103','3','12:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000017','张子雍','C104','3','12:00-14:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000015','刘寅一','C104','3','12:00-17:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000017','张子雍','C104','3','16:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000016','李小雨','C104','3','18:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000010','薛小涵','C104','3','18:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000006','张穗安','C104','3','18:00-22:00');

insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000018','楚翔宇','C104','4','08:00-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000015','刘寅一','C104','4','10:00-13:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000002','陈鑫妍','C104','4','12:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000019','谭舒婷','C104','4','12:00-19:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000017','张子雍','C104','4','12:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000018','楚翔宇','C104','4','12:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000020','张若妍','C104','4','13:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000012','郑陶然','C303','4','14:00-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000013','姜淼','C303','4','14:00-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000021','宋冰冰','C102','4','12:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000022','邹紫婧','C103','4','17:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000003','方楚丽','C103','4','18:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000006','张穗安','C104','4','19:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000021','宋冰冰','C102','4','18:00-22:00');

insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000004','李创丰','C103','5','07:30-12:30');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000008','彭劲','C103','5','08:00-12:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000023','申浩','C102','5','08:20-11:40');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000012','郑陶然','C303','5','07:30-10:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000013','姜淼','C303','5','07:30-10:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000014','吴瑞钊','C104','5','12:00-17:30');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000008','彭劲','C104','5','12:00-16:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000020','张若妍','C104','5','13:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000024','杨晓铃','C104','5','12:00-19:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000019','谭舒婷','C104','5','16:00-19:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000023','申浩','C102','5','14:00-18:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000022','邹紫婧','C104','5','17:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000023','申浩','C102','5','19:00-21:40');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000011','黄棉烽','C303','5','18:00-22:00');
insert into man(`typ`,`id`,`nam`,`cla`,`wDay`,`claTim`) values('2','15000024','杨晓铃','C303','5','19:00-22:00');

select * from man;