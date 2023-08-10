<!-- @Modal Adicionar inventário etapa 2 !-->
<div id="add_inventory_step2" class="modal">
    <div class="modal__title">
        <h2>Adicione os perigos</h2>
        <span>Preencha os dados do inventário com atenção.</span>
    </div>
    <div class="form">
        <div class="form__group">
            <h3>Identificação e Descrição dos Perigos:</h3><br>
            <label for="funcao">Nome do Funcionário:</label>
            <input type="text" id="funcionario" name="funcionario"><br>

            <label for="descricao">Setor: </label>
            <input type="text" id="setor" name="setor"><br>

            <label for="funcao">Função:</label>
            <input type="text" id="funcao" name="funcao"><br>

            <label for="descricao">Descrição da Atividade: </label>
            <input type="text" id="descricao" name="descricao"><br>

            <label for="epi">EPC / EPI utilizados: </label>
            <input type="text" id="epi" name="epi"><br>

            <label for="tiporisco">Tipo de risco:</label>
            <select id="tiporisco" name="tipoRisco">
                <option value="Físico">Físico</option>
                <option value="Quimico">Quimico</option>
                <option value="Biológico">Biológico</option>
                <option value="Ergonômico">Ergonômico</option>
                <option value="Acidente">Acidente</option>
            </select><br>

            <label for="agente">Agente / Condição: </label>
            <input type="text" id="agente" name="agente"><br>

            <label for="fonte">Fonte: </label>
            <input type="text" id="fonte" name="fonte"><br>

            <label for="exposicao">Consequência da Exposição:</label>
                <input type="text" id="exposicao" name="exposicao"><br>
        </div>

        <div class="form__group">
            <button id="btn-cadastrar-inventario-etapa2">Próximo</button>
        </div>
        </div>
    </div>
</div>