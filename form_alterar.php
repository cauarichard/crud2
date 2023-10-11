<?php

  include_once('conexao.php');

  if(!isset($_GET["id"]))               # Verifica se a chave 'id' existe no array GET
    header("location: index.php");      # Caso não exista, volta pro index

  if($_GET["id"]=="")
    header("location: index.php");

  $id = $_GET["id"];
  echo $id;

  $sql = "SELECT pk_pessoa, nome, nascimento, endereco, nacionalidade, peso, altura, sexo, genero FROM pessoa WHERE pk_pessoa=" . $id;
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);

  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD - Update</title> 
</head>
<body>
    <div class="container">
        <h1>Veja os dados abaixo, e altere o que desejar</h1>

        <form action="alterar.php" method="post">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" aria-describedby="Nome" name="nome" value="<?php echo $row["nome"] ?>">
              <input type="hidden" name="id" value="<?php echo $row['pk_pessoa']; ?>">
            </div>
            <div class="mb-3">
              <label for="nascimento" class="form-label">Nascimento</label>
              <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $row["nascimento"] ?>">
            </div>
            <div class="mb-3">
              <label for="sexo" class="form-label">Sexo</label>
              <select name="sexo" id="sexo" class="form-select">
                <option value="M" <?php echo $row["sexo"]=="M" ? "selected" : ""; ?>>M</option>
                <option value="F" <?php echo $row["sexo"]=="F" ? "selected" : ""; ?>>F</option>
                <option value="T" <?php echo $row["sexo"]=="T" ? "selected" : ""; ?>>T</option>
                <option value="NB" <?php echo $row["sexo"]=="NB" ? "selected" : ""; ?>>NB</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="peso" class="form-label">Peso</label>
              <input type="text" class="form-control" id="peso" name="peso"  value="<?php echo $row["peso"] ?>">
            </div>
            <div class="mb-3">
              <label for="altura" class="form-label">Altura</label>
              <input type="text" class="form-control" id="altura" name="altura"  value="<?php echo $row["altura"] ?>">
            </div>

            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>