<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>Evalucion</title>
</head>
<body>
<h3>Evalucion Unidad 1 - Nueva Tabla</h3>
    <form action="registroevaluacion.php" method="POST">
        <div class="mb-3">
            <label class="from-lable">Nombre</label>
            <input type="text" class="form-control" name="nombre" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Apellido Paterno</label>
            <input type="text" class="form-control" name="ApellidoPaterno" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Apellido Materno</label>
            <input type="text" class="form-control" name="ApellidoMaterno" required/>
        </div>
        <div class="mb-3"> 
            <label class="from-lable">Telefono</label>
            <input type="text" class="form-control" name="Telefono" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Correo</label>
            <input type="text" class="form-control" name="Correo" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Usuario</label>
            <input type="text" class="form-control" name="Usuario" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Password</label>
            <input type="text" class="form-control" name="Pasword" required/>
        </div>
        <div>
            <input type="submit" name="enviar" value="Registrar evaluacion" class="btn btn-primary">
        </div>

    </form><!--Tabla Evaluacion-->
    <table class="table">
        <thead>
            <th scope="col">nombre </th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Pasword</th>
            </tr>
        </thead>
        <tbody>


        <?php
            include('conec.php'); // Conexion a la bd
            $consulta = "SELECT * FROM evaluacion";
            $resultado =mysqli_query($conexion,$consulta);
            while($fila =mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <th scope="row"> <?php echo $fila["nombre"] ?></th>
            <td> <?php echo $fila["ApellidoPaterno"] ?></td>
            <th> <?php echo $fila["ApellidoMaterno"] ?></th>
            <td> <?php echo $fila["Telefono"] ?></td>
            <th> <?php echo $fila["Correo"] ?></th>
            <th> <?php echo $fila["Usuario"] ?></th>
            <th> <?php echo $fila["Pasword"] ?></th>
        <tr>
        <?php }
        ?>
        </tbody>
    </table>
</body>
</html>