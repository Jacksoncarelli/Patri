<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body >
<br>
<br>
<br>
<br>
<br>
<h1 align="center">Area de login</h1>
  <form method="post" action="valida.php" class="login">
    <fieldset>
    <p>
      <label>Usuário</label>
      <input type="text" name="usuario" id="txUsuario" maxlength="25" />
    </p>

    <p>
      <label>Senha</label>
      <input type="password" name="senha" id="txSenha" />
    </p>
    <p class="login-submit">
      <button type="submit" class="login-button" value="Entrar">Login</button>
    </p>
      </fieldset>
    </form>
  </body>
</html>
