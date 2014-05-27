create database proyecto_adminbd;
use proyecto_adminbd;

create table forma_pago 
(
id_fpago int not null primary key (id_fpago),
desc_fpago varchar(20)
)

create table juego
(
id_juego int not null primary key (id_juego),
desc_juego varchar(20)
)

create table ciudad
(
id_ciudad int not null primary key (id_ciudad),
desc_ciudad varchar(20)
)

create table usuario 
(
id_usuario int not null primary key (id_usuario),
nom_usuario varchar(25),
apell_usuario varchar(25),
correo varchar(15),
alias varchar(10)
)

create table sede
(
id_sede int not null primary key (id_sede),
nom_sede varchar(20),
id_ciudad int foreign key (id_ciudad) references ciudad(id_ciudad)
)

create table equipo
(
id_equipo int not null primary key (id_equipo),
nom_equipo varchar(20),
num_victorias int,
num_derrotas int,
id_usuario int foreign key (id_usuario) references usuario(id_usuario) --Capitán del equipo
)

create table pertenece
(
id_equipo int foreign key (id_equipo) references equipo(id_equipo),
id_usuario int foreign key (id_usuario) references usuario(id_usuario)
primary key(id_equipo, id_usuario)
)

create table torneo
(
id_torneo int not null primary key (id_torneo),
nom_torneo varchar(20),
fecha_inicio date,
modo char(1),
max_participantes int,
id_usuario int foreign key (id_usuario) references usuario(id_usuario),
id_juego int foreign key (id_juego) references juego(id_juego),
costo money
)

create table participan_e
(
id_equipo int foreign key (id_equipo) references equipo(id_equipo),
id_torneo int foreign key (id_torneo) references torneo(id_torneo),
pago money,
primary key (id_equipo)
)

create table on_line
(
id_torneo int foreign key (id_torneo) references torneo (id_torneo),
nom_online varchar(20),
primary key (id_torneo)
)

create table presencial
(
id_torneo int foreign key (id_torneo) references torneo (id_torneo),
nom_presencial varchar(20),
id_sede int foreign key (id_sede) references sede(id_sede),
primary key (id_torneo)
)							  

create table cuenta_con
(
id_fpago int foreign key (id_fpago) references forma_pago(id_fpago),
id_torneo int foreign key (id_torneo) references torneo(id_torneo)
primary key (id_fpago,id_torneo)
)


insert into forma_pago (id_fpago, desc_fpago) values (1,'Deposito')
insert into forma_pago (id_fpago, desc_fpago) values (2,'PayPal')
insert into forma_pago (id_fpago, desc_fpago) values (3,'Efectivo')

insert into juego (id_juego, desc_juego) values (1,'Pump it up'), (2,'Gears of war'), (3, 'Halo')

insert into ciudad(id_ciudad, desc_ciudad) values (1,'DF'), (2,'Celaya'), (3,'Venezuela')

insert into usuario (id_usuario, nom_usuario,apell_usuario,correo,alias) values (1,'Beto','Flowers','dep@hotmail.com','Flor'),
																				(2,'Nelther','Galaz','oz4@hotmail.com','Oz44'),
																				(3,'Farid','Hernandez','her@hotmail.com','Farid69'),
																				(4,'Mich','Jimenez','dep@hotmail.com','Flor'),
																				(5,'Diana','García','oz4@hotmail.com','Oz44'),
																				(6,'Alicia','Franco','her@hotmail.com','Farid69'),
																				(7,'Juan','Arteaga','dep@hotmail.com','Flor'),
																				(8,'Red','Blue','oz4@hotmail.com','Oz44'),
																				(9,'Elma','Alba','her@hotmail.com','Farid69')

insert into sede (id_sede, nom_sede, id_ciudad) values (1,'Tres Guerras',2), 
													   (2, 'ITC campus2',2), 
													   (3, 'Outworld',1)

insert into equipo(id_equipo, nom_equipo, num_victorias,num_derrotas,id_usuario) values (1,'Los nalgones',0,0,2),
																						(2,'Los prostipirugolfos',3,7,8),
																						(3,'Santa Anna',9,2,5)

insert into pertenece values (1, 1), (1, 2), (1, 3),
							 (2, 4), (2, 5), (2, 6),
							 (3, 7), (3, 8), (3, 9)

insert into torneo values (1,'Primer_torneo','2014-05-24','1', 2, 1, 1, 500),
						  (2,'2do_torneo','2014-05-24','2', 5, 7, 2, 5000),
						  (3,'Torneo_3','2014-05-24','1', 1, 9, 3, 1000),
						  (4,'Torneo_4','2014-05-20','1', 0, 2, 1, 1500),
						  (5, 'T_5','2013-06-12','0',2, 3,1,600)


insert into participan_e  values (1, 2, 500),
								 (2, 3, 100),
								 (3, 1, 200)
insert into on_line values (1, 'Papaya'),
						   (2, 'Cara'),
						   (3, 'M')

insert into presencial values (1,'ITC', 1),
							  (2,'Tobi', 2),
							  (3,'Rasputin', 2)

insert into cuenta_con values (1, 2)

select * from forma_pago
select * from juego
select * from ciudad
select * from usuario
select * from sede
select * from equipo
select * from pertenece
select * from torneo
select * from participan_e
select * from on_line
select * from presencial
select * from cuenta_con

--Consulta que me den los torneos más próximos :O
select fecha_inicio from torneo --order by fecha_inicio
select fecha_inicio from torneo order by fecha_inicio