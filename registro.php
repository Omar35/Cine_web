<?php

    include 'connDB.php';
    $abirCon = OpenCon();
    $abirCon2 = OpenCon();
    
    if(isset($_POST['btnRegistro']))
	{	
		$nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        
        $sqlQueryRegistrarUsuarioSeguridad= "call registrarUsuarioSeguridad('$correo','$contrasena')";
        
        $result = $abirCon-> query($sqlQueryRegistrarUsuarioSeguridad);
		if($result->num_rows > 0)
		{
            
            $user_id = 0;
            while($fila = mysqli_fetch_array($result)){
                $user_id = $fila["user_id"];
            }
            
            $sqlQueryRegistrarUsuarioData= "call registrarUsuarioData('$nombre','$apellido1','$apellido2','$telefono','$user_id')";
            
            if($abirCon2-> query($sqlQueryRegistrarUsuarioData)){
                header("Location: login.php");
            }
            else
            {
                echo $abirCon2 -> error;	
            }
		}
		else
		{
			echo $abirCon -> error;	
		}
    }
    
    CloseCon($abirCon);
    CloseCon($abirCon2);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/proyecto/Cine_web/css/estilo/registro.css">
    <title>Registro</title>
</head>

<body class="">

    <div class="container-fluid fondo ">
        <div class="row  ">
            <div class="col-4"></div>
            <div class="col-4 justify-content-center ">
                    
                        <form action="" class="form  " method="post">
                            <br>
                            
                                <legend class="text-center header text-danger">Registro</legend>

                                <br>
                                    <div >
                                        <input hover id="txtnombre" name="nombre" type="text" placeholder="Nombre"
                                            class="form-control">
                                    </div>
                                    <br>
                                    <div >
                                        <input  id="txtApellido1" name="apellido1" type="text" placeholder="Primer apellido"
                                            class="form-control">
                                    </div>
                                    <br>
                                    <div >
                                        <input hover id="txtApellido2" name="apellido2" type="text" placeholder="Segundo apellido"
                                            class="form-control">
                                    </div>
                                    <br>
                                    <div >
                                        <input hover id="txtTelefono" name="telefono" type="number" placeholder="Telefono"
                                            class="form-control">
                                    </div>
                                    <br>
                                    <div >
                                        <input hover id="txtCorreo" name="correo" type="text" placeholder="Correo"
                                            class="form-control">
                                    </div>
                                    <br>
                                    <div >
                                        <input hover id="txtContrasena" name="contrasena" type="text" placeholder="Contraseña" 
                                            class="form-control">
                                    </div>
                                    <br>
                                    
                                    <br>
                               
                                

                                <div class="form-group justify-content-center">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-danger btn-lg" name="btnRegistro">Registrar</button>
                                    </div>
                                </div>
                            
                        </form>
                   
                
            </div>


            <div class="col-4"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>