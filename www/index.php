<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 with Docker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Sistemas utilizando Php</h1>
  <p>Doker - PHP/NGNIX/MySQL</p> 
  <p>http://docker.localhost/</p>
</div>
  
<div class="container mt-5">
  <div class="row">
    
    <div class="col-sm-3">
      <h3>Desenv PHP8</h3>
      <p>Curso de PHP 8 do Zero ao Profissional</p>
      <p>O fonte resultante do desenvolvimento do curso encontra-se em <a href="https://github.com/JRGGRoberto/cursophp8" target="_blank">github</a></p>
      <p><a href="./blog" class="btn btn-primary btn-sm">Acessar</a></p>
    </div>

    <div class="col-sm-3">
      <h3>BD</h3>
      <p>Teste de conexão com o MySQL</p>
      <p><a href="db.php" class="btn btn-primary btn-sm">Acessar</a></p>
    </div>


    <div class="col-sm-3">
      <h3>PROEC Teste</h3>
      <p>
        <pre>
CREATE USER unespar_sistema@localhost IDENTIFIED by 'senhaTESTE';
CREATE USER 'unespar_sistema'@'%' IDENTIFIED BY 'senhaTESTE';

GRANT ALL PRIVILEGES ON *.* TO unespar_sistema@localhost REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON *.* TO unespar_sistema@% REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

CREATE DATABASE IF NOT EXISTS unespar_sistema CHARACTER SET utf8 COLLATE utf8_general_ci;

GRANT ALL PRIVILEGES ON unespar_sistema.* TO unespar_sistema@localhost;
GRANT ALL PRIVILEGES ON unespar_sistema.* TO unespar_sistema'@'%;

        </pre>
      </p>
      <p><a href="dbproec.php" class="btn btn-primary btn-sm">Acessar</a></p>
    </div>


    <div class="col-sm-3">
      <h3>Teste</h3>
      <p>Teste</p>
      <p><a href="./teste" class="btn btn-primary btn-sm">Acessar</a></p>
    </div>

    <div class="col-sm-3">
      <h3>Mostrar todos os erros PHP</h3>        
      <p><pre>
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
      </pre></p>
      
    </div>
  </div>
</div>

<div class="container mt-5">
  <h2>Configuração do Php</h2>
  <?= phpinfo(); ?>
</div>

</body>
</html>
