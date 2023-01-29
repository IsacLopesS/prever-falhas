-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2022 às 20:28
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
-- Banco de dados: `doacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `coletas`
--

CREATE TABLE `coletas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantidade` double(8,2) NOT NULL,
  `data` date NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `entidade_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `coletas`
--

INSERT INTO `coletas` (`id`, `created_at`, `updated_at`, `quantidade`, `data`, `item_id`, `entidade_id`) VALUES
(12, '2022-06-17 08:32:16', '2022-06-17 08:32:16', 40.00, '2020-12-25', 22, 21),
(13, '2022-06-17 08:33:02', '2022-06-17 08:33:02', 60.00, '2020-06-15', 23, 21),
(14, '2022-06-17 08:33:35', '2022-06-17 08:33:35', 70.00, '2021-06-07', 28, 21),
(15, '2022-06-17 08:34:03', '2022-06-17 08:34:03', 180.00, '2022-05-12', 23, 23),
(16, '2022-06-17 08:34:46', '2022-06-17 08:34:46', 9.00, '2022-02-14', 26, 21),
(17, '2022-06-17 08:35:28', '2022-06-17 08:35:28', 60.00, '2022-02-26', 29, 23),
(18, '2022-06-17 09:42:20', '2022-06-17 09:42:20', 60.00, '2021-05-18', 23, 22),
(19, '2022-06-17 19:35:09', '2022-06-17 19:35:09', 15.00, '2022-07-17', 29, 23),
(20, '2022-06-17 20:06:25', '2022-06-17 20:06:25', 10.00, '2020-05-17', 25, 21),
(21, '2022-06-17 20:07:11', '2022-06-17 20:07:11', 5.00, '2021-01-25', 25, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidades`
--

CREATE TABLE `entidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `entidades`
--

INSERT INTO `entidades` (`id`, `created_at`, `updated_at`, `nome`, `bairro`, `cidade`, `estado`) VALUES
(21, '2022-06-17 07:11:23', '2022-06-17 07:11:23', 'Ação da Cidadania', 'Barro Preto', 'BH', 'MG'),
(22, '2022-06-17 07:46:10', '2022-06-17 07:46:10', 'Banco de Alimentos', 'Sta Luzia', 'SP', 'SP'),
(23, '2022-06-17 07:47:37', '2022-06-17 07:47:37', 'Tem Gente com Fome', 'Copacabana', 'RJ', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `items`
--

INSERT INTO `items` (`id`, `created_at`, `updated_at`, `descricao`) VALUES
(22, '2022-06-17 06:51:02', '2022-06-17 07:50:24', 'pacote de feijao 1kg'),
(23, '2022-06-17 07:50:02', '2022-06-17 07:50:02', 'pacote de arroz 5kg'),
(24, '2022-06-17 07:50:55', '2022-06-17 07:50:55', 'camiseta'),
(25, '2022-06-17 07:51:03', '2022-06-17 07:51:03', 'bermuda'),
(26, '2022-06-17 07:51:15', '2022-06-17 07:51:15', 'calça moletom'),
(27, '2022-06-17 07:51:30', '2022-06-17 07:51:30', 'agasalho feminino'),
(28, '2022-06-17 07:51:37', '2022-06-17 07:51:37', 'cobertor'),
(29, '2022-06-17 07:51:49', '2022-06-17 07:51:49', 'açucar 5kg');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_06_14_170143_create_items_table', 1),
(3, '2022_06_15_170308_create_entidades_table', 1),
(4, '2022_06_16_170247_create_coletas_table', 1);

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

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `coletas`
--
ALTER TABLE `coletas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coletas_item_id_foreign` (`item_id`),
  ADD KEY `coletas_entidade_id_foreign` (`entidade_id`);

--
-- Índices para tabela `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `coletas`
--
ALTER TABLE `coletas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `entidades`
--
ALTER TABLE `entidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `coletas`
--
ALTER TABLE `coletas`
  ADD CONSTRAINT `coletas_entidade_id_foreign` FOREIGN KEY (`entidade_id`) REFERENCES `entidades` (`id`),
  ADD CONSTRAINT `coletas_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
