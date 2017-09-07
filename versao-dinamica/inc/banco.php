<?php
/**
 * Created by PhpStorm.
 * User: Antonio
 * Date: 05/09/2017
 * Time: 19:25
 */

$produtos = "CREATE TABLE `bd_marmitas`.`produto` ( `id` INT NOT NULL AUTO_INCREMENT , 
                                                `produto` VARCHAR(150) NOT NULL , 
                                                `tamanho` VARCHAR(2) NOT NULL , `valor` 
                                                DECIMAL NOT NULL , PRIMARY KEY (`id`)) 
                                                ENGINE = InnoDB;";