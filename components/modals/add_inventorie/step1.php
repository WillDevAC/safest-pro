<!-- @Modal Adicionar inventário etapa 1 !-->
<div id="add_inventory_step1" class="modal">
    <div class="modal__title">
        <h2>Adicionar inventário</h2>
        <span>Preencha os dados do inventário com atenção.</span>
    </div>
    <div class="form">
        <div class="form__groups">
            <label >Nome:</label><input type="text" name="nome_inventario" id="nome_inventario" required></label><br><br>
            <label for="cidade"> Endereço<br>
            <select name="cidade" id="cidade">
                    <option >Selecione sua cidade</option>
                    <option value="Rio Branco">Rio Branco</option>
                    <option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
                </select>
            </label><br>
            <label for="estado"> 
                <select name="estado" id="estado">
                        <option >Selecione seu estado</option>
                        <option value="Acre">AC</option>
                        <option value="Rodonia">RO</option>
                    </select>
            </label><br>
            <label >Rua:</label><input type="text" name="rua" id="rua"required></label><br>
            <label >Bairro:</label><input type="text" name="bairro" id="bairro" required></label><br>
            <label >Número:</label><input type="text" name="numero" id="numero" required></label><br>
            <label >CEP:</label><input type="text" name="cep" id="cep" required></label><br>
            <label >Complemento:</label><input type="text" name="complemento" id="complemento" required></label><br><br>
            <label >Data:</label><input type="date" name="data_inventario" id="data_inventario" required><br>
            </div>
            <div class="form__group">
                <button id="btn-cadastrar-inventario-etapa1">Proximo</button>
            </div>
    </div>
</div>