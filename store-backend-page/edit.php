<?php

include_once("templates/header.php");
?>
        <diV>

            <?php include_once("templates/backbtn.html"); ?>

            <h1 id="main-title"> Editar Produto  </h1>

            <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

                <input type="hidden" name="type" value="edit">

                <input type='hidden' name='id' value='<?= $produtos['id'] ?>'>

                    <div class="form-group">

                        <label for="name">Nome do Contato: </label>

                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do produto" value='<?= $produtos['name'] ?>' required>

                    </div>

                        <div class="form-group">

                            <label for="price">Preço: </label>

                            <input type="text" class="form-control" id="price" name="price" placeholder="Digite o Preço" value='<?= $produtos['price'] ?>' required>

                        </div>

                            <div class="form-group">

                                <label for="pimg">Link Imagem:</label>

                                <textarea type="text" class="form-control" id="pimg" name="pimg" placeholder="Digite o link da imagem" rows="3"><?= $produtos['pimg'] ?></textarea>

                            </div>

                        <button type="submit" class="btn btn-primary">Alterar</button>

            </form>

        </div>

<?php

    include_once("templates/footer.php");

?>