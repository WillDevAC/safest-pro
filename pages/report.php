<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/components/header.css" />
    <link rel="stylesheet" href="css/components/form.css" />
    <link rel="stylesheet" href="css/pages/dashboard.css" />
    <link rel="stylesheet" href="css/pages/inventories.css">
    <link rel="stylesheet" href="css/components/jquery.modal.min.css"/>
    <title>SAFEST</title>
</head>
<body>
    <h1>Dados do Relatorio</h1>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../scripts/interface/jquery.js"></script>
    <script src="../scripts/interface/jquery.mask.js"></script>
    <div>

  <label for="nomeInv">Nome do Inventario: </label>
  <span id="nomeInv"></span>
</div>
<div>
  <label for="inventario_data">Data do Inventario: </label>
  <span id="inventario_data"></span>
</div>
<div>
    <h2>Dados do Tecnico</h2>
<div>
  <label for="tecnico_cpf">CPF do Técnico: </label>
  <span id="tecnico_cpf"></span>
</div>
<div>
  <label for="tecnico_email">Email do Técnico: </label>
  <span id="tecnico_email"></span>
</div>
<div>
  <label for="tecnico_nome">Nome do Técnico: </label>
  <span id="tecnico_nome"></span>
</div>
  <h2>Situaçoes Cadastradas: </h2>
  <div>
  <label for="identificacao_risco_setor">Setor: </label>
  <span id="identificacao_risco_setor"></span>
</div>
  <div>
  <label for="identificacao_risco_nomeFuncionario">Nome do Funcionário: </label>
  <span id="identificacao_risco_nomeFuncionario"></span>
</div>
  <label for="identificacao_risco_AgenteCondicao">Agente/Condição: </label>
  <span id="identificacao_risco_AgenteCondicao"></span>
</div>
<div>
  <label for="identificacao_risco_consequencia">Consequência: </label>
  <span id="identificacao_risco_consequencia"></span>
</div>
<div>
  <label for="identificacao_risco_consequenciaExposicao">Consequência/Exposição: </label>
  <span id="identificacao_risco_consequenciaExposicao"></span>
</div>
<div>
  <label for="identificacao_risco_consequenciaReferencia">Consequência de Referência: </label>
  <span id="identificacao_risco_consequenciaReferencia"></span>
</div>
<div>
  <label for="identificacao_risco_descricao">Descrição do Risco: </label>
  <span id="identificacao_risco_descricao"></span>
</div>
<div>
  <label for="identificacao_risco_equipamento">Equipamento: </label>
  <span id="identificacao_risco_equipamento"></span>
</div>
<div>
  <label for="identificacao_risco_fonte">Fonte do Risco: </label>
  <span id="identificacao_risco_fonte"></span>
</div>
<div>
  <label for="identificacao_risco_funcao">Função: </label>
  <span id="identificacao_risco_funcao"></span>
</div>
<div>
  <label for="identificacao_risco_medidasAdministrativas">Medidas Administrativas: </label>
  <span id="identificacao_risco_medidasAdministrativas"></span>
</div>
<div>
  <label for="identificacao_risco_probabilidade">Probabilidade do Risco: </label>
  <span id="identificacao_risco_probabilidade"></span>
</div>
<div>
  <label for="identificacao_risco_probabilidadeReferencia">Probabilidade de Referência: </label>
  <span id="identificacao_risco_probabilidadeReferencia"></span>
</div>
<div>
  <label for="identificacao_risco_tipoRisco">Tipo do Risco: </label>
  <span id="identificacao_risco_tipoRisco"></span>
</div>
<div>
  <label for="identificacao_risco_MatrizAvaliacao">Matriz de Avaliacao: </label>
  <span id="identificacao_risco_MatrizAvaliacao"></span>
</div>
<label for="endereco_cidade"></label><span id="endereco_cidade"></span>


<script>
  const report = localStorage.getItem('report');
  const repostJS = JSON.parse(report);

  // Exibindo os campos na tela
  $("#nomeInv").text(repostJS.inventario_nome);
  $("#inventario_data").text(repostJS.inventario_data);
  $("#identificacao_risco_AgenteCondicao").text(repostJS['identificacao_risco_AgenteCondicao']);
  $("#identificacao_risco_IdInve").text(repostJS['identificacao_risco_IdInve']);
  $("#identificacao_risco_MatrizAvaliacao").text(repostJS['identificacao_risco_MatrizAvaliacao']);
  $("#identificacao_risco_consequencia").text(repostJS['identificacao_risco_consequencia']);
  $("#identificacao_risco_consequenciaExposicao").text(repostJS['identificacao_risco_consequenciaExposicao']);
  $("#identificacao_risco_consequenciaReferencia").text(repostJS['identificacao_risco_consequenciaReferencia']);
  $("#identificacao_risco_descricao").text(repostJS['identificacao_risco_descricao']);
  $("#identificacao_risco_equipamento").text(repostJS['identificacao_risco_equipamento']);
  $("#identificacao_risco_fonte").text(repostJS['identificacao_risco_fonte']);
  $("#identificacao_risco_funcao").text(repostJS['identificacao_risco_funcao']);
  $("#identificacao_risco_id").text(repostJS['identificacao_risco_id']);
  $("#identificacao_risco_medidasAdministrativas").text(repostJS['identificacao_risco_medidasAdministrativas']);
  $("#identificacao_risco_nomeFuncionario").text(repostJS['identificacao_risco_nomeFuncionario']);
  $("#identificacao_risco_probabilidade").text(repostJS['identificacao_risco_probabilidade']);
  $("#identificacao_risco_probabilidadeReferencia").text(repostJS['identificacao_risco_probabilidadeReferencia']);
  $("#identificacao_risco_setor").text(repostJS['identificacao_risco_setor']);
  $("#identificacao_risco_tipoRisco").text(repostJS['identificacao_risco_tipoRisco']);
  $("#inventario_id").text(repostJS['inventario_id']);
  $("#inventario_nome").text(repostJS['inventario_nome']);
  $("#inventario_tecnico").text(repostJS['inventario_tecnico']);
  $("#tecnico_cpf").text(repostJS['tecnico_cpf']);
  $("#tecnico_email").text(repostJS['tecnico_email']);
  $("#endereco_cidade").text(repostJS['endereco_cidade']);
  $("#endereco_bairro").text(repostJS['endereco_bairro']);

</script>
</body>
</html>

