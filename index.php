<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro</title>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="container-menu col-3 vh-100">
                <nav class="nav flex-column p-5 gap-4">
                    <a class="nav-link fs-4 text-reset" href="#">Home</a>
                    <a class="nav-link fs-4 text-reset" href="#">Clientes</a>
                    <a class="nav-link fs-4 text-reset" href="#">Produtos</a>
                </nav>
            </div>
            <div class="container-data col-9 pt-3 p-5 vh-100">
                <h1 class="mt-2 mb-4 text-center">Sistema de cadastro</h1>
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

    <!--JS Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>