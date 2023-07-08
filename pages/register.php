<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/components/form.css">
    <link rel="stylesheet" href="css/pages/auth.css">
    <title>SAFEST</title>
</head>

<body>
    <div class="login__container">
        <div class="login__box">
            <img src="#" alt="Logo">
            <div class="login__description">
                <h2>Registro de técnico</h2>
                <span>
                    Preencha os campos abaixo com atenção!
                </span>
            </div>
            <div class="form">
                <div class="form__group">
                    <input type="text" placeholder="Nome" id="name">
                </div>
                <div class="form__group">
                    <input type="text" placeholder="CPF" id="cpf">
                </div>
                <div class="form__group">
                    <input type="email" placeholder="Email" id="email">
                </div>
                <div class="form__group">
                    <input type="password" placeholder="Senha" id="password">
                </div>
                <div class="form__group">
                    <button id="btn-register">Realizar registro</button>
                </div>
                <div class="not__account">
                    Já tem uma conta? <a href="./auth">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="scripts/interface/jquery.js"></script>
<script src="scripts/interface/jquery.mask.js"></script>
<script src="scripts/interface/loader.js"></script>
<script src="scripts/integration/auth.js"></script>

</html>