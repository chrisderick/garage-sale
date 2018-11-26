CREATE TABLE gravadora (
  id_gravadora INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_gravadora VARCHAR(255) NULL,
  fundacao_gravadora DATE NULL,
  ceo_gravadora VARCHAR(255) NULL,
  PRIMARY KEY(id_gravadora)
);

CREATE TABLE grupo (
  id_grupo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_grupo VARCHAR(255) NULL,
  tipo_grupo TINYINT UNSIGNED NULL,
  debut_grupo DATE NULL,
  disband_grupo DATE NULL,
  PRIMARY KEY(id_grupo)
);

CREATE TABLE idol (
  id_idol INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  gravadora_id_gravadora INTEGER UNSIGNED NOT NULL,
  grupo_id_grupo INTEGER UNSIGNED NOT NULL,
  nome_idol VARCHAR(255) NULL,
  sexo_idol TINYINT(1) UNSIGNED NULL,
  nasc_idol DATE NULL,
  solo_idol TINYINT(1) UNSIGNED NULL,
  posicao_idol VARCHAR(255) NULL,
  PRIMARY KEY(id_idol),
  INDEX idol_FKIndex1(grupo_id_grupo),
  INDEX idol_FKIndex2(gravadora_id_gravadora)
);


