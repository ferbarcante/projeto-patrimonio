<?php include '../views/navbar.php' ?>

<title>Cadastro de item</title>

<div class="container">
    <h3 class="mt-3">Cadastro de item</h3>
    <form>
        
        <div class="mb-3">
            <input type="text" class="form-control" id="" name="id_item" readonly>
        </div>
        <div class="mb-3">
            <label for="cd_item" class="form-label">Código do item</label>
            <input type="text" class="form-control" id="" name="cd_item">
        </div>
        <div class="mb-3">
            <label for="nm_item" class="form-label">Nome do item</label>
            <input type="text" class="form-control" id="" name="nm_item">
        </div>
        <div class="mb-3">
            <label for="vl_unidademedida" class="form-label">Unidade de Medida</label>
            <input type="text" class="form-control" id="" name="vl_unidademedida">
        </div>
        <div class="mb-3">
            <label for="grupo_bem" class="form-label">Grupo do bem</label>
            <select class="form-select" aria-label="select grupo do bem" id="" name="id_grupoitem">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary mx-1" onclick="window.location='../view/lista_item.php'">Voltar</button>
    </form>
</div>