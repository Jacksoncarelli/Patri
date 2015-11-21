<meta charset="uft-8">

<?php
require_once("../../seguranca.php");// Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php
require_once ("../../conexao.php");
$usuario=$_POST["usuario"];
$nome=$_POST["nome"];
$senha=$_POST["senha"];
$nivel=$_POST["nivel"];


$sql = "INSERT INTO usuarios (nome,usuario,senha,nivel) VALUES ('$nome', '$usuario','$senha',$nivel)";

if($db->query($sql)){
    
    echo "<script>alert('Usuario cadastrado com sucesso!');top.location.href='tabelausuario.php';</script>";
}
else{ 

	 		 if ($nivel =='') {

					echo "<script>alert('Erro ao inserir! Informe o nivel de acesso');top.location.href='tabelausuario.php';</script>";
								} else {
			echo "<script>alert('Erro ao inserir! Usuário já cadastrado');top.location.href='tabelausuario.php';</script>";


}
 }	
  mysqli_close($db);









   

?>	