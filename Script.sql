/*
Created		11/09/2011
Modified		21/09/2011
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


drop table IF EXISTS areas;
drop table IF EXISTS trab_areas;
drop table IF EXISTS publicacao;
drop table IF EXISTS trab_publicacao;
drop table IF EXISTS trabalhos;
drop table IF EXISTS funcoes;
drop table IF EXISTS pessoas;


Create table pessoas (
	cod_pessoa Int NOT NULL AUTO_INCREMENT,
	nome_pessoa Varchar(100),
 Primary Key (cod_pessoa)) ENGINE = InnoDB;

Create table funcoes (
	cod_pessoa Int NOT NULL,
	cod_trabalho Int NOT NULL,
	email_pessoa Varchar(100),
	funcao Char(1),
	instituicao Varchar(250),
 Primary Key (cod_pessoa,cod_trabalho)) ENGINE = InnoDB;

Create table trabalhos (
	cod_trabalho Int NOT NULL AUTO_INCREMENT,
	titulo Varchar(200),
	resumo Text,
	palavras_chaves Varchar(150),
	arquivo Varchar(200),
	data_cad Datetime,
	referencias Text,
	hipotese Text,
	metodologia Text,
	objetivo Text,
	resultado Text,
 Primary Key (cod_trabalho)) ENGINE = InnoDB;

Create table trab_publicacao (
	cod_trabalho Int NOT NULL,
	cod_publicacao Int NOT NULL,
 Primary Key (cod_trabalho,cod_publicacao)) ENGINE = InnoDB;

Create table publicacao (
	cod_publicacao Int NOT NULL AUTO_INCREMENT,
	nome_publicacao Varchar(250),
	data_publicacao Date,
 Primary Key (cod_publicacao)) ENGINE = InnoDB;

Create table trab_areas (
	cod_trabalho Int NOT NULL,
	cod_area Int NOT NULL,
 Primary Key (cod_trabalho,cod_area)) ENGINE = InnoDB;

Create table areas (
	cod_area Int NOT NULL AUTO_INCREMENT,
	nome_area Varchar(100),
 Primary Key (cod_area)) ENGINE = InnoDB;


Alter table funcoes add Foreign Key (cod_pessoa) references pessoas (cod_pessoa) on delete  restrict on update  restrict;
Alter table funcoes add Foreign Key (cod_trabalho) references trabalhos (cod_trabalho) on delete  restrict on update  restrict;
Alter table trab_publicacao add Foreign Key (cod_trabalho) references trabalhos (cod_trabalho) on delete  restrict on update  restrict;
Alter table trab_areas add Foreign Key (cod_trabalho) references trabalhos (cod_trabalho) on delete  restrict on update  restrict;
Alter table trab_publicacao add Foreign Key (cod_publicacao) references publicacao (cod_publicacao) on delete  restrict on update  restrict;
Alter table trab_areas add Foreign Key (cod_area) references areas (cod_area) on delete  restrict on update  restrict;


/* Users permissions */


