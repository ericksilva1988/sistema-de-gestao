<?php

    include_once('conexao.php');

    $database = new db();

    $conexao = $database-> conecta_mysql();

    // o banco isset deve ser criado no phpmyadmin primeiro

    $criaTabelaUsuarios = "create TABLE if not exists `isset`.`usuarios` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `cargo` VARCHAR(255), `login` VARCHAR(255), `senha` VARCHAR(255) NOT NULL , `alterar-senha` BOOLEAN NOT NULL , `usuario-visualizar` BOOLEAN, `usuario-cadastrar` BOOLEAN, `cliente-visualizar` BOOLEAN, `cliente-cadastrar` BOOLEAN, `caixa-visualizar` BOOLEAN, `caixa-cadastrar` BOOLEAN, `estoque-visualizar` BOOLEAN, `estoque-cadastrar` BOOLEAN, `id-empresa` INT, `eh-admin` BOOLEAN, `eh-master` BOOLEAN, `criado-em` TIMESTAMP, `atualizado-em` TIMESTAMP NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    
    $criaTabelaProdutos = "create TABLE if not exists `isset`.`produtos` (`id` INT NOT NULL AUTO_INCREMENT , `descricao` VARCHAR(1000) NOT NULL , `custo` FLOAT NOT NULL , `venda` FLOAT NOT NULL , `estoque-minimo` INT NOT NULL , `estoque-atual` INT NOT NULL , `codigo-barra` VARCHAR(500) , `fornecedor` INT , `marca` VARCHAR(255) , `modelo` VARCHAR(255) , `peso` FLOAT , `observacoes` VARCHAR(1000) , `id-empresa` INT , `criado-em` TIMESTAMP , `atualizado-em` TIMESTAMP NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $criaTabelaFornecedor = "create TABLE if not exists `isset`.`fornecedor` (`id` INT NOT NULL AUTO_INCREMENT , `empresa` VARCHAR(255) NOT NULL , `cnpj` VARCHAR(255)  , `telefone` VARCHAR(255)  , `email` VARCHAR(255)  , `representacao` VARCHAR(255)  , `representante` VARCHAR(255)  , `observacoes` VARCHAR(1000)  , `id-empresa` INT  , `criado-em` TIMESTAMP  , `atualizado-em` TIMESTAMP NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $criaTabelaCliente = "create TABLE if not exists `isset`.`cliente` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NOT NULL , `apelido` VARCHAR(255)  , `telefone` VARCHAR(255)  , `rua` VARCHAR(300)  , `numero` VARCHAR(300)  , `cep` VARCHAR(255)  , `cidade` VARCHAR(300)  , `estado` VARCHAR(300)  , `referencia` VARCHAR(600)  , `fiado` TINYINT  , `id-empresa` INT  , `criado-em` TIMESTAMP  , `atualizado-em` TIMESTAMP NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $criarTabelaEmpresa = "create TABLE if not exists `isset`.`empresa` (`id` INT NOT NULL AUTO_INCREMENT , `cnpj` VARCHAR(255)  , `empresa` VARCHAR(300) NOT NULL , `nome` VARCHAR(300)  , `endereco` VARCHAR(400)  , `email` VARCHAR(255)  , `telefone` VARCHAR(255)  , `referencia` VARCHAR(600)  , `segmento` VARCHAR(500)  , `criado-em` TIMESTAMP  , `atualizado-em` TIMESTAMP NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $criarTabelaEstado = "create TABLE if not exists `isset`.`estado` (`id` INT NOT NULL AUTO_INCREMENT , `sigla` VARCHAR(200)  , `nome` VARCHAR(500)  , `criado-em` TIMESTAMP  , `atualizado-em` TIMESTAMP NULL NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

	mysqli_query ($conexao, $criaTabelaUsuarios);
    mysqli_query ($conexao, $criaTabelaProdutos);
    mysqli_query ($conexao, $criaTabelaFornecedor);
    mysqli_query ($conexao, $criaTabelaCliente);
    mysqli_query ($conexao, $criarTabelaEmpresa);
    mysqli_query ($conexao, $criarTabelaEstado);
?>