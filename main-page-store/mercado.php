<?php

    include_once("templates/header.php");

?> 

<main>

<ul class="produtos-pad">
<?php foreach ($produtos as $padaria):?>
    <?php if ($padaria['prodtyp'] == 2): ?>
        <li>
                <img src='<?= $padaria['pimg'] ?>'></img>
                <h3><?= $padaria['name'] ?></h3>
                
                <p class="produto-pad-preco" >Valor: R$ <?= $padaria['price'] ?></p>
                <p class="produto-pad-descricao"><button>Comprar</button></p>
                
        </li>
        <?php endif;?>		
<?php endforeach;?>
    </ul>

</main>


<?php

    include_once("templates/footer.php");

?> 
