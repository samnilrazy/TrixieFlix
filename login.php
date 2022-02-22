<?php


$host = "127.0.0.1";
$user = "root";
$pass = "";
$banco = "id17620328_usuarios_trix";
#$con = mysqli_connect('HOSTNAME','USERNAME','PASSWORD');
$conexao = mysqli_connect('localhost', 'id17620328_samnilrazy', 'TSgm}O_HZrxO1bB>'); # or die(mysqli_error());
#$mysqli->select_db($banco);
mysqli_select_db($conexao, $banco) # or die(mysqli_error());





?>

<html>

<head>
<title>Auticando user</title>
<script type="text/javascript">
    function loginsucessfully() {
        setTimeout("Window.location='youtube.com'", 1);
    }
    function loginfailed() {
        setTimeout("Window.location='youtube.com'", 1);
    }

</script>
</head>


<body>












<?php
$email = $_POST['login'];
$senha = $_POST['pass'];

$sql = mysqli_query($conexao,"SELECT * FROM luizusers WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
#$sql = "SELECT * FROM usuarios WHERE nome = '$email' and senha = '$senha'" or die(mysqli_error());
$row = mysqli_num_rows($sql);
#$query = "INSERT INTO usuarios (id,nome,senha) VALUES ('0','$email','$senha')";
if ($row > 0) {
    #session_start();
    #$_SESSION['email']=$_POST['login'];
    #$_SESSION['senha']=$_POST['pass'];
    echo "<script>document.location='admin_files/perfis.html'</script>";
    
    
} else {
    echo "<script>document.location='index.html'</script>";
}
?>
</body>
</html>








