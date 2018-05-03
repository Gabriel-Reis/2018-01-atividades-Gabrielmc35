 function validar(campo, grupo, alerta) {
        return 1;
      }
      function calcular() {
        var n1 = parseFloat(document.dados.valor1.value);
        var n2 = parseFloat(document.dados.valor2.value);
        if ( ! validar(document.dados.valor1, "grupoV1", "alertaV1") ) {
          return	
        }
        validar(document.dados.valor2, "grupoV2", "alertaV2");
        if ( document.dados.valor1.value.length == 0 || isNaN(n1) ) {
          document.getElementById("alertaV1").style.display = "block";
          document.getElementById("grupoV1").classList.add("has-error");
          document.dados.valor1.value = "";
          document.dados.valor1.focus();
          return;
        }
        document.getElementById("grupoV1").classList.remove("has-error");
        document.getElementById("alertaV1").style.display = "none";
        if ( document.dados.valor2.value.length == 0 || isNaN(n2) ) {
          document.getElementById("alertaV2").style.display = "block";
          document.getElementById("grupoV2").classList.add("has-error");
          document.dados.valor2.value = "";
          document.dados.valor2.focus();
          return;
        }
              document.getElementById("grupoV2").classList.remove("has-error");
        document.getElementById("alertaV2").style.display = "none";



        var nn2= n2 * n2;
      	var texta="ola";
        var res = n1 / nn2;

        
        if(res<18.5)
        {

        	texta="Desnutrido";
        }
                if(res>=18.5 && res<=24.9)
                {
                	texta= "Peso normal";
                }

                        if(res>=25 && res<=29.9)
                        {
                        	texta= "Sobrepeso";
                        }

                                if(res>=30 && res<=34.9)

                                {
                                	texta = "Obesidade grau 1";
                                }

                                        if(res>=35 && res<=39.9)
                                        {
                                        	texta= "Obesidade grau 2";
                                        }

                                                if(res>=40)
                                                {
                                                	texta=" Obesidade grau 3";
                                                }



var pesoabaixo="";
var pesoacima="";

pesoabaixo=nn2* 18.5 +" kg";
pesoacima= nn2* 24.9 +" kg";



document.dados.res.value = res;
document.dados.texta.value = texta;
document.dados.pesoabaixo.value= pesoabaixo;
document.dados.pesoacima.value= pesoacima;


      }