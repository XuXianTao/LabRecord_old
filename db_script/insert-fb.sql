/*
create table fb (
	dat		datetime,					#时间
    id		int not null,				#学号
    kno		int not null				#知识点掌握程度，由完全掌握到完全不掌握1-5
);
*/
use `lab_sys`;
select * from fb;
insert into fb(dat,id,kno) values(now(),'16301027','2');
insert into fb(dat,id,kno) values(now(),'16301023','4');