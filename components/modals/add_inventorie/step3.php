<!-- @Modal Adicionar inventário etapa 3 !-->
<div id="add_inventory_step3" class="modal">
    <div class="modal__title">
        <h2>Adicione os perigos</h2>
        <span>Preencha os dados do inventário com atenção.</span>
    </div>
    <div class="form">
        <div class="form__group"> 
            <h3>Classificação do Risco Atual</h3><br>
            <label for="classificacao-cosequencia">Consequência:</label>
            <select id="classificacao-cosequencia" name="classificacao-cosequencia">
                <option value="1">Nenhuma</option>
                <option value="2">Leve</option>
                <option value="3">Significativa</option>
                <option value="4">Morte/Severa</option>
            </select><br>

            <label for="classificacao-probabilidade">Probabilidade:</label>
            <select id="classificacao-probabilidade" name="classificacao-probabilidade">
                <option value="1">Rara</option>
                <option value="2">Remota</option>
                <option value="3">Possível</option>
                <option value="4">Provável</option>
            </select><br>
        </div>

        <div class="form__group">
            <h3>Medidas de Controle</h3><br>
            <label for="medidascontrole"> Descrição das medidas administrativas, coletivas (EPC) ou individuais (EPI) a serem adotadas:</label>
            <input type="text" id="medidascontrole" name="medidascontrole"><br>
        </div>

        <div class="form__group">
            <h3>Classificação do Risco de Referência</h3><br>
            <label for="classificacao-cosequencia-referencia">Consequência de Referência:</label>
             <select id="classificacao-cosequencia-referencia" name="classificacao-cosequencia-referencia">
                <option value="1">Nenhuma/Leve</option>
                <option value="2">Significativa</option>
                <option value="3">Morte/Severa</option>
            </select><br>
    
            <label for="classificacao-probabilidade-referencia">Probabilidade de Referência:</label>
            <select id="classificacao-probabilidade-referencia" name="classificacao-probabilidade-referencia">
                <option value="1">Rara</option>
                <option value="2">Remota</option>
                <option value="3">Possível</option>
                <option value="4">Provavel</option>
            </select><br>
        </div>

        <div class="form__group">
            <h3>Matriz de Avaliação</h3><br>
            <label for="matriz">Tipo de Matriz de Avaliação de Execesso de Risco:</label>
            <select id="matriz" name="matriz">
                <option value="individual">Exposição individual ou reduzido número de potenciais vítima</option>
                <option value="varias">Exposição com lesão ou adoecimento de diversas vítimas simultaneamente</option>
            </select><br>
        </div>

        <div class="form__group">
            <button id="btn-adicionar_situacao">Adicionar novo perigo</button>
        </div>

        <div class="form__group">
            <button id="btn-cadastrar-inventario-etapa3">Próximo</button>
        </div>
        </div>
    </div>
</div>