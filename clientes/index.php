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
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            for($i=0; $i<5; $i++){
                                echo "                                
                                    <tr>
                                        <th scope='row'>" . $i+1 . "</th>
                                        <td>Mateus</td>
                                        <td>mateus.gc@estudante.iftm.edu.br</td>
                                        <td>
                                            <button type='button' class='btn btn-danger'>Excluir</button>
                                            <button type='button' class='btn btn-blue'>Modificar</button>
                                        </td>
                                    </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <?php include '../includes/script.php'; ?>
</body>
</html>