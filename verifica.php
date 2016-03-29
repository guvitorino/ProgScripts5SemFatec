<?php
	include "conectar.php";
?>
<?php
    $login = $_POST["email"];
	$Senha = md5($_POST["senha"]);
    $instrucao = 'select idanunciante,email,senha,nome from "Anunciante" where email='."'$login'";
	$resu = pg_query($conect,$instrucao) or die(pg_last_error($conect));
    if($resu){
		while($row = pg_fetch_array($resu) ){
			if($login==$row["email"] and $Senha == $row["senha"]){
				$nome = $row["nome"];
				setcookie('nome', $nome);
				setcookie('logado', true); 
				setcookie('id',$row["idanunciante"]);
				$redirect2 = "entrou.php";
				header("location:$redirect2");
			}
		}
	}
	pg_close($conect);  
	//$redirect = "entraErro.php";
	//header("location:$redirect");
?>