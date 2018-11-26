CREATE TABLE cliente (
  id_cliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_cliente VARCHAR(255) NULL,
  endereco_cliente TEXT NULL,
  telefone_cliente VARCHAR(14) NULL,
  PRIMARY KEY(id_cliente)
);

CREATE TABLE item (
  id_item INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_item VARCHAR(255) NULL,
  tipo_item TINYINT UNSIGNED NULL,
  preco_item DOUBLE NULL,
  PRIMARY KEY(id_item)
);

CREATE TABLE venda (
  id_venda INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_id_cliente INTEGER UNSIGNED NOT NULL,
  item_id_item INTEGER UNSIGNED NOT NULL,
  data_venda DATE NULL,
  PRIMARY KEY(id_venda),
  INDEX venda_FKIndex1(item_id_item),
  INDEX venda_FKIndex2(cliente_id_cliente)
);


