<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
  include "conexion.php";
$id = $_GET['id'];
$sql = $conn->query("SELECT * FROM usuario WHERE id='$id'");
while($dat= $sql->fetch_object()){
  ?>
    <form action="edit.php?id=<?php echo $dat->id; ?>" method="post">
        <div class="mb-3">
            <label  class="form-label">No. de Usuario</label><br>
            <input type="text" class="form-control" name="id" value="<?php echo $dat->id; ?>"disabled>
          </div>
          <div class="mb-3">
            <label  class="form-label">Ingrese su Nombre</label><br>
            <input type="text" class="form-control" name="nombre" value="<?php echo $dat -> nombre;?> " placeholder="Ingrese su Nombre">
          </div>
          <div class="mb-3">
            <label  class="form-label">Ingrese su Apellido</label><br>
            <input type="text" class="form-control" name="apellido" value="<?php echo $dat -> apellido;?>" placeholder="Ingrese su Apellido">
          </div>
          <div class="mb-3">
            <label  class="form-label">Ingrese su Correo</label><br>
            <input type="email" class="form-control" name="correo" value="<?php echo $dat->correo;?>"placeholder="Ingrese su Correo">
            <div class="mb-3">
                <label  class="form-label">Ingrese su Contraseña</label><br>
                <input type="password" class="form-control" name="p" placeholder="Ingrese su Contraseña">
              </div> 
          </div> 
          <?php
}
?>


          <button type="submit" class="btn btn-outline-danger">Registrar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>