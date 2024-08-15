<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  </head>
  <body>
  <button type="button" class="btn btn-outline-danger"><a href="index.html">Registro</a></button><br><br>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include 'conexion.php';
    $sql = $conn -> query ('SELECT * FROM usuario');
    while($dat = $sql-> fetch_object()){ 
    
    ?>
    <tr>
      <th scope="row"> <?php echo $dat-> id ?> </th>
      <td ><?php echo $dat-> nombre; ?></td>
      <td ><?php echo $dat-> apellido; ?></td>
      <td ><?php echo $dat-> correo; ?></td>
     <td>
        <a href ="editar.php?id= <?php echo $dat -> id;?>" class= "btn btn-small btn-warning"><i class="fas fa-wrench"></i></a>
     <a href ="eliminar.php?id= <?php echo $dat -> id;?>" class ="btn btn-small btn-danger"><i class="fas fa-trash-alt"></i></a>
    </td>
      
    </tr>
    <?php
     }
    ?>
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>