create database apedois;
use apedois;
create table tbusuario(
Nome varchar (40) not null,
RM int (7) not null unique,
Curso varchar (32) not null,
Sexo varchar(10) not null,
Periodo varchar(20) not null,
Email varchar(35) not null,
perguntasecreta varchar(40) not null,
respostasecreta varchar(40) not null,
senha varchar(300) not null,
idUsuario int not null auto_increment primary key
);

create table objeto(
Id_objeto int not null auto_increment primary key, 
Nome varchar(40) not null,
Descricao varchar(400) not null,
Categoria varchar(40) not null,
Data_registro date not null,
Hoario_registro time not null,
Situacao varchar (40) not null,
arquivo varchar(40) not null,
Id_responsavel int not null,
foreign key(Id_responsavel) references tbusuario(RM)
);




create table tbsolicitacao(
idsolicitacao int not null auto_increment primary key,
datasolicitacao date not null,
horasolicitacao time not null,
tipo varchar(32) not null,
descricao varchar (300) not null,
nomeobjeto varchar(300),
codusuariosolicitacao int not null,
foreign key(codusuariosolicitacao) references tbusuario(RM)
);

create table tbretirada(
idretirada int not null auto_increment primary key,
dataretirada date not null,
horario time not null,
codretiradasolicitacao int not null,
foreign key(codretiradasolicitacao) references tbsolicitacao(idsolicitacao)
);



