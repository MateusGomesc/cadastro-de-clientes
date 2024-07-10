<?php
    if(isset($_GET['id'])){
        $clientId = $_GET['id'];

        include '../includes/connection.php';

        // receive client information
        $sql = 'SELECT * FROM clientes WHERE id=' . $clientId;
        $result = $connection->query($sql);

        // close connection
        mysqli_close($connection);
        
        // trasform result in object
        $client = mysqli_fetch_object($result);
    }
    else{
        $clientId = null;
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
                    if($clientId){
                        echo "modify.php";
                    }
                    else{
                        echo 'add.php';
                    }
                ?>
                    method="POST" 
                    class="w-100 grid-center"
                >
                    <input type="hidden" name="id" id="id" value="<?php echo $clientId; ?>">
                    <div class="mb-4">
                        <label for="name" class="form-label">Nome completo:</label>
                        <input type="text" class="form-control input-blue" name="name" id="name" placeholder="Digite seu nome completo" value="<?php if(isset($client)){ echo $client->name; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control input-blue" id="email" name="email" placeholder="example@gmail.com" value="<?php if(isset($client)){ echo $client->email; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control input-blue" id="cpf" name="cpf" placeholder="000.000.000-00" value="<?php if(isset($client)){ echo $client->cpf; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="date" class="form-label">Data de nascimento:</label>
                        <input type="date" class="form-control input-blue" id="date" name="date" value="<?php if(isset($client)){ echo $client->date; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="sexo1" class="form-label">Sexo:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="1" <?php if(isset($client) && $client->sex ){ echo "checked"; } ?>>
                            <label class="form-check-label" for="sexo1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="0" <?php if(isset($client) && !$client->sex ){ echo "checked"; } ?>>
                            <label class="form-check-label" for="sexo2">
                                Feminino
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="obs" class="form-label">Observações:</label>
                        <textarea class="form-control textarea-blue" name="obs" id="obs" rows="3"><?php if(isset($client)){ echo $client->obs; } ?></textarea>
                    </div>
                    <button type='submit' class='btn btn-blue'>
                        <?php 
                            if($clientId){
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