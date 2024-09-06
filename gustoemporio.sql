-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/12/2023 às 15:50
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gustoemporio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float DEFAULT NULL,
  `prodtyp` int(11) NOT NULL,
  `padariatyp` int(11) DEFAULT NULL,
  `pimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `price`, `prodtyp`, `padariatyp`, `pimg`) VALUES
(1, 'Pão Artesanal', 5.49, 1, 1, 'https://i.guim.co.uk/img/media/a055af712aac514b119b65d89c7b2c2cb33532c9/669_100_2835_2732/master/2835.jpg?width=445&dpr=1&s=none'),
(2, 'Pão de Queijo', 6.99, 1, 2, 'https://panutti.com.br/arquivos/produtos/imagens_adicionais/Pão%20de%20Queijo-208.jpg'),
(3, 'Kibe', 8.99, 1, 2, 'https://www.extrabom.com.br/uploads/produtos/350x350/161548_20220228124449_thumb_161548_Quibe_Frito_Nossa_Receita_kg_removebg_preview.png'),
(4, 'Café Gelado', 4.49, 1, 3, 'https://img.freepik.com/premium-photo/isolate-iced-coffee-white-background_76440-3122.jpg'),
(5, 'Brownie', 8.99, 1, 4, 'https://static.vecteezy.com/system/resources/previews/026/516/650/large_2x/delicious-brownies-isolated-on-white-background-free-photo.jpg'),
(6, 'Croissant', 12.99, 1, 2, 'https://monasterybakery.com/wp-content/uploads/2023/06/Monastery-Siganture-Roast-Beef-Cheddar-Croissant-Sandwich_450x450.jpg'),
(7, 'Passatempo', 7.49, 2, NULL, 'https://static.paodeacucar.com/img/uploads/1/231/24399231.jpg'),
(28, 'Biscoito Club Socia', 7.99, 2, NULL, 'https://static.paodeacucar.com/img/uploads/1/746/25028746.jpg'),
(29, 'Biscoito BelVita mel', 4.79, 2, NULL, 'https://static.paodeacucar.com/img/uploads/1/489/25028489.jpg'),
(30, 'Biscoito Orgânico Tribos Coco', 7.49, 2, NULL, 'https://static.paodeacucar.com/img/uploads/1/791/23724791.jpg'),
(31, 'Cookies Orgânico MÃE TERRA', 5.49, 2, NULL, 'https://static.paodeacucar.com/img/uploads/1/18/24163018.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
