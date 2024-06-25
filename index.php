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
    <div class="container">
        <h2 class="mt-1 mb-1 text-center">Sistema de cadastro</h2>
        <div class="row">
            <div class="container-menu col-3">
                teste
            </div>
            <div class="container-data col-9 pt-3">
                <div class="d-flex gap-2 align-items-center mt-2 mb-3">
                    <h4>Lista de Clientes</h4>
                    <button type="button" class="btn-register btn">Adicionar</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
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
                                        <th scope='row'>1</th>
                                        <td>Mateus</td>
                                        <td>mateus.gc@estudante.iftm.edu.br</td>
                                        <td>
                                            <button type='button' class='btn btn-danger'>Excluir</button>
                                            <button type='button' class='btn btn-modify'>Modificar</button>
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