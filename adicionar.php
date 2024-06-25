<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro</title>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="container-menu col-3">
                <nav class="nav flex-column p-5 gap-4">
                    <a class="nav-link fs-4 text-reset" href="#">Home</a>
                    <a class="nav-link fs-4 text-reset" href="#">Clientes</a>
                    <a class="nav-link fs-4 text-reset" href="#">Produtos</a>
                </nav>
            </div>
            <div class="container-data col-9 pt-3 p-5">
                <h1 class="mt-2 mb-4 text-center">Sistema de cadastro</h1>
                <form action="">
                    <div class="mb-4">
                        <label for="name" class="form-label">Nome completo:</label>
                        <input type="text" class="form-control input-blue" name="name" id="name" placeholder="Digite seu nome completo">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control input-blue" id="email" name="email" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-4">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control input-blue" id="cpf" name="cpf" placeholder="000.000.000-00">
                    </div>
                    <div class="mb-4">
                        <label for="date" class="form-label">Data:</label>
                        <input type="date" class="form-control input-blue" id="date" name="date">
                    </div>
                    <div class="mb-4">
                        <label for="sexo1" class="form-label">Sexo:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="Masculino">
                            <label class="form-check-label" for="sexo1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="Feminino">
                            <label class="form-check-label" for="sexo2">
                                Feminino
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="obs" class="form-label">Observações:</label>
                        <textarea class="form-control textarea-blue" name="obs" id="obs" rows="3"></textarea>
                    </div>
                    <button type='submit' class='btn btn-blue'>Cadastrar</button>
                    <a href='./' class='btn btn-dark ms-2'>Voltar</a>
                </form>
            </div>
        </div>
    </div>

    <!--JS Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>