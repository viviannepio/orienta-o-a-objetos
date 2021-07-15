<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="./estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
<h1>Hospital Grey Sloan</h1>
<h1>Usuário</h1>
    <main>
      <?php
        $banco = new PDO("mysql:host=localhost;dbname=sigaa", "root", "");
        $sigaa_users = $banco->query("SELECT * FROM sigaa_users;");
        if ($sigaa_users != NULL) { ?>
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Usuario</th>
              <th>E-mail</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($linha = $sigaa_users->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                <td><?php echo $linha["id"] ?></td>
                <td><?php echo $linha["name"] ?></td>
                <td><?php echo $linha["user"] ?></td>
                <td><?php echo $linha["email"] ?></td>
              </tr>
              <?php
            }?>
          </tbody>
        </table>
      <?php } else { ?>
      <p>Não há usuário nenhum cadastrado.</p>
      <?php } ?>
    </main>
  </body>
</html>