SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `sitAP` ;
USE `sitAP` ;

-- -----------------------------------------------------
-- Table `sitAP`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sitAP`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(45) NOT NULL ,
  `dtNasc` VARCHAR(45) NOT NULL ,
  `foto` VARCHAR(45) NOT NULL ,
  `cidade` VARCHAR(45) NOT NULL ,
  `estado` VARCHAR(45) NOT NULL ,
  `bairro` VARCHAR(45) NOT NULL ,
  `endereco` VARCHAR(45) NOT NULL ,
  `cep` VARCHAR(45) NOT NULL ,
  `telefone` VARCHAR(45) NOT NULL ,
  `celular` VARCHAR(45) NOT NULL ,
  `dtCriacao` DATETIME NOT NULL ,
  `dtAtualizacao` DATETIME NOT NULL ,
  PRIMARY KEY (`idUsuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitAP`.`Noticia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sitAP`.`Noticia` (
  `idNoticia` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(45) NOT NULL ,
  `text` TEXT NOT NULL ,
  `dtCriacao` DATETIME NOT NULL ,
  `dtAtualizacao` DATETIME NOT NULL ,
  `Usuario_idUsuario` INT NOT NULL ,
  `positivo` INT NOT NULL ,
  `negativo` INT NOT NULL ,
  PRIMARY KEY (`idNoticia`) ,
  INDEX `fk_Noticia_Usuario1` (`Usuario_idUsuario` ASC) ,
  CONSTRAINT `fk_Noticia_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario` )
    REFERENCES `sitAP`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitAP`.`Categoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sitAP`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCategoria`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitAP`.`Comentario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sitAP`.`Comentario` (
  `idComentario` INT NOT NULL AUTO_INCREMENT ,
  `comentario` VARCHAR(45) NOT NULL ,
  `dtCriacao` DATETIME NOT NULL ,
  `dtAtualizacao` DATETIME NOT NULL ,
  `idUsuario` INT NOT NULL ,
  `idNoticia` INT NOT NULL ,
  `positivo` INT NOT NULL ,
  `negativo` INT NOT NULL ,
  PRIMARY KEY (`idComentario`) ,
  INDEX `fk_Comentario_Usuario1` (`idUsuario` ASC) ,
  INDEX `fk_Comentario_Noticia1` (`idNoticia` ASC) ,
  CONSTRAINT `fk_Comentario_Usuario1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `sitAP`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentario_Noticia1`
    FOREIGN KEY (`idNoticia` )
    REFERENCES `sitAP`.`Noticia` (`idNoticia` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitAP`.`Foto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sitAP`.`Foto` (
  `idFoto` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `url` VARCHAR(45) NOT NULL ,
  `Noticia_idNoticia` INT NOT NULL ,
  PRIMARY KEY (`idFoto`) ,
  INDEX `fk_Foto_Noticia1` (`Noticia_idNoticia` ASC) ,
  CONSTRAINT `fk_Foto_Noticia1`
    FOREIGN KEY (`Noticia_idNoticia` )
    REFERENCES `sitAP`.`Noticia` (`idNoticia` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitAP`.`Categoria_tem_Noticia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sitAP`.`Categoria_tem_Noticia` (
  `idCategoria` INT NOT NULL ,
  `idNoticia` INT NOT NULL ,
  PRIMARY KEY (`idCategoria`, `idNoticia`) ,
  INDEX `fk_Categoria_has_Noticia_Noticia1` (`idNoticia` ASC) ,
  INDEX `fk_Categoria_has_Noticia_Categoria1` (`idCategoria` ASC) ,
  CONSTRAINT `fk_Categoria_has_Noticia_Categoria1`
    FOREIGN KEY (`idCategoria` )
    REFERENCES `sitAP`.`Categoria` (`idCategoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Categoria_has_Noticia_Noticia1`
    FOREIGN KEY (`idNoticia` )
    REFERENCES `sitAP`.`Noticia` (`idNoticia` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `sitAP`;

DELIMITER $$

DELIMITER ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
