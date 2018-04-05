/*
create table qnr (
	id		int not null primary key,	#问卷id
    teaId	int not null,				#老师id
    wDay	int,						#问卷发放到的班级的对应上课日，1一，2二
    bTim	time,						#问卷发放到的班级的上课时间
    eTim	time,						#问卷发放到的班级的下课时间
    tit		varchar(200) default null,		#问卷标题
    q1		varchar(200) default null,		#问题1
    a1_q1	varchar(200) default null,		#问题1第一选项
    a2_q1	varchar(200) default null,		#问题1第二选项
    a3_q1	varchar(200) default null,		#问题1第三选项
    a4_q1	varchar(200) default null,		#问题1第四选项
    a5_q1	varchar(200) default null,		#问题1第五选项
    q2		varchar(200) default null,		#问题2
    a1_q2	varchar(200) default null,		#问题2第一选项
    a2_q2	varchar(200) default null,		#问题2第二选项
    a3_q2	varchar(200) default null,		#问题2第三选项
    a4_q2	varchar(200) default null,		#问题2第四选项
    a5_q2	varchar(200) default null,		#问题2第五选项
    q3		varchar(200) default null,		#问题3
    a1_q3	varchar(200) default null,		#问题3第一选项
    a2_q3	varchar(200) default null,		#问题3第二选项
    a3_q3	varchar(200) default null,		#问题3第三选项
    a4_q3	varchar(200) default null,		#问题3第四选项
    a5_q3	varchar(200) default null,		#问题3第五选项
    q4		varchar(200) default null,		#问题4
    a1_q4	varchar(200) default null,		#问题4第一选项
    a2_q4	varchar(200) default null,		#问题4第二选项
    a3_q4	varchar(200) default null,		#问题4第三选项
    a4_q4	varchar(200) default null,		#问题4第四选项
    a5_q4	varchar(200) default null,		#问题4第五选项
    q5		varchar(200) default null,		#问题5
    a1_q5	varchar(200) default null,		#问题5第一选项
    a2_q5	varchar(200) default null,		#问题5第二选型
    a3_q5	varchar(200) default null,		#问题5第三选项
    a4_q5	varchar(200) default null,		#问题5第四选项
    a5_q5	varchar(200) default null,		#问题5第五选项
    q6		varchar(200) default null,		#问题6
    a1_q6	varchar(200) default null,		#问题6第一选项
    a2_q6	varchar(200) default null,		#问题6第二选型
    a3_q6	varchar(200) default null,		#问题6第三选项
    a4_q6	varchar(200) default null,		#问题6第四选项
    a5_q6	varchar(200) default null,		#问题6第五选项
    q7		varchar(200) default null,		#问题7
    a1_q7	varchar(200) default null,		#问题7第一选项
    a2_q7	varchar(200) default null,		#问题7第二选型
    a3_q7	varchar(200) default null,		#问题7第三选项
    a4_q7	varchar(200) default null,		#问题7第四选项
    a5_q7	varchar(200) default null,		#问题7第五选项
    q8		varchar(200) default null,		#问题8
    a1_q8	varchar(200) default null,		#问题8第一选项
    a2_q8	varchar(200) default null,		#问题8第二选型
    a3_q8	varchar(200) default null,		#问题8第三选项
    a4_q8	varchar(200) default null,		#问题8第四选项
    a5_q8	varchar(200) default null,		#问题8第五选项
    q9		varchar(200) default null,		#问题9
    a1_q9	varchar(200) default null,		#问题9第一选项
    a2_q9	varchar(200) default null,		#问题9第二选型
    a3_q9	varchar(200) default null,		#问题9第三选项
    a4_q9	varchar(200) default null,		#问题9第四选项
    a5_q9	varchar(200) default null,		#问题9第五选项
    q10		varchar(200) default null,		#问题10
    a1_q10	varchar(200) default null,		#问题10第一选项
    a2_q10	varchar(200) default null,		#问题10第二选型
    a3_q10	varchar(200) default null,		#问题10第三选项
    a4_q10	varchar(200) default null,		#问题10第四选项
    a5_q10	varchar(200) default null		#问题10第五选项
) engine=InnoDB;
*/
use `lab_sys`;
insert into qnr(id,teaId,wDay,bTim,eTim,tit,q1,a1_q1,a2_q1) values('1','100000','2','14:20','16:00','测试问卷功能','问卷功能是否正常','是','否');
insert into qnr(id,teaId,wDay,bTim,eTim,tit,q1,a1_q1,a2_q1,a3_q1) values('2','100001','2','14:20','16:00',' ','不填title应该是不可以的','不填至少一个问题也是不可以的','所以主动自觉地改一下','谢谢合作');
select * from qnr;