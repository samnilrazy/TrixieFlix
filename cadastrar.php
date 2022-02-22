<?php

$email = $_POST['email'];
$senha = $_POST['pass'];

echo "NOME: [ $email ]     SENHA: [ $senha ]";

?>


<html>
<head>
<title>Cadastrando...</title>
</head>


<body>
<a href="index.php"><input type="submit" value="voltar"></a></center>
<?php


$host = "localhost";
$user = "id17620328_samnilrazy";
$passs = "TSgm}O_HZrxO1bB>";
$banco = "id17620328_usuarios_trix";
#$con = mysqli_connect('HOSTNAME','USERNAME','PASSWORD');
$conexao = mysqli_connect('localhost', 'id17620328_samnilrazy', 'TSgm}O_HZrxO1bB>'); # or die(mysqli_error());
#$mysqli->select_db($banco);
mysqli_select_db($conexao, $banco) # or die(mysqli_error());






?>
<?php
#$email = $_POST['email'];
#$pass = $_POST['pass'];




$query = "insert into luizusers (id, email, senha) values ('0', '$email', '$senha');";
mysqli_query($conexao,$query);
echo "<script>document.location='cadastrook.html'</script>";
#echo "Comando: $query";
#echo "NOME: [ $email ]  ";
#echo "SENHA: [ $pass ]";






#$er = mysql_query("INSERT INTO luizusers (email, senha) VALUES('$email', '$senha')");
#$query = "INSERT INTO luizusers (email,senha) VALUES ('{$email}','{$senha}')";
#INSERT INTO `luiz_users` (`id`, `email`, `senha`) VALUES (NULL, 'admin@gmail.com', 'admin');
#$sql = "INSERT INTO usuarios (name, email, password) VALUES ($nome,$senha)" or die(mysqli_error());
#$sql = mysqli_query($conexao,"INSERT INTO usuarios  VALUES (0, 'Peter_malik', 'Griffin door')")



#$sql = mysqli_query("INSERT INTO usuarios(nome, senha)
#VALUES('$nome', '$senha')");

?>

</body>
</html>