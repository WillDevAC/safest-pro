const situacoes = [];


const listInventories = (id_tecnico, token) => {
  $.ajax({
    url:
      "http://localhost/safest-backend/?rota=listInventory&token=" + token + "",
    type: "POST",
    data: {
      id: id_tecnico,
    },
    beforeSend: function () {
      $.LoadingOverlay("show");
    },
  })
    .done(function (response) {
      $.LoadingOverlay("hide");
      let inventories = JSON.parse(response);

      inventories.map((inventorie) => {
        $("#inventoriesList").append(
          '<div class="inventorieCard"><div class="inventarieInfo"><div class="inventarieLogo"><i class="ph ph-archive"></i></div><div class="inventarieDesc"><p>Local</p><span>' +
            inventorie.nome +
            '</span></div><div class="inventarieDesc"><p>Data</p><span>' +
            inventorie.data +
            '</span></div></div><div class="inventarieActions"><button>Ver detalhes</button><button>Emitir relatório</button><button>Excluir</button></div></div>'
        );
      });
    })
    .fail(function (jqXHR, textStatus, error) {
      console.log(error);
    });
};

jQuery(function ($) {
  let id_tecnico = getCookie("@UserID");
  let token = getCookie("@AuthToken");
  listInventories(id_tecnico, token);
});

$("#btn-cadastrar-inventario-etapa1").click(function () {
  /*let nome_inventario = $("#nome_inventario").val();
  let data_inventario = $("#data_inventario").val();*/
  limpar();

  const nomeInve = $("#nome_inventario").val();
  const cidade = $("#cidade").val();
  const estado = $("#estado").val();
  const rua = $("#rua").val();
  const bairro = $("#bairro").val();
  const numero = $("#numero").val();
  const cep = $("#cep").val();
  const complemento = $("#complemento").val();
  const data = $("#data_inventario").val();

  const inventory = {
    nomeInve: nomeInve,
    cidade: cidade,
    estado: estado,
    rua: rua,
    bairro: bairro,
    numero: numero,
    cep: cep,
    complemento: complemento,
    data: data
  }

  localStorage.setItem('inventario', JSON.stringify(inventory));


  $("#add_inventory_step1").modal("close");
  //criar o objeto.

  //sucesso.
  $("#add_inventory_step2").modal({
    fadeDuration: 1000,
    fadeDelay: 0.5,
  });
});


$("#btn-cadastrar-inventario-etapa2").click(function () {
   

  //pegar dados do modal.
  insertSituation();

  const inventario = JSON.parse(localStorage.getItem('inventario'));
  inventario.situacoes = JSON.parse(localStorage.getItem('situacoes'));

  localStorage.setItem('inventario', JSON.stringify(inventario));
  localStorage.removeItem('situacoes');

  //insertSituation();

  //situacoes.push(situacao);

  //localStorage.setItem('situacoes', JSON.stringify(situacoes));


  $("#add_inventory_step2").modal("close");

  //atualizar o objeto.

  //sucesso.
  $("#add_inventory_step3").modal({
    fadeDuration: 1000,
    fadeDelay: 0.5,
  });
});

$("#btn-cadastrar-inventario-etapa3").click(function () {
  //pegar dados do modal.
  insertSituation();

  const inventario = JSON.parse(localStorage.getItem('inventario'));
  inventario.situacoes = JSON.parse(localStorage.getItem('situacoes'));

  localStorage.setItem('inventario', JSON.stringify(inventario));
  localStorage.removeItem('situacoes');

  //insertSituation();

  //situacoes.push(situacao);

  //localStorage.setItem('situacoes', JSON.stringify(situacoes));


  $("#add_inventory_step3").modal("close");

  //atualizar o objeto.

  //sucesso.
  $("#add_inventory_step4").modal({
    fadeDuration: 1000,
    fadeDelay: 0.5,
  });
});

$("#btn-cadastrar-inventario-etapa4").click(function () {
  //pegar dados do modal.
  //atualizar o objeto.

  //sucesso.
  //fazer a requisição, enviar dados pro backend, quando for sucesso, mostrar alerta
  alert("Inventário cadastrado com sucesso!");
});

$("#btn-adicionar_situacao").click(function () {
  //adiciona novo perigo no objeto.
  insertSituation();
  limpar();
  // window.location.href = "#";
  alert('adicionar perigo');
  $("#add_inventory_step3").modal("close");
  limpar();

  //atualizar o objeto.

  //sucesso.
  $("#add_inventory_step2").modal({
    fadeDuration: 1000,
    fadeDelay: 0.5,
  });
});

function insertSituation() {
  const funcionario = $("#funcionario").val();
  const setor = $("#setor").val();
  const funcao = $("#funcao").val();
  const descricao = $("#descricao").val();
  const epi = $("#epi").val();
  const tiporisco = $("#tiporisco").val();
  const agente = $("#agente").val();
  const fonte = $("#fonte").val();
  const exposicao = $("#exposicao").val();
  const classificacaoConsequencia = $("#classificacao-cosequencia").val();
  const classificacaoProbabilidade = $("#classificacao-probabilidade").val();
  const medidasControle = $("#medidascontrole").val();
  const classificacaoConsequenciaReferencia = $("#classificacao-cosequencia-referencia").val();
  const classificacaoProbabilidadeReferencia = $("#classificacao-probabilidade-referencia").val();
  const matriz = $("#matriz").val();

  const situacao = {
    funcionario: funcionario,
    setor: setor,
    funcao: funcao,
    descricao: descricao,
    epi: epi,
    tiporisco: tiporisco,
    agente: agente,
    fonte: fonte,
    exposicao: exposicao,
    classificacaoConsequencia: classificacaoConsequencia,
    classificacaoProbabilidade: classificacaoProbabilidade,
    medidasControle: medidasControle,
    classificacaoConsequenciaReferencia: classificacaoConsequenciaReferencia,
    classificacaoProbabilidadeReferencia: classificacaoProbabilidadeReferencia,
    matriz: matriz
  }

  situacoes.push(situacao);

  localStorage.setItem('situacoes', JSON.stringify(situacoes));
}

function limpar() {
  $("#funcionario").val("");
  $("#setor").val("");
  $("#funcao").val("");
  $("#descricao").val("");
  $("#epi").val("");
  $("#tiporisco").val("");
  $("#agente").val("");
  $("#fonte").val("");
  $("#exposicao").val("");
  $("#classificacao-cosequencia").val("");
  $("#classificacao-probabilidade").val("");
  $("#medidascontrole").val("");
  $("#classificacao-cosequencia-referencia").val("");
  $("#classificacao-probabilidade-referencia").val("");
  $("#matriz").val("");
}


const fotos = [];
const URL_REQUEST = "../../safest-backend/?rota=";

function previewFiles() {
  const preview = document.querySelector("#preview");
  const files = document.querySelector("input[type=file]").files;

  function readAndPreview(file) {
    // Make sure `file.name` matches our extensions criteria
    if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
      
      const reader = new FileReader();
      reader.addEventListener(
        "load",
        () => {

            const tipo = file.name.split(".")[ file.name.split(".").length-1];

            const foto = {
                nome: file.name,
                tamanho: file.size,
                tipo: tipo,
                conteudo: reader.result
            };       
            fotos.push(foto);        
            //preview.appendChild(image);
        },
        false
      );
      reader.readAsDataURL(file);      
    }
   
  }  

  if (files) {
   
    for (const file of files) {
        readAndPreview(file)
    }

    //const fotos = Array.prototype.map.call(files,readAndPreview);
    //console.log(JSON.stringify(fotos));
  }
}

const picker = document.querySelector("#browse");
picker.addEventListener("change", previewFiles);

function ok() {
  const inventario = JSON.parse(localStorage.getItem('inventario'));
  inventario.fotos = fotos;

  const token = getCookieValue("@AuthToken");
  const idTecnico = getCookieValue("@UserID");

  console.log(idTecnico);

  inventario.idTecnico = idTecnico;

  const dados = JSON.stringify(inventario);

  console.log(inventario);
  
  const insertInventory = () => {
    $.ajax({
      url: URL_REQUEST + "insertInventory&token=" + token,
      type: "POST",
      data: dados,
      beforeSend: function () {
        $.LoadingOverlay("show");
      },
    })
      .done(function (response) {
        $.LoadingOverlay("hide");
  
        //const json = JSON.parse(response);  
        console.log(response);

      })
      .fail(function (jqXHR, textStatus, response) {
        alert(response);
      });
  };
   
  insertInventory();
  window.location.href = "inventories";

}

function getCookieValue(cookieName) {
  var cookieArray = document.cookie.split(";");

  for (var i = 0; i < cookieArray.length; i++) {
    var cookie = cookieArray[i];

    cookie = cookie.trim();

    if (cookie.indexOf(cookieName + "=") === 0) {
      var cookieValue = cookie.substring(cookieName.length + 1);
      //console.log("Valor do cookie " + cookieName + ": " + cookieValue);
      return cookieValue;
    }
  }

  console.log("Cookie " + cookieName + " não encontrado.");
  return null;
}


//Seleção dinamica no formulario - parte das consequencia e probabilidade

// Função para atualizar as opções de classificacao-probabilidade
function updateProbabilidadeOptions() {
  const cosequencia = document.getElementById("classificacao-cosequencia").value;
  const probabilidadeSelect = document.getElementById("classificacao-probabilidade");

  // Limpar opções anteriores
  probabilidadeSelect.innerHTML = "";

  // Adicionar novas opções de acordo com a seleção
  if (cosequencia === "1") {
    addOption(probabilidadeSelect, "1", "Rara");
  } else if (["2", "3", "4"].includes(cosequencia)) {
    addOption(probabilidadeSelect, "2", "Remota");
    addOption(probabilidadeSelect, "3", "Possível");
    addOption(probabilidadeSelect, "4", "Provável");
  }
}

// Função para atualizar as opções de classificacao-probabilidade-referencia
function updateProbabilidadeReferenciaOptions() {
  const cosequenciaReferencia = document.getElementById("classificacao-cosequencia-referencia").value;
  const probabilidadeReferenciaSelect = document.getElementById("classificacao-probabilidade-referencia");

  // Limpar opções anteriores
  probabilidadeReferenciaSelect.innerHTML = "";

  // Adicionar novas opções de acordo com a seleção
  if (["1", "2"].includes(cosequenciaReferencia)) {
    addOption(probabilidadeReferenciaSelect, "1", "Rara");
    addOption(probabilidadeReferenciaSelect, "2", "Remota");
    addOption(probabilidadeReferenciaSelect, "3", "Possível");
    addOption(probabilidadeReferenciaSelect, "4", "Provável");
  } else if (cosequenciaReferencia === "3") {
    addOption(probabilidadeReferenciaSelect, "1", "Rara");
    addOption(probabilidadeReferenciaSelect, "2", "Remota");
    addOption(probabilidadeReferenciaSelect, "3", "Possível");
  }
}

// Função auxiliar para adicionar uma opção ao select
function addOption(select, value, text) {
  const option = document.createElement("option");
  option.value = value;
  option.text = text;
  select.add(option);
}

// Adicionar os event listeners para detectar mudanças nas seleções
document.getElementById("classificacao-cosequencia").addEventListener("change", updateProbabilidadeOptions);
document.getElementById("classificacao-cosequencia-referencia").addEventListener("change", updateProbabilidadeReferenciaOptions);

// Executar as funções de atualização inicialmente para definir as opções corretas ao carregar a página
updateProbabilidadeOptions();
updateProbabilidadeReferenciaOptions();

