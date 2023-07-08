const URL_REQUEST = "http://localhost/safest-backend/?rota=";

const saveTokenWithAuthSuccess = async (token, name, id) => {
  var minutesExpiration = 30;
  var dateExpiration = new Date();

  await dateExpiration.setTime(
    dateExpiration.getTime() + minutesExpiration * 60000
  );

  document.cookie =
    "@AuthToken" +
    "=" +
    token +
    "; expires=" +
    dateExpiration.toUTCString() +
    "; path=/";

  document.cookie =
    "@UserName" +
    "=" +
    name +
    "; expires=" +
    dateExpiration.toUTCString() +
    "; path=/";

  document.cookie =
    "@UserID" +
    "=" +
    id +
    "; expires=" +
    dateExpiration.toUTCString() +
    "; path=/";

  $("#email").val("");
  $("#password").val("");

  window.location.href = "./dashboard";
};

const RegisterTechnician = (name, email, password) => {
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

      const request = JSON.parse(response);

      if (request.status === 200) {
        Swal.fire({
          title: "Sucesso!",
          text: "Cadastro realizado com sucesso",
          icon: "success",
          showCancelButton: true,
          confirmButtonText: "OK",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "./auth";
          }
        });
      } else {
        Swal.fire("Ooops...", "Falha ao registrar técnico", "error");
        $("#name").val("");
        $("#cpf").val("");
        $("#email").val("");
        $("#password").val("");
      }
    })
    .fail(function (jqXHR, textStatus, response) {
      alert(response);
    });
};

const AuthTechnician = (email, password) => {
  $.ajax({
    url: URL_REQUEST + "autenticarTecnico",
    type: "POST",
    data: {
      email: email,
      senha: password,
    },
    beforeSend: function () {
      $.LoadingOverlay("show");
    },
  })
    .done(function (response) {
      $.LoadingOverlay("hide");

      const request = JSON.parse(response);

      if (request.status === 200) {
        saveTokenWithAuthSuccess(request.token, request.name, request.id);
      } else {
        Swal.fire("Ooops...", "Senha ou usuário incorreto!", "error");
        $("#email").val("");
        $("#password").val("");
        $("#email").focus();
      }
    })
    .fail(function (jqXHR, textStatus, response) {
      alert(response);
    });
};

$("#btn-login").click(function () {
  const email = $("#email").val();
  const password = $("#password").val();

  if (email === "" || password === "") {
    Swal.fire("Ooops...", "Preencha os campos!", "question");
    return;
  }

  AuthTechnician(email, password);
});

$("#btn-register").click(function () {
  const name = $("#name").val();
  const cpf = $("#cpf").val();
  const email = $("#email").val();
  const password = $("#password").val();

  if (name === "" || email === "" || cpf === "" || password === "") {
    Swal.fire("Ooops...", "Preencha os campos!", "question");
    return;
  }

  RegisterTechnician(name, cpf, email, password);
});

$("#cpf").mask("000.000.000-00");
