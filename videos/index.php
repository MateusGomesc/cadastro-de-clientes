<?php 
    include "../includes/connection.php";

    // Receive data from database
    $sql = "SELECT * FROM videos";
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
                    <h4>Lista de vídeos</h4>
                    <a href="form.php" class="btn btn-blue">Adicionar</a>
                </div>
                <?php if(!mysqli_num_rows($result)){ ?>
                    <h3>Nenhum vídeo encontrado.</h3>
                <?php }else{ ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Link</th>
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
                                    <td>
                                        <a href=<?php echo "./video.php?id=" . $item->id; ?> class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                            <?php echo $item->titulo ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a target="_blanck" href=<?php echo "https://www.youtube.com/watch?v=" . $item->video; ?> class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                            <?php echo "https://www.youtube.com/watch?v=" . $item->video; ?>
                                        </a>
                                    </td>
                                    <td class="d-flex flex-column gap-2">
                                        <a class='btn btn-danger' onclick="deleteVideo(<?php echo $item->id; ?>)" style="max-width: 150px;">Excluir</a>
                                        <a class='btn btn-blue' href=<?php echo "./form.php?id=" . $item->id ?> style="max-width: 150px;">Modificar</a>
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
        function deleteVideo(id){
            if(confirm("Deseja realmente excluir?")){
                window.location.href = "./deleteVideo.php?id=" + id
            }
        }
    </script>
</body>
</html>