CREATE DATABASE `image_db` DEFAULT CHARACTER SET `utf8` COLLATE `utf8_general_ci`;
CREATE TABLE `image_db`.`image_data` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `img_name` VARCHAR(100) NOT NULL,
    `img` MEDIUMBLOB NOT NULL
) ENGINE = InnoDB;
