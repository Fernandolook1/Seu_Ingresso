drop database mrcake;
CREATE DATABASE MRCAKE;
USE MRCAKE;

CREATE TABLE Administadores(
	Codigo int not null ,
	Nome varchar(30) not null);

CREATE TABLE Tipo_User(
	Codigo int not null ,
	Descricao varchar(20) not null);

CREATE TABLE Usuarios(
	Codigo int not null ,
	ID_Origem int not null,
	Tipo_Origem int not null,
	Email varchar(255) not null,
	Senha varchar(255) not null,
	Nivel_Acesso smallint not null);

CREATE TABLE Clientes(
	ID_CLiente int not null ,
	Email varchar(255) not null unique,
	Senha varchar(70) not null,
	CPF char(11) not null unique,
	Nome_Compl varchar(30) not null,
	Data_Nasc date not null,
	Telefone char(14) null,
	Celular char(14) not null);

CREATE TABLE Fornecedores(
	ID_Fornecedor int not null ,
	Email varchar(255) not null unique,
	Senha varchar(255) not null,
	CNPJ char(14)  not null unique,
	Razao_Social varchar(60) not null,
	Nome_Fantasia varchar(50) not null,
	Telefone varchar(15) not null);

CREATE TABLE Enderecos(
	Codigo int not null ,
	ID_Origem int not null,
	Tipo_User int not null,
	CEP char(4) not null,
	Rua varchar(50) not null,
	Bairro varchar(30) not null,
	Cidade varchar(30) not null,
	UF char(2) not null,
	Numero char(4) not null,
	Complemento varchar(55) null,
	Tipo_Endereco int not null);

CREATE TABLE Tipo_Residencia(
	Codigo int not null ,
	Tipo varchar(20) not null);

CREATE TABLE Pedidos(
	Codigo int not null ,
	Num_Pedido int not null,
	ID_CLiente int not null,
	ID_Produto int not null,
	Status int not null,
	Cod_Endereco_Entrega int not null);

CREATE TABLE Produtos(
	ID_Produto int not null ,
	ID_Fornecedor int not null,
	Nome varchar(50) not null,
	Descricao varchar(255) not null,
	Preco decimal(5,2) not null);

CREATE TABLE Ingredientes(
	Codigo int not null ,
	ID_Produto int not null,
	Descricao varchar(20) not null);

ALTER TABLE Administadores
ADD CONSTRAINT PK_Codigo
PRIMARY KEY (Codigo);

ALTER TABLE Tipo_User
ADD CONSTRAINT PK_T_User_Codigo
PRIMARY KEY (Codigo);

ALTER TABLE Usuarios
ADD CONSTRAINT PK_Usuario
PRIMARY KEY (Codigo);

ALTER TABLE Clientes
ADD CONSTRAINT PK_Cliente
PRIMARY KEY (ID_CLiente);

ALTER TABLE Fornecedores
ADD CONSTRAINT PK_Fornecedor
PRIMARY KEY (ID_Fornecedor);

ALTER TABLE Enderecos
ADD CONSTRAINT PK_Endereço
PRIMARY KEY (Codigo);

ALTER TABLE Pedidos
ADD CONSTRAINT PK_Pedido
PRIMARY KEY (Codigo);

ALTER TABLE Tipo_Residencia
ADD CONSTRAINT PK_Tipo_Residencia
PRIMARY KEY (Codigo);

ALTER TABLE Produtos
ADD CONSTRAINT PK_Produto
PRIMARY KEY (ID_Produto);

ALTER TABLE Ingredientes
ADD CONSTRAINT PK_Ingrediente
PRIMARY KEY (Codigo);

ALTER TABLE Usuarios
ADD CONSTRAINT FK_Adm_User
FOREIGN KEY (ID_Origem)
REFERENCES Administadores(Codigo);

ALTER TABLE Usuarios
ADD CONSTRAINT FK_Adm_T_User
FOREIGN KEY (Codigo)
REFERENCES Tipo_User(Codigo);

ALTER TABLE Enderecos
ADD CONSTRAINT FK_adm_Origem_End
FOREIGN KEY (Codigo)
REFERENCES Administadores(Codigo);

ALTER TABLE Enderecos
ADD CONSTRAINT FK_T_User_End
FOREIGN KEY (Codigo)
REFERENCES Tipo_User(Codigo);

ALTER TABLE Enderecos
ADD CONSTRAINT FK_End_Residencia
FOREIGN KEY (Tipo_Endereco)
REFERENCES Tipo_Residencia(Codigo);

ALTER TABLE Pedidos
ADD CONSTRAINT FK_Pedido_Cliente
FOREIGN KEY (ID_CLiente)
REFERENCES Clientes(ID_CLiente);

ALTER TABLE Pedidos
ADD CONSTRAINT FK_Cliente_Produto
FOREIGN KEY (ID_Produto)
REFERENCES Produtos(ID_Produto);

ALTER TABLE Pedidos
ADD CONSTRAINT FK_Pedido_End_Entrega
FOREIGN KEY	(Cod_Endereco_Entrega)
REFERENCES Enderecos(Codigo);

ALTER TABLE Produtos
ADD CONSTRAINT FK_Prod_Fornecedor
FOREIGN KEY (ID_Fornecedor)
REFERENCES Fornecedores(ID_Fornecedor);

ALTER TABLE Ingredientes
ADD CONSTRAINT FK_Ingre_Produto
FOREIGN KEY (ID_Produto)
REFERENCES Produtos(ID_Produto);