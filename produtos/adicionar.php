<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <?php include '../includes/menu.php'; ?>
            <div class="container-data col-9 pt-3 p-5 h-100">
                <h1 class="mt-2 mb-4 text-center">OptiManage</h1>
                <form action="add.php" method="POST" class="w-100 grid-center">
                    <div class="mb-4">
                        <label for="name" class="form-label">Nome do produto:</label>
                        <input type="text" class="form-control input-blue" name="name" id="name" placeholder="Digite o nome do produto">
                    </div>
                    <div class="mb-4">
                        <label for="category" class="form-label">Categoria:</label>
                        <input type="text" class="form-control input-blue" id="category" name="category" placeholder="Digite a categoria do produto">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="form-label">Preço:</label>
                        <input type="text" class="form-control input-blue" id="price" name="price" placeholder="Digite o preço do produto">
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