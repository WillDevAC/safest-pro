const URL_REQUEST = "http://localhost/safest-backend/?rota=";

$("#cpf").mask("000.000.000-00");

const registerTechnician = (name, cpf, email, password) => {
  console.log(name, cpf, email, password);

  $.ajax({
    url: URL_REQUEST + "RegistrarTecnico",
    type: "POST",
    data: {
      nome: name,
      cpf: cpf,
      email: email,
      senha: password,
    },
    beforeSend: function () {
      $.LoadingOverlay("show");
    },
  })
    .done(function (response) {
      $.LoadingOverlay("hide");

      try {
        const request = JSON.parse(response);

        if (request.status === 200) {
          $("#name").val("");
          $("#email").val("");
          $("#cpf").val("");
          $("#password").val("");

          Swal.fire({
            title: "Sucesso!",
            text: "Seu cadastro foi realizado com sucesso",
            icon: "success",
            confirmButtonText: "Continuar",
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "./auth";
            }
          });
        } else {
          Swal.fire("Ooops...", "Erro interno", "error");
          $("#name").val("");
          $("#email").val("");
          $("#cpf").val("");
          $("#password").val("");
          $("#name").focus();
        }
      } catch (error) {
        Swal.fire("Ooops...", "Erro interno", "error");
        $("#name").val("");
        $("#email").val("");
        $("#cpf").val("");
        $("#password").val("");
        $("#name").focus();
      }
    })
    .fail(function (jqXHR, textStatus, error) {
      $.LoadingOverlay("hide");
      Swal.fire("Ooops...", "Erro interno", "error");
    });
};

$("#btn-register").click(function () {
  let name = $("#email").val();
  let cpf = $("#cpf").val();
  let email = $("#email").val();
  let password = $("#password").val();

  if (name === "" || cpf === "" || email === "" || password === "") {
    Swal.fire("Ooops...", "Preencha os campos!", "question");
    return;
  }

  registerTechnician(name, cpf, email, password);
});
