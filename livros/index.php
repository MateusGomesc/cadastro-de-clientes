<?php 
    include "../includes/connection.php";

    // Receive data from database
    $sql = "SELECT * FROM livros";
    $result = $connection->query($sql);

    // Close connection
    mysqli_close($connection);

    // integer will be index
    $i = 1;
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
            <div class="container-data col-9 pt-3 p-5 vh-100">
                <h1 class="mt-2 mb-5 text-center display-4">OptiManage</h1>
                <div class="d-flex gap-3 align-items-center mt-2 mb-4">
                    <h4>Lista de livros</h4>
                    <a href="form.php" class="btn btn-blue">Adicionar</a>
                </div>
                <?php if(!mysqli_num_rows($result)){ ?>
                    <h3>Nenhum livro encontrado.</h3>
                <?php }else{ ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Páginas</th>
                                <th scope="col">Data de lançamento</th>
                                <th scope="col">Síntese</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($item = mysqli_fetch_object($result)){ ?>                    
                                <tr>
                                    <th scope='row'>
                                        <?php 
                                            echo $i;
                                            $i++; 
                                        ?>
                                    </th>
                                    <td><?php echo $item->titulo ?></td>
                                    <td><?php echo $item->autor ?></td>
                                    <td><?php echo $item->numero_paginas ?></td>
                                    <td>
                                        <?php
                                            $date = new DateTimeImmutable($item->data_lancamento);
                                            echo str_replace('-','/', $date->format('d-m-Y'));
                                        ?>
                                    </td>
                                    <td><?php echo $item->sintese ?></td>
                                    <td class="d-flex flex-column gap-2">
                                        <a class='btn btn-danger' onclick="deleteBook(<?php echo $item->id; ?>)">Excluir</a>
                                        <a class='btn btn-blue' href=<?php echo "./form.php?id=" . $item->id ?>>Modificar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <?php include '../includes/script.php'; ?>
    <script>
        function deleteBook(id){
            if(confirm("Deseja realmente excluir?")){
                window.location.href = "./deleteBook.php?id=" + id
            }
        }
    </script>
</body>
</html>