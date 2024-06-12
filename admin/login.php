<?php
include('includes/config.inc.php');
$title = 'Área administrativa seja bem vindo!';
$files = ['logim.css'];
include('includes/header.php');
?>
<div class="login-container">
    <h2>Login de Administrador</h2>
    <form action="/login" method="post">
        <div class="input-group">
            <label for="username">Nome de Usuário</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Entrar</button>
    </form>
</div>
<?php
include('includes/footer.php');
?>