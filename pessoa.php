<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pessoa</title>
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <style>
    .botoes {
      margin: 0 5px 0 5px;   
      min-width: 100px;
    };
  </style>
</head>

<body>
  <?php
  require __DIR__ . "/barra.php";
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-4">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome">
      </div>
      <div class="col-12 col-lg-4">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf">
      </div>
      <div class="col-12 col-lg-4">
        <label for="sexo" class="form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example" id="sexo">
          <option selected>Selecione uma opção</option>
          <option value="1">Masculino</option>
          <option value="2">Feminino</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone">
      </div>
      <div class="col-12 col-lg-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="col-12 col-lg-4">
        <label for="dataNasc" class="form-label">Data Nascimento</label>
        <input type="text" class="form-control" id="dataNasc">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" id="observacao"></textarea>
          <label for="observacao">Observação</label>
        </div>
      </div>
    </div>
    <div class="row justify-content-end mt-3">
      <div class="col-12 d-flex justify-content-end">
        <button type="button" class="btn btn-primary botoes">Salvar</button>
        <button type="button" class="btn btn-warning botoes">Pesquisar</button>
      </div>
    </div>
  </div>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>