<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/components/header.css" />
    <link rel="stylesheet" href="css/components/form.css" />
    <link rel="stylesheet" href="css/pages/dashboard.css" />
    <link rel="stylesheet" href="css/pages/inventories.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>SAFEST - Inventários</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <aside class="aside">
                <div class="aside__logo">
                    <img src="assets/logo.png" alt="Logo" />
                </div>
                <ul class="aside__options">
                    <li><a href="./dashboard"><i class="ph ph-gauge"></i></i>Dashboard</a></li>
                    <li class="active"><a href="./inventories"><i class="ph ph-cube"></i>Inventários</a></li>
                    <li><a href="#"><i class="ph ph-sign-out"></i></i>Logout</a></li>
                </ul>
                <div class="poweredByCompany">
                    <div class="poweredByCompanyInfo">
                        oferecido por: <img src="assets/ifmaker.png" alt="Logo IfMaker">
                    </div>
                </div>
            </aside>
            <main class="content">
                <?php
                include "components/header.php";
                ?>
                <div class="main__content">
                    <div class="main__header">
                        <h1>Meus inventários</h1>
                    </div>
                    <!-- @Contéudo Principal !-->
                    <div class="inventoriesList">
                        <div class="inventorieCard">
                            <div class="inventarieInfo">
                                <div class="inventarieLogo">
                                    <i class="ph ph-archive"></i>
                                </div>
                                <div class="inventarieDesc">
                                    <p>Nome</p>
                                    <span>xx</span>
                                </div>
                                <div class="inventarieDesc">
                                    <p>Data</p>
                                    <span>00/00/0000</span>
                                </div>
                            </div>
                            <div class="inventarieActions">
                                <button>Ver detalhes</button>
                                <button>Adicionar perigos</button>
                                <button>Adicionar imagens</button>
                                <button>Emitir relatório</button>
                                <button>Excluir inventário</button>
                            </div>
                        </div>
                        <div class="inventorieCard">
                            <div class="inventarieInfo">
                                <div class="inventarieLogo">
                                    <i class="ph ph-archive"></i>
                                </div>
                                <div class="inventarieDesc">
                                    <p>Nome</p>
                                    <span>xx</span>
                                </div>
                                <div class="inventarieDesc">
                                    <p>Data</p>
                                    <span>00/00/0000</span>
                                </div>
                            </div>
                            <div class="inventarieActions">
                                <button>Ver detalhes</button>
                                <button>Adicionar perigos</button>
                                <button>Adicionar imagens</button>
                                <button>Emitir relatório</button>
                                <button>Excluir inventário</button>
                            </div>
                        </div>
                        <div class="inventorieCard">
                            <div class="inventarieInfo">
                                <div class="inventarieLogo">
                                    <i class="ph ph-archive"></i>
                                </div>
                                <div class="inventarieDesc">
                                    <p>Nome</p>
                                    <span>xx</span>
                                </div>
                                <div class="inventarieDesc">
                                    <p>Data</p>
                                    <span>00/00/0000</span>
                                </div>
                            </div>
                            <div class="inventarieActions">
                                <button>Ver detalhes</button>
                                <button>Adicionar perigos</button>
                                <button>Adicionar imagens</button>
                                <button>Emitir relatório</button>
                                <button>Excluir inventário</button>
                            </div>
                        </div>
                        <div class="inventorieCardAdd">
                            ADICIONAR NOVO INVENTÁRIO
                        </div>
                    </div>
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