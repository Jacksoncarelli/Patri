<?php
include("../../seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
require_once ("../../conexao.php");
if(!empty($_POST["country_id"])) {
	$query = "SELECT modelo FROM modelo WHERE id_fabricante = '" . $_POST["fabricante_id"] . "'";
	while ($tbl = mysql_fetch_array($query)) {
		$nome_sistemas = $tbl['nome_modelo'];
		$id = $tbl['id_modelo'];
		?>
		?>
		<option value="">Selecione o modelo</option>
		<?php
		foreach ($results as $state) {
			?>
			<option value="<?php echo $state["id_modelo"]; ?>"><?php echo $state["nome_modelo"]; ?></option>
			<?php
		}
	}
}
?>