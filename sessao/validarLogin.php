<?php 
	
	session_start();

	if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
		
		
		include_once('banco/conexao.php');

		$login = $_POST['login'];
		$senha = $_POST['senha'];

		//print_r($login . $senha);

		$database = new db();

        $conexao = $database-> conecta_mysql();

		$query = "select * from usuarios where login = '$login' and senha = '$senha'";

		$result = mysqli_query ($conexao, $query);

		// print_r($result);

		if (mysqli_num_rows($result) < 1) {

			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			//header('Location: ../index.php');
			$msg =  "Acesso Negado, Erro na Senha ou E-mail";
			
			
		}
		
		else{

			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			


			while ($row = mysqli_fetch_assoc($result)) {
				 
				echo $row['login'];

				echo $row['nome'];

				$_SESSION['usuario-visualizar'] = $row['usuario-visualizar'];
				$_SESSION['usuario-cadastrar'] = $row['usuario-cadastrar'];
				$_SESSION['cliente-visualizar'] = $row['cliente-visualizar'];
				$_SESSION['cliente-cadastrar'] = $row['cliente-cadastrar'];
				$_SESSION['caixa-visualizar'] = $row['caixa-visualizar'];
				$_SESSION['caixa-cadastrar'] = $row['caixa-cadastrar'];
				$_SESSION['estoque-visualizar'] = $row['estoque-visualizar'];
				$_SESSION['estoque-cadastrar'] = $row['estoque-cadastrar'];
				$_SESSION['alterar-senha'] = $row['alterar-senha'];

				$_SESSION['id-empresa'] = $row['id-empresa'];
				$_SESSION['eh-master'] = $row['eh-master'];
				$_SESSION['eh-admin'] = $row['eh-admin'];

				header('Location: sessao/usuario.php');




			}

			 // $row = mysqli_fetch_assoc($result);

 			// 	echo "Seja bem vindo " . $row['login'];

 			// 	if ($row['admin']) {
 			// 		header('Location: listar.php');
 			// 	}
 			// 	else{
 			// 		header('Location: index.php');

 			// 		echo "Lamentamos $login, o sistema ainda não está preparado para você. <br> Em breve teremos o seu acesso.";
 			// 	}

			// header('Location: sistemaCliente.php');
		}

		//Não Acessar
	} else{
		//header('Location: ../index.php');
		$msg =  "Acesso Negado, Erro na Senha ou E-mail";
		
	}

 ?>