use `lab_sys`;
select * from excp order by dat ASC;
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values('2018-03-20 14:20:00','16000000','0','0','1','1','0','0');
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values('2018-03-21 9:30:01','16301004','0','0','0','0','0','1');
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values(now(),'16301082','0','0','0','0','1','0');
insert into excp(dat,id,sts,pc,wire,box,oscp,gen) values(now(),'16301056','0','0','0','0','1','0');