<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Projeto Patrimonio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Consulta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fazer Transferência</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dar Baixa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cadastrar
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../view/cadastro_fornecedor.php">Fornecedor</a></li>
                    <li><a class="dropdown-item" href="../view/cadastro_grupo_bem.php">Grupo</a></li>
                    <li><a class="dropdown-item" href="../view/cadastro_item.php">Item</a></li>
                    <li><a class="dropdown-item" href="../view/cadastro_nf.php">Nota Fiscal</a></li>
                    <li><a class="dropdown-item" href="../view/cadastro_pessoa.php">Pessoa</a></li>
                    <li><a class="dropdown-item" href="../view/cadastro_patrimonio.php">Patrimônio</a></li>
                    <li><a class="dropdown-item" href="../view/cadastro_setor.php">Setor</a></li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>