<?php
include('../admin/includes/config.inc.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login e Cadastro</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #6a0dad;
            /* Alterando para roxo */
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        form {
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        form h1 {
            font-weight: bold;
            margin: 0;
            color: #6a0dad;
            /* Alterando para roxo */
        }

        form input {
            background: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        form button {
            border-radius: 20px;
            border: 1px solid #6a0dad;
            /* Alterando para roxo */
            background-color: #6a0dad;
            /* Alterando para roxo */
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
        }

        form button:active {
            transform: scale(0.95);
        }

        form button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #fff;
            cursor: pointer;
            color: #fff;
        }

        .main-button {
            margin-top: 20px;
            border: 1px solid #6a0dad;
            background-color: #6a0dad;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            padding: 10px 20px;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 20px;
            text-decoration: none;
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
            display: none;
        }

        .loading-wave {
            width: 300px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .loading-bar {
            width: 20px;
            height: 10px;
            margin: 0 5px;
            background-color: #3498db;
            border-radius: 5px;
            animation: loading-wave-animation 1s ease-in-out infinite;
        }

        .loading-bar:nth-child(2) {
            animation-delay: 0.1s;
        }

        .loading-bar:nth-child(3) {
            animation-delay: 0.2s;
        }

        .loading-bar:nth-child(4) {
            animation-delay: 0.3s;
        }

        .error-message{
            border: solid 1px red;
            background-color: rgba(255, 0, 0, 0.2);
            color: red;
            padding: 0.7em;
            border-radius: 15px;
            margin: 1em 0 1em 0;
            width: 100%;
        }

        @keyframes loading-wave-animation {
            0% {
                height: 10px;
            }

            50% {
                height: 50px;
            }

            100% {
                height: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container sign-up-container">
            <form action="cadastrar.php" method="post">
                <h1>Cadastre-se</h1>
                <input id="nome" name="nome" type="text" placeholder="Nome" />
                <input id="email" name="email" type="email" placeholder="Email" />
                <input id="senha" name="senha" type="password" placeholder="Senha" />
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form id="loginForm" action="login.php" method="post">
                <h1>Login</h1>
                <?php
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
                ?>
                <input id="email" name="email" type="email" placeholder="Email" />
                <input id="password" name="password" type="password" placeholder="Senha" />
                <button type="button" id="loginButton">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem-vindo de volta a Modern Muse!</h1>
                    <p>Para continuar conectado, por favor faça o login</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bem vindo a Modern Muse!</h1>
                    <p>Insira seus dados e comece sua jornada conosco.</p>
                    <button class="ghost" id="signUp">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
    <a href="../index.php" class="main-button">INICIO</a>

    <div class="loading-overlay">
        <div class="loading-wave">
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
        </div>
    </div>

    <script>
        const signInButton = document.getElementById('signIn');
        const signUpButton = document.getElementById('signUp');
        const container = document.querySelector('.container');
        const loginButton = document.getElementById('loginButton');
        const loginForm = document.getElementById('loginForm');
        const loadingOverlay = document.querySelector('.loading-overlay');

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        loginButton.addEventListener('click', () => {
            loadingOverlay.style.display = 'flex';
            setTimeout(() => {
                loginForm.submit();
            }, 3000);
        });
    </script>
</body>

</html>