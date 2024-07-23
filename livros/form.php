<?php
    if(isset($_GET['id'])){
        $bookId = $_GET['id'];

        include '../includes/connection.php';

        // receive client information
        $sql = 'SELECT * FROM livros WHERE id=' . $bookId;
        $result = $connection->query($sql);

        // close connection
        mysqli_close($connection);
        
        // trasform result in object
        $book = mysqli_fetch_object($result);
    }
    else{
        $bookId = null;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="container-data col-9 pt-3 p-5 h-100">
                <h1 class="mt-2 mb-5 text-center display-4">OptiManage</h1>
                <form action=<?php
                    if($bookId){
                        echo "modify.php";
                    }
                    else{
                        echo 'add.php';
                    }
                ?>
                    method="POST" 
                    class="w-100 grid-center"
                >
                    <input type="hidden" name="id" id="id" value="<?php echo $bookId; ?>">
                    <div class="mb-4">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control input-blue" name="titulo" id="titulo" placeholder="Digite o título do livro" value="<?php if(isset($book)){ echo $book->titulo; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control input-blue" id="autor" name="autor" placeholder="Digite o nome do autor" value="<?php if(isset($book)){ echo $book->autor; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="numero_paginas" class="form-label">Número de paginas:</label>
                        <input type="number" class="form-control input-blue" id="numero_paginas" name="numero_paginas" value="<?php if(isset($book)){ echo $book->numero_paginas; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="data_lancamento" class="form-label">Data de lançamento:</label>
                        <input type="date" class="form-control input-blue" id="data_lancamento" name="data_lancamento" value="<?php if(isset($book)){ echo $book->data_lancamento; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="sintese" class="form-label">Síntese:</label>
                        <textarea class="form-control textarea-blue" name="sintese" id="sintese" rows="3"><?php if(isset($book)){ echo $book->sintese; } ?></textarea>
                    </div>
                    <button type='submit' class='btn btn-blue'>
                        <?php 
                            if($bookId){
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