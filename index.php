<?php 
  include('Backend/conexion.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body  class="grid-container">
<header class="header">
  <div class="bg-6">
    <div class="glitch" data-text="GLITCH EFECT">FRAGMENTOS</div>
  </div>
</header>
<footer class="footer">
  FOOTER
</footer>  
       <div class="columna1">
         <h1 class="text">Subir imagen</h1>
         <form action="Backend/subir.php" method="post" enctype="multipart/form-data">
          <div class="formulario">
              <label for="my-input">Seleccione una Imagen</label>
              <input id="my-input"  type="file" name="imagen">
          </div>
          <div class="formular">
              <label for="my-input">Titulo de la Imagen</label>
              <input id="my-input" class="form-control" type="text" name="titulo" placeholder="De una descripcion">
          </div>
          <br>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
        </div>
          <?php session_unset(); } ?>
          <input type="submit" value="Guardar Imagen" class="btn btn-primary" name="Guardar">
         </form>
       </div>
       <div class="colum">
           <h1 class="tet">GALERÍA</h1>
           <hr>
           <div class="colum2">
               <?php foreach($resultado as $row){ ?>
      <div class="cont">
         <div class="card front">   
         <img src="Backend/imagenes/<?php echo $row['imagen']; ?>" class="card-img" alt="...">
          </div>
         <div class="card back">
      <h5 class="titulo"><strong><?php echo $row['nombre']; ?></strong></h5>
       </div>
               
      </div>
  <?php }?>
       </div>
  



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>