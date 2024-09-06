<?php

    include_once('config/url.php');
    include_once('config/process.php');

	if(isset($_SESSION['msg'])) {
		$printMsg = $_SESSION['msg'];
		$_SESSION['msg'] = '';
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GustoEmpório</title>
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
    
<header>

    <nav class="menu">


    
        <ul  id="menu-link">
                <a class="logo" id="" href="<?= $BASE_URL ?>index.php"><img src="<?= $BASE_URL ?>img/logo1.png" alt=""></a>
                <li><a class="menu-itens" href="<?= $BASE_URL ?>index.php">Home</a></li>
                <li><a class="menu-itens" href="<?= $BASE_URL ?>padaria.php">Padaria</a></li>
                <li><a class="menu-itens" href="mercado.php">Mercado</a></li>
                <li><a class="menu-itens" href="#">Conta</a></li>
                <li><a class="menu-itens" href="sobre.php">Sobre</a></li>
                <li><a class="menu-itens" href="#">(51) 98765-4321</a></li>
                <li><a class="menu-itens" href="#"><img src="img/whats.png" alt=""></a></li> 

            </ul>

        
    </nav>

</header>