const getCookie = (name) => {
  let cookie = {};

  document.cookie.split(";").forEach(function (el) {
    let [k, v] = el.split("=");
    cookie[k.trim()] = v;
  });

  return cookie[name];
};

jQuery(function ($) {
  let tecnichian_name = getCookie("@UserName");
  let tecnichian_email = getCookie("@UserEmail");

  $("#name_tecnichian").text(tecnichian_name);
  $("#email_tecnichian").text(tecnichian_email);
});

$("#btn_add_inventory").click(function () {
  $("#add_inventory_step1").modal({
    fadeDuration: 1000,
    fadeDelay: 0.5,
  });
});

  $("#btn_add_inventory1").click(function () {
    $("#add_inventory_step1").modal({
      fadeDuration: 1000,
      fadeDelay: 0.5,
  });
});

$("#inventoriesList").on('click','.btn_emitir_relatorio',function() {
  alert($(this).attr("name"));
  $.ajax({
    url:
      "http://localhost/safest/safest-backend/?rota=generateReport&token=" + getCookie("@AuthToken") + "",
    type: "POST",
    data: {
      id: getCookie("@UserID"),
      id_inventario: $(this).attr("name")
    },
    beforeSend: function () {
      $.LoadingOverlay("show");
    },
  })
    .done(function (response) {
      $.LoadingOverlay("hide");
      let report = JSON.parse(response);
      localStorage.setItem('report', JSON.stringify(report));
      window.location.href = "pages/report.php";
      console.log(report);    
    })
    .fail(function (jqXHR, textStatus, error) {
      console.log(error);
    });
});