-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2025 às 20:11
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
-- Banco de dados: `db_gcsg`
--
DROP DATABASE IF EXISTS `db_gcsg`;
CREATE DATABASE IF NOT EXISTS `db_gcsg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_gcsg`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `autorizacao_voz`
--

DROP TABLE IF EXISTS `autorizacao_voz`;
CREATE TABLE IF NOT EXISTS `autorizacao_voz` (
  `id_voz` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(70) NOT NULL,
  `cpf_aluno` varchar(15) NOT NULL,
  `rg_aluno` varchar(15) NOT NULL,
  `nome_responsavel` varchar(70) NOT NULL,
  `cpf_responsavel` varchar(15) NOT NULL,
  `rg_responsavel` varchar(15) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_voz`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autorizacao_voz`
--

INSERT INTO `autorizacao_voz` (`id_voz`, `nome_aluno`, `cpf_aluno`, `rg_aluno`, `nome_responsavel`, `cpf_responsavel`, `rg_responsavel`, `endereco`, `bairro`, `cidade`) VALUES
(1, 'fhgjk ghkjl hgjk', '45678', '34562', 'dfghbj fghjk ghjk', '345678', '45678', 'srdtfghjkdfghjklfghjkl', 'xdfcgvbujhnki', 'srdxcfgbjhknlm'),
(2, 'larissa', 'dfghjkl', 'fghjk', 'dfghjk', 'gfhjkl', 'fghjk', 'fghjkl', 'hgjklç', 'sdfghj'),
(3, 'larissa borges gazoli', '12345678909', '123456789', 'mae do aluno', '1234567890', '234567890768', 'rua dr. carlos barbosa', 'centro', 'carlos barbosa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_medicos`
--

DROP TABLE IF EXISTS `dados_medicos`;
CREATE TABLE IF NOT EXISTS `dados_medicos` (
  `nome` varchar(70) NOT NULL,
  `raca` enum('amarela','branca','indigena','parda','negra','não declarado') NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `peso` decimal(6,3) NOT NULL,
  `altura` decimal(3,2) NOT NULL,
  `sexo` enum('m','f') NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `alergia` varchar(150) NOT NULL,
  `plano_saude` varchar(100) NOT NULL,
  `email_aluno` varchar(150) DEFAULT NULL,
  `nome_mae` varchar(70) NOT NULL,
  `telefone_aluno` varchar(15) DEFAULT NULL,
  `telefone_responsavel1` varchar(15) NOT NULL,
  `telefone_responsavel2` varchar(15) DEFAULT NULL,
  `estado_civil` varchar(40) NOT NULL,
  `naturalidade_responsavel` varchar(50) NOT NULL,
  `observacoes_complementares` varchar(500) DEFAULT NULL,
  `responsavel1` varchar(70) NOT NULL,
  `responsavel2` varchar(70) DEFAULT NULL,
  `responsavel3` varchar(70) DEFAULT NULL,
  `responsavel4` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_medicos`
--

INSERT INTO `dados_medicos` (`nome`, `raca`, `idade`, `peso`, `altura`, `sexo`, `endereco`, `numero`, `bairro`, `cidade`, `cep`, `alergia`, `plano_saude`, `email_aluno`, `nome_mae`, `telefone_aluno`, `telefone_responsavel1`, `telefone_responsavel2`, `estado_civil`, `naturalidade_responsavel`, `observacoes_complementares`, `responsavel1`, `responsavel2`, `responsavel3`, `responsavel4`) VALUES
('larissa', '', 16, 68.000, 1.00, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'união estábel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('', '', NULL, 0.000, 0.00, 'm', '', 0, '', '', '', '', '', NULL, '', NULL, '', NULL, '', '', NULL, '', NULL, NULL, NULL),
('larissa', '', 16, 68.000, 1.63, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('larissa', '', 16, 68.000, 1.63, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('larissa', 'indigena', 16, 68.000, 1.63, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('larissa', 'parda', 16, 68.000, 1.63, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('larissa', 'negra', 16, 68.000, 1.63, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('larissa', 'não declarado', 16, 68.000, 1.63, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('larissa', 'não declarado', 16, 68.000, 1.63, 'm', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk'),
('larissa', 'negra', 16, 68.000, 1.63, 'f', 'dr. carlos barbosa', 570, 'centro', 'carlosa barbosa', '95185000', 'intolerancia lactose', 'atf', 'larissagazoli45@gmail.com', 'charlene mendonca borges', '54984057081', '5498442049', '1234567878', 'uniao estavel', 'rio grandense', 'sdfghjkldfghjk,sfdghjkldfghjklgfhjk.', 'sdfghjk fdghjkl dfghjkl', 'dfghjkl dfghjkl fghjkl', 'dfghjkl dgfhjkjl gfvhgbjhnk', 'sdfghjk gfhjklç sdfghjk');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_alunos`
--

DROP TABLE IF EXISTS `tb_alunos`;
CREATE TABLE IF NOT EXISTS `tb_alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(90) NOT NULL,
  `cpf_aluno` bigint(11) NOT NULL,
  `telefone_aluno` bigint(11) DEFAULT NULL,
  `email_aluno` varchar(40) DEFAULT NULL,
  `matricula_senai` int(6) NOT NULL,
  `nascimento_aluno` date DEFAULT NULL,
  `idade_aluno` int(2) DEFAULT NULL,
  `serie_aluno` enum('sexto_ano','setimo_ano','oitavo_ano','nono_ano') NOT NULL,
  `escolha_dia` set('segunda_manha','segunda_tarde','terca_manha','terca_tarde','quarta_manha','quarta_tarde','quinta_manha','quinta_tarde','sexta_manha','sexta_tarde') NOT NULL,
  `nome_responsavel` varchar(90) NOT NULL,
  `estado_natal` varchar(50) NOT NULL,
  `naturalidade` varchar(70) NOT NULL,
  `sexo` enum('m','f') NOT NULL,
  `estado_civil` enum('solteiro','casado','divorciado','viuvo') NOT NULL,
  `nacionalidade` varchar(60) NOT NULL,
  `cor_raca` enum('branco','preto','pardo','indigena','amarelo') NOT NULL,
  `grau_de_instrucao` enum('ensino fundamental completo','ensino fundamental incompleto','ensino médio incompleto','ensino médio completo','curso superior incompleto','curso superior completo','mestrado incompleto','mestrado completo','doutorado incompleto','doutorado completo','phd') NOT NULL,
  `cep` varchar(11) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `nome_escola` varchar(80) NOT NULL,
  `situacao_ocupacional` enum('ativo','inativo') NOT NULL,
  `tipo_de_escola` enum('estadual','municípal','particular','evangélica') DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id_aluno`, `nome_aluno`, `cpf_aluno`, `telefone_aluno`, `email_aluno`, `matricula_senai`, `nascimento_aluno`, `idade_aluno`, `serie_aluno`, `escolha_dia`, `nome_responsavel`, `estado_natal`, `naturalidade`, `sexo`, `estado_civil`, `nacionalidade`, `cor_raca`, `grau_de_instrucao`, `cep`, `rua`, `numero`, `estado`, `cidade`, `pais`, `nome_escola`, `situacao_ocupacional`, `tipo_de_escola`) VALUES
(1, '1', 1, 1, 'a@a', 0, NULL, 0, 'sexto_ano', 'segunda_tarde', '1', '1', '1', 'f', 'solteiro', '1', 'branco', 'ensino fundamental completo', '1', '1', 1, '1', '1', '1', '1', 'ativo', 'estadual'),
(2, '1', 1, 1, 'a@a', 0, NULL, 0, 'sexto_ano', 'segunda_tarde', '1', '1', '1', 'f', 'solteiro', '1', 'branco', 'ensino fundamental completo', '1', '1', 1, '1', '1', '1', '1', 'ativo', 'estadual'),
(3, '1', 1, 1, 'a@a', 0, NULL, 0, 'sexto_ano', 'segunda_tarde', 'a', '1', '1', 'f', 'solteiro', '1', 'branco', 'ensino fundamental completo', '1', '1', 1, '1', '1', '1', '1', 'ativo', 'estadual'),
(4, '1', 1, 1, 'a@a', 0, NULL, 0, 'sexto_ano', 'segunda_tarde', '1', '1', '1', 'f', 'solteiro', '1', 'branco', 'ensino fundamental completo', '1', '1', 1, '1', '1', '1', '1', 'ativo', 'estadual'),
(5, 'ana', 1, 1, '11@a', 0, NULL, 0, 'sexto_ano', 'quarta_tarde', '1', '1', '1', 'f', 'solteiro', '1', 'branco', 'ensino fundamental completo', '1', '1', 1, '1', '1', '1', '1', 'ativo', 'estadual'),
(6, '1', 1, 1, 'a@a', 0, NULL, 0, 'sexto_ano', 'quarta_manha', '1', '1', '1', 'f', 'solteiro', '1', 'branco', 'ensino fundamental completo', '11', '1', 1, '1', '1', '1', '1', 'ativo', 'estadual'),
(7, 'maria', 12312313, 2112331231, 'maria@dantas', 0, NULL, 0, 'sexto_ano', 'quinta_tarde', 'sabrina', 'm', 'm', 'f', 'solteiro', 'brasile', 'branco', 'ensino fundamental completo', '1', '1', 1, '1', '1', '1', '1', '', 'estadual'),
(8, 'asa', 22, 1, 'a@a', 0, NULL, 0, 'oitavo_ano', 'sexta_manha', 'asasasa', '1', '1', 'm', 'divorciado', '1', 'pardo', '', '1', '1', 1, '1', '1', '1', '1', 'inativo', 'particular'),
(9, 'thay', 3, 3, 'a@qqqq', 0, NULL, 0, 'nono_ano', 'sexta_manha', 'pai', '3', '3', 'f', 'casado', '3', 'amarelo', 'ensino fundamental incompleto', '3', '3', 3, '3', '3', '3', 'eeeee', '', 'evangélica'),
(10, 'Thaina', 33, 33, 's@ss', 0, NULL, 0, 'setimo_ano', 'sexta_tarde', 'reere', 'e', 'e', 'm', 'divorciado', 'e', 'amarelo', 'ensino fundamental incompleto', '2', '2', 2, '2', '2', '2', '2', 'inativo', 'particular'),
(11, 'Thaina', 33, 33, 's@ss', 0, NULL, 0, 'setimo_ano', 'sexta_tarde', 'reere', 'e', 'e', 'm', 'divorciado', 'e', 'amarelo', 'ensino fundamental incompleto', '2', '2', 2, '2', '2', '2', '2', 'inativo', 'particular'),
(12, 'Thaina', 33, 33, 's@ss', 0, NULL, 0, 'setimo_ano', 'sexta_tarde', 'wqeqwqeq', 'e', 'e', 'm', 'divorciado', 'e', 'amarelo', 'ensino fundamental incompleto', '2', '2', 2, '2', '2', '2', '2', 'inativo', 'particular');

--
-- Acionadores `tb_alunos`
--
DROP TRIGGER IF EXISTS `idade`;
DELIMITER $$
CREATE TRIGGER `idade` BEFORE INSERT ON `tb_alunos` FOR EACH ROW begin
if new.nascimento_aluno is null then
set new.idade_aluno = 'não inserido';
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(100) NOT NULL,
  `quant_trilhas` int(2) DEFAULT NULL,
  `indicacao_turma` varchar(50) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `quant_horas` int(11) DEFAULT NULL,
  `dias_curso` set('segunda_manha','segunda_tarde','terca_manha','terca_tarde','quarta_manha','quarta_tarde','quinta_manha','quinta_tarde','sexta_manha','sexta_tarde') DEFAULT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `data_inicio` (`data_inicio`),
  KEY `data_final` (`data_final`),
  KEY `dias_curso` (`dias_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_fotos`
--

DROP TABLE IF EXISTS `tb_fotos`;
CREATE TABLE IF NOT EXISTS `tb_fotos` (
  `id_fotos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(90) NOT NULL,
  `rg_cpf_aluno` varchar(255) NOT NULL,
  `comprovante_escolaridade` varchar(255) NOT NULL,
  `rg_cpf_responsavel` varchar(255) NOT NULL,
  `comprovante_residencia` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_historico_pessoal`
--

DROP TABLE IF EXISTS `tb_historico_pessoal`;
CREATE TABLE IF NOT EXISTS `tb_historico_pessoal` (
  `id_ficha` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `raca` enum('amarela','branca','indigena','parda','negra','não declarado') NOT NULL,
  `idade` int(11) NOT NULL,
  `peso` decimal(3,2) DEFAULT NULL,
  `sexo` enum('m','f') NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(70) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(11) NOT NULL,
  PRIMARY KEY (`id_ficha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_infoscursos`
--

DROP TABLE IF EXISTS `tb_infoscursos`;
CREATE TABLE IF NOT EXISTS `tb_infoscursos` (
  `id_infos` int(11) NOT NULL AUTO_INCREMENT,
  `ja_fez_curso` enum('sim','nao') NOT NULL,
  `ano_realizou_trilha` year(4) DEFAULT NULL,
  `serie_escolar` enum('nono ano','primeiro ano','segundo ano','terceiro ano') DEFAULT NULL,
  `corsos_feitos` set('empreendedorismo','nocoes de eletrica industrial','fundamentos de pneumatica e hidraulica','processos logisticos','planejamento e controle da producao','nocoes de lean manufacturing','modelagem em impressora 3D','impressora 3D','nocoes de manutencao de maquinas','nocoes de usinagem','comunicacao e oratoria','nocoes de usinagem CNC','desenvolvimento de competencias profissionais emocionais e tecnologicas','eletronica - analogica e digital','robotica - lego zoom','introducao a inovacao e criatividade','informatica basica','nocoes de rotinas administrativas','mecanica industrial','instalacoes eletricas','principios da automacao industrial','nocoes em programacao de arduino','relacionamento interpessoal') DEFAULT NULL,
  `trilhas_feitas` varchar(200) DEFAULT NULL,
  `carga_horaria_total` int(3) DEFAULT NULL,
  `horario` enum('segunda_manha','segunda_tarde','terca_manha','terca_tarde','quarta_manha','quarta_tarde','quinta_manha','quinta_tarde','sexta_manha','sexta_tarde') DEFAULT NULL,
  PRIMARY KEY (`id_infos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_matricula`
--

DROP TABLE IF EXISTS `tb_matricula`;
CREATE TABLE IF NOT EXISTS `tb_matricula` (
  `id_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno` int(11) DEFAULT NULL,
  `id_trilha` int(11) DEFAULT NULL,
  `dia_definitivo` enum('segunda_manha','segunda_tarde','terca_manha','terca_tarde','quarta_manha','quarta_tarde','quinta_manha','quinta_tarde','sexta_manha','sexta_tarde') DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_matricula`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_trilha` (`id_trilha`),
  KEY `turma` (`id_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pais`
--

DROP TABLE IF EXISTS `tb_pais`;
CREATE TABLE IF NOT EXISTS `tb_pais` (
  `id_responsavel` int(11) NOT NULL AUTO_INCREMENT,
  `nome_responsavel` varchar(90) NOT NULL,
  `telefone_responsavel` bigint(11) NOT NULL,
  `email_responsavel` varchar(40) NOT NULL,
  `cpf_responsavel` bigint(11) DEFAULT NULL,
  `nascimento_responsavel` date NOT NULL,
  `sexo_responsavel` enum('m','f') NOT NULL,
  `estado_civil_responsavel` enum('solteiro','casado','divorciado','viuvo') NOT NULL,
  PRIMARY KEY (`id_responsavel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_trilhas`
--

DROP TABLE IF EXISTS `tb_trilhas`;
CREATE TABLE IF NOT EXISTS `tb_trilhas` (
  `id_trilha` int(11) NOT NULL AUTO_INCREMENT,
  `nome_trilha` varchar(200) NOT NULL,
  `quant_horas` int(11) DEFAULT NULL,
  `quant_turmas` int(2) DEFAULT NULL,
  `id_curso1` int(11) DEFAULT NULL,
  `id_curso2` int(11) DEFAULT NULL,
  `id_curso3` int(11) DEFAULT NULL,
  `id_curso4` int(11) DEFAULT NULL,
  `id_curso5` int(11) DEFAULT NULL,
  `id_curso6` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  PRIMARY KEY (`id_trilha`),
  KEY `curso` (`id_curso1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_turmas`
--

DROP TABLE IF EXISTS `tb_turmas`;
CREATE TABLE IF NOT EXISTS `tb_turmas` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluno1` int(11) DEFAULT NULL,
  `id_aluno2` int(11) DEFAULT NULL,
  `id_aluno3` int(11) DEFAULT NULL,
  `id_aluno4` int(11) DEFAULT NULL,
  `id_aluno5` int(11) DEFAULT NULL,
  `id_aluno6` int(11) DEFAULT NULL,
  `id_aluno7` int(11) DEFAULT NULL,
  `id_aluno8` int(11) DEFAULT NULL,
  `id_aluno9` int(11) DEFAULT NULL,
  `id_aluno10` int(11) DEFAULT NULL,
  `id_aluno11` int(11) DEFAULT NULL,
  `id_aluno12` int(11) DEFAULT NULL,
  `id_aluno13` int(11) DEFAULT NULL,
  `id_aluno14` int(11) DEFAULT NULL,
  `id_aluno15` int(11) DEFAULT NULL,
  `id_aluno16` int(11) DEFAULT NULL,
  `id_aluno17` int(11) DEFAULT NULL,
  `id_aluno18` int(11) DEFAULT NULL,
  `id_aluno19` int(11) DEFAULT NULL,
  `id_aluno20` int(11) DEFAULT NULL,
  `id_aluno21` int(11) DEFAULT NULL,
  `id_aluno22` int(11) DEFAULT NULL,
  `id_aluno23` int(11) DEFAULT NULL,
  `id_aluno24` int(11) DEFAULT NULL,
  `id_aluno25` int(11) DEFAULT NULL,
  `id_aluno26` int(11) DEFAULT NULL,
  `id_aluno27` int(11) DEFAULT NULL,
  `id_aluno28` int(11) DEFAULT NULL,
  `id_aluno29` int(11) DEFAULT NULL,
  `id_aluno30` int(11) DEFAULT NULL,
  `id_trilha` int(11) NOT NULL,
  `nome_professor` varchar(90) DEFAULT NULL,
  `dia_definitivo` set('segunda_manha','segunda_tarde','terca_manha','terca_tarde','quarta_manha','quarta_tarde','quinta_manha','quinta_tarde','sexta_manha','sexta_tarde') NOT NULL,
  `serie_turma` enum('sexto','setimo','oitavo','nono') NOT NULL,
  `situacao_turma` enum('aberta','completa','fechada') NOT NULL DEFAULT 'aberta',
  `campus` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Acionadores `tb_turmas`
--
DROP TRIGGER IF EXISTS `status`;
DELIMITER $$
CREATE TRIGGER `status` BEFORE INSERT ON `tb_turmas` FOR EACH ROW BEGIN
  DECLARE preenchido INT DEFAULT 0;

  SET preenchido =
    (CASE WHEN NEW.id_aluno1 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno2 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno3 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno4 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno5 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno6 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno7 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno8 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno9 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno10 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno11 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno12 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno13 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno14 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno15 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno16 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno17 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno18 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno19 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno20 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno21 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno22 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno23 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno24 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno25 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno26 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno27 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno28 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno29 IS NOT NULL THEN 1 ELSE 0 END) +
    (CASE WHEN NEW.id_aluno30 IS NOT NULL THEN 1 ELSE 0 END);

  IF preenchido < 25 THEN
    SET NEW.situacao_turma = 'aberta';
  ELSEIF preenchido = 25 THEN
    SET NEW.situacao_turma = 'completa';
  ELSEIF preenchido = 30 THEN
    SET NEW.situacao_turma = 'fechada';
  ELSE
    SET NEW.situacao_turma = 'completa';
  END IF;
END
$$
DELIMITER ;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_matricula`
--
ALTER TABLE `tb_matricula`
  ADD CONSTRAINT `tb_matricula_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `tb_alunos` (`id_aluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_matricula_ibfk_2` FOREIGN KEY (`id_trilha`) REFERENCES `tb_trilhas` (`id_trilha`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
CREATE TRIGGER trg_tb_alunos_ins AFTER INSERT ON tb_alunos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_alunos');

CREATE TRIGGER trg_tb_alunos_up AFTER UPDATE ON tb_alunos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_alunos');

CREATE TRIGGER trg_tb_alunos_del AFTER DELETE ON tb_alunos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_alunos');

CREATE TRIGGER trg_dados_medicos_ins AFTER INSERT ON dados_medicos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('dados_medicos');

CREATE TRIGGER trg_dados_medicos_up AFTER UPDATE ON dados_medicos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('dados_medicos');

CREATE TRIGGER trg_dados_medicos_del AFTER DELETE ON dados_medicos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('dados_medicos');

CREATE TRIGGER trg_tb_infoscursos_ins AFTER INSERT ON tb_infoscursos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_infoscursos');

CREATE TRIGGER trg_tb_infoscursos_up AFTER UPDATE ON tb_infoscursos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_infoscursos');

CREATE TRIGGER trg_tb_infoscursos_del AFTER DELETE ON tb_infoscursos
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_infoscursos');

CREATE TRIGGER trg_tb_historico_pessoal_ins AFTER INSERT ON tb_historico_pessoal
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_historico_pessoal');

CREATE TRIGGER trg_tb_historico_pessoal_up AFTER UPDATE ON tb_historico_pessoal
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_historico_pessoal');

CREATE TRIGGER trg_tb_historico_pessoal_del AFTER DELETE ON tb_historico_pessoal
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_historico_pessoal');

CREATE TRIGGER trg_tb_matricula_ins AFTER INSERT ON tb_matricula
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_matricula');

CREATE TRIGGER trg_tb_matricula_up AFTER UPDATE ON tb_matricula
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_matricula');

CREATE TRIGGER trg_tb_matricula_del AFTER DELETE ON tb_matricula
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_matricula');

CREATE TRIGGER trg_tb_pais_ins AFTER INSERT ON tb_pais
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_pais');

CREATE TRIGGER trg_tb_pais_up AFTER UPDATE ON tb_pais
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_pais');

CREATE TRIGGER trg_tb_pais_del AFTER DELETE ON tb_pais
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_pais');

CREATE TRIGGER trg_tb_turmas_ins AFTER INSERT ON tb_turmas
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_turmas');

CREATE TRIGGER trg_tb_turmas_up AFTER UPDATE ON tb_turmas
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_turmas');

CREATE TRIGGER trg_tb_turmas_del AFTER DELETE ON tb_turmas
FOR EACH ROW INSERT INTO export_queue (tabela) VALUES ('tb_turmas');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
