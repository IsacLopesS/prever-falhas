-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jun-2022 às 16:54
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caraca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assento`
--

CREATE TABLE `assento` (
  `num_assento` int(11) NOT NULL,
  `ocupado` char(1) DEFAULT NULL,
  `id_onibus` int(11) NOT NULL,
  `id_viagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `assento`
--

INSERT INTO `assento` (`num_assento`, `ocupado`, `id_onibus`, `id_viagem`) VALUES
(1, NULL, 1, 0),
(1, NULL, 2, 0),
(1, NULL, 3, 0),
(1, NULL, 4, 0),
(2, NULL, 1, 0),
(2, NULL, 2, 0),
(2, NULL, 3, 0),
(2, NULL, 4, 0),
(3, NULL, 1, 0),
(3, NULL, 2, 0),
(3, NULL, 3, 0),
(3, NULL, 4, 0),
(4, NULL, 1, 0),
(4, NULL, 2, 0),
(4, NULL, 3, 0),
(4, NULL, 4, 0),
(5, NULL, 1, 0),
(5, NULL, 2, 0),
(5, NULL, 3, 0),
(5, NULL, 4, 0),
(6, NULL, 1, 0),
(6, NULL, 2, 0),
(6, NULL, 3, 0),
(6, NULL, 4, 0),
(7, NULL, 1, 0),
(7, NULL, 2, 0),
(7, NULL, 3, 0),
(7, NULL, 4, 0),
(8, NULL, 1, 0),
(8, NULL, 2, 0),
(8, NULL, 3, 0),
(8, NULL, 4, 0),
(9, NULL, 1, 0),
(9, NULL, 2, 0),
(9, NULL, 3, 0),
(9, NULL, 4, 0),
(10, NULL, 1, 0),
(10, NULL, 2, 0),
(10, NULL, 3, 0),
(10, NULL, 4, 0),
(11, NULL, 1, 0),
(11, NULL, 2, 0),
(11, NULL, 3, 0),
(11, NULL, 4, 0),
(12, NULL, 1, 0),
(12, NULL, 2, 0),
(12, NULL, 3, 0),
(12, NULL, 4, 0),
(13, NULL, 1, 0),
(13, NULL, 2, 0),
(13, NULL, 3, 0),
(13, NULL, 4, 0),
(14, NULL, 1, 0),
(14, NULL, 2, 0),
(14, NULL, 3, 0),
(14, NULL, 4, 0),
(15, NULL, 1, 0),
(15, NULL, 2, 0),
(15, NULL, 3, 0),
(15, NULL, 4, 0),
(16, NULL, 1, 0),
(16, NULL, 2, 0),
(16, NULL, 3, 0),
(16, NULL, 4, 0),
(17, NULL, 1, 0),
(17, NULL, 2, 0),
(17, NULL, 3, 0),
(17, NULL, 4, 0),
(18, NULL, 1, 0),
(18, NULL, 2, 0),
(18, NULL, 3, 0),
(18, NULL, 4, 0),
(19, NULL, 1, 0),
(19, NULL, 2, 0),
(19, NULL, 3, 0),
(19, NULL, 4, 0),
(20, NULL, 1, 0),
(20, NULL, 2, 0),
(20, NULL, 3, 0),
(20, NULL, 4, 0),
(21, NULL, 1, 0),
(21, NULL, 2, 0),
(21, NULL, 3, 0),
(21, NULL, 4, 0),
(22, NULL, 1, 0),
(22, NULL, 2, 0),
(22, NULL, 3, 0),
(22, NULL, 4, 0),
(23, NULL, 1, 0),
(23, NULL, 2, 0),
(23, NULL, 3, 0),
(23, NULL, 4, 0),
(24, NULL, 1, 0),
(24, NULL, 2, 0),
(24, NULL, 3, 0),
(24, NULL, 4, 0),
(25, NULL, 1, 0),
(25, NULL, 2, 0),
(25, NULL, 3, 0),
(25, NULL, 4, 0),
(26, NULL, 1, 0),
(26, NULL, 2, 0),
(26, NULL, 3, 0),
(26, NULL, 4, 0),
(27, NULL, 1, 0),
(27, NULL, 2, 0),
(27, NULL, 3, 0),
(27, NULL, 4, 0),
(28, NULL, 1, 0),
(28, NULL, 2, 0),
(28, NULL, 3, 0),
(28, NULL, 4, 0),
(29, NULL, 1, 0),
(29, NULL, 2, 0),
(29, NULL, 3, 0),
(29, NULL, 4, 0),
(30, NULL, 1, 0),
(30, NULL, 2, 0),
(30, NULL, 3, 0),
(30, NULL, 4, 0),
(31, NULL, 1, 0),
(31, NULL, 2, 0),
(31, NULL, 3, 0),
(31, NULL, 4, 0),
(32, NULL, 1, 0),
(32, NULL, 2, 0),
(32, NULL, 3, 0),
(32, NULL, 4, 0),
(33, NULL, 1, 0),
(33, NULL, 2, 0),
(33, NULL, 3, 0),
(33, NULL, 4, 0),
(34, NULL, 1, 0),
(34, NULL, 2, 0),
(34, NULL, 3, 0),
(34, NULL, 4, 0),
(35, NULL, 1, 0),
(35, NULL, 2, 0),
(35, NULL, 3, 0),
(35, NULL, 4, 0),
(36, NULL, 1, 0),
(36, NULL, 2, 0),
(36, NULL, 3, 0),
(36, NULL, 4, 0),
(37, NULL, 1, 0),
(37, NULL, 2, 0),
(37, NULL, 3, 0),
(37, NULL, 4, 0),
(38, NULL, 1, 0),
(38, NULL, 2, 0),
(38, NULL, 3, 0),
(38, NULL, 4, 0),
(39, NULL, 1, 0),
(39, NULL, 2, 0),
(39, NULL, 3, 0),
(39, NULL, 4, 0),
(40, NULL, 1, 0),
(40, NULL, 2, 0),
(40, NULL, 3, 0),
(40, NULL, 4, 0),
(41, NULL, 1, 0),
(41, NULL, 2, 0),
(41, NULL, 3, 0),
(41, NULL, 4, 0),
(42, NULL, 1, 0),
(42, NULL, 2, 0),
(42, NULL, 3, 0),
(42, NULL, 4, 0),
(43, NULL, 1, 0),
(43, NULL, 2, 0),
(43, NULL, 3, 0),
(43, NULL, 4, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus`
--

CREATE TABLE `onibus` (
  `id` int(11) NOT NULL,
  `placa` varchar(17) NOT NULL,
  `num_T_assentos` int(11) DEFAULT NULL,
  `num_assentos_disp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `onibus`
--

INSERT INTO `onibus` (`id`, `placa`, `num_T_assentos`, `num_assentos_disp`) VALUES
(1, 'bgz-01254', 43, 43),
(2, 'VIIDTHN1', 43, 43),
(3, 'CINGKGE5', 43, 43),
(4, 'DOVYHL3N', 43, 43);

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `rg` varchar(17) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `rg`, `nome`) VALUES
(1, 'MG19045810', 'joao B.'),
(2, '68064280', 'Grayson'),
(3, '00421027', 'Manuela'),
(4, '24424721', 'Emanuel'),
(5, '68649760', 'Sage'),
(6, '24152675', 'Emmett'),
(8, 'SP-40005780', 'José Coelho'),
(10, 'SP 150.840.209', 'Felipe Costa'),
(11, 'MG 19.115.810', 'Isac Lopes'),
(12, 'SP 19.005.511', 'Felipe Emanuel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `id` int(11) NOT NULL,
  `origem` varchar(40) NOT NULL,
  `destino` varchar(40) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `preco` varchar(12) NOT NULL,
  `id_onibus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `viagem`
--

INSERT INTO `viagem` (`id`, `origem`, `destino`, `data_hora`, `preco`, `id_onibus`) VALUES
(1, 'Belo Horizonte', 'Joao Monlevade', '2022-07-02 21:30:00', 'R$ 60,00', 1),
(2, 'Belo Horizonte', 'Vitoria ES', '2022-06-13 15:21:53', 'R$ 170,00', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `viajar`
--

CREATE TABLE `viajar` (
  `id_pessoa` int(11) DEFAULT NULL,
  `id_viagem` int(11) NOT NULL,
  `num_assento` int(11) NOT NULL,
  `id_onibus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `viajar`
--

INSERT INTO `viajar` (`id_pessoa`, `id_viagem`, `num_assento`, `id_onibus`) VALUES
(11, 2, 43, 2),
(12, 1, 8, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assento`
--
ALTER TABLE `assento`
  ADD PRIMARY KEY (`num_assento`,`id_onibus`,`id_viagem`),
  ADD KEY `id_onibus` (`id_onibus`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `onibus`
--
ALTER TABLE `onibus`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_onibus` (`id_onibus`);

--
-- Índices para tabela `viajar`
--
ALTER TABLE `viajar`
  ADD PRIMARY KEY (`id_viagem`,`num_assento`,`id_onibus`),
  ADD KEY `id_pessoa` (`id_pessoa`),
  ADD KEY `num_assento` (`num_assento`),
  ADD KEY `id_onibus` (`id_onibus`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `onibus`
--
ALTER TABLE `onibus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `assento`
--
ALTER TABLE `assento`
  ADD CONSTRAINT `assento_ibfk_1` FOREIGN KEY (`id_onibus`) REFERENCES `onibus` (`id`);

--
-- Limitadores para a tabela `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `viagem_ibfk_1` FOREIGN KEY (`id_onibus`) REFERENCES `onibus` (`id`);

--
-- Limitadores para a tabela `viajar`
--
ALTER TABLE `viajar`
  ADD CONSTRAINT `viajar_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoas` (`id`),
  ADD CONSTRAINT `viajar_ibfk_2` FOREIGN KEY (`id_viagem`) REFERENCES `viagem` (`id`),
  ADD CONSTRAINT `viajar_ibfk_3` FOREIGN KEY (`num_assento`) REFERENCES `assento` (`num_assento`),
  ADD CONSTRAINT `viajar_ibfk_4` FOREIGN KEY (`id_onibus`) REFERENCES `onibus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
