function Anunciante(vnome,vempresa,vemail,vsenha){
			this.nome =  vnome;
			this.empresa =  vempresa;
			this.email =  vemail;
			this.senha =  vsenha;
}

$(document).ready(function(){
  $("#cadastro").submit(function(){
  	var nome = document.getElementById("txtnome").value;
  	var nomeempresa = document.getElementById("txtnomeempresa").value;
  	var email = document.getElementById("txtemail").value;
  	var senha = document.getElementById("txtsenha").value;
  	var val = 1;

  	if(nome.trim() == ""){
  		$('#txtnome').addClass("erro");
    	val = 0;
    }else $('#txtnome').removeClass("erro");

    if(nomeempresa.trim() == ""){
    	$('#txtnomeempresa').addClass("erro");
    	val = 0;
    }else $('#txtnomeempresa').removeClass("erro");

    if(email.trim() == ""){
    	$('#txtemail').addClass("erro");
    	val = 0;
    }else $('#txtemail').removeClass("erro");

    if(senha.trim() == ""){
    	$('#txtsenha').addClass("erro");
    	val = 0;
    }else if(senha.length<6){
    	$('#txtsenha').addClass("erro");
    	val = 0;
    }else $('#txtsenha').removeClass("erro");

    if(val == 0){
    	$('.msgerro').toggle();
    	return false;
    }else{
      return true;
    }
  });

  $("#btnhomecadastrar").click(function(){
	 window.location.replace('anunciar.php'); 
  });
  
});