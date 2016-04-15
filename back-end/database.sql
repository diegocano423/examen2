CREATE TABLE `examen2`.`videogames` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) DEFAULT NULL,
  `desarollador` VARCHAR(45) DEFAULT NULL,
  `descripcion` VARCHAR(45) DEFAULT NULL,
  `consola` VARCHAR(45) DEFAULT NULL,
  `fechaLanzamiento` DATETIME DEFAULT NULL,
  `calificacion` FLOAT DEFAULT NULL,
  `urlImagen` VARCHAR(70) DEFAULT NULL,
  PRIMARY KEY (`id`));