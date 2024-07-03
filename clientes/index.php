<?php 
    include "../includes/connection.php";

    // Receive data from database
    $sql = "SELECT * FROM clientes";
    $result = $connection->query($sql);

    // Close connection
    mysqli_close($connection);
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
            <div class="container-data col-9 pt-3 p-5 vh-100">
                <h1 class="mt-2 mb-4 text-center">OptiManage</h1>
                <div class="d-flex gap-3 align-items-center mt-2 mb-4">
                    <h4>Lista de Clientes</h4>
                    <a href="adicionar.php" class="btn btn-blue">Adicionar</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Observações</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($item = mysqli_fetch_object($result)){ ?>                    
                            <tr>
                                <th scope='row'><?php echo $item->id ?></th>
                                <td><?php echo $item->name ?></td>
                                <td><?php echo $item->email ?></td>
                                <td><?php echo $item->cpf ?></td>
                                <td>
                                    <?php
                                        $date = new DateTimeImmutable($item->date);
                                        echo str_replace('-','/', $date->format('d-m-Y'));
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($item->sex){
                                            echo "Masculino";
                                        }
                                        else{
                                            echo "Feminino";
                                        }
                                    ?>
                                </td>
                                <td><?php echo $item->obs ?></td>
                                <td class="d-flex flex-column gap-2">
                                    <a type='button' class='btn btn-danger' href=<?php echo "../functions/deleteClient.php?id=" . $item->id ?>>Excluir</a>
                                    <a type='button' class='btn btn-blue'>Modificar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <?php include '../includes/script.php'; ?>
</body>
</html>