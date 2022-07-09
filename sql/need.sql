CREATE TABLE `dbcovid`.`need` (
  `need_reference_id` INT(10) NOT NULL AUTO_INCREMENT,
  `need_address` VARCHAR(700) NOT NULL,
  `need_pincode` INT(6) NULL,
  `need_mobile_no` INT(10) NOT NULL,
  `need_description` VARCHAR(1000) NOT NULL,
  `need_name` VARCHAR(200) NOT NULL,
  `need_timestamp` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `need_email` VARCHAR(320) NULL,
  `need_social_instagram` VARCHAR(300) NULL,
  `need_social_whatsapp` VARCHAR(10) NULL,
  `need_social_twitter` VARCHAR(50) NULL,
  PRIMARY KEY (`need_reference_id`))
ENGINE = InnoDB
ROW_FORMAT = DEFAULT;
