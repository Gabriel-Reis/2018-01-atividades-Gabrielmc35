 function validar(campo, grupo, alerta) {
        return 1;
      }
      function calcular() {
        var amplitude = parseFloat(document.dados.valor1.value);
        var intervalotempo = parseFloat(document.dados.valor2.value);
       
        if ( document.dados.valor1.value.length == 0 || isNaN(amplitude) ) {
          document.getElementById("alertaV1").style.display = "block";
          document.getElementById("grupoV1").classList.add("has-error");
          document.dados.valor1.value = "";
          document.dados.valor1.focus();
          return;
        }
        document.getElementById("grupoV1").classList.remove("has-error");
        document.getElementById("alertaV1").style.display = "none";

        if ( document.dados.valor2.value.length == 0 || isNaN(intervalotempo) ) {
          document.getElementById("alertaV2").style.display = "block";
          document.getElementById("grupoV2").classList.add("has-error");
          document.dados.valor2.value = "";
          document.dados.valor2.focus();
          return;
        }
              document.getElementById("grupoV2").classList.remove("has-error");
        document.getElementById("alertaV2").style.display = "none";

      /*  if ( document.dados.valor2.value.length == 0 || isNaN(intervalotempo) ) {
          window.alert("Informe o intervalo de tempo corretamente!");
          document.dados.valor2.value = "";
          document.dados.valor2.focus();

          return;
        }*/
        
        var texta="ola";
    
        var res= Math.log10(parseInt(amplitude))+ 3 * Math.log10(8*parseInt(intervalotempo)) - 2.92;

        if(res<3.5)
        {
          texta="Geralmente não sentido, mas gravado";
        }
                if(res>=3.5 && res<=5.4)
                {
                  texta= "As vezes é sentido, mas raramente causa danos";
                }

                        if(res>=5.5 && res<=6.0)
                        {
                          texta= "No máximo causa pequenos danos a prédios bem contruidos, mas pode danificar seriamente casas mal construidas em regiões próximas ";
                        }

                                if(res>=6.1 && res<=36.9)

                                {
                                  texta = "Pode ser destrutivo em áreas em torno de até 100 km do epicentro";
                                }

                                        if(res>=7.0 && res<=7.9)
                                        {
                                          texta= "Grande terremoto. Ele pode causar sérios danos numa grande faixa";
                                        }

                                                if(res>=8)
                                                {
                                                  texta=" Enorme terrmeto.Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilometros";
                                                }






document.dados.res.value = res;
document.dados.texta.value = texta;

      }