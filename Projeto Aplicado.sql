--
-- Banco de dados: `watermetter`
--
-- --------------------------------------------------------
--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `EMPRESA_ID` int NOT NULL AUTO_INCREMENT,
  `RAZAO_SOCIAL` varchar(50) NOT NULL,
  `CNPJ` text NOT NULL,
  `TELEFONE` text NULL,
  `ENDERECO` varchar(30) NULL,
  `CEP` text NULL,
  `CIDADE` varchar(20) NULL,
  `UF` varchar(2) NULL,
  PRIMARY KEY (`EMPRESA_ID`)
);

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`EMPRESA_ID`, `RAZAO_SOCIAL`, `CNPJ`, `TELEFONE`, `ENDERECO`, `CEP`, `CIDADE`, `UF`) VALUES
(4, 'Aoaoishi', '65', '(49) 9 9810', 'Minas Gerais', '', 'Chapecó', 'AS'),
(5, 'Subaru', '65.165.498/8974-13', '(49) 9 9810-0840', 'Minas Gerais', '98498-49', 'Vaticano', 'AS'),
(6, 'ABC', '56.465.454/5545-45', '(89) 4 6456-4654', 'ABRCADABRA', '98899-898', 'SANCTUM', 'SF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

DROP TABLE IF EXISTS `unidade`;
CREATE TABLE IF NOT EXISTS `unidade` (
  `UNIDADE_ID` int NOT NULL AUTO_INCREMENT,
  `RAZAO_SOCIAL` varchar(500) NOT NULL,
  `CNPJ` text NOT NULL,
  `TELEFONE` text NOT NULL,
  `ENDERECO` varchar(500) NOT NULL,
  `CIDADE` varchar(250) NOT NULL,
  `UF` varchar(500) NOT NULL,
  PRIMARY KEY (`UNIDADE_ID`)
);

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`UNIDADE_ID`, `RAZAO_SOCIAL`, `CNPJ`, `TELEFONE`, `ENDERECO`, `CIDADE`, `UF`) VALUES
(2, 'Aoaoishi', '65.165.498/8974-13', '(49) 9 9810-0840', 'Minas Gerais', 'Chapecó', 'Santa Catarina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `USUARIOID` int NOT NULL AUTO_INCREMENT,
  `NOME_USUARIO` varchar(150) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `EMAIL` text NOT NULL,
  `SENHA` text NOT NULL,
  `TELEFONE` text NOT NULL,
  `ENDERECO` varchar(250) NOT NULL,
  `CIDADE` varchar(200) NOT NULL,
  `UF` varchar(200) NOT NULL,
  PRIMARY KEY (`USUARIOID`)
);

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`USUARIOID`, `NOME_USUARIO`, `CPF`, `EMAIL`, `SENHA`, `TELEFONE`, `ENDERECO`, `CIDADE`, `UF`) VALUES
(1, 'SEBASTIAN', '', 'teste@teste.com', 'teste', '', '', '', ''),
(2, 'SEBASTIAN ALMEIDA', '', 'sebastian@gmail.com', '1234', '', '', '', ''),
(4, 'Alucard ', '654.898.131-21', 'alucard1@gmail.com', '1234', '(49) 9 3322', 'Hellsing', 'Vaticano', 'It'),
(5, 'Seras', '981.186.516-51', 'SerasHellsing@gmail.com', 'SanzenSekai', '(49) 9 3322-8044', 'Hellsing', 'Vaticano', 'Italia'),
(6, 'XANDÃO', '887.498.498-49', 'SUPER@GMAIL.COM', '1234', '(49) 4 9849-8498', 'DOUBLE BICPES', 'SANCTUM', 'SF');
COMMIT;
-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
CREATE TABLE IF NOT EXISTS `equipamentos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `MODELO` text NOT NULL,
  `ANO` text NOT NULL,
  `COR` text NOT NULL,
  `VOLTAGEM` text NOT NULL,
  PRIMARY KEY (`ID`)
);

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`ID`, `MODELO`, `ANO`, `COR`, `VOLTAGEM`) VALUES
(1, 'Azure', '2015', 'Azul', '220'),
(2, 'Arcon', '2022', 'Preta', '220'),
(3, 'Azure', '2015', 'Preta', '220');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorios`
--

DROP TABLE IF EXISTS `relatorios`;
CREATE TABLE IF NOT EXISTS `relatorios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TEMPERATURA` float NOT NULL,
  `UMIDADE` float NOT NULL,
  `DATA` date NOT NULL,
  PRIMARY KEY (`ID`)
);

--
-- Extraindo dados da tabela `relatorios`
--

INSERT INTO `relatorios` (`ID`, `TEMPERATURA`, `UMIDADE`, `DATA`) VALUES
(1, 25, 65, '0000-00-00');

