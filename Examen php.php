<?php
require "include/conecta.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_self'];?>php>method="post">
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" value="Ingresar" name="btn">
    </form>    
</body>
</html>

<?php 

$_SERVER = 'localhost';
$usuariop = 'root';
$passwordp =" ";
$BD = 'Ejemplo';
$conecta= mysqliconect(
    $_SERVER , $usuariop, $passwordp,$BD
);
?>

<?php 
$usuarioD="Alberto";
$passwordD="";
$user ="   "$_POST ['usuario'];
$pass ="  " $_POST ['password'];

if($user=" " and $pass==" "){
    echo "Los campos estan vacios";
}

else {
    if($usuarioD==$user and $passwordD==$pass){

        echo "Tus datos son correctos, bienvenido".$user;

    } 
    
}
else{
    echo "datos no conectados";
    $contador ++;
    if ($contador>3){
        echo "adios adios"
    }
};

?>