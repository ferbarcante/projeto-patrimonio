<?php include '../views/navbar.php' ?>

<title>Cadastro de grupo</title>

<div class="container">
    <h3 class="mt-3">Cadastro de Grupo do Bem</h3>
    <form action="" method="">

        <div class="mb-3">
            <input type="text" class="form-control" id="" name="id_grupoitem" readonly>
        </div>

        <div class="mb-3">
            <label for="cd_grupoitem" class="form-label">Código do bem</label>
            <input type="text" class="form-control" id="" name="cd_grupoitem">
        </div>

        <div class="mb-3">
            <label for="nm_grupoitem" class="form-label">Nome do bem</label>
            <input type="text" class="form-control" id="" name="nm_grupoitem">
        </div>

        <div class="form-group mb-3">
            <label for="ds_observacao">Descrição do bem</label>
            <textarea class="form-control" style="resize: none;" id="" name="ds_grupoitem" rows="2"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary mx-1" onclick="window.location='../view/lista_grupo_bem.php'">Voltar</button>
    </form>
</div>