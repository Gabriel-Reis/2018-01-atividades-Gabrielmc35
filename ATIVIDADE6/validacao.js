
$(document).ready(function(){



	$("button[name='cadastro']").click(function(){


		if( $("#cidade").val() == "0" ){
			//allert example
			alert("Selecione a cidade.");
			$("#cidade").focus();
		}
	


		if(document.getElementById("futebol").checked==false || document.getElementById("basquete").checked==false || document.getElementById("handball").checked==false
			|| document.getElementById("maratona").checked==false){
			alert("Você deve selecionar pelo menos uma área de interesse.");
		}

		var valNome = ( $("input[name='nome']").val() );

		if(valNome==""){
			/*alert("Campo de senha vazio.");
			$("#senha").focus();*/

			//Exibe alerta
			$("#alertaNome").slideDown();
			//Adiciona a classe CSS de erro
			$("#nome").addClass("has-error");
			//Limpa o campo
			$("input[name='nome']").val("");
			//Define o foco para o campo
			$("input[name='nome']").focus();
			return;
		}

		$("#nome").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaNome").hide();

var cpf = ( $("input[name='cpf']").val() );

		if(cpf==""){
			/*alert("Campo de senha vazio.");
			$("#senha").focus();*/

			//Exibe alerta
			$("#alertacpf").slideDown();
			//Adiciona a classe CSS de erro
			$("#cpf").addClass("has-error");
			//Limpa o campo
			$("input[name='cpf']").val("");
			//Define o foco para o campo
			$("input[name='cpf']").focus();
			return;
		}

		$("#cpf").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertacpf").hide();



		

		

		var valUsuario = ( $("input[name='usuario']").val() );

		if(valUsuario==""){
			/*alert("Nome de usuário não selecionado.");
			$("#usuario").focus();*/

			//Exibe alerta
			$("#alertaUsu").slideDown();
			//Adiciona a classe CSS de erro
			$("#usu").addClass("has-error");
			//Limpa o campo
			$("input[name='usuario']").val("");
			//Define o foco para o campo
			$("input[name='usuario']").focus();
			return;
		}
		$("#usu").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaUsu").hide();

		var valSenha = ( $("input[name='senha']").val() );

		if(valSenha==""){
			/*alert("Campo de senha vazio.");
			$("#senha").focus();*/

			//Exibe alerta
			$("#alertaSen").slideDown();
			//Adiciona a classe CSS de erro
			$("#sen").addClass("has-error");
			//Limpa o campo
			$("input[name='senha']").val("");
			//Define o foco para o campo
			$("input[name='senha']").focus();
			return;
		}

		$("#sen").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaSen").hide();


	});

});