<?php

session_start();

include_once('connection.php');

include_once('url.php');

$data = $_POST;

if(!empty($data)) {
    

    if($data['type'] === 'create') {
        
        $name = $data['name'];
        $price = $data['price'];
        $pimg = $data['pimg'];
        $padariatyp = $data['padariatyp'];
        
        if($_SESSION['type'] == 1) {
        $query = 'INSERT INTO produtos (name, price, prodtyp, padariatyp, pimg ) VALUES (:name, :price, 1, :padariatyp, :pimg)';
        } else if ($_SESSION['type'] == 2) {
            $query = 'INSERT INTO produtos (name, price, prodtyp, padariatyp, pimg ) VALUES (:name, :price, 2, :padariatyp, :pimg)';
        };
        $stmt = $conn->prepare($query);
        
        $stmt->bindparam(':name', $name);
        $stmt->bindparam(':price', $price);
        $stmt->bindparam(':pimg', $pimg);
        $stmt->bindparam(':padariatyp', $padariatyp);
        
        


        try {

            $stmt->execute();
            $_SESSION['msg'] = 'produto criado com sucesso!';

        } catch(PDOException $e) {

            $error = $e->getmessage();

            echo 'ERRO : $error';
        }
    
    } else if($data['type'] === 'edit') {
        
            $name = $data['name'];
            $price = $data['price'];
            $pimg = $data['pimg'];
            $id = $data['id'];

            $query = 'UPDATE produtos

                    SET name = :name, price = :price, pimg = :pimg
                    WHERE id = :id';

            $stmt = $conn->prepare($query);
                    
            $stmt->bindparam(':name', $name);
            $stmt->bindparam(':price', $price);
            $stmt->bindparam(':pimg', $pimg);
            $stmt->bindparam(':id', $id);

                try{
                    $stmt->execute();
                    $_SESSION["msg"] = 'Produto atualizado com sucesso!';

                } catch(PDOException $e) {
                    $error = $e->getMessage();
                    echo 'erro: $error';
                }
        
    } else if($data['type'] === 'delete') {
        
        $id = $data['id'];

        $query = 'DELETE FROM produtos WHERE id = :id';

        $stmt = $conn->prepare($query);
                
        $stmt->bindparam(':id', $id);

            try{
                $stmt->execute();
                $_SESSION["msg"] = 'Contato removido com sucesso!';

            } catch(PDOException $e) {
                $error = $e->getMessage();
                echo 'erro: $error';
            }
    
        }

        header('location:' . $BASE_URL . '../'.$_SESSION['back']);

} else{

$id;

if (!empty($_GET)) {
    $id = $_GET['id'];
}

    if (!empty($id)) {
        $query = 'SELECT * FROM produtos WHERE id = :id';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $produtos = $stmt->fetch();

    } else {

        $produtos = [];
        $query = 'SELECT * FROM produtos' ;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $produtos = $stmt->fetchALL();
    }
}
$conn = null;

?>