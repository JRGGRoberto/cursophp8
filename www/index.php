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
    <div class="col-sm-4">
      <h3>Curso de PHP 8 do Zero ao Profissional</h3>
      <p></p>
      <p>O fonte resultante do desenvolvimento do curso encontra-se em <a href="https://github.com/JRGGRoberto/cursophp8" target="_blank">github</a></p>
      <p><a href="./blog" class="btn btn-primary btn-sm">Acessar</a></p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>...</p>
      <p>...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>...</p>
      <p>...</p>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h2>Configuração do Php</h2>
  <?= phpinfo(); ?>
</div>

</body>
</html>
