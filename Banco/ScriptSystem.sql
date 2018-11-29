-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema test
-- -----------------------------------------------------
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Categoria` (
  `Tipo` VARCHAR(90) NOT NULL,
  `Local` VARCHAR(90) NULL,
  PRIMARY KEY (`Tipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Livro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Livro` (
  `Codigo` INT NOT NULL,
  `Valor` FLOAT NULL,
  `Descricao` VARCHAR(200) NULL,
  `Nome` VARCHAR(200) NULL,
  `Categoria` VARCHAR(90) NOT NULL,
  PRIMARY KEY (`Codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`niveis_acessos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`niveis_acessos` (
  `id_nivelAcesso` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  PRIMARY KEY (`id_nivelAcesso`))
ENGINE = InnoDB;

INSERT INTO `niveis_acessos` (`id_nivelAcesso`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Cliente');


-- -----------------------------------------------------
-- Table `mydb`.`Funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Funcionarios` (
  `cpf` VARCHAR(14) NOT NULL,
  `Nome` VARCHAR(85) NULL,
  `Endereco` VARCHAR(60) NULL,
  `Telefone` VARCHAR(11) NULL,
  `Nascimento` DATE NULL,
  `Sexo` VARCHAR(9) NULL,
  `Tipo` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `situacao_id` INT(11) NULL,
  `niveis_acessos_id_nivelAcesso` INT(11) NOT NULL,
  PRIMARY KEY (`cpf`),
  INDEX `fk_Funcionarios_niveis_acessos1_idx` (`niveis_acessos_id_nivelAcesso` ASC),
  CONSTRAINT `fk_Funcionarios_niveis_acessos1`
    FOREIGN KEY (`niveis_acessos_id_nivelAcesso`)
    REFERENCES `mydb`.`niveis_acessos` (`id_nivelAcesso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `Funcionarios` (`cpf`, `Nome`, `Endereco`, `Telefone`, `Nascimento`, `Sexo`, `Tipo`, `senha`, `situacao_id`,`niveis_acessos_id_nivelAcesso`) VALUES
('111111111', 'admin','Casa do admin', '18909090', '2016-02-14', 'masculino', 'DONO', 'admin',1,1),
('222222222', 'funcionario','Casa do funcionario','18808080', '1999-02-14', 'feminino', 'escravotario', 'funcionario',1,2),
('333333333', 'teste','teste', '18707070', '2016-02-12', 'masculino', 'teste', 'teste',1,1);
-- (3, 'admin','111111111', 'admin', 2, 3, '2016-02-20 20:48:44', NULL),
-- (4, 'Colaborador','222222222', 'colaborador', 2, 3, '2016-02-20 20:49:02', NULL);



-- -----------------------------------------------------
-- Table `mydb`.`VendaLivro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`VendaLivro` (
  `IdVenda` INT(11) NOT NULL,
  `ValorTotal` FLOAT NULL,
  `data` DATE NULL,
  `Funcionarios_cpf` VARCHAR(14) NOT NULL,
  PRIMARY KEY (`IdVenda`, `Funcionarios_cpf`),
  INDEX `fk_VendaLivro_Funcionarios1_idx` (`Funcionarios_cpf` ASC),
  CONSTRAINT `fk_VendaLivro_Funcionarios1`
    FOREIGN KEY (`Funcionarios_cpf`)
    REFERENCES `mydb`.`Funcionarios` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Livro_has_VendaLivro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Livro_has_VendaLivro` (
  `Livro_Codigo` INT NOT NULL,
  `VendaLivro_IdVenda` INT NOT NULL,
  `Qtd` INT NULL,
  `Valor` DOUBLE NULL,
  PRIMARY KEY (`Livro_Codigo`, `VendaLivro_IdVenda`),
  INDEX `fk_Livro_has_VendaLivro_VendaLivro1_idx` (`VendaLivro_IdVenda` ASC),
  INDEX `fk_Livro_has_VendaLivro_Livro_idx` (`Livro_Codigo` ASC),
  CONSTRAINT `fk_Livro_has_VendaLivro_Livro`
    FOREIGN KEY (`Livro_Codigo`)
    REFERENCES `mydb`.`Livro` (`Codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Livro_has_VendaLivro_VendaLivro1`
    FOREIGN KEY (`VendaLivro_IdVenda`)
    REFERENCES `mydb`.`VendaLivro` (`IdVenda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Fornecedor` (
  `Cnpj` VARCHAR(19) NOT NULL,
  `Empresa` VARCHAR(50) NULL,
  PRIMARY KEY (`Cnpj`))
ENGINE = InnoDB;


select * from Fornecedor;
-- -----------------------------------------------------
-- Table `mydb`.`Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Compra` (
  `CodigCompra` INT NOT NULL,
  `Total` FLOAT NULL,
  `Data` DATE NULL,
  `Valor` FLOAT NULL,
  `Fornecedor_Cnpj1` VARCHAR(19) NOT NULL,
  INDEX `fk_Compra_Fornecedor1_idx` (`Fornecedor_Cnpj1` ASC),
  PRIMARY KEY (`CodigCompra`),
  CONSTRAINT `fk_Compra_Fornecedor1`
    FOREIGN KEY (`Fornecedor_Cnpj1`)
    REFERENCES `mydb`.`Fornecedor` (`Cnpj`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Compra_has_Livro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Compra_has_Livro` (
  `Compra_CodigCompra` INT NOT NULL,
  `Livro_Codigo` INT NOT NULL,
  `QtdCompra` INT NULL,
  `Valor` DOUBLE NULL,
  PRIMARY KEY (`Compra_CodigCompra`, `Livro_Codigo`),
  INDEX `fk_Compra_has_Livro_Livro1_idx` (`Livro_Codigo` ASC),
  INDEX `fk_Compra_has_Livro_Compra1_idx` (`Compra_CodigCompra` ASC),
  CONSTRAINT `fk_Compra_has_Livro_Livro1`
    FOREIGN KEY (`Livro_Codigo`)
    REFERENCES `mydb`.`Livro` (`Codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Compra_has_Livro_Compra1`
    FOREIGN KEY (`Compra_CodigCompra`)
    REFERENCES `mydb`.`Compra` (`CodigCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

--------------------------------------------------------------------------------------------------------------------------------------------------------------------
SELECT * FROM Funcionarios;
-- select * from niveis_acessos;
-- select * from Fornecedor;