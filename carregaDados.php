<?php
	include "conectar.php";
?>
<?php
	$nome = "";
	$empresa = "";
	$email = "";
	$senha = "";
	$instrucao = 'select * from "Anunciante" where idanunciante='."$_COOKIE[id]";
	echo "Teste";
	$resu = pg_query($conect,$instrucao) or die(pg_last_error($conect));
    if($resu){
		while($row = pg_fetch_array($resu) ){
			$nome = $row["nome"];
			$empresa = $row["empresa"];
			$email = $row["email"];
			$senha = $row["senha"];
		}
	}
	pg_close($conect);  
?>