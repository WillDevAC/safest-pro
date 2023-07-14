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
            <img src="assets/logo.png" alt="Logo">
            <div class="login__description">
                <h2>Bem vindo, SafeST!</h2>
                <span>
                    Faça login para continuar acessando
                    todos nossos serviços automatizados.
                </span>
            </div>
            <div class="form">
                <div class="form__group">
                    <input type="email" placeholder="Email" id="email">
                </div>
                <div class="form__group">
                    <input type="password" placeholder="Senha" id="password">
                </div>
                <div class="form__group">
                    <button id="btn-login">Fazer login</button>
                </div>
                <div class="not__account">
                    Não tem uma conta? <a href="./register">Registrar</a>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="scripts/interface/jquery.js"></script>
    <script src="scripts/interface/loader.js"></script>
    <script src="scripts/integration/auth.js"></script>
</html>