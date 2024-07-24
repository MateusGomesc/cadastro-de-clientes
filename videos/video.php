<?php
$videoId = $_GET['id'];

include '../includes/connection.php';

// receive participant information
$sql = 'SELECT * FROM videos WHERE id=' . $videoId;
$result = $connection->query($sql);

// close connection
mysqli_close($connection);

// trasform result in object
$video = mysqli_fetch_object($result);
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
                <div class="d-flex justify-content-center align-items-center mb-3 flex-column gap-5">
                    <div id="carouselExampleIndicators" class="carousel slide w-75">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src=<?php echo "https://img.youtube.com/vi/" . $video->video . "/0.jpg"; ?>
                                    class="d-block w-100" alt="Banner vídeo">
                            </div>
                            <div class="carousel-item">
                                <img src=<?php echo "https://img.youtube.com/vi/" . $video->video . "/1.jpg"; ?>
                                    class="d-block w-100" alt="Momento do vídeo">
                            </div>
                            <div class="carousel-item">
                                <img src=<?php echo "https://img.youtube.com/vi/" . $video->video . "/2.jpg"; ?>
                                    class="d-block w-100" alt="Momento do vídeo">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <iframe width="560" height="315" src=<?php echo "https://www.youtube.com/embed/" . $video->video ."?si=i2E9EPl3VAtaz-1S"; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="mb-3 row g-3">
                    <h5 class="display-6">Dados do vídeo:</h5>
                    <div class="fs-5 d-flex gap-2 col-md-6">
                        <span class="fw-bold">Título:</span>
                        <p><?php echo $video->titulo; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-6">
                        <span class="fw-bold">Autor:</span>
                        <p><?php echo $video->autor; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-6">
                        <span class="fw-bold">Data de lançamento:</span>
                        <p><?php echo $video->data; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-md-6">
                        <span class="fw-bold">Duração:</span>
                        <p><?php echo $video->duracao; ?></p>
                    </div>
                    <div class="fs-5 d-flex gap-2 col-12">
                        <span class="fw-bold">Descrição:</span>
                        <p><?php echo $video->descricao ?></p>
                    </div>
                </div>
                <a href='./' class='btn btn-dark ms-2'>Voltar</a>
            </div>
        </div>
    </div>

    <?php include '../includes/script.php'; ?>
</body>

</html>