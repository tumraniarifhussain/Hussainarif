
use ShoppingDB;
Create table tblProduct
(
PID int Primary key,
FullName varchar(50),
UPrice int
);
Insert into tblProduct values ('100','T-Shirt','1000');
Insert into tblProduct values ('101','Sandel','1500');
Insert into tblProduct values ('102','Teddy Bear','1200');
Insert into tblProduct values ('103','Gift Box','1100');
Insert into tblProduct values ('104','Books','800');
Insert into tblProduct values ('105','Perfume','900');
Insert into tblProduct values ('106','Sofas','1050');
Insert into tblProduct values ('107','Machines','950');
Insert into tblProduct values ('108','Candies','850');
Insert into tblProduct values ('109','T-Shirt','1000');
Insert into tblProduct values ('110','Sandel','1500');
Insert into tblProduct values ('111','Teddy Bear','1200');
Insert into tblProduct values ('112','Gift Box','1100');
Insert into tblProduct values ('113','Books','800');
Insert into tblProduct values ('114','Perfume','900');
Insert into tblProduct values ('115','Sofas','1050');
Insert into tblProduct values ('116','Machines','950');
Insert into tblProduct values ('117','Candies','850');
Select * from tblProduct;

create table tblCart
(
CID int auto_increment primary key,
PID int,
UPrice int,
IPAdres varchar(20)
);

