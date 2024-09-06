<?php
    include_once('templates/header.php');
?>
    <div class='container' id='view-contact-container'>

            <?php include_once('templates/backbtn.html'); ?>    

        <h1 id='main-title'><?= $produtos['name'] ?></h1>

        <p class='bold'>Preço: </p>
        <p><?= $produtos['price'] ?></p>

        <p class='bold'>Descrição: </p>
        <img src='<?= $produtos['pimg'] ?>' id='pimg'></img>
        
    </div>

<?php
    include_once('templates/footer.php');
?>