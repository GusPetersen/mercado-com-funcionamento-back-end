<?php

include_once("templates/header.php");
   
?>

    
        <div>

            <?php include_once("templates/backbtn.html"); ?>

            
           
            <h1 id="main-title"> Criar Produto  </h1>

            <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">

                <input type="hidden" name="type" value="create">

                    <div class="form-group">

                        <label for="name">Nome do Produto: </label>

                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do Produto..." required>

                    </div>

                        <div class="form-group">

                            <label for="price">Digite do Preço: </label>

                            <input type="text" class="form-control" id="price" name="price" placeholder="Digite o Preço do produto..." required>

                        </div>

                            <div class="form-group">

                                <label for="pimg">Link da Imagem:</label>

                                <textarea type="text" class="form-control" id="pimg" name="pimg" placeholder="Digite o link da imagem..." rows="3"></textarea>

                            </div>

                                <div class="inputBox">
                                    
                                <label for="padariatyp">Digite do tipo (se for mercado não adicionar nada): </label>
                                    <br>
                                    <input type="radio" id="padariatyp" name="padariatyp" value="1" >
                                    <label for="1">Pães</label>
                                    <br>
                                    <input type="radio" id="padariatyp" name="padariatyp" value="2" >
                                    <label for="2">Salgados</label>
                                    <br>
                                    <input type="radio" id="padariatyp" name="padariatyp" value="3" >
                                    <label for="3">Bebidas</label>
                                    <br>
                                    <input type="radio" id="padariatyp" name="padariatyp" value="4" >
                                    <label for="4">Doces</label>
                                    
                                </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>

            </form>

        </div>

<?php

    include_once("templates/footer.php");

?>