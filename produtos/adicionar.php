<?php
    if(isset($_GET['id'])){
        $productId = $_GET['id'];

        include '../includes/connection.php';

        // receive client information
        $sql = 'SELECT * FROM produtos WHERE id=' . $productId;
        $result = $connection->query($sql);

        // close connection
        mysqli_close($connection);
        
        $product = mysqli_fetch_object($result);
    }
    else{
        $productId = null;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <?php include '../includes/menu.php'; ?>
            <div class="container-data col-9 pt-3 p-5 h-100">
                <h1 class="mt-2 mb-4 text-center">OptiManage</h1>
                <form action=<?php 
                    if($productId){
                        echo "modify.php?id=$productId";
                    }
                    else{
                        echo 'add.php';
                    }
                ?> 
                    method="POST" 
                    class="w-100 grid-center"
                >
                    <div class="mb-4">
                        <label for="name" class="form-label">Nome do produto:</label>
                        <input type="text" class="form-control input-blue" name="name" id="name" placeholder="Digite o nome do produto" value="<?php if(isset($product)){ echo $product->name; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="category" class="form-label">Categoria:</label>
                        <input type="text" class="form-control input-blue" id="category" name="category" placeholder="Digite a categoria do produto" value="<?php if(isset($product)){ echo $product->category; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="form-label">Preço:</label>
                        <input type="text" class="form-control input-blue" id="price" name="price" placeholder="Digite o preço do produto" value="<?php if(isset($product)){ echo $product->price; } ?>">
                    </div>
                    <button type='submit' class='btn btn-blue'>
                        <?php 
                            if($productId){
                                echo "Salvar";
                            }
                            else{
                                echo "Cadastrar";
                            } 
                        ?>
                    </button>
                    <a href='./' class='btn btn-dark ms-2'>Voltar</a>
                </form>
            </div>
        </div>
    </div>

    <?php include '../includes/script.php'; ?>
</body>

</html>