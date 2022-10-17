DROP DATABASE stock;

CREATE DATABASE stock;

USE stock;

create table admin(
id int auto_increment primary key,
rut varchar(20),
tel varchar(20),
correo varchar(30),
username varchar(20),
password varchar(20),
nombres varchar(20),
apellidos varchar(20),
direccion varchar(30));

INSERT INTO admin (rut,tel,correo,username,password,nombres,apellidos,direccion) values ("20971741-7","77974483","franko20155@gmail.com","admin","admin","Franco Alberto","Millanes Araya","Romeral");

create table oficina(
id int auto_increment primary key,
rut varchar(20),
nombres varchar(20),
apellidos varchar(20),
telefono varchar(10),
correo varchar(30),
direccionOficinista varchar(30),
direccionOficina varchar(30));

INSERT INTO oficina (rut,nombres,apellidos,correo,telefono,direccionOficinista,direccionOficina)VALUES ('20.971.741-7','FRANCO ALBERTO','MILLANES ARAYA','FRANKO20155@GMAIL.COM',"977974483",'AVENIDA CHILE 1446','ROMERAL');

CREATE TABLE material(
id int auto_increment primary key,
nombreMaterial varchar(20),
unidades int);

INSERT INTO material (nombreMaterial,unidades) values ("CONETORES FTTH",50);

CREATE TABLE materialEntrega(
id int primary key auto_increment,
material_id int,
admin_entrega_id int,
oficina_recibe_id int,
foreign key (material_id) references material(id),
foreign key (admin_entrega_id) references admin(id),
foreign key (oficina_recibe_id) references oficina(id));


SELECT materialentrega.id AS "Entregas",oficina.direccionOficina AS "Pueblo",admin.nombres AS "Encargado",
material.nombreMaterial AS "Material",material.unidades from materialentrega join oficina on materialentrega.oficina_recibe_id = oficina.id
join admin on materialentrega.admin_entrega_id=admin.id
join material on materialentrega.material_id = material.id order by materialentrega.id ASC;