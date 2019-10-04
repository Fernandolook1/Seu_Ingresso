use mrcake;

DBCC CHECKIDENT(fornecedores, RESEED, 0);
delete from fornecedores;
DBCC CHECKIDENT(usuarios, RESEED, 0);
delete from usuarios;
DBCC CHECKIDENT(clientes, RESEED, 0);
delete from clientes;

-- criação dos usuarios de teste

insert into fornecedores(cnpj, razao_social, nome_fantasia, telefone)
values(123123123, 'vender', 'Cake Boss', 1133331111);

insert into usuarios(id_origem, tipo_origem, email, senha, status)
values(1, 3, 'a@f.com', '123', 0);

-- segundo fornecedor para testes

insert into fornecedores(cnpj, razao_social, nome_fantasia, telefone)
values(444123123, 'vender cup cakes', 'Mr Cake Boss', 9933331111);

insert into usuarios(id_origem, tipo_origem, email, senha, status)
values(2, 3, 'boss@f.com', '123', 0);

insert into clientes(cpf, nome, nascimento, telefone, celular)
values(43415135311, 'Maria Brogi', GETDATE(), 1133221144, 1933331199);

insert into usuarios(id_origem, tipo_origem, email, senha, status)
values(2, 2, 'a@c.com', '123', 0);

-- segundo cliente para testes
insert into clientes(cpf, nome, nascimento, telefone, celular)
values(43475135311, 'Batman', GETDATE(), 1133221344, 1933333499);

insert into usuarios(id_origem, tipo_origem, email, senha, status)
values(3, 2, 'batman@c.com', '123', 0);

delete from produtos;
DBCC CHECKIDENT(produtos, RESEED, 0);

insert into produtos(id_fornecedor, nome, descricao, preco)
values(1, 'Bolo de mel', 'delicioso.',  42.50);

insert into produtos(id_fornecedor, nome, descricao, preco)
values(1, 'Bolo de arroz', 'enche a barriga.',  15.50);

insert into produtos(id_fornecedor, nome, descricao, preco)
values(1, 'Bolo de queijo', 'lembra a casa da vó.',  75.50);

insert into produtos(id_fornecedor, nome, descricao, preco)
values(2, 'Bolo de água', 'mata a sede.',  2.59);

insert into produtos(id_fornecedor, nome, descricao, preco)
values(2, 'Bolo de ar', 'não precisa nem comprar. Chega rapidinho.',  0.0);

select * from produtos;



delete from tipo_residencia;
DBCC CHECKIDENT (tipo_residencia, RESEED, 0);

insert into tipo_residencia(tipo)
values('casa');

insert into tipo_residencia(tipo)
values('condominio');

insert into tipo_residencia(tipo)
values('empresa');

delete from enderecos;
DBCC CHECKIDENT(enderecos, RESEED, 0);

insert into enderecos(id_origem, tipo_user, cep, rua, bairro, cidade, uf, numero, complemento, tipo_endereco)
values(1, 2, 12312388, 'Clorovil de figueira', 'barro dágua', 'são paulo', 'sp', 123, 'perto da rua', 1);

insert into enderecos(id_origem, tipo_user, cep, rua, bairro, cidade, uf, numero, complemento, tipo_endereco)
values(2, 2, 45345345, 'Clorovil de andrade', 'copo dágua', 'maria aqui', 'ma', 321, 'é bem bonita', 3);

insert into enderecos(id_origem, tipo_user, cep, rua, bairro, cidade, uf, numero, complemento, tipo_endereco)
values(1, 3, 43534535, 'Clorovil da cunha', 'bolacha dágua', 'maria lá', 'ml', 4002, 'em reforma', 3);

insert into enderecos(id_origem, tipo_user, cep, rua, bairro, cidade, uf, numero, complemento, tipo_endereco)
values(2, 3, 34534532, 'Clorovil de mais', 'biscoito com água', 'maria onde', 'mo', 8922, 'aberto 24h', 2);

select * from enderecos;

delete from pedidos;
DBCC CHECKIDENT(pedidos, RESEED, 0);

insert into pedidos(num_pedido, id_cliente, id_produto, status, cod_endereco_entrega)
values(3, 1, 1, 0, 1);

insert into pedidos(num_pedido, id_cliente, id_produto, status, cod_endereco_entrega, data_entrega)
values(2, 1, 2, 1, 1, '2018-02-02');

insert into pedidos(num_pedido, id_cliente, id_produto, status, cod_endereco_entrega, data_entrega)
values(10, 1, 3, 1, 1, '2018-05-03');

insert into pedidos(num_pedido, id_cliente, id_produto, status, cod_endereco_entrega, data_entrega)
values(1, 2, 4, 1, 2, '2018-09-07');

insert into pedidos(num_pedido, id_cliente, id_produto, status, cod_endereco_entrega, data_entrega)
values(6, 2, 5, 1, 2, '2018-10-02');

insert into pedidos(num_pedido, id_cliente, id_produto, status, cod_endereco_entrega)
values(6, 2, 1, 0, 2);

select * from pedidos;
