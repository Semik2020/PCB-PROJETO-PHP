create database db_pcb
default character set utf8
default collate utf8_general_ci;

use db_pcb;

create table tbl_usuario(
	cd_usuario int primary key auto_increment,
    nm_usuario varchar(20) not null,
    ds_senha varchar(8) not null
)default charset utf8;

insert into tbl_usuario
values(default,'admin','admin');


create table tbl_Consultor(
	cd_Consultor int primary key auto_increment,
    nm_Consultor varchar(80) not null,
    no_Telefone varchar(14) not null,
    ds_Email varchar(80) not null
)default charset utf8;

create table tbl_Contrato(
	cd_Contrato int primary key auto_increment,
    nm_Contato varchar(80) not null,
    no_Telefone varchar(14) not null,
    ds_Email varchar(80) not null,
    
    nm_Logradouro varchar(80) not null,
    no_Logradouro int not null,
    cp_Logradouro varchar(10) not null,
    end_Bairro varchar(25) not null,
    end_CEP varchar(10) not null,
    end_Cidade varchar(25) not null,
    end_Estado varchar(2) not null,
    
    nm_Projeto varchar(35) not null,
    tempo_Execucao varchar(15) not null,
    desc_Projeto varchar(200) not null
)default charset utf8;

select * from tbl_Consultor;

select * from tbl_Contrato;
select * from tbl_usuario;

CREATE USER 'programadorpcb'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
GRANT ALL PRIVILEGES ON db_pcb.* TO 'programadorpcb'@'localhost' WITH GRANT OPTION;


