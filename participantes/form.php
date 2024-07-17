<?php
if (isset($_GET['id'])) {
    $participantId = $_GET['id'];

    include '../includes/connection.php';

    // receive participant information
    $sql = 'SELECT * FROM participantes WHERE id=' . $participantId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    // trasform result in object
    $participant = mysqli_fetch_object($result);
} else {
    $participantId = null;
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
                if ($participantId) {
                    echo "modify.php";
                } else {
                    echo 'add.php';
                }
                ?> method="POST"
                    class="w-100 grid-center">
                    <input type="hidden" name="id" id="id" value="<?php echo $participantId; ?>">
                    <h5 class="mb-3">Dados pessoais:</h5>
                    <div class="mb-4">
                        <label for="nome" class="form-label">Nome completo:</label>
                        <input type="text" class="form-control input-blue" name="nome" id="nome"
                            placeholder="Digite o nome completo do participante" value="<?php if (isset($participant)) {
                                echo $participant->nome;
                            } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control input-blue" id="email" name="email"
                            placeholder="example@gmail.com" value="<?php if (isset($participant)) {
                                echo $participant->email;
                            } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control input-blue" id="cpf" name="cpf"
                            placeholder="000.000.000-00" value="<?php if (isset($participant)) {
                                echo $participant->cpf;
                            } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control input-blue" id="telefone" name="telefone"
                            placeholder="(99) 99999-9999" value="<?php if (isset($participant)) {
                                echo $participant->telefone;
                            } ?>">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="selecionado" name="selecionado" <?php if(isset($participant) && $participant->selecionado) {
                                echo "checked";
                            } ?>>
                        <label class="form-check-label" for="selecionado">
                            Participante selecionado
                        </label>
                    </div>
                    <div class="row mb-4 mt-4 g-3">
                        <h5>Endereço:</h5>
                        <div class="col-12">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" class="form-control input-blue" id="cidade" name="cidade" placeholder="São Paulo" value="<?php if (isset($participant)) {
                                echo $participant->cidade;
                            } ?>">
                        </div>
                        <div class="col-12">
                            <label for="rua" class="form-label">Rua:</label>
                            <input type="text" class="form-control input-blue" id="rua" name="rua" placeholder="Rua das Oliveiras" value="<?php if (isset($participant)) {
                                echo $participant->rua;
                            } ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="bairro" class="form-label">Bairro:</label>
                            <input type="text" class="form-control input-blue" id="bairro" name="bairro" placeholder="Centro" value="<?php if (isset($participant)) {
                                echo $participant->bairro;
                            } ?>">
                        </div>
                        <div class="col-md-2">
                            <label for="numero" class="form-label">Número:</label>
                            <input type="number" class="form-control input-blue" id="numero" name="numero" placeholder="135" value="<?php if (isset($participant)) {
                                echo $participant->numero;
                            } ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="cep" class="form-label">CEP:</label>
                            <input type="number" class="form-control input-blue" id="cep" name="cep" placeholder="00000-000" value="<?php if (isset($participant)) {
                                echo $participant->cep;
                            } ?>">
                        </div>
                        <div class="col-12">
                            <label for="complemento" class="form-label">Complemento:</label>
                            <textarea class="form-control textarea-blue" name="complemento" id="complemento" rows="3"><?php if(isset($participant)){ echo $participant->complemento; } ?></textarea>
                        </div>
                    </div>
                    <button type='submit' class='btn btn-blue'>
                        <?php
                        if ($participantId) {
                            echo "Salvar";
                        } else {
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