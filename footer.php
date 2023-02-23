<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->


<!-- Modal de Agendar/Iniciar tratamento -->
<div class="modal fade" id="pedido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Já tenho receita médica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="pedidos" method="GET">
        <label for="exampleDataList" class="form-label">Digite seu e-mail</label>
        <input class="form-control form-control-lg" type="text" placeholder="Digite seu e-mail para continuar" name="email" autofocus aria-label=".form-control-lg example">
        <div class="modal-pedido-action">
          <button type="submit" class="btn btn-primary px-4 me-md-2 mdin-btn-primary w-100">Continuar</button>
        </div>

      </form>

      
       

      </div>

    </div>
  </div>
</div>


<section class="mdin-disclaimer">
  <div class="container">
    <b>IMPORTANTE:</b> Este site não oferece tratamento ou aconselhamento imediato para pessoas em crise suicida. Em caso de crise, ligue para <b>188 (CVV)</b> ou acesse o site <a href="https://www.cvv.org.br" target="_blank">www.cvv.org.br</a>. Em caso de emergência, procure atendimento em um hospital mais próximo. 
  </div>
</section>

<a href="https://medicinain.com.br/whatsapp" id="btnWhatsapp" class="mdin-floating-whatsapp-l">Fale com a gente</a>


<div class="container">
  <footer class="py-5">

 
    <div class="row">
      <div class="col-sm-3">
        <div class="mdin-footer-col">
          <h5>Institucional</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#inicio" class="nav-link p-0 text-muted">Início</a></li>
            <li class="nav-item mb-2"><a href="#sobre" class="nav-link p-0 text-muted">Sobre nós</a></li>
            <li class="nav-item mb-2"><a href="#beneficios-cannabis-medicinal" class="nav-link p-0 text-muted">Benefícios</a></li>
            <li class="nav-item mb-2"><a href="#duvidas-frequentes" class="nav-link p-0 text-muted">Dúvidas frequentes</a></li>
            <li class="nav-item mb-2"><a href="/privacidade" class="nav-link p-0 text-muted">Política de Privacidade</a></li>
          </ul>
        </div>
      </div>

     

      <div class="col-sm-3">
        <div class="mdin-footer-col">
          <h5>Explore</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="/conteudo" class="nav-link p-0 text-muted">Blog</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Para que serve o Canabidiol</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">CBD é seguro?</a></li>
            
          </ul>
        </div>
      </div>

     

      <div class="col-sm-4">
        <div class="mdin-footer-col">
          <form>
            <h5>Receba nossos conteúdos semanais</h5>
            <p>Tudo sobre Cannabis medicinal de um jeito simples e rápido de ler.</p>
            <div class="d-flex w-100 gap-2">
              <form method="POST" action="https://medicina22874.activehosted.com/proc.php" id="_form_8_">
                <input type="hidden" name="u" value="8" />
                <input type="hidden" name="f" value="8" />
                <input type="hidden" name="s" />
                <input type="hidden" name="c" value="0" />
                <input type="hidden" name="m" value="0" />
                <input type="hidden" name="act" value="sub" />
                <input type="hidden" name="v" value="2" />
                <input type="hidden" name="or" value="ef313078ce87828961a6371f0c2ac601" />

                <label for="newsletter1" class="visually-hidden _form-label">Digite seu e-mail</label>
                <input id="newsletter1" name="email" type="text" class="form-control" placeholder="Digite seu e-mail">
                <button  id="_form_8_submit" class="_submit btn btn-primary mdin-btn-primary" type="button">Assinar</button>
              </form>
            </div>
          </form>
          </div>
      </div>
    </div>


    <div class="row">
        <div class="col-sm-3">
            <div class="mdin-footer-col">
              <h5>Fale com a gente</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">(11) 4040-2118</li>
                <li class="nav-item mb-2">falecom@medicina.in</li>
                <li class="nav-item mb-2">Segunda à Sexta das 09:00 às 20:00</li>
              </ul>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="mdin-footer-col">
              <h5>Veja também</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/alzheimer/canabidiol-para-alzheimer-beneficios-e-efeitos-colaterais/" title="Alzheimer e Canabidiol">Canabidiol para Alzheimer</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="https://medicina.in/conteudo/tudo-sobre-cbd/epilepsia-tem-cura/" title="Epilepsia e Canabidiol">Canabidiol para Epilepsia </a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="https://medicina.in/conteudo/fibromialgia/fibromialgia-tem-cura/" title="Fibromialgia e Canabidiol">Canabidiol para Fibromialgia</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/depressao/cbd-para-depressao-entenda-os-beneficios-e-efeitos-colaterais/" title="Depressão e Canabidiol">Canabidiol para Depressão</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/ansiedade/canabidiol-para-ansiedade-beneficios-e-efeitos-colaterais/" title="Ansiedade e Canabidiol">Canabidiol para Ansiedade</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/tdah/canabidiol-para-tda-e-tdah-beneficios-e-efeitos-colaterais/" title="TDA, TDAH e Canabidiol">Canabidiol para TDA e TDAH</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/autismo/canabidiol-para-autismo-beneficios-e-efeitos-colaterais/" title="Autismo e Canabidiol">Canabidiol para Autismo</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/parkinson/canabidiol-para-parkinson-beneficios-e-efeitos-colaterais/" title="Parkinson e Canabidiol">Canabidiol para Parkinson </a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/epilepsia/canabidiol-para-epilepsia-beneficios-e-efeitos-colaterais/" title="Epilepsia e Canabidiol">Canabidiol para Epilepsia </a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/insonia/canabidiol-para-insonia-beneficios-e-efeitos-colaterais/" title="Insonia e Canabidiol">Canabidiol para Insonia </a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/fibromialgia/canabidiol-para-fibromialgia-beneficios-e-efeitos-colaterais/" title="Fibromialogia e Canabidiol">Canabidiol para Fibromialgia </a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/artrite/canabidiol-para-artrite-beneficios-e-efeitos-colaterais/" title="Artrite e Canabidiol">Canabidiol para Artrite </a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-muted" href="http://localhost/medicinain/conteudo/canabidiol/artrose/" title="Artrose e Canabidiol">Canabidiol para Artrose </a></li>
              </ul>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© 2020 Portal Medicina In. <br> CNPJ 24.427.269/0001-17</p>
      <p style="opacity:0.6">Escritório: <br> Av. Paulista, 1009 - CJ. 1906 - Bela Vista, São Paulo - SP, 01310-100</p>

      <ul class="css-iisrly">
   <li>
      <a class="css-kv8661" href="https://www.facebook.com/medicinain" target="_blank" rel="noopener noreferrer" data-testid="footer-bar-social-facebook-button-link">
         <span class="css-2esx3w">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" class="css-k008qs">
               <path fill="currentColor" d="M13.544 22.018H9.37V12H7.325V8.544h2.07v-2.07c0-2.822 1.17-4.492 4.492-4.492h2.763v3.456h-1.72c-1.294 0-1.377.485-1.377 1.386v1.72h3.122L16.308 12h-2.764v10.018z"></path>
            </svg>
         </span>
      </a>
   </li>
   <li>
      <a class="css-kv8661" href="https://www.instagram.com/medicinain.br/" target="_blank" rel="noopener noreferrer" data-testid="footer-bar-social-instagram-button-link">
         <span class="css-2esx3w">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" class="css-k008qs">
               <path fill="currentColor" fill-rule="evenodd" d="M7.671 1.564c1.12-.05 1.478-.063 4.33-.063 2.85 0 3.208.012 4.328.063 1.117.051 1.88.229 2.548.488.7.264 1.336.677 1.86 1.211.534.525.947 1.16 1.211 1.86.26.668.437 1.43.488 2.548.051 1.12.063 1.478.063 4.329s-.012 3.209-.063 4.329c-.051 1.117-.229 1.88-.488 2.548a5.368 5.368 0 01-3.07 3.07c-.668.26-1.431.438-2.55.489-1.119.05-1.476.063-4.328.063-2.851 0-3.209-.012-4.328-.063-1.118-.051-1.881-.229-2.55-.488a5.144 5.144 0 01-1.859-1.211 5.145 5.145 0 01-1.21-1.86c-.26-.668-.438-1.43-.489-2.548-.05-1.12-.063-1.478-.063-4.329s.012-3.209.063-4.329c.051-1.117.229-1.88.488-2.548.264-.7.677-1.335 1.211-1.86a5.145 5.145 0 011.86-1.21c.668-.26 1.43-.438 2.548-.489zm8.572 1.89c-1.107-.05-1.44-.061-4.243-.061-2.803 0-3.135.01-4.242.06-1.024.048-1.58.219-1.95.362a3.25 3.25 0 00-1.207.786 3.253 3.253 0 00-.786 1.207c-.143.37-.315.926-.361 1.95-.05 1.107-.061 1.439-.061 4.242 0 2.804.01 3.136.06 4.243.047 1.023.219 1.58.362 1.95.169.455.437.868.786 1.206a3.25 3.25 0 001.207.786c.37.144.926.315 1.95.361 1.106.05 1.438.062 4.242.062 2.804 0 3.136-.011 4.243-.062 1.023-.046 1.58-.217 1.95-.361a3.477 3.477 0 001.992-1.993c.143-.37.315-.926.361-1.95.05-1.107.061-1.438.061-4.242 0-2.803-.01-3.135-.06-4.242-.047-1.024-.219-1.58-.362-1.95a3.255 3.255 0 00-.786-1.207 3.254 3.254 0 00-1.207-.786c-.37-.143-.926-.314-1.95-.361zm2.621 2.942a1.26 1.26 0 11-2.52 0 1.26 1.26 0 012.52 0zM6.61 12a5.391 5.391 0 1110.782 0A5.391 5.391 0 016.61 12zM12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"></path>
            </svg>
         </span>
      </a>
   </li>
   <li>
      <a class="css-kv8661" href="https://www.linkedin.com/company/medicinain/" target="_blank" rel="noopener noreferrer" data-testid="footer-bar-social-linkedin-button-link">
         <span class="css-2esx3w">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" class="css-k008qs">
               <path fill="currentColor" d="M20.449 2H3.496C2.665 2 2 2.667 2 3.444v17.112C2 21.333 2.665 22 3.496 22h17.008c.831 0 1.496-.667 1.496-1.444V3.444A1.57 1.57 0 0020.449 2zM7.928 19.056H4.936V9.5h2.937v9.556h.055zM6.432 8.166a1.728 1.728 0 01-1.717-1.722c0-.944.775-1.666 1.717-1.666.942 0 1.718.778 1.718 1.722s-.776 1.667-1.718 1.667zm12.576 10.89h-2.936v-4.667c0-1.111 0-2.556-1.551-2.556-1.552 0-1.773 1.223-1.773 2.445V19H9.756V9.5h2.826v1.278h.055c.388-.778 1.385-1.556 2.826-1.556 2.991 0 3.545 2 3.545 4.556v5.278z"></path>
            </svg>
         </span>
      </a>
   </li>
  
   
</ul>    

</div>
  </footer>
</div>





<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js?v=001"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js?v=001"></script> -->



	<!-- Bootstrap JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mask.min.js"></script>


  
  <!-- Scroll Reveal-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
           


			ScrollReveal().reveal('.mdin-hero');
			ScrollReveal().reveal('.mdin-content-extras--item');
			ScrollReveal().reveal('.mdin-midia-item-1');
			ScrollReveal().reveal('.mdin-midia-item-2');
			ScrollReveal().reveal('.mdin-midia-item-3');
			ScrollReveal().reveal('.mdin-midia-item-4');
			ScrollReveal().reveal('.mdin-testimonials');
			ScrollReveal().reveal('.mdin-about');
			ScrollReveal().reveal('.mdin-acompanhamento');
			ScrollReveal().reveal('.mdin-faq');
			ScrollReveal().reveal('.mdin-newsletter');
			ScrollReveal().reveal('.mdin-benefits');

	
	</script>


     


<script type="text/javascript">
      (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
      vgo('setAccount', '611104056');
      vgo('setTrackByDefault', true);
  
      vgo('process');

      $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>


<script type="text/javascript">
  (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
  vgo('setAccount', '611104056');
  vgo('setTrackByDefault', true);

  vgo('process');
</script>

<script type="text/javascript"  src="https://apiv2.popupsmart.com/api/Bundle/384482" async></script>
<script>

  var parent = document.querySelector(".mdin-calculadora--button");
  

    parent.addEventListener('click', function () {

      console.log('Clicastes');

        window.location.href="#ResultPage";


        var valor = document.getElementById('valor'); //linka a var no paragrafo onde ele sera escrito
        var mensal = document.getElementById('mensal'); //linka a var no paragrafo onde ele sera escrito
        var msg = document.getElementById('msg'); //linka a var ao campo onde sera mostrado o valor anual no html
        var abr = document.getElementById('abr'); //linka a var ao campo onde sera mostrado o valor anual no html
        var prat = document.getElementById('pratt'); //linka a var ao campo onde sera mostrado o valor anual no html
        var frasco = document.getElementById('frasco'); //linka a var no paragrafo onde ele sera escrito

        var TipoDosagem = document.getElementById('TipoDosagem'); // Gotas ou Miligramas

        var PrecoMgVerdemed = document.getElementById('PrecoMgVerdemed'); // Preço de produtos Verdemed
        var PrecoMgAbr = document.getElementById('PrecoMgAbr'); // Preço de produtos Abrace
        var PrecoMgPratt = document.getElementById('PrecoMgPratt'); // Preço de produtos Pratti Donaduzzi


        var DosagemDiariaMg = document.getElementById('DosagemDiariaMg');  // Dosagem em Miligramas
        var DosagemDiariaGt = document.getElementById('DosagemDiariaGt');

        var D = Number(DosagemDiariaMg.value); // transforma campos em números
        var P = Number(PrecoMgVerdemed.value); //    // transforma campos em números

        //Abrace
        var A = Number(PrecoMgAbr.value);

        //Prati
        var T = Number(PrecoMgPratt.value);


        var calculo = D*P;  // o tipo multiplicado pela dosagem mais o valor da origem(pode ser multiplicado tbm)
        var calculoAbrace = D*A;
        var calculoPratti = D*T;


        valor.innerText = `R$ ${calculo.toFixed(2)}`; //Mostrará o valor

        msg.innerText = `Baseado na sua dosagem diária, o custo do seu tratamento será de:`; //mensagem acima do valor
        mensal.innerText = `Custo por dia`;//mostra "media/mensal" na tela
        frasco.innerText = 'Considerando um pedido mínimo de 5 frascos do produto Verdemed CBD Isolado - 30 ml'


        abr.innerText = `R$ ${calculoAbrace.toFixed(2)}`; //Mostrará o valor
        prat.innerText = `R$ ${calculoPratti.toFixed(2)}`; //Mostrará o valor

        $('#ResultPage').show();

    });


</script>


  
<script>
  
  var loginBtn = document.getElementById("agendar-button");

  if(loginBtn){
    loginBtn.addEventListener('click', () => {
    // Show loader on button click
    loginBtn.classList.add("loading");
    // Hide loader after success/failure - here it will hide after 2seconds
    setTimeout(() => loginBtn.classList.remove("loading"), 3000);
  });
};

    

</script>








</body>
</html>
