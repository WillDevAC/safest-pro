<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/components/header.css" />
  <link rel="stylesheet" href="css/pages/dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <title>SAFEST - Página Principal</title>
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <?php
        include "components/aside.php";
      ?>
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
    include "components/modals/add__inventory.php";
  ?>
</body>
<script src="https://unpkg.com/@phosphor-icons/web"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="scripts/interface/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="scripts/interface/loader.js"></script>
<script src="scripts/integration/dashboard.js"></script>

</html>