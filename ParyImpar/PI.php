  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paryimpar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<body>
<div class="d-flex justify-content-center">
        <div class="card mt-5 col-md-5">
            <div class="card-header">
               formulario
            </div>
        <div class="card-body">

            <?php
                
               if (isset($_GET['confirm'])){
                 if($_GET['confirm'] === "2"){
                    echo '<div class="alert alert-success" role="alert">
                    "par" </div>';
             } else {
                    echo '<div class="alert alert-danger" role="alert">
                    "impar" </div>'; 
                 }
               }
            ?>


                <form action="./mostrar.php" method="POST">
                    <div class="form-group">
                        <input type="number" class="form-control" id="numero" name="numero" placeholder=""> <br>
                    <div class="d-flex justify-content-end"> 
                        <button type="submit" class="btn btn-primary ">registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>