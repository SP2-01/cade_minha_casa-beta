-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/11/2020 às 17:05
-- Versão do servidor: 5.6.41-84.1
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blogna48_cadeMinhaCasa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imovel_abandonado`
--

CREATE TABLE `imovel_abandonado` (
  `imovel_id` int(11) NOT NULL,
  `imagem` tinytext COLLATE utf8_unicode_ci,
  `logradouro` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` char(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `imovel_abandonado`
--

INSERT INTO `imovel_abandonado` (`imovel_id`, `imagem`, `logradouro`, `numero`, `complemento`, `bairro`, `cep`) VALUES
(1, './imoveis_abandonados_img/gen_couto_de_magalhaes.png', 'R. Gen. Couto de Magalhães', 388, NULL, 'Santa Ifigênia', '01212-030'),
(2, './imoveis_abandonados_img/r_do_carmo.png', 'R. do Carmo', 93, NULL, 'Sé', '01019-020'),
(3, './imoveis_abandonados_img/r_brg_tobias.png', 'R. Brg. Tobias', 700, NULL, 'Centro', '01032-001'),
(4, './imoveis_abandonados_img/r_dos_franceses.png', 'R. Ulisses Paranhos', 230, NULL, 'Bela Vista', '01330-020'),
(5, './imoveis_abandonados_img/r_dr_rodrigo_silva.png', 'R. Dr. Rodrigo Silva', 36, NULL, 'Sé', '01501-010'),
(6, './imoveis_abandonados_img/r_quintino_bocaiuva.png', 'R. Quintino Bocaiúva', 307, NULL, 'Sé', '06706-110');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imovel_denunciado`
--

CREATE TABLE `imovel_denunciado` (
  `imovel_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `logradouro` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cep` char(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `super_user` tinyint(1) DEFAULT NULL,
  `usuario` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `senha` char(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `super_user`, `usuario`, `email`, `senha`) VALUES
(1, NULL, 'José da Silva', 'josedasilva@gmail.com', '12345'),
(2, NULL, 'teste', 'teste@teste.com', 'c37bf859faf392800d739a41fe5af151'),
(3, NULL, 'teste2', 'teste2@gmail.com', '7b7a53e239400a13bd6be6c91c4f6c4e'),
(4, NULL, 'teste3', 'teste3@gmail.com', '6a4120be23c814f80233ecbb34e71adc'),
(5, NULL, 'Maria Gomes Alves', 'mariagomesalves@gmail.com', 'f8461b554d59b3014e8ff5165dc62fac'),
(6, 1, 'Gilvan Oliveira', 'vangilvan2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, NULL, 'Gilvan', 'caroline.rodrigues.medeiros@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `imovel_abandonado`
--
ALTER TABLE `imovel_abandonado`
  ADD PRIMARY KEY (`imovel_id`);

--
-- Índices de tabela `imovel_denunciado`
--
ALTER TABLE `imovel_denunciado`
  ADD PRIMARY KEY (`imovel_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `imovel_abandonado`
--
ALTER TABLE `imovel_abandonado`
  MODIFY `imovel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `imovel_denunciado`
--
ALTER TABLE `imovel_denunciado`
  MODIFY `imovel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `imovel_denunciado`
--
ALTER TABLE `imovel_denunciado`
  ADD CONSTRAINT `imovel_denunciado_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
