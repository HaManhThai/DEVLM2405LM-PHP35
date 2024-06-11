-- lab2: tao csdl, tao bang va nhap du lieu cho bang

create database if not exists demoMySQL;
use demoMySQL;

-- b2: tao bang
create table if not exists tbl_user(
	user_id int(11) not null ,
    user_name varchar(64) not null,
    pass_word varchar(128) not null,
    email varchar(100) not null,
    fullname nvarchar(32) default null,
    avatar varchar(128) default null,
    statuss tinyint(1) default "1"
	
)engine = innoDB default charset = utf8;

create table if not exists tbl_province(
	pro_id int(11) not null ,
    pro_name varchar(64) not null,
    statuss tinyint(1) default "1",
	primary key(pro_id)
)engine = innoDB default charset = utf8;

-- b3: 
-- sua bang "tbl_id" them khoa chinh va tu tang

alter table tbl_user
	add primary key(user_id);
    
alter table tbl_user
	modify user_id int(10) not null auto_increment;
    
alter table tbl_user
	add pro_id int(10) not null after fullname;   
    

-- sua bang "tbl_province"

alter table tbl_province
	add primary key(pro_id);

alter table tbl_province
	modify pro_id int(10) not null auto_increment;
    
-- b4: nhap du lieu
insert into tbl_user values(1,"admin", "123456", "admin@gmail.com", "Nguyễn Quang Anh",1,null, 1);
insert into tbl_user values(2,"cuongnd", "123456", "cuongnd@gmail.com", "Nguyễn Đình Cương",2,null, 1);
insert into tbl_user values(3,"vietpv", "123456", "vietpv@gmail.com", "Phùng Văn Việt",3,null, 1);
insert into tbl_user values(4,"tunq", "123456", "tunq@gmail.com", "Nguyễn Quý Tú",4,null, 1);
insert into tbl_user values(5,"vinhpt", "123456", "vinhpt@gmail.com", "Phan Thanh Minh",5,null, 1);
insert into tbl_user values(6,"hoangvv", "123456", "hoangvv@gmail.com", "Võ Văn Hoàng",6,null, 1);
insert into tbl_user values(7,"ducdd", "123456", "ducdd@gmail.com", "Đỗ Đăng Đức",7,null, 1);
insert into tbl_user values(8,"hoangkt", "123456", "hoangkt@gmail.com", "Khuất Thành Hoàng",8,null, 1);
insert into tbl_user values(9,"cuongvx", "123456", "cuongvx@gmail.com", "Vũ Xuân Cường",9,null, 1);
insert into tbl_user values(10,"tuannq", "123456", "tuannq@gmail.com", "Nguyễn Quang Tuấn",10,null, 1);
insert into tbl_user values(11,"tungnm", "123456", "tungnm@gmail.com", "Nguyễn Mạnh Cường",11,null, 1);
insert into tbl_user values(12,"haivq", "123456", "haivq@gmail.com", "Vũ Quang Hải",12,null, 1);
insert into tbl_user values(13,"hungtx", "123456", "hungtx@gmail.com", "Trần Xuân Hải",13,null, 1);
insert into tbl_user values(14,"haicx", "123456", "haicx@gmail.com", "Chu Xuân Hải",14,null, 1);
insert into tbl_user values(15,"khuongnq", "123456", "khuongnq@gmail.com", "Nguyễn Quang Khương",15,null, 1);

select * from tbl_user;

insert into tbl_province values(1,"Hà Nội",1);
insert into tbl_province values(2,"Hải Phòng",1);
insert into tbl_province values(3,"Lạng Sơn",1);
insert into tbl_province values(4,"Tuyên Quang",1);
insert into tbl_province values(5,"Phú Thọ",1);
insert into tbl_province values(6,"Bắc Ninh",1);
insert into tbl_province values(7,"Hải Dương",1);
insert into tbl_province values(8,"Hưng Yên",1);
insert into tbl_province values(9,"Hà Nam",1);
insert into tbl_province values(10,"Ninh Bình",1);
insert into tbl_province values(11,"Thanh Hoá",1);
insert into tbl_province values(12,"Nghệ An",1);


    