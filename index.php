<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa</title>
    <link rel="stylesheet" href="./estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@300&display=swap" rel="stylesheet">
  </head>

  <body>
    <main>
      <div class="card">
        <form action="login.php" method="GET">
          <h3>Login</h3>
          <div class="group">
            <label>Usuário</label>
            <input name="user" />
          </div>
          <div class="group">
            <label>Senha</label>
            <input name="password" type="password" />
          </div>
          <button type="submit">Fazer Login</button>
        </form>
      </div>
      <div class="card">
        <form action="register.php" method="GET">
          <h3>Cadastro</h3>
          <div class="group">
            <label>Nome</label>
            <input name="name" />
          </div>
          <div class="group">
            <label>Usuário</label>
            <input name="user" />
          </div>
          <div class="group">
            <label>E-mail</label>
            <input type="email" name="email" />
          </div>
          <div class="group">
            <label>Senha</label>
            <input name="password" type="password" />
          </div>
          <button type="submit">Cadastrar Conta</button>
        </form>
      </div>
    </main>
  </body>
</html>