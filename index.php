
<?php


$errorm = " ";
if (isset ($_POST['submit'])){
    $userx=$_POST['id'];
$passx=$_POST['password'];



$sql="SELECT * FROM AFILIADOS where id='$id'" ;
$recdos = mysqli_query($conexion,$sql);
$rows = mysqli_num_rows($recdos);
$errorm = " ";
  if ($rows > 0)  {
$q_myQuery = $sql;
$rsmyQuery = mysqli_query($conexion, $q_myQuery) or die(mysqli_error($conexion));
$row = mysqli_fetch_assoc($rsmyQuery);
              
if ( $userx=='admin@admin.com' && $passx=='admin'){
	header("Location: admin.php");
}
else {
	header("Location: indexa.php");

}
      session_start();     
 $_SESSION['pagedata'] = array(
                 'id'=> $row['id']
                 );
    
            }else{
        $errorm = "Este usuario no esta registrado";
            }


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

    <div class="container">

        <div class="row">
            <form>
                <fieldset>
                    
                    
                    <legend>
                        ingrese el ID de la persona
                    </legend>
                    <input type="text" class="form-control" name="" id="id">
                    
                    <legend>
                        Monto Actual
                    </legend>
                    <input type="text" class="form-control" name="" id="Nmonto">

                    <legend>
                        Ingrese el nuevo monto
                    </legend>
                    <input type="text" class="form-control" name="" id="Monto">

                    <button id="submit"  type="submit">Actualizar</button>

                </fieldset>


            </form>

            <br>

            <table class="table table-bordered table-hover ">
                </table>
            

        </div>


    </div>




    
</body>
</html>
