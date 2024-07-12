<?php
    if(isset($_GET['id'])){
        $activityId = $_GET['id'];

        include '../includes/connection.php';

        // receive activity information
        $sql = 'SELECT * FROM atividades WHERE id=' . $activityId;
        $result = $connection->query($sql);

        // close connection
        mysqli_close($connection);
        
        // trasform result in object
        $activity = mysqli_fetch_object($result);
    }
    else{
        $activityId = null;
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
                    if($activityId){
                        echo "modify.php";
                    }
                    else{
                        echo 'add.php';
                    }
                ?>
                    method="POST" 
                    class="w-100 grid-center"
                >
                    <input type="hidden" name="id" id="id" value="<?php echo $activityId; ?>">
                    <div class="mb-4">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control input-blue" name="name" id="name" placeholder="Digite o nome da atividade" value="<?php if(isset($activity)){ echo $activity->name; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Hora de ínicio:</label>
                        <input type="time" class="form-control input-blue" id="hour_start" name="hour_start" value="<?php if(isset($activity)){ echo $activity->hour_start; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Hora de término:</label>
                        <input type="time" class="form-control input-blue" id="hour_stop" name="hour_stop" value="<?php if(isset($activity)){ echo $activity->hour_stop; } ?>">
                    </div>
                    <select class="form-select mb-4" name="period">
                        <option <?php if(!isset($activity)){ echo "selected"; } ?>>Turno</option>
                        <option value="1" <?php if(isset($activity) && $activity->period === "1"){ echo "selected"; } ?>>Matutino</option>
                        <option value="2" <?php if(isset($activity) && $activity->period === "2"){ echo "selected"; } ?>>Vespertino</option>
                        <option value="3" <?php if(isset($activity) && $activity->period === "3"){ echo "selected"; } ?>>Noturno</option>
                    </select>
                    <div class="mb-4">
                        <label for="number" class="form-label">Número máximo de participantes:</label>
                        <input type="number" class="form-control input-blue" id="number" name="number" placeholder="Digite a quantidade máxima de participantes" value="<?php if(isset($activity)){ echo $activity->number; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="form-label">Descrição:</label>
                        <textarea class="form-control textarea-blue" name="description" id="description" rows="3"><?php if(isset($activity)){ echo $activity->description; } ?></textarea>
                    </div>
                    <button type='submit' class='btn btn-blue'>
                        <?php 
                            if($activityId){
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