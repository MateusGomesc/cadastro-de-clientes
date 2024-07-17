<?php
if (isset($_GET['id'])) {
    $videoId = $_GET['id'];

    include '../includes/connection.php';

    // receive participant information
    $sql = 'SELECT * FROM videos WHERE id=' . $videoId;
    $result = $connection->query($sql);

    // close connection
    mysqli_close($connection);

    // trasform result in object
    $video = mysqli_fetch_object($result);
} else {
    $videoId = null;
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
                if ($videoId) {
                    echo "modify.php";
                } else {
                    echo 'add.php';
                }
                ?> method="POST"
                    class="w-100 grid-center">
                    <input type="hidden" name="id" id="id" value="<?php echo $videoId; ?>">
                    <div class="mb-4">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control input-blue" name="titulo" id="titulo" placeholder="Digite o título do vídeo" value="<?php if(isset($video)){ echo $video->titulo; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control input-blue" name="autor" id="autor" placeholder="Digite o autor do vídeo" value="<?php if(isset($video)){ echo $video->autor; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="video" class="form-label">Código do vídeo:</label>
                        <input type="text" class="form-control input-blue" name="video" id="video" placeholder="Digite o código do vídeo" value="<?php if(isset($video)){ echo $video->video; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="duracao" class="form-label">Duração:</label>
                        <input type="time" class="form-control input-blue" id="duracao" name="duracao" value="<?php if(isset($video)){ echo $video->duracao; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="data" class="form-label">Data de lançamento:</label>
                        <input type="date" class="form-control input-blue" id="data" name="data" value="<?php if(isset($video)){ echo $video->data; } ?>">
                    </div>
                    <div class="mb-4">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <textarea class="form-control textarea-blue" name="descricao" id="descricao" rows="3"><?php if(isset($video)){ echo $video->descricao; } ?></textarea>
                    </div>
                    <button type='submit' class='btn btn-blue'>
                        <?php
                        if ($videoId) {
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