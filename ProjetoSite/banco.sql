CREATE DATABASE dbcadastro;

use dbcadastro;

CREATE TABLE usuario(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar (100),
    email varchar (11),
    celular varchar (11),
    cpf varchar (11),
    rg varchar (9),
    cep varchar (8)
);