/*
create table stu (
    id		int not null primary key,	#学号
    nam 	varchar(200) not null,		#名字
    wDay	int,						#上课是周几，1一，2二...
    bTim	time,						#上课时间
    eTim	time,						#下课时间
    teaId	int not null				#上课教师
) engine=InnoDB;
*/
use `lab_sys`;

insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16000000','STU','1','3-4节(10:00-11:40)','100000');

insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301004','蔡泽帆','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301005','曹杰全','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301009','陈炳旭','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301014','陈天怡','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301017','陈志豪','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301019','邓常晖','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301020','邓闻达','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301023','丁正卿','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301027','方宇蔚','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301029','冯秋霞','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301035','郭宜阁','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301038','何洛','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301043','何远聪','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301047','黄嘉麟','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301048','黄镁铃','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301051','黃騫禾','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301053','惠霄菲','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301056','康生晶','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301057','柯圣学','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301058','孔晨光','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301063','李慧怡','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301071','李玉军','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301076','林睿希','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301079','林智强','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301080','刘宏虎','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301081','刘嘉文','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301083','刘炯利','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301086','刘璐','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301087','刘奇','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301089','刘星晨','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301090','刘依萍','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301093','卢可欣','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301095','罗红雨','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301096','罗翊','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301102','麦朝旭','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301107','彭升','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301108','彭书吟','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301109','齐蒙','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301115','沈敏慧','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301116','史宛琪','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301118','孙晨博','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301120','孙鑫源','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301121','谭添文','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301122','谭文','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301123','唐鲲鹏','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301127','王彬','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301141','吴震乾','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301142','吴作杰','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301145','肖剑涛','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301147','谢明振','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301148','谢逸隆','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301149','谢钰霖','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301150','谢展鹏','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301151','谢沚昂','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301168','袁玥','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16326110','张靖楠','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301178','张梓哲','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301179','张宗英','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301181','赵逸凡','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301187','周毅','2','5-6节(14:20-16:00)','100001');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301193','邹典廷','2','5-6节(14:20-16:00)','100001');

insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301003','蔡林珂','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301008','常嘉倪','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301010','陈富斌','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301011','陈佳雄','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301012','陈思帆','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301021','邓云洁','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301025','范俊呈','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301026','范贤婷','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301030','高恒','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301033','桂文涛','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301039','何舒然','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301044','何镇航','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301045','胡文仪','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301046','胡雨欣','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301049','黄思聪','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301052','惠蒙飞','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301055','蒋素秋','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301060','黎浩然','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301062','李兵','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301065','李秋鹏','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301069','李怡贤','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301072','李志峰','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301073','利文杰','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301082','刘竞妍','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301085','刘靓琳','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301097','吕楚滢','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301099','马骏驰','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301104','欧炽毅','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301117','苏沛锋','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301124','陶文杰','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301129','王进卿','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301131','王胜','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301132','王天羿','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301133','王亚文','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301135','韦慧叶','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301136','魏聪','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301139','吴鸿鑫','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301140','吴宇恒','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301144','武金艺','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301154','徐玉淳','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301156','薛香','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301159','杨欣茹','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301160','杨映荷','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301161','杨宇恒','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301163','杨泽淳','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301165','叶浚宏','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301166','尹静瑶','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301167','尹柳','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301169','张安宇','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301170','张家诚','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301171','张劲峰','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301173','张可欣','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301175','张太霖','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301182','郑鸿雪阳','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301184','钟桂豪','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301185','周梦楠','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301186','周贤霖','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301188','朱浩林','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301191','朱雅洁','3','5-6节(14:20-16:00)','100002');
insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16301192','朱泳澜','3','5-6节(14:20-16:00)','100002');

insert into stu(`id`,`nam`,`wDay`,`claTim`,`teaId`) values('16000001','STU','4','3-4节(10:00-11:40)','100003');

select * from stu order by id,teaId ASC;