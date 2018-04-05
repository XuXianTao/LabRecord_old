/*
create table fb (
	dat		datetime,					#时间
    id		int not null,				#学号
    nam     varchar(200) not null,      #姓名
    teaNam	varchar(200) not null,		#上课教师
    wDay	int,						#上课是周几，1一，2二...
    bTim	time,						#上课时间
    eTim	time,						#下课时间
    kno		int not null				#知识点掌握程度，由完全掌握到完全不掌握1-5
) engine=InnoDB;
*/
use `lab_sys`;
insert into fb(dat,id,nam,teaNam,wDay,bTim,eTim,kno) values(now(),'16301027','方宇蔚','TEA1','2','14:20','16:00','2');
insert into fb(dat,id,nam,teaNam,wDay,bTim,eTim,kno) values('2018-03-24 9:20','16301023','丁正卿','TEA1','2','14:20','16:00','4');
select * from fb;