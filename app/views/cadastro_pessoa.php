<?php include '../view/navbar.php' ?>

<title>Cadastro de pessoa</title>

<div class="container">
    <h3 class="mt-3">Cadastro de Pessoa</h3>
    <form action="" method="">

        <div class="mb-3">
            <input type="text" class="form-control" id="" name="id_pessoa" readonly>
        </div>

        <div class="mb-3">
            <label for="nm_pessoa" class="form-label">Nome</label>
            <input type="text" class="form-control" id="" name="nm_pessoa"> 
        </div>

        <div class="mb-3">
            <label for="sg_cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="" name="sg_cpf"> 
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary">Voltar</button>
    </form>
</div>

