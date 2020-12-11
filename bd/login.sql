create database logycrudd;
	use logycrudd;

	create table t_usuarios (id_usuario int auto_increment,
					nombre varchar(255),
					a_materno varchar(255),
					email varchar(255),
					usuario varchar(255),
					password varchar(255),
					primary key(id_usuario)
					);



	create database logycrudd;
	use logycrudd;

	create table t_gastos (id_usuario int auto_increment,
					concepto varchar(255),
					cantidad varchar(255),
					fecha varchar(255),
					primary key(id_usuario)
					);