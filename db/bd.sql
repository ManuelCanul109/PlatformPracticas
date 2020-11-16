-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `correo_usuario` VARCHAR(45) NULL,
  `password_usuario` VARCHAR(45) NULL,
  `tipo_usuario` INT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `carreras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `carreras` (
  `id_carrera` INT NOT NULL AUTO_INCREMENT,
  `nombre_carrera` VARCHAR(45) NULL,
  PRIMARY KEY (`id_carrera`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `semestres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `semestres` (
  `id_semestre` INT NOT NULL AUTO_INCREMENT,
  `nombre_semestre` VARCHAR(45) NULL,
  PRIMARY KEY (`id_semestre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `solicitudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id_solicitud` INT NOT NULL AUTO_INCREMENT,
  `nombres_alumno_solicitud` VARCHAR(45) NULL,
  `apellidos_alumno_solicitud` VARCHAR(45) NULL,
  `matricula_solicitud` VARCHAR(45) NULL,
  `carrera_id` INT NOT NULL,
  `semestre_id` INT NOT NULL,
  `nombre_empresa_solicitud` VARCHAR(45) NULL,
  `nombre_dirigido_solicitud` VARCHAR(45) NULL,
  `puesto_solicitud` VARCHAR(45) NULL,
  `horario_solicitud` VARCHAR(45) NULL,
  `conocimiento_solicitud` TEXT NULL,
  `nombre_proyecto_solicitud` VARCHAR(45) NULL,
  `descripcion_solicitud` TEXT NULL,
  `nombre_jefe_solicitud` VARCHAR(45) NULL,
  `cargo_jefe_solicitud` VARCHAR(45) NULL,
  `celular_alumno_solicitud` VARCHAR(45) NULL,
  `correo_alumno_solicitud` VARCHAR(45) NULL,
  `fecha_inicio_soliciud` DATE NULL,
  `fecha_final_solicitud` DATE NULL,
  `fecha_alta_solicitud` DATE NULL,
  `estado_solicitud` INT NULL,
  `status_solicitud` INT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id_solicitud`),
  INDEX `fk_solicitudes_carreras_idx` (`carrera_id` ASC),
  INDEX `fk_solicitudes_semestres1_idx` (`semestre_id` ASC),
  INDEX `fk_solicitudes_usuarios1_idx` (`id_solicitud` ASC),
  CONSTRAINT `fk_solicitudes_carreras`
    FOREIGN KEY (`carrera_id`)
    REFERENCES `carreras` (`id_carrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_semestres1`
    FOREIGN KEY (`semestre_id`)
    REFERENCES `semestres` (`id_semestre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `documentos` (
  `id_documento` INT NOT NULL AUTO_INCREMENT,
  `nombre_documento` VARCHAR(45) NULL,
  `tipo_documento` VARCHAR(45) NULL,
  PRIMARY KEY (`id_documento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `solicitudes_has_documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solicitudes_has_documentos` (
  `solicitudes_id_solicitud` INT NOT NULL,
  `documentos_id_documento` INT NOT NULL,
  PRIMARY KEY (`solicitudes_id_solicitud`, `documentos_id_documento`),
  INDEX `fk_solicitudes_has_documentos_documentos1_idx` (`documentos_id_documento` ASC),
  INDEX `fk_solicitudes_has_documentos_solicitudes1_idx` (`solicitudes_id_solicitud` ASC),
  CONSTRAINT `fk_solicitudes_has_documentos_solicitudes1`
    FOREIGN KEY (`solicitudes_id_solicitud`)
    REFERENCES `solicitudes` (`id_solicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_has_documentos_documentos1`
    FOREIGN KEY (`documentos_id_documento`)
    REFERENCES `documentos` (`id_documento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

