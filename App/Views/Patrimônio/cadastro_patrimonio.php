<?php include '../view/navbar.php' ?>

<title>Cadastro de Patrimônio</title>

<div class="container">
    <h3 class="mt-3">Cadastro de Patrimônio</h3>
    <form action="" method="">
        <div class="row">
             
            <div class="mb-3">
                <input type="hidden" class="form-control" id="" name="id_patrimonio" readonly>
            </div>

            <div class="mb-3 col-4">
                <label for="nm_plaqueta" class="form-label">Numero da Plaqueta</label>
                <input type="text" class="form-control" id="" name="nm_plaqueta">
            </div>

            <div class="mb-3 col-4">
                <label for="vl_bem" class="form-label">Valor do bem</label>
                <input type="text" class="form-control" id="" name="vl_bem">
            </div>

            <div class="mb-3 col-4">
                <label for="dt_aquisicao" class="form-label">Data Aquisição</label>
                <input type="date" class="form-control" id="" name="dt_aquisicao">
            </div>

            <div class="mb-3 col-4">
                <label for="fornecedor" class="form-label">Item/Bem</label>
                <select class="form-select" aria-label="Select fornecedor" id="" name="id_item">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3 col-4">
                <label for="id_setor" class="form-label">Setor</label>
                <select class="form-select" aria-label="Select setor" id="" name="id_setor">
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </div>
            
            <div class="mb-3 col-4">
                <label for="tp_situacao" class="form-label">Situação</label>
                <select class="form-select" aria-label="Select setor" id="" name="tp_situacao">
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </div>

            <div class="mb-3">
                <label>Tipo de Entrada:</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="inventario" onclick="ocultaDados('inventario')" checked>
                    <label class="form-check-label" for="inlineRadio1">Inventário</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="compra" onclick="ocultaDados('compra')">
                    <label class="form-check-label" for="inlineRadio2">Compra</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="outras">
                    <label class="form-check-label" for="inlineRadio3">(Outras)</label>
                </div>
            </div>


            <div class="mb-3 col-4" style="display: none;" id="nm_fornecedor">
                <label for="nm_fornecedor" class="form-label">Nome do Fornecedor</label>
                <input type="text" class="form-control" id="" name="nm_fornecedor">
            </div>

            <div class="mb-3 col-4" style="display: none;" id="nm_nota">
                <label for="nm_nota" class="form-label">Numero da Nota</label>
                <input type="text" class="form-control" id="" name="nm_nota">
            </div>

            <div class="mb-3 col-3" style="display: none;" id="nu_serie">
                <label for="nu_serie" class="form-label">Série</label>
                <input type="text" class="form-control" id="" name="nu_serie">
            </div>

            <div class="mb-3 col-1" style="display: none;" id="sg_uf">
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="" name="sg_uf" maxlength="2">
            </div>


            <div class="mb-3 col-3" style="display: none;" id="dt_emissao">
                <label for="dt_emissao" class="form-label">Data de Emissão</label>
                <input type="date" class="form-control" id="" name="dt_emissao">
            </div>

            <div class="mb-3 col-3" style="display: none;" id="id_fornecedor">
                <label for="fornecedor" class="form-label">Fornecedor</label>
                <select class="form-select" aria-label="Select fornecedor" id="" name="id_fornecedor">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3 col-3" style="display: none;" id="sg_cnpj">
                <label for="sg_cnpj" class="form-label">Cnpj</label>
                <input type="text" class="form-control" id="" name="sg_cnpj" maxlength="14">
            </div>

            <div class="mb-3 col-3" style="display: none;" id="sg_cpf">
                <label for="sg_cpf" class="form-label">Cpf</label>
                <input type="text" class="form-control" id="" name="sg_cpf" maxlength="11">
            </div>

            <div class="form-group mb-3">
                <label for="ds_observacao">Observação</label>
                <textarea class="form-control" style="resize: none;" id="" name="ds_observacao" rows="3"></textarea>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary mx-1" onclick="window.location='lista_patrimonio.php'">Voltar</button>
    </form>
</div>


<script>
    function ocultaDados(tipoEntrada)
    {
        if(tipoEntrada == 'compra'){
            document.getElementById('nm_fornecedor').style.display="block";
            document.getElementById('nm_nota').style.display="block";
            document.getElementById('nu_serie').style.display="block";
            document.getElementById('sg_uf').style.display="block";
            document.getElementById('dt_emissao').style.display="block";
            document.getElementById('id_fornecedor').style.display="block";
            document.getElementById('sg_cnpj').style.display="block";
            document.getElementById('sg_cpf').style.display="block";
        } else {
            document.getElementById('nm_fornecedor').style.display="none";
            document.getElementById('nm_nota').style.display="none";
            document.getElementById('nu_serie').style.display="none";
            document.getElementById('sg_uf').style.display="none";
            document.getElementById('dt_emissao').style.display="none";
            document.getElementById('id_fornecedor').style.display="none";
            document.getElementById('sg_cnpj').style.display="none";
            document.getElementById('sg_cpf').style.display="none";
        } 
    }
</script>


