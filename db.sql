CREATE DATABASE howsy;
USE howsy;

CREATE TABLE `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `name` varchar(50) NOT NULL,
    `contract_name` varchar(50) NOT NULL,
    `contract_length_months` TINYINT UNSIGNED NOT NULL,
    PRIMARY KEY (id)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;
/*i chose not to create a separate "contracts" table to lower 
the time it took me to finish this mini project*/

CREATE TABLE `products` (
    `id` int NOT NULL AUTO_INCREMENT,
    `code` varchar(10) NOT NULL,
    `name` varchar(50) NOT NULL,
    `price` DECIMAL(10,2) UNSIGNED NOT NULL,
    PRIMARY KEY (id)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `basket` (
    `userId` int NOT NULL,
    `productId` int NOT NULL,
    PRIMARY KEY(`userId`, `productId`),
    CONSTRAINT `constr_basket_user_fk`
        FOREIGN KEY (`userId`) REFERENCES `users`(`id`)
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `constr_basket_product_fk`
        FOREIGN KEY (`productId`) REFERENCES `products`(`id`)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB CHARACTER SET ascii COLLATE ascii_general_ci;

INSERT INTO `users`(`username`, `password`, `name`, `contract_name`, `contract_length_months`) VALUES 
('user1', '7c6a180b36896a0a8c02787eeafb0e4c', 'User1 Name', '6 months contract', '6'), 
('user2', '6cb75f652a9b52798eb6cf2201057c73', 'User2 Name', '12 months contract', '12');

INSERT INTO `products`(`code`, `name`, `price`) VALUES 
('P001', 'Photography Package', 200.00),
('P002', 'Floorplan Package', 100.00),
('P003', 'Gas Certificate', 50.00),
('P004', 'EICR Certificate', 50.00);