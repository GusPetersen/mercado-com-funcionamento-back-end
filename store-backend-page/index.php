
<?php

	include_once("templates/header.php");
	$_SESSION['back'] = 'index.php';
?>



		<h1 id='main-title'> Menu do Dashboard</h1>
		
		<div>
        <ul id="padaria">
            <li>
                <img src="img/padaria.png" alt="">
                <a href="<?= $BASE_URL ?>padaria.php"><p>Ir à Padaria</p></a>
            </li>
            <li>
                <img src="img/mercado.png" alt="">
                <a href="<?= $BASE_URL ?>mercado.php"><p>Ir ao Mercado</p></a>
            </li>
			<li>
                <img src="img/mercado.png" alt="">
                <a href="<?= $BASE_URL ?>mercado.php"><p>Ir ao Mercado</p></a>
            </li>
			<li>
                <img src="img/mercado.png" alt="">
                <a href="<?= $BASE_URL ?>mercado.php"><p>Ir ao Mercado</p></a>
            </li>
			<li>
                <img src="img/mercado.png" alt="">
                <a href="<?= $BASE_URL ?>mercado.php"><p>Ir ao Mercado</p></a>
            </li>
        </ul>
    </div>

			
		
<?php

	include_once("templates/footer.php");
?>




