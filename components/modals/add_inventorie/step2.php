<!-- @Modal Adicionar inventário etapa 2 !-->
<div id="add_inventory_step2" class="modal">
    <div class="modal__title">
        <h2>Adicione os perigos</h2>
        <span>Preencha os dados do inventário com atenção.</span>
    </div>
    <div class="form">
        <h1>Perigos</h1>
        
        <div class="form__group">
        <h1>INVENTÁRIO DE PERIGOS E RISCOS</h1><br>
    <h2>IDENTIFICAÇÃO E DESCRIÇÃO DOS PERIGOS:</h2><br>

    
    <label for="funcao">Nome do Funcionário:</label><br>
        <input type="text" id="funcionario" name="funcionario"><br><br>

        <label for="descricao">Setor: </label><br>
        <input type="text" id="setor" name="setor"><br><br>

        <label for="funcao">Função:</label><br>
        <input type="text" id="funcao" name="funcao"><br><br>

        <label for="descricao">Descrição da Atividade: </label><br>
        <input type="text" id="descricao" name="descricao"><br><br>

        <label for="epi">EPC / EPI utilizados: </label><br>
        <input type="text" id="epi" name="epi"><br><br>

        <label for="tiporisco">Tipo de risco:</label>
        <select id="tiporisco" name="tipoRisco">
            <option value="fisico">Físico</option>
            <option value="quimico">Quimico</option>
            <option value="biologico">Biológico</option>
            <option value="ergonomico">Ergonômico</option>
            <option value="acidente">Acidente</option>
        </select><br><br>

        <label for="agente">Agente / Condição: </label><br>
        <input type="text" id="agente" name="agente"><br><br>

        <label for="fonte">Fonte: </label><br>
        <input type="text" id="fonte" name="fonte"><br><br>

        <label for="exposicao">Consequência da Exposição:</label><br>
            <input type="text" id="exposicao" name="exposicao"><br><br>
            
            
        <h3>CLASSIFICAÇÃO DO RISCO ATUAL</h3><br>

        <label for="classificacao-cosequencia">Consequência:</label>
        <select id="classificacao-cosequencia" name="classificacao-cosequencia">
            <option value="1">Nenhuma</option>
            <option value="2">Leve</option>
            <option value="3">Significativa</option>
            <option value="4">Morte/Severa</option>
        </select><br>
        <br><br>

        <label for="classificacao-probabilidade">Probabilidade:</label>
        <select id="classificacao-probabilidade" name="classificacao-probabilidade">
            <option value="1">rara</option>
            <option value="2">remota</option>
            <option value="3">possível</option>
            <option value="4">provável</option>
        </select><br>
        <br><br>

        <h4>MEDIDAS DE CONTROLE</h4><br>

        <label for="medidascontrole"> Descrição das medidas administrativas, coletivas (EPC) ou individuais (EPI) a serem adotadas:</label><br><br>
        <input type="text" id="medidascontrole" name="medidascontrole"><br>

        <br><h5>CLASSIFICAÇÃO DO RISCO DE REFERÊNCIA</h5><br>

        <label for="classificacao-cosequencia-referencia">Consequência de Referência:</label>
             <select id="classificacao-cosequencia-referencia" name="classificacao-cosequencia-referencia">
                <option value="1">Nenhuma/Leve</option>
                <option value="2">Significativa</option>
                <option value="3">Morte/Severa</option>
            </select><br>
    
        <label for="classificacao-probabilidade-referencia">Probabilidade de Referência:</label>
            <select id="classificacao-probabilidade-referencia" name="classificacao-probabilidade-referencia">
            <option value="1">rara</option>
            <option value="2">remota</option>
            <option value="3">possível</option>
            <option value="4">provavel</option>
        </select><br><br>


            <h6>MATRIZ DE AVALIAÇÃO</h6><br>

        <label for="matriz">Tipo de Matriz de Avaliação de Execesso de Risco:</label><br><br>
            <select id="matriz" name="matriz">
                <option value="individual">Exposição individual ou reduzido número de potenciais vítima</option>
                <option value="varias">Exposição com lesão ou adoecimento de diversas vítimas simultaneamente</option>
            </select><br><br><br>

            <button id="btn-adicionar_situacao">Adicionar novo perigo</button>
            <button id="btn-cadastrar-inventario-etapa2">Proximo</button>
        </div>
    </div>
</div>