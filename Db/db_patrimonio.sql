CREATE TABLE pessoa(
	id_pessoa SERIAL NOT NULL,
	cpf CHAR(11) NOT NULL,
	nome VARCHAR,
	CONSTRAINT pk_pessoa PRIMARY KEY(id_pessoa)
);

SELECT * FROM pessoa;

CREATE TABLE grupo_bem(
	id_grupoitem SERIAL NOT NULL,
	cd_grupoitem VARCHAR NOT NULL,
	nm_grupoitem VARCHAR NOT NULL,
	ds_grupoitem VARCHAR NOT NULL,
	CONSTRAINT pk_grupo_item PRIMARY KEY(id_grupoitem)
);

drop

INSERT INTO grupo_bem (cd_grupoitem, nm_grupoitem, ds_grupoitem) VALUES
('GRP001', 'Grupo de Itens A', 'Descrição do Grupo de Itens A'),
('GRP002', 'Grupo de Itens B', 'Descrição do Grupo de Itens B'),
('GRP003', 'Grupo de Itens C', 'Descrição do Grupo de Itens C');

SELECT * FROM grupo_bem;

CREATE TABLE item(
	id_item SERIAL NOT NULL,
	cd_item VARCHAR NOT NULL,
	nm_item VARCHAR NOT NULL,
	vl_unidademedida VARCHAR,
	id_grupoitem int NOT NULL,
	CONSTRAINT pk_item PRIMARY KEY(id_item),
	CONSTRAINT fk_grupo_item FOREIGN KEY(id_grupoitem)
	REFERENCES grupo_bem(id_grupoitem)
);

INSERT INTO item (cd_item, nm_item, vl_unidademedida, id_grupoitem) VALUES
('ITEM001', 'Item A', 'unidade', 1), 
('ITEM002', 'Item B', 'unidade', 1),  
('ITEM003', 'Item C', 'pacote', 2);   

SELECT * FROM item;

SELECT grupo_bem.nm_grupoitem AS GRUPO_ITEM, item.nm_item AS NOME_ITEM 
	FROM item
	INNER JOIN grupo_bem
	ON item.id_grupoitem = grupo_bem.id_grupoitem;

CREATE TABLE setor(
	id_setor SERIAL NOT NULL,
	cd_setor VARCHAR NOT NULL,
	nm_setor VARCHAR NOT NULL,
	ds_endereco VARCHAR,
	id_pessoa INT NOT NULL,

	CONSTRAINT pk_setor PRIMARY KEY(id_setor),
	
	CONSTRAINT fk_pessoa FOREIGN KEY(id_pessoa)
	REFERENCES pessoa(id_pessoa)
);

SELECT * FROM setor;

CREATE TABLE tipo_entrada(
	id_tipoentrada SERIAL NOT NULL,
	nm_entrada VARCHAR NOT NULL,
	CONSTRAINT pk_tipo_entrada PRIMARY KEY(id_tipoentrada)
);

SELECT * FROM tipo_entrada;

CREATE TABLE patrimonio(
	id_patrimonio SERIAL NOT NULL,
	nm_plaqueta VARCHAR NOT NULL,
	dt_aquisicao DATE NOT NULL,
	vl_preco FLOAT,
	ds_observacao TEXT,
	fl_situacao BOOLEAN NOT NULL,
	id_item INT NOT NULL,
	id_tipoentrada INT NOT NULL,
	id_setor INT NOT NULL,
	CONSTRAINT pk_patrimonio PRIMARY KEY(id_patrimonio),
	
	CONSTRAINT fk_item FOREIGN KEY(id_item)
	REFERENCES item(id_item),

	CONSTRAINT fk_tipoentrada FOREIGN KEY(id_tipoentrada) 
	REFERENCES tipo_entrada(id_tipoentrada),

	CONSTRAINT fk_setor FOREIGN key(id_setor)
	REFERENCES setor(id_setor)
);

SELECT * FROM patrimonio;

CREATE TABLE fornecedor(
	id_fornecedor SERIAL NOT NULL,
	nm_fornecedor VARCHAR NOT NULL,
	nu_cnpjcpf CHAR(14) NOT NULL,
	CONSTRAINT pk_fornecedor PRIMARY KEY(id_fornecedor)
);

SELECT * FROM fornecedor;

CREATE TABLE nota_fiscal(
	id_notafiscal INT NOT NULL,
	nm_notafiscal VARCHAR NOT NULL,
	sg_uf CHAR(2),
	dt_emissao DATE NOT NULL,
	nm_serie VARCHAR NOT NULL,
	id_fornecedor INT NOT NULL,
	id_patrimonio INT NOT NULL,

	CONSTRAINT pk_nota_fiscal PRIMARY KEY(id_notafiscal),
	
	CONSTRAINT fk_fonecedor FOREIGN KEY(id_fornecedor)
	REFERENCES fornecedor(id_fornecedor),

	CONSTRAINT fk_patrimonio FOREIGN KEY(id_patrimonio)
	REFERENCES patrimonio(id_patrimonio)
);

SELECT * FROM nota_fiscal;

CREATE TABLE baixa_patrimonio_detalhe(
	id_baixapatrimoniodetalhe SERIAL NOT NULL,
	id_baixapatrimonio INT NOT NULL,
	id_patrimonio INT NOT NULL,

	CONSTRAINT pk_baixa_patrimonio_detalhe PRIMARY KEY(id_baixapatrimoniodetalhe),

	CONSTRAINT fk_baixa_patrimonio_detalhe FOREIGN KEY(id_baixapatrimonio)
	REFERENCES baixa_patrimonio(id_baixapatrimonio),

	CONSTRAINT fk_patrimonio FOREIGN KEY(id_patrimonio)
	REFERENCES patrimonio(id_patrimonio)
);

SELECT * FROM baixa_patrimonio_detalhe;

CREATE TABLE baixa_patrimonio(
	id_baixapatrimonio SERIAL NOT NULL,
	cd_baixa VARCHAR NOT NULL,
	dt_baixa DATE NOT NULL,
	vl_totalbaixa FLOAT NOT NULL,
	ds_observacao TEXT,

	CONSTRAINT pk_baixa_patrimonio PRIMARY KEY(id_baixapatrimonio)
);

SELECT * FROM baixa_patrimonio;

CREATE TABLE transferencia_patrimonio(
	id_transferenciapatrimonio SERIAL NOT NULL,
	cd_transferencia VARCHAR NOT NULL,
	dt_transferencia DATE NOT NULL,
	vl_totaltransferencia FLOAT NOT NULL,
	id_setororigem INT NOT NULL,

	CONSTRAINT pk_tranferencia_patrimonio PRIMARY KEY(id_transferenciapatrimonio),

	CONSTRAINT fk_setor_origem FOREIGN KEY(id_setororigem)
	REFERENCES setor(id_setor)

);

SELECT * FROM transferencia_patrimonio;

CREATE TABLE transferencia_patrimonio_detalhe(
	id_transferenciapatrimoniodetalhe SERIAL NOT NULL,
	id_trasnferenciapatrimonio INT NOT NULL,
	id_patrimonio INT NOT NULL,
	id_setordestino INT NOT NULL,

	CONSTRAINT pk_transferencia_patrimonio_detalhe PRIMARY KEY(id_transferenciapatrimoniodetalhe),
	
	CONSTRAINT fk_transferencia_patrimonio FOREIGN KEY(id_trasnferenciapatrimonio)
	REFERENCES transferencia_patrimonio(id_transferenciapatrimonio),

	CONSTRAINT fk_patrimonio FOREIGN KEY(id_patrimonio)
	REFERENCES patrimonio(id_patrimonio),

	CONSTRAINT fk_setor_destino FOREIGN KEY(id_setordestino)
	REFERENCES setor(id_setor)
);

SELECT * FROM transferencia_patrimonio_detalhe;

