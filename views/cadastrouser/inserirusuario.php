<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$nome=$_POST["usuario"];
$usuario=$_POST["cpf"];
$senha=$_POST["senha"];
$sql = "INSERT INTO usuarios (nome_user,cpf_user,senha) VALUES ('$nome', '$usuario','$senha')";

if($db->query($sql)){
    
    echo "<script>alert('Usuario cadastrado com sucesso!');top.location.href='cadastro.php';</script>";
}
else{ echo "<script>alert('Erro ao inserir!');top.location.href='cadastro.php';</script>";


 }	
  mysqli_close($db);









   

?>	