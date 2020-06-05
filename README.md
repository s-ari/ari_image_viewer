docker run --name mysql -e MYSQL_ROOT_PASSWORD=secret-pw -d mysql:5.7.30
 docker-php-ext-install pdo_mysql

Create Database
```
CREATE DATABASE `image_db` DEFAULT CHARACTER SET `utf8` COLLATE `utf8_general_ci`;

CREATE TABLE `image_db`.`image_data` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `img_name` VARCHAR(100) NOT NULL,
    `img` MEDIUMBLOB NOT NULL
) ENGINE = InnoDB;
```

```
database image_db
user,root
pw,secret-pw
```