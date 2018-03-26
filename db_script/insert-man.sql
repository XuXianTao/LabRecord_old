/*
create table man (
    id		int not null primary key,	#职工号
    nam 	varchar(200) not null		#名字
);
*/
use `lab_sys`;
select * from man;
insert into man(`id`,`nam`) values('10000','MAN');