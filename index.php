<?php
session_start();

// USUÁRIO FIXO (depois podemos ligar no banco)
$usuario_correto = "cadu@gmail.com";
$senha_correta = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($email == $usuario_correto && $senha == $senha_correta) {
        $_SESSION["usuario"] = "Admin";
        header("Location: dashboard.php");
        exit();
    } else {
        $erro = "Email ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login - Portal Ea fc 26</title>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">

<style>

/* FUNDO */
body {
   margin: 0;
    height: 100vh;
    background: radial-gradient(circle at top, #405eff, #000000);
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CAIXA LOGIN */
.login-box {
   width: 350px;
    background: #111;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 25px #1b1b1d;
    text-align: center;
    animation: fade 0.5s ease;
}

/* TÍTULO */
.login-box h2 {
    font-family: 'Orbitron', sans-serif;
    color: #ffffff;
    margin-bottom: 20px;
}

/* INPUTS */
.login-box input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #333;
    background: #0a0a0a;
    color: white;
    transition: 0.3s;
}

.login-box input:focus {
    outline: none;
    border: 1px solid #00ffff;
    box-shadow: 0 0 10px #00ffff;
}

/* BOTÃO */
.btn-login {
    width: 100%;
    padding: 12px;
    background: #ffffff;
    border: none;
    border-radius: 8px;
    font-family: 'Orbitron', sans-serif;
    cursor: pointer;
    margin-top: 10px;
    transition: 0.3s;
}

.btn-login:hover {
    background: #ffffff;
    box-shadow: 0 0 15px #ffffff;
}

/* ERRO */
.erro {
    color: #ff0055;
    margin-top: 10px;
}

/* ANIMAÇÃO */
@keyframes fade {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1;}
}

</style>

</head>

<body>

<div class="login-box">

<h2>Portal Ea fc 26</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>
<input type="password" name="senha" placeholder="Senha" required>

<button class="btn-login">Entrar</button>

</form>

<?php if (isset($erro)) { echo "<div class='erro'>$erro</div>"; } ?>

</div>

</body>
</html>