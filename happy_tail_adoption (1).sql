-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2024 às 13:05
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `happy_tail_adoption`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `IdAnimal` int(11) NOT NULL,
  `raça` int(11) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `cor` varchar(200) DEFAULT NULL,
  `deficiancia` varchar(200) DEFAULT NULL,
  `caracteristica` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dinheiro`
--

CREATE TABLE `dinheiro` (
  `idDinDin` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `raça`
--

CREATE TABLE `raça` (
  `IdRaça` int(11) NOT NULL,
  `raça` varchar(200) DEFAULT NULL,
  `especie` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `raça`
--

INSERT INTO `raça` (`IdRaça`, `raça`, `especie`) VALUES
(1, 'Vira lata', 'cachorro'),
(2, 'Golden Retriever', 'cachorro'),
(3, 'Pastor Alemão', 'cachorro'),
(4, 'Bulldog Francês', 'cachorro'),
(5, 'Beagle', 'cachorro'),
(6, 'Poodle', 'cachorro'),
(7, 'Shih Tzu', 'cachorro'),
(8, 'Dachshund', 'cachorro'),
(9, 'Yorkshire Terrier', 'cachorro'),
(10, 'Boxer', 'cachorro'),
(11, 'Cocker Spaniel', 'cachorro'),
(12, 'Chihuahua', 'cachorro'),
(13, 'Pug', 'cachorro'),
(14, 'Doberman Pinscher', 'cachorro'),
(15, 'Rottweiler', 'cachorro'),
(16, 'Schnauzer', 'cachorro'),
(17, 'Australian Shepherd', 'cachorro'),
(18, 'Maltês', 'cachorro'),
(19, 'Bichon Frise', 'cachorro'),
(20, 'Pomeranian', 'cachorro'),
(21, 'Havanese', 'cachorro'),
(22, 'Shiba Inu', 'cachorro'),
(23, 'Bull Terrier', 'cachorro'),
(24, 'Pinscher', 'cachorro'),
(25, 'Pit Bull Terrier', 'cachorro'),
(26, 'Akita', 'cachorro'),
(27, 'Bernese Mountain Dog', 'cachorro'),
(28, 'Great Dane Terrier', 'cachorro'),
(29, 'Border Collie', 'cachorro'),
(30, 'Boston Terrier', 'cachorro'),
(31, 'Siamês', 'gato'),
(32, 'Persa', 'gato'),
(33, 'Maine Coon', 'gato'),
(34, 'Ragdoll', 'gato'),
(35, 'Bengala', 'gato'),
(36, 'Sphynx', 'gato'),
(37, 'Scottish Fold', 'gato'),
(38, 'Abissínio', 'gato'),
(39, 'Burmese', 'gato'),
(40, 'Norueguês da Floresta', 'gato'),
(41, 'Birmanês', 'gato'),
(42, 'British Shorthair', 'gato'),
(43, 'Manx', 'gato'),
(44, 'Devong Rex', 'gato'),
(45, 'Cornish Rex', 'gato'),
(46, 'Oriental', 'gato'),
(47, 'Selkirk Rex', 'gato'),
(48, 'Somali', 'gato'),
(49, 'American Shorthair', 'gato'),
(50, 'Russian Blue', 'gato'),
(51, 'Egyptian Mau', 'gato'),
(52, 'Tonkinese', 'gato'),
(53, 'Chartreux', 'gato'),
(54, 'Balinês', 'gato'),
(55, 'Havana Brown', 'gato'),
(56, 'Turkish Angora', 'gato'),
(57, 'Turkish Van', 'gato'),
(58, 'LaPmer', 'gato'),
(59, 'Munchkin', 'gato'),
(60, 'Singapura', 'gato');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `senha` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`IdAnimal`);

--
-- Índices para tabela `dinheiro`
--
ALTER TABLE `dinheiro`
  ADD PRIMARY KEY (`idDinDin`);

--
-- Índices para tabela `raça`
--
ALTER TABLE `raça`
  ADD PRIMARY KEY (`IdRaça`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
