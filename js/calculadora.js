
 
 function calcular() { // funcao convocada ao clicar em "calcular"
  
    var valor = document.getElementById('valor');//linka a var no paragrafo onde ele sera escrito
    var mensal = document.getElementById('mensal');//linka a var no paragrafo onde ele sera escrito
    var msg = document.getElementById('msg'); //linka a var ao campo onde sera mostrado o valor anual no html
    var frasco = document.getElementById('frasco')//linka a var no paragrafo onde ele sera escrito

    var valr = document.getElementById('valr');//linka a var no paragrafo onde ele sera escrito
    var mensl = document.getElementById('mensl');//linka a var no paragrafo onde ele sera escrito
    var mg = document.getElementById('mg'); //linka a var ao campo onde sera mostrado o valor anual no html
    var fraso = document.getElementById('fraso')//linka a var no paragrafo onde ele sera escrito

    var tipo = document.getElementById('tipo'); // var criada pra coletar o tipo selecionado
    var gotas = document.getElementById('gotas');  // var criada pra coletar a quantidade de gotas
    var ml = document.getElementById('ml'); // var criada pra coletar a origem do produto
   
    var T = Number(tipo.value); //           essas variaveis vao
    var F = Number(gotas.value); //    transformar os campos escolhidos
    var ml = Number(ml.value); //          em numeros no javascript
  
  var popup = document.getElementById('popup')
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    popup.style.display = "flex"
    
 var calculo = T*F;  // o tipo multiplicado pela dosagem mais o valor da origem(pode ser multiplicado tbm)
   valr.innerText = `R$ ${calculo.toFixed(2)}`;//Mostrará o valor
    mensl.innerText = `média/mensal`;//mostra "media/mensal" na tela
    mg.innerText = `Baseado na dosagem e no tipo de CBD, o custo aproximado do seu tratamento sera de:`;//mensagem acima do valor
 
    if(gotas.value <= 0.5){
      fraso.innerText = `A cada 2 meses se usará 1 frasco`;
   } else{ fraso.innerText = `Serão ${F} frascos por mês`}
   }   
  else {
      if(gotas.value <= 0.5){
         frasco.innerText = `A cada 2 meses se usará 1 frasco`;
      } else{ frasco.innerText = `Serão ${F} frascos por mês`}
    var calculo = T*F;  // o tipo multiplicado pela dosagem mais o valor da origem(pode ser multiplicado tbm)

    /* esse campo mostrara o "resultado"*/
    msg.innerText = `Baseado na dosagem e no tipo de CBD, o custo aproximado do seu tratamento sera de:`;//mensagem acima do valor
    valor.innerText = `R$ ${calculo.toFixed(2)}`//Mostrará o valor
    mensal.innerText = `média/mensal`;//mostra "media/mensal" na tela
     //OPCIONAL, Mostrará a quantidade de frascos

   var visibilidade = true
    if (visibilidade) {//Se a variável visibilidade for igual a true, então...
      document.getElementById("btn").style.display = "block";//Ocultamos a div
      visibilidade = false;//alteramos o valor da variável para falso.
   }
  }
}
function fechar(){
  var visibilidade = true
  if (visibilidade) {//Se a variável visibilidade for igual a true, então...
    document.getElementById("popup").style.display = "none";//Ocultamos a div
    visibilidade = false;//alteramos o valor da variável para falso.
}
}
/*    var resu = document.body
    var agd = document.createElement('button')
    var agendar = document.createTextNode('AGENDAR CONSULTA INICIAL')
    agd.appendChild(agendar)
resu.appendChild(agd)

      var corpo = getElementById('tbody')
      var bloco = document.createElement('td');
      var Msg = createElement('tr')
      var Valor = createElement('tr')
      var Mensal = createElement('tr')
      var Frascos = createElement('tr')
      var Tmsg = document.createTextNode('Baseado na dosagem e no tipo de CBD, o custo aproximado do seu tratamento sera de:')
      var Tvalor = document.createTextNode('R$ ')
      var Tmensal = document.createTextNode('média/mensal')
      var Tfrascos = document.createTextNode('Serão ${F} frascos por mês')
      Msg.appendChild(Tmsg)
      Valor.appendChild(Tvalor)
      Mensal.appendChild(Tmensal)
      Frascos.appendChild(Tfrascos)
      bloco.appendChild(Msg)
      bloco.appendChild(Valor)
      bloco.appendChild(Mensal)
      bloco.appendChild(Frascos)
      corpo.appendChild(bloco)*/
