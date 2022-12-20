
mysql -u root

show databases;

create database projeto4;

use projeto4;

create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(40) not null,
    email varchar(40) not null,
    telefone varchar(14) not null,
    dtcadastro date
);

insert into cliente values(null, 'teste nome', 'testeemail@gmail.com', '1111-2222', '16-2-2');

select * from cliente;