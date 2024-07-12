<?php 
    include "../includes/connection.php";

    // Receive data from database
    $sql = "SELECT * FROM atividades";
    $result = $connection->query($sql);

    // Close connection
    mysqli_close($connection);

    // integer will be index
    $i = 1;

    function getPeriod($number){
        if($number == 1){
            return "Matutino";
        }
        else if($number == 2){
            return "Vespertino";
        }
        else if($number == 3){
            return "Noturno";
        }
        else{
            return "Turno não encontrado.";
        }
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
            <div class="container-data col-9 pt-3 p-5 vh-100">
                <h1 class="mt-2 mb-5 text-center display-4">OptiManage</h1>
                <div class="d-flex gap-3 align-items-center mt-2 mb-4">
                    <h4>Lista de Atividades</h4>
                    <a href="form.php" class="btn btn-blue">Adicionar</a>
                </div>
                <?php if(!mysqli_num_rows($result)){ ?>
                    <h3>Nenhuma atividade encontrada.</h3>
                <?php }else{ ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Hora de ínicio</th>
                                <th scope="col">Hora de termino</th>
                                <th scope="col">Turno</th>
                                <th scope="col">Máximo de participantes</th>
                                <th scope="col">Descrição</th>
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
                                    <td><?php echo $item->name ?></td>
                                    <td><?php echo $item->hour_start ?></td>
                                    <td><?php echo $item->hour_stop ?></td>
                                    <td><?php echo getPeriod($item->period) ?></td>
                                    <td><?php echo $item->number ?></td>
                                    <td><?php echo $item->description ?></td>
                                    <td class="d-flex flex-column gap-2">
                                        <a class='btn btn-danger' onclick="deleteActivity(<?php echo $item->id; ?>)">Excluir</a>
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
        function deleteActivity(id){
            if(confirm("Deseja realmente excluir?")){
                window.location.href = "./deleteActivity.php?id=" + id
            }
        }
    </script>
</body>
</html>