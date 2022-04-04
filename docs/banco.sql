CREATE DATABASE db_etec;
USE db_etec;

CREATE TABLE tb_aluno (
	cd_rm INT(5) ZEROFILL PRIMARY KEY NOT NULL,
	nm_nome VARCHAR(100),
	nr_idade INT
);

CREATE TABLE tb_usuario (
	cd_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_login VARCHAR(30),
	ds_senha VARCHAR(16),
	nr_nivel INT
);

INSERT INTO tb_aluno (cd_rm, nm_nome, nr_idade) VALUES
	(20218, "Pedro Gil", 17),
	(20024, "Raylla Silva", 16),
	(20142, "Yasmin", 17);

INSERT INTO tb_usuario (cd_usuario, ds_login, ds_senha, nr_nivel) VALUES
	(null, 'user', '123', '1'),
	(null, 'admin', 'raylla', '2');