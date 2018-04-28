/*
create table dev (
    sn            varchar(80) not null primary key,  # 序列号
    cla           varchar(80) not null,              # 所在课室
    num           varchar(80) not null,              # 当前所在桌号
    typ           varchar(80) not null,              # 类型
    cnt           int default 0                      # 故障数
) engine=InnoDB;
*/

insert into dev(sn,cla,num,typ) value('00000000','C102','01','pc');
insert into dev(sn,cla,num,typ) value('00000001','C102','01','wire');
insert into dev(sn,cla,num,typ) value('00000002','C102','01','box');
insert into dev(sn,cla,num,typ) value('00000003','C102','01','oscp');
insert into dev(sn,cla,num,typ) value('00000004','C102','01','gen');
insert into dev(sn,cla,num,typ) value('00000005','C102','01','oth');

insert into dev(sn,cla,num,typ) value('00000006','C103','01','pc');
insert into dev(sn,cla,num,typ) value('00000007','C103','01','wire');
insert into dev(sn,cla,num,typ) value('00000008','C103','01','box');
insert into dev(sn,cla,num,typ) value('00000009','C103','01','oscp');
insert into dev(sn,cla,num,typ) value('00000010','C103','01','gen');
insert into dev(sn,cla,num,typ) value('00000011','C103','01','oth');

insert into dev(sn,cla,num,typ) value('00000012','C104','24','pc');
insert into dev(sn,cla,num,typ) value('00000013','C104','24','wire');
insert into dev(sn,cla,num,typ) value('00000014','C104','24','box');
insert into dev(sn,cla,num,typ) value('00000015','C104','24','oscp');
insert into dev(sn,cla,num,typ) value('00000016','C104','24','gen');
insert into dev(sn,cla,num,typ) value('00000017','C104','24','oth');

insert into dev(sn,cla,num,typ) value('00000018','C103','18','pc');
insert into dev(sn,cla,num,typ) value('00000019','C103','18','wire');
insert into dev(sn,cla,num,typ) value('00000020','C103','18','box');
insert into dev(sn,cla,num,typ) value('00000021','C103','18','oscp');
insert into dev(sn,cla,num,typ) value('00000022','C103','18','gen');
insert into dev(sn,cla,num,typ) value('00000023','C103','18','oth');