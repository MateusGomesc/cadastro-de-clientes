<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="container-data col-9 pt-3 p-5">
                <h1 class="mt-2 mb-4 text-center">OptiManage</h1>
                <form action="" class="w-100 grid-center">
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

    <?php include '../includes/script.php'; ?>
</body>

</html>