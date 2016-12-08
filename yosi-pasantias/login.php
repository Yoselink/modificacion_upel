 <?php
session_start();
$enlace = "SELECT * FROM user where usuario ='".$_SESSION['user']."'";
require('conexion.php');
$user= $_POST['usuario'];
$query = "SELECT * FROM user";
$res=mysqli_query("SELECT * FROM user WHERE usuario=".$_SESSION['usuario']);
$rs = mysqli_query($query, $enlace);


$row = mysqli_fetch_array($rs);

if($_POST['usuario'] == $row["usuario"] && $_POST['password'] == $row["password"])
{
$_SESSION['usuario'] = $usuario;
$_SESSION['password'] = $password;
header("Location: /yosi-pasantias/inicio.php");
}
else
{
echo "Login Incorrecto";
}
?> 