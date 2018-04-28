/*
create table dev (
    sn            varchar(80) not null primary key,  # 序列号
    cla           varchar(80) not null,              # 所在课室
    num           varchar(80) not null,              # 当前所在桌号
    typ           varchar(80) not null,              # 类型
    cnt           int default 0                      # 故障数
) engine=InnoDB;
*/

insert into dev(sn,cla,num,typ) value('00000000','C102','01','box');
insert into dev(sn,cla,num,typ) value('00000001','C102','01','gen');
insert into dev(sn,cla,num,typ) value('00000000','C104','24','oscp');
insert into dev(sn,cla,num,typ) value('00000001','C103','18','oscp ');