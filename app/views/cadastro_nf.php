<?php include '../views/navbar.php' ?>

<title>Cadastro de Nota Fiscal</title>

<div class="container">
    <h3 class="mt-3">Cadastro de Nota Fiscal</h3>
    <form action="">
        <div class="row">
            
            <div class="mb-3">
                <input type="text" class="form-control" id="" name="id_notafiscal" readonly>
            </div>

            <div class="mb-3 col-3">
                <label for="nu_notafiscal" class="form-label">Numero</label>
                <input type="text" class="form-control" id="" name="nu_notafiscal">
            </div>

            <div class="mb-3 col-3">
                <label for="nu_serie" class="form-label">Série</label>
                <input type="text" class="form-control" id="" name="nu_serie">
            </div>

            <div class="mb-3 col-1">
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="" name="sg_uf" maxlength="2">
            </div>

            <div class="mb-3 col-5">
                <label for="dt_emissao" class="form-label">Data de Emissão</label>
                <input type="date" class="form-control" id="" name="dt_emissao">
            </div>

            <div class="mb-3 col-4">
                <label for="fornecedor" class="form-label">Fornecedor</label>
                <select class="form-select" aria-label="Select fornecedor" id="" name="id_fornecedor">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3 col-4">
                <label for="sg_cnpj" class="form-label">Cnpj</label>
                <input type="text" class="form-control" id="" name="sg_cnpj" maxlength="14">
            </div>

            <div class="mb-3 col-4">
                <label for="sg_cpf" class="form-label">Cpf</label>
                <input type="text" class="form-control" id="" name="sg_cpf" maxlength="11">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary mx-1" onclick="window.location='lista_notafiscal.php'">Voltar</button>
    </form>
</div>
