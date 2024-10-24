<?php include '../view/navbar.php' ?>

<title>Cadastro de setor</title>

<div class="container">
    <h3 class="mt-3">Cadastro de Setor</h3>
    <form action="" method="">
        <div class="mb-3">
            <input type="text" class="form-control" id="" name="id_setor" readonly>
        </div>
        <div class="mb-3">
            <label for="cd_setor" class="form-label">Código</label>
            <input type="text" class="form-control" id="" name="cd_setor">
        </div>
        <div class="mb-3">
            <label for="nm_setor" class="form-label">Nome</label>
            <input type="text" class="form-control" id="" name="nm_setor">
        </div>
        <div class="mb-3">
            <label for="ds_endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="" name="ds_endereco">
        </div>
        <div class="mb-3">
            <label for="pessoa_responsavel" class="form-label">Pessoa Responsável</label>
            <select class="form-select" aria-label="Select pessoa responsavel" id="" name="id_pessoa">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary mx-1">Voltar</button>
    </form>
</div>