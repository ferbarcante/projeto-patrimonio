<?php include '../viewsnavbar.php' ?>

<title>Cadastro de Fornecedor</title>

<div class="container">
    <h3 class="mt-3">Cadastro de Fornecedor</h3>
    <form action="" method="">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="" name="id_fornecedor" readonly>
        </div>

        <div class="mb-3">
            <label for="nm_fornecedor" class="form-label">Nome do Fornecedor</label>
            <input type="text" class="form-control" id="" name="nm_fornecedor">
        </div>

        <div class="mb-3">
            <label for="sg_cpf" class="form-label">Cpf</label>
            <input type="text" class="form-control" id="" name="sg_cpf" maxlength="11">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary mx-1" onclick="window.location='lista_fornecedor.php'">Voltar</button>
    </form>
</div>