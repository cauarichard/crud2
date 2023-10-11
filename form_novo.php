<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD - Create</title>
</head>
<body>
    <div class="container">
        <h1>Informe os dados a serem inseridos</h1>

        <form action="novo.php" method="post">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" aria-describedby="Nome" name="nome">
            </div>
            <div class="mb-3">
              <label for="nascimento" class="form-label">Nascimento</label>
              <input type="date" class="form-control" id="nascimento" name="nascimento">
            </div>
            <div class="mb-3">
              <label for="sexo" class="form-label">Sexo</label>
              <select name="sexo" id="sexo" class="form-select">
                <option value="M">M</option>
                <option value="F">F</option>
                <option value="T">T</option>
                <option value="NB">NB</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="peso" class="form-label">Peso</label>
              <input type="text" class="form-control" id="peso" name="peso">
            </div>
            <div class="mb-3">
              <label for="altura" class="form-label">Altura</label>
              <input type="text" class="form-control" id="altura" name="altura">
            </div>

            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>