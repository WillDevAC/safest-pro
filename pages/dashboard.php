<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/components/header.css" />
  <link rel="stylesheet" href="css/components/form.css" />
  <link rel="stylesheet" href="css/pages/dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <title>SAFEST - Página Principal</title>
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <aside class="aside">
        <div class="aside__logo">
          <img src="assets/logo.png" alt="Logo" />
        </div>
        <ul class="aside__options">
          <li class="active"><a href="./dashboard"><i class="ph ph-gauge"></i></i>Dashboard</a></li>
          <li><a href="./inventories"><i class="ph ph-cube"></i>Inventários</a></li>
          <li><a href="#"><i class="ph ph-sign-out"></i></i>Logout</a></li>
        </ul>
        <div class="poweredByCompany">
          <div class="poweredByCompanyInfo">
            Oferecido por: <img src="assets/ifmaker.png" alt="Logo IfMaker">
          </div>
        </div>
      </aside>
      <main class="content">
        <?php
          include "components/header.php";
        ?>
        <div class="main__content">
          <div class="main__header">
            <h1>Dashboard</h1>
          </div>
          <!-- @Contéudo Principal !-->
          <?php
            include "components/statistics.php";
          ?>
        </div>
      </main>
    </div>
  </div>
  <?php
    include "components/buttons/add__inventory.php";
    include "components/modals/add_inventorie/step1.php";
    include "components/modals/add_inventorie/step2.php";
    include "components/modals/add_inventorie/step3.php";
  ?>
</body>
<script src="https://unpkg.com/@phosphor-icons/web"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="scripts/interface/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="scripts/interface/loader.js"></script>
<script src="scripts/integration/dashboard.js"></script>

</html>