<?php 
    $participantId = $_GET['id'];

    include '../includes/connection.php';

    // receive participant information
    $sql = 'SELECT * FROM participantes WHERE id=' . $participantId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    // trasform result in object
    $participant = mysqli_fetch_object($result);
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
                <div class="mb-3 row g-3">
                    <h5 class="display-6">Dados pessoais:</h5>
                    <div class="fs-5 d-flex gap-2 col-md-5">
                        <span class="fw-bold">Nome:</span>
                        <p><?php echo $participant->nome; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-3">
                        <span class="fw-bold">CPF:</span>
                        <p><?php echo $participant->cpf; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-3">
                        <span class="fw-bold">Email:</span>
                        <p><?php echo $participant->email; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-4">
                        <span class="fw-bold">Telefone:</span>
                        <p><?php echo $participant->telefone; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-6">
                        <span class="fw-bold">Participante selecionado?</span>
                        <p><?php if($participant->selecionado){ echo 'Sim'; }else{ echo 'Não'; } ?></p>
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <h5 class="display-6">Endereço:</h5>
                    <div class="fs-5 d-flex gap-2 col-12">
                        <span class="fw-bold">Loagradouro:</span>
                        <p><?php echo "$participant->rua $participant->numero, $participant->bairro, $participant->cidade"; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-12">
                        <span class="fw-bold">CEP:</span>
                        <p><?php echo $participant->cep; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-12">
                        <span class="fw-bold">Complemento:</span>
                        <p><?php echo $participant->complemento; ?></p>
                    </div>
                </div>
                <a href='./' class='btn btn-dark ms-2'>Voltar</a>
            </div>
        </div>
    </div>
    
    <?php include '../includes/script.php'; ?>
</body>
</html>