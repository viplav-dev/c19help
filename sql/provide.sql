CREATE TABLE `dbcovid`.`provide` (
  `provide_reference_id` INT(10) NOT NULL AUTO_INCREMENT,
  `provide_address` VARCHAR(700) NOT NULL,
  `provide_pincode` INT(6) NULL,
  `provide_name` VARCHAR(200) NOT NULL,
  `provide_verified_bool` TINYINT(1) NOT NULL,
  `provide_description` VARCHAR(1500) NOT NULL,
  `provide_last_verified time` DATETIME NULL,
  `provide_fake_alert_counter` INT(5) NULL,
  `provide_duplicate_info_counter` INT(5) NULL,
  `provide_timestamp` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  `provide_social_twitter` VARCHAR(100) NULL,
  `provide_social_instagram` VARCHAR(100) NULL,
  `provide_social_whatsapp` INT(10) NULL,
  PRIMARY KEY (`provide_reference_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1;