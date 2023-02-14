<?php

    include_once('conexao.php');

    $database = new db();

    $conexao = $database-> conecta_mysql();

    $criaBancoDeDados = "create database if not exists `sistema-comercial`";

    $criaTabelaUsuarios = "create TABLE if not exists `sistema-comercial`.`usuarios` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `cargo` VARCHAR(255) NOT NULL , `login` VARCHAR(255) NOT NULL , `senha` VARCHAR(255) NOT NULL , `alterar-senha` BOOLEAN NOT NULL , `usuario-visualizar` BOOLEAN NOT NULL , `usuario-cadastrar` BOOLEAN NOT NULL , `cliente-visualizar` BOOLEAN NOT NULL , `cliente-cadastrar` BOOLEAN NOT NULL , `caixa-visualizar` BOOLEAN NOT NULL , `caixa-cadastrar` BOOLEAN NOT NULL , `estoque-visualizar` BOOLEAN NOT NULL , `estoque-cadastrar` BOOLEAN NOT NULL , `id-empresa` INT NOT NULL , `eh-admin` BOOLEAN NOT NULL , `eh-master` BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
    
    $criaTabelaProdutos = "create TABLE if not exists `sistema-comercial`.`produtos` (`id` INT NOT NULL AUTO_INCREMENT , `descricao` VARCHAR(1000) NOT NULL , `custo` FLOAT NOT NULL , `venda` FLOAT NOT NULL , `estoque-minimo` INT NOT NULL , `estoque-atual` INT NOT NULL , `codigo-barra` VARCHAR(500) NOT NULL , `fornecedor` INT NOT NULL , `marca` VARCHAR(255) NOT NULL , `modelo` VARCHAR(255) NOT NULL , `peso` FLOAT NOT NULL , `observacoes` VARCHAR(1000) NOT NULL , `id-empresa` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

    $criaTabelaFornecedor = "create TABLE if not exists `sistema-comercial`.`fornecedor` (`id` INT NOT NULL AUTO_INCREMENT , `empresa` VARCHAR(255) NOT NULL , `cnpj` VARCHAR(255) NOT NULL , `telefone` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `representacao` VARCHAR(255) NOT NULL , `representante` VARCHAR(255) NOT NULL , `observacoes` VARCHAR(1000) NOT NULL , `id-empresa` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

    $criaTabelaCliente = "create TABLE if not exists `sistema-comercial`.`cliente` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `apelido` VARCHAR(255) NOT NULL , `telefone` VARCHAR(255) NOT NULL , `rua` VARCHAR(300) NOT NULL , `numero` VARCHAR(300) NOT NULL , `cep` VARCHAR(255) NOT NULL , `cidade` VARCHAR(300) NOT NULL , `estado` VARCHAR(300) NOT NULL , `referencia` VARCHAR(600) NOT NULL , `fiado` TINYINT NOT NULL , `id-empresa` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

    $criarTabelaEmpresa = "create TABLE if not exists `sistema-comercial`.`empresa` (`id` INT NOT NULL AUTO_INCREMENT , `cnpj` VARCHAR(255) NOT NULL , `empresa` VARCHAR(300) NOT NULL , `nome` VARCHAR(300) NOT NULL , `endereco` VARCHAR(400) NOT NULL , `email` VARCHAR(255) NOT NULL , `telefone` VARCHAR(255) NOT NULL , `referencia` VARCHAR(600) NOT NULL , `segmento` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

    $criarTabelaEstado = "create TABLE if not exists `sistema-comercial`.`estado` (`id` INT NOT NULL AUTO_INCREMENT , `sigla` VARCHAR(200) NOT NULL , `nome` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

    mysqli_query ($conexao, $criaBancoDeDados);
	mysqli_query ($conexao, $criaTabelaUsuarios);
    mysqli_query ($conexao, $criaTabelaProdutos);
    mysqli_query ($conexao, $criaTabelaFornecedor);
    mysqli_query ($conexao, $criaTabelaCliente);
    mysqli_query ($conexao, $criarTabelaEmpresa);
    mysqli_query ($conexao, $criarTabelaEstado);

?>