const URL_REQUEST = "http://localhost/safest-backend/?rota=";

const saveTokenWithAuthSuccess = async (token, name, id, email_user) => {
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
    "@UserID" +
    "=" +
    id +
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
    "@UserEmail" +
    "=" +
    email_user +
    "; expires=" +
    dateExpiration.toUTCString() +
    "; path=/";

  $("#email").val("");
  $("#password").val("");

  window.location.href = "./dashboard";
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

      try {
        const request = JSON.parse(response);

        if (request.status === 200) {
          saveTokenWithAuthSuccess(
            request.token,
            request.name,
            request.id,
            request.email
          );
        } else {
          Swal.fire("Ooops...", "Senha ou usuário incorreto!", "error");
          $("#email").val("");
          $("#password").val("");
          $("#email").focus();
        }
      } catch (error) {
        Swal.fire("Ooops...", "Usuário inexistente!", "error");
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
