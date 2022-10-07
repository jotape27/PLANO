
/*ignora

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-03:00";

CREATE DATABASE IF NOT EXISTS `plano` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `plano`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `celular` varchar(15) NOT NULL,
  `cpf` varchar(20) CHARACTER SET utf8mb4 UNIQUE NOT NULL,
  `nascimento` date NOT NULL,
  `genero` enum('o','f','m') NOT NULL,
  `renda` varchar(25) NOT NULL,
  `lazer` int(10) NOT NULL,
  `investimento` int(10) NOT NULL,
  `senha` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `celular`, `cpf`, `nascimento`, `genero`, `renda`, `lazer`, `investimento`, `senha`) VALUES
(1, 'JUAN PABLO DE', 'FERREIRA', 'jplferreira27@gmail.com', '27999083749', '128.921.777-74', '2022-09-07', 'm', 'COMMING SOON', 10, 25, '$2y$10$pi1jrnjr00toL45TtDqaqupr2LrcGQ5ncjPku7MlWE6HaM.TtKPQe');
COMMIT;
*/