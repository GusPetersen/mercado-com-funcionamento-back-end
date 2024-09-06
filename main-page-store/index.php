<?php

    include_once("templates/header.php");

?>   

<div id="container-home">
    
<div>
    <img id="fundo-home" src="img/fundo-home.jpg" alt="">
</div>
<main>
    
    <nav id="icon-bg">
    
        <ul id="produtos">
            <li><img src="img/ecobag.png" alt=""></li>
    
            <ul class="contato">
                <li id="encomendas"><a href="mercado.php"><img src="img/encomendas.png" alt=""></a></li>
                <li id="contato"><a href="<?= $BASE_URL ?>formularioT.php"><img src="img/maleta.png" alt="" width="225"></a></li>
                <li id="contato"><a href="formularioC.php"><img src="img/carta.png" alt="" width="225"></a></li>
            </ul>
    
        </ul>
    
    </nav>
    
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
        </ul>
    </div>
</main>

<?php

    include_once("templates/footer.php");

?> 

