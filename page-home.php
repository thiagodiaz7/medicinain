<?php 
/**
 * 	Template Name: Início
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>

<div class="mdin-hero" id="inicio">
	<div class="container col-xxl-10 px-4 py-5" id="inicio">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
		<div class="col-lg-4 offset-lg-1 p-0">

			<div class="mdin-hero-background-image">
				<div class="mdin-hero-card-price">
					<div class="mdin-hero-card-price-label">Melhor preço por tempo limitado</div>
					<p class="mdin-hero-card-text">Consulta inicial, Autorização a Anvisa, encontre a melhor oferta do medicamento e obtenha alívo com nosso acompanhamento.</p>

					<div class="mdin-hero-card-price-table">
						<div class="mdin-hero-card-price-table--de">de R$ 500,00 <span class="draw-line"></span></div>
						<div class="mdin-hero-card-price-table--por">por R$ 250,00</div>

						<div class="mdin-hero-card-price-table--desc">Sem mensalidade ou taxas escondidas</div>
					</div>
				</div>
			</div>

			<div class="mdin-label-feedback">
				98% de recomendações positivas
			</div>

			
		</div>
		<div class="col-lg-7">
				<?php if( get_field('headline') ): ?>
					<h1 class="display-5 fw-bold lh-1 mb-3 mdin-content-title">
						<?php the_field('headline'); ?>
					</h1>
				<?php endif; ?>

			

			<p class="lead mdin-hero-lead">
			Descomplicamos para você poder viver melhor. Da consulta ao acompanhamento do seu tratamento. Aqui você vai encontrar:
			</p>

			<div class="mdin-spacing"></div>

			<div class="row">
				<div class="col-lg-6">
					<div class="mdin-hero-services service-1">
						<h4 class="mdin-hero-services--title">Médicos que prescrevem Canabidiol</h4>
						<p class="mdin-hero-services--lead">
							Agende uma consulta 100% online com médicos que prescrevem Canabidiol em poucos passos.
						</p>
					</div>
					
				</div>

				<div class="col-lg-6">
					<div class="mdin-hero-services service-2">
						<h4 class="mdin-hero-services--title">Autorização da Anvisa</h4>
						<p class="mdin-hero-services--lead">
						Nós te ajudaremos em todo o processo burocrático na Anvisa de forma rápida e facilitada.
						</p>
					</div>
				</div>
			</div>

			<div class="mdin-spacing"></div>

			<div class="row">
				<div class="col-lg-6">
					<div class="mdin-hero-services service-3">
						<h4 class="mdin-hero-services--title">Encontre a melhor oferta</h4>
						<p class="mdin-hero-services--lead">
						Conte com todo o nosso apoio para encontrar a melhor oferta do medicamento receitado de forma facilitada.
						</p>
					</div>
					
				</div>

				<div class="col-lg-6">
					<div class="mdin-hero-services service-4">
						<h4 class="mdin-hero-services--title">Ajustar dosagem individual</h4>
						<p class="mdin-hero-services--lead">
							Conte com o nosso acompanhamento personalizado para ajustar a dosagem do seu tratamento.
						</p>
					</div>
				</div>
			</div>

			<div class="mdin-spacing"></div>


			<div class="d-grid gap-2 d-md-flex justify-content-md-start">
				<a href="https://medicina.in/agendar" class="btn btn-primary px-4 me-md-2 mdin-btn-primary action-button" id="agendar-button">Encontrar médico e agendar consulta</a>
				<button type="button" class="btn btn-link px-4 me-md-2 mdin-btn-link" data-bs-toggle="modal" data-bs-target="#pedido" onclick="window.ga('send', 'event','website','click_receita','Já tenho receita');">Já tenho receita médica</button>

			</div>

			
		</div>
		</div>
	</div>
</div>

<div class="container px-4 py-5" id="extras">
	<div class="row">
		<div class="col d-flex align-items-start">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/extras/mdin-icon-rmd.svg" class="img-fluid" alt="">
			<div class="mdin-content-extras--item">
				<h3 class="fw-bold mb-0 mdin-content--subtitle">Acompanhamento do seu tratamento com Canabidiol</h3>
				<p class="mdin-content--lead">Nossos médicos poderão detalhar todos os benefícios da cannabis medicinal para o seu caso, acompanhando você ao longo de cada passo desse processo antes, durante e após a consulta.</p>
			</div>
		</div>

		<div class="col d-flex align-items-start">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/extras/mdin-icon-hrt.svg" alt="">
			<div class="mdin-content-extras--item">
				<h4 class="fw-bold mb-0 mdin-content--subtitle">Acesso facilitado ao óleo de Canabidiol</h4>
				<p class="mdin-content--lead">Caso seu tratamento possa ser feito com Canabidiol, nossa equipe ajudará você com todos os passos para obter o medicamento adequado de forma prática e simples.</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row justify-content-md-center text-center">

	<h6 class="lead mdin-title-midia">Medicina In na mídia</h6>

		<div class="col col-lg-2 mdin-midia-item-1">
			<a href="https://cannabisinc.blogfolha.uol.com.br/2020/11/27/cresce-a-demanda-de-clinicas-de-cannabis-no-brasil/?loggedpaywall" target="_blank" nofollow title="Cresce a demanda por clínicas de Cannabis no Brasil">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/press/medicinain-folha.svg" alt="Cresce a demanda por clínicas de Cannabis no Brasil">
			</a>
		</div>

		<div class="col col-lg-2 mdin-midia-item-2">
			<a href="https://cannalize.com.br/menos-de-1-dos-medicos-prescrevem-cannabis-no-brasil/" target="_blank" nofollow title="Menos de 1% dos médicos prescrevem cannabis no Brasil">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/press/medicinain-cannalize.svg" alt="Menos de 1% dos médicos prescrevem cannabis no Brasil">
			</a>
		</div>

		<div class="col col-lg-2 mdin-midia-item-3">
			<a href="https://www.istoedinheiro.com.br/investimento-florescente/" target="_blank" nofollow title="Aprovação de uso medicinal da cannabis no Brasil acende o interesse pelas ações do setor. Mas os especialistas alertam que vai demorar para sentir o efeito no bolso.">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/press/medicinain-istoe.svg" alt="Aprovação de uso medicinal da cannabis no Brasil acende o interesse pelas ações do setor. Mas os especialistas alertam que vai demorar para sentir o efeito no bolso.">
			</a>
		</div>

		<div class="col col-lg-2 mdin-midia-item-4">
			<a href="https://delas.ig.com.br/desabafo/2021-08-31/fibromialgia-tratamento-cannabis-medicinal.html" target="_blank" nofollow title="Cannabis medicinal devolveu minha vontade de viver após fibromialgia.">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/press/medicinain-ig.svg" alt="Cannabis medicinal devolveu minha vontade de viver após fibromialgia.">
			</a>
		</div>
	</div>
</div>

<!-- Depoimentos -->

<div class="container px-8 py-5 mdin-testimonials">

	<h3 class="display-6 fw-bold lh-1 mb-3 mdin-content--title text-center">Leia quem confia na Medicina In</h3>
	
	<div class="mdin-spacing"></div><div class="mdin-spacing"></div>
	
	<div class="row justify-content-md-center">
		<div class="col-md-4">
			<div class="mdin-testimonials-card">
				<div class="mdin-testimonials-card--quote"></div>

				<p class="mdin-testimonials-card--text">
					A Medicina In me ajudou muito em tudo. Desde o atendimento, até o medicamento chegar em casa. Tive um acompanhamento muito bom e estou bem melhor!
				</p>

				<div class="mdin-testimonials-card--person">
					<div class="mdin-testimonials-card--name">Ana Maria</div>
					<div class="mdin-testimonials-card--span">Dores Crônicas</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="mdin-testimonials-card active">
				<div class="mdin-testimonials-card--quote"></div>

				<p class="mdin-testimonials-card--text">
				Adorei a consulta, o médico foi super atencioso e me explicou tudo nos detalhes. Encontrei o medicamento com facilidade tudo rapidinho!
				</p>

				<div class="mdin-testimonials-card--person">
					<div class="mdin-testimonials-card--name">Maria de Fátima</div>
					<div class="mdin-testimonials-card--span">Fibromialgia</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="mdin-testimonials-card">
				<div class="mdin-testimonials-card--quote"></div>

				<p class="mdin-testimonials-card--text">
					Melhorei bem depois que comecei a tomar o CBD, com ajuda do acompanhamento profissional da Medicina In consegui chegar na minha dose eficaz bem rápido e melhorou bastante minha qualidade de vida.
				</p>

				<div class="mdin-testimonials-card--person">
					<div class="mdin-testimonials-card--name">Rodrigo Torres</div>
					<div class="mdin-testimonials-card--span">Ansiedade</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="mdin-lista-medicos">
		<div class="container">
            <div class="row">
                <div class="col">

                <h3 class="display-5 fw-bold lh-1 mb-3 mdin-content--title">Lista de médicos que prescrevem canabidiol</h3>

                <p class="lead mdin-content--lead"> 
                    Aqui você encontra a lista de médicos que prescrevem canabidiol mais bem avaliados e
                    com +5 anos de experiência em atendimento no tratamento com Canabidiol. Todos os atendimentos são feitos 100% online.
                </p>

                <div class="wrapper">

                    <div class="border-item">VALOR DA CONSULTA <span>R$ 250,00</span></div>

                    <div class="border-item">RETORNO <span>R$ 0,00</span></div>

                    <div class="border-item">SUPORTE PÓS-CONSULTA <span>R$ 0,00</span></div>

                    <div class="border-item">ACOMPANHAMENTO <span>R$ 0,00</span></div>
                </div>
                
				<a href="https://medicina.in/agendar?utm_source=home" class="btn btn-primary px-4 me-md-2 mdin-btn-primary action-button w-100" id="agendar-button">Encontrar médico e agendar consulta</a>

            </div>
			<div class="col">
                <ul>
                    <li class="docs row">
                        <div class="col-sm-2 d-none d-md-block">
                            <div class="doc-avatar">
                                <div class="doc-verified"><img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/verified.svg" alt=""></div>
                                <img class="img-fluid doc-img" src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/doc-avatar.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="doc-header">Dr. Thiago Braga</h5>
                            <p class="doc-text">Clínica Médica e Medicina Endocanabinoide</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="star-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/stars.svg" alt="">
                                        <span>9.8</span>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <a class="doc-link" href="https://medicina.in/corpo-medico/thiago-braga" title="Lista de médicos que prescrevem canabidiol: Thiago Braga">Ver avaliações</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <p class="doc-text">CRM 183406</p>
                        </div>
                    </li>

                    <li class="docs row">
                        <div class="col-sm-2 d-none d-md-block">
                            <div class="doc-avatar">
                                <div class="doc-verified"><img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/verified.svg" alt=""></div>
                                <img class="img-fluid doc-img" src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/doc-avatar.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="doc-header">Dr. Lucas Cardoso</h5>
                            <p class="doc-text">Clínica Médica e Medicina Endocanabinoide</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="star-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/stars.svg" alt="">
                                        <span>9.7</span>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <a class="doc-link" href="https://lp.medicinain.com.br/avaliacoes-de-pacientes" title="Lista de médicos que prescrevem canabidiol: Lucas Cardoso">Ver avaliações</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <p class="doc-text">CRM 190670</p>
                        </div>
                    </li>

                    <li class="docs row">
                        <div class="col-sm-2 d-none d-md-block">
                            <div class="doc-avatar">
                                <div class="doc-verified"><img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/verified.svg" alt=""></div>
                                <img class="img-fluid doc-img" src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/doc-avatar.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="doc-header">Dra. Ariane Lopes</h5>
                            <p class="doc-text">Clínica Médica e Medicina Endocanabinoide</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="star-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/stars.svg" alt="">
                                        <span>9.5</span>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <a class="doc-link" href="https://lp.medicinain.com.br/avaliacoes-de-pacientes" title="Lista de médicos que prescrevem canabidiol: Ariane Lopes">Ver avaliações</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <p class="doc-text">CRM 16155</p>
                        </div>
                    </li>
    
                    <li class="docs row">
                        <div class="col-sm-2 d-none d-md-block">
                            <div class="doc-avatar">
                                <div class="doc-verified"><img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/verified.svg" alt=""></div>
                                <img class="img-fluid doc-img" src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/doc-avatar.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="doc-header">Dr. Patrick Vieira</h5>
                            <p class="doc-text">Clínica Médica e Medicina Endocanabinoide</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="star-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/stars.svg" alt="">
                                        <span>9.5</span>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <a class="doc-link" href="https://medicina.in/corpo-medico/patrick-mesquita-vieira" title="Lista de médicos que prescrevem canabidiol: Patrick Mesquita Vieira">Ver avaliações</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <p class="doc-text">CRM 134633</p>
                        </div>
                    </li>
    
                    <li class="docs row">
                        <div class="col-sm-2 d-none d-md-block">
                            <div class="doc-avatar">
                                <div class="doc-verified"><img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/verified.svg" alt=""></div>
                                <img class="img-fluid doc-img" src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/doc-avatar.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="doc-header">Dr. André Domenici</h5>
                            <p class="doc-text">Clínica Médica e Medicina Endocanabinoide</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="star-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/lista-medicos/stars.svg" alt="">
                                        <span>9.4</span>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <a class="doc-link" href="https://lp.medicinain.com.br/avaliacoes-de-pacientes" title="Lista de médicos que prescrevem canabidiol: André Domenici">Ver avaliações</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <p class="doc-text">CRM 46766</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</section>


<section class="mdin-about-sec">
	<div class="container col-xxl-8 px-4 py-5 mdin-about" id="sobre">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
		<div class="col-10 col-sm-8 col-lg-6">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/about/mdin-cannabis-medicinal-foto.png" class="d-block mx-lg-auto img-fluid" alt="Sobre a Medicina In" width="700" height="500" loading="lazy">
		</div>
		<div class="col-lg-6">
			<h2 class="display-5 fw-bold lh-1 mb-3 mdin-content--title">Sobre a Medicina In</h2>
			<p class="lead mdin-content--lead">Nós somos um portal para você encontrar médicos experientes em Cannabis medicinal e especializados em fornecer acesso a cannabis e produtos canabinoides para uso médico.</p>
			<p class="lead mdin-content--lead">Acreditamos no cuidado de fornecer educação de qualidade sobre Cannabis Medicinal e acompanhamento aos nossos pacientes e além de tudo, acreditamos na democratização dos benefícios do uso da Cannabis Medicinal.</p>


			<div class="d-none d-md-block d-lg-block">
				<a class="btn-link btn-lg mdin-btn-link--medicos" href="https://medicina.in/corpo-medico" target="_blank" role="button" onclick="window.ga('send', 'event','website','click_medicos','Conheça nosso time de médicos responsáveis');">Conheça os médicos responsáveis</a>
			</div>
		</div>
		</div>
	</div>
</section>


<div class="container col-xxl-8 px-4 py-5 mdin-acompanhamento">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
     
      <div class="col-lg-6">
        <h2 class="display-5 fw-bold lh-1 mb-3 mdin-content--title">Acompanhamento profissional on-line. Para sempre.</h2>
        <p class="lead mdin-content--lead">Acompanhamento personalizado desde o seu primeiro dia. Atendimento 100% online de forma simples e organizada. Tudo sem precisar nem sair de casa. </p>
		<p class="lead mdin-content--lead">Nossos especialistas são escolhidos a dedo, formados nas melhores instituições do Brasil. A Medicina In te conecta ao médico mais indicado para seu caso.</p>
      </div>

	  <div class="col-10 col-sm-8 col-lg-6">
	  	<video autoplay="" loop="" muted="" height="100%" width="100%">
            <source src="https://medicina.in/wp-content/uploads/2022/03/medicinain_mock1-2.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/medicinain_mock1.ogg" type="video/ogg">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/medicinain_mock1.webm" type="video/webm">
        </video>
      </div>

    </div>
</div>


<section class="mdin-faq-sec">
	<div class="container col-xxl-8 px-4 py-5 mdin-faq" id="duvidas-frequentes">

		<div class="row flex-lg-row align-items-center g-5 py-5">
			<div class="col-lg-6">
			<h2 class="display-5 fw-bold lh-1 mb-3 mdin-content--title">Sua dúvida pode estar aqui...</h2>
			<p class="lead mdin-content--lead">
			Na Medicina.In, seu conforto e bem estar são nossa prioridade. Pensando nisso, criamos um sistema simples e intuitivo para que você possa ter acesso à Cannabis Medicinal, assim como um acompanhamento eficiente durante todas as etapas do processo.

			</p>

			<div class="d-none d-md-block d-lg-block">
				<a href="https://wa.link/zqwa6c" target="_blank" class="btn btn-primary px-4 me-md-2 mdin-btn-primary" onclick="window.ga('send', 'event','website','click_tenho_duvidas','Não encontrei minha dúvida');">Não encontrei minha dúvida</a>
			</div>

			<div class="d-block d-md-none d-lg-none">
			<a href="https://wa.link/zqwa6c" target="_blank" class="btn btn-primary px-4 me-md-2 mdin-btn-primary" onclick="window.ga('send', 'event','website','click_tenho_duvidas_mobile','Não encontrei minha dúvida');">Não encontrei minha dúvida</a>
			</div>


			</div>

			<div class="col-12 col-sm-8 col-lg-6">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSix">
							<button class="accordion-button mdin-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								Quanto custa canabidiol no Brasil?
							</button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						<p class="lead mdin-content--lead">
							O valor do medicamento pode variar bastante de acordo com a concentração e composição. Incentivamos que você converse com o médico que te atender sobre valores para que seja possível prescrever um medicamento eficaz e que caiba no seu bolso.
							Acesse nossa <a href="/calculadora" title="Quanto vai custar meu tratamento com CBD?">Calculadora de Tratamento</a> e saiba mais.
						</p>
						</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button mdin-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Quanto custa a consulta?
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						<p class="lead mdin-content--lead">Estamos com um valor promocional da consulta por R$ 250,00 reais à vista. </p>
						</div>
						</div>
					</div>

				

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button mdin-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							A Medicina In atende meu convênio?
						</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<p class="lead mdin-content--lead">Não trabalhamos diretamente com nenhum convênio médico. No entanto, é possível pedir reembolso em diversos convênios após a realização da sua consulta conosco. Pedimos que entre em contato com seu plano para verificar quais são os processos e documentos necessários.</p>
						</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button mdin-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Quem são os médicos que prescrevem Canabidiol?
						</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<p class="lead mdin-content--lead">Temos um corpo de médicos composto por profissionais especializados com mais de uma década de experiência na prescrição de Cannabis Medicinal. Em paralelo a toda a experiência que cada profissional traz com sua própria bagagem, todos os médicos cadastrados na Medicina In são submetidos constantemente a novos treinamentos e supervisão do nosso Comitê Científico para estarem sempre a par dos mais novos estudos sobre Cannabis Medicinal.</p>
						</div>
						</div>
					</div>
				
					
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive">
						<button class="accordion-button mdin-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							Como eu escolho o médico que irá me atender?
						</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<p class="lead mdin-content--lead">A escolha do médico é feita automaticamente de acordo com o seu caso, após preencher uma pequena pré-consulta que você faz depois do agendamento.</p>
						
						<p class="lead mdin-content--lead">Todos os  médicos cadastrados na Medicina In contam com mais de 10 anos de experiência na prescrição de Cannabis medicinal e estão distribuídos entre nossos pilares de atendimento: neurologia, psiquiatria, medicina esportiva, geriatria e reumatologia.</p>
						</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSix">
						<button class="accordion-button mdin-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							Tenho direito ao retorno da consulta?
						</button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<p class="lead mdin-content--lead">Sim, todas as consultas realizadas tem o direito a um retorno gratuito dentro do prazo de 30 dias após o início do tratamento.</p>
						
						
						</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
						<button class="accordion-button mdin-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							Caso eu cancele uma consulta, posso pedir reembolso?
						</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						<p class="lead mdin-content--lead">Sim. Todas as consultas canceladas com até 24 horas de antecedência ao horário marcado serão reembolsadas integralmente. Caso haja qualquer imprevisto, basta entrar em contato com a gente pelo email falecom@medicina.in.</p>
						</div>
						</div>
					</div>

				
				</div>
			</div>
		</div>

	</div>

</section>



<div class="mdin-background-secondary mdin-newsletter" id="cbd-para-leigos">
	<div class="container col-xl-10 col-xxl-8 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
		<div class="col-lg-7 text-center text-lg-start">
			<h5 class="display-6 fw-bold lh-2 mb-4 mdin-content--title">Assine nosso Guia de Cannabis medicinal para Leigos: do básico ao avançado!</h5>
			<p class="lead mdin-content--lead">Assine gratuitamente o nosso guia exclusivo de Cannabis medicinal para Leigos: do básico ao avançado. Todo semana no seu e-mail você recebe informações relevantes para melhorar o seu conhecimento em torno desse assunto.</p>
		</div>
		<div class="col-md-10 mx-auto col-lg-5">
			<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/cbd-para-leigos/comprar-cbd-para-leigos.png" width="451" height="157" alt="">

			<div class="mdin-newsletter-home--box _form-content">

				<form  method="POST" action="https://medicina22874.activehosted.com/proc.php" id="_form_8_" class="_form _form_8 _inline-form _inline-style _dark" novalidate class="row g-3">
					<input type="hidden" name="u" value="8" />
					<input type="hidden" name="f" value="8" />
					<input type="hidden" name="s" />
					<input type="hidden" name="c" value="0" />
					<input type="hidden" name="m" value="0" />
					<input type="hidden" name="act" value="sub" />
					<input type="hidden" name="v" value="2" />
					<input type="hidden" name="or" value="ef313078ce87828961a6371f0c2ac601" />

					<div class="col-auto mdin-newsletter-home--boxinput">
						<label for="email" class="visually-hidden _form-label">Email</label>
						<input type="text" id="email" class="form-control blog-newsletter-form-control" name="email" placeholder="Digite seu e-mail" required/>
					</div>
					
					<div class="col-auto">
						<button id="_form_8_submit" class="_submit btn btn-primary mdin-btn-primary mdin-btn-newsletter" type="submit">
							Assinar gratuitamente
						</button>
					</div>

					<div class="_form-thank-you" style="display:none;">
      				</div>
				</form>


				

    <form>
      
    
      
    </form>
			
				
			</div>
		
		</div>
		</div>
	</div>
</div>

<div class="px-4 py-5 my-5 text-center mdin-benefits" id="beneficios-cannabis-medicinal">
    <h2 class="display-6 fw-bold lh-2 mb-4 mdin-content--title">Quais são os benefícios do Canabidiol?</h2>
    <div class="col-lg-6 mx-auto">
      <p class="lead mdin-content--lead">Com alta eficácia comprovada por centenas de estudos no mundo todo, a Cannabis Medicinal pode ser utilizada no tratamento de inúmeras condições médicas. Saiba mais sobre como o medicamento atua em cada tipo de caso acessando as categorias abaixo.</p>
    </div>

	<div class="container px-4 py-5" id="featured-3">
	<div class="row">
        <div class="col-md-4" name="Psicologico">
          <div class="mdin-flip">

            <!-- FRONT CARD -->
            <div class="mdin-bnfcsii-card-item front">
              <div class="mdin-bnfcsii-card-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/beneficios/mdin-img-card-psicologico.svg" width="130" heigh="125" alt="Psicológico">
              </div>

              <div class="mdin-bnfcsii-card-item-title">
                <h4 class="mdin-bnfcsii-card-item-title--item">Psicológico</h4>
                <span class="mdin-info-mobile d-block d-sm-none d-none d-sm-block d-md-none">Toque para expandir</span>
              </div>
             
            </div>

            <!-- BACK CARD -->
            <div class="mdin-bnfcsii-card-item back">

              <div class="mdin-bnfcsii-card-links">
                <h4 class="mdin-bnfcsii-card-item-title--item">Psicológico</h4>
                <small class="mdin-bnfcsii-card-item-subtitle">Condições relacionadas ao Psicológico</small>

                <ul class="mdin-bnnfcsii-card-links-list">
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="/conteudo/category/ansiedade?utm_source=home_beneficios" title="CBD para Ansiedade">Ansiedade</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="/conteudo/category/depressao?utm_source=home_beneficios" title="CBD para Depressão">Depressão</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><!-- <a target="_blank" href="https://www.medicina.in/conteudo/burnout?utm_source=home_beneficios" title="CBD para Burnout"> --> Burnout <!--</a>--></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="/conteudo/category/estresse?utm_source=home_beneficios" title="CBD para Estresse pós-traumático">Estresse pós-traumático</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="/conteudo/category/insonia?utm_source=home_beneficios" title="CBD para Insônia">Insônia</a></li>
					<li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="/conteudo/category/tdah?utm_source=home_beneficios" title="TDA e TDAH">TDA e TDAH</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="/conteudo/category/autismo?utm_source=home_beneficios" title="CBD para Autismo">Autismo</a></li>
					
		<!--    <li class="mdin-bnnfcsii-card-links-list--item">TDA e TDAH</li> -->

                </ul>
                
              </div>
             
             
            </div>
          </div>
          

         
        </div>

        <div class="col-md-4" name="Dores">
          <div class="mdin-flip">

            <!-- FRONT CARD -->
            <div class="mdin-bnfcsii-card-item front">
              <div class="mdin-bnfcsii-card-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/beneficios/mdin-img-card-dores.svg" width="120" height="137" alt="Dores">
              </div>

              <div class="mdin-bnfcsii-card-item-title">
                <h4 class="mdin-bnfcsii-card-item-title--item">Dores</h4>
                <span class="mdin-info-mobile d-block d-sm-none d-none d-sm-block d-md-none">Toque para expandir</span>

              </div>
             
            </div>

            <!-- BACK CARD -->
            <div class="mdin-bnfcsii-card-item back">

              <div class="mdin-bnfcsii-card-links">
                <h4 class="mdin-bnfcsii-card-item-title--item">Dores</h4>
                <small class="mdin-bnfcsii-card-item-subtitle">Condições relacionadas a Dores</small>

                <ul class="mdin-bnnfcsii-card-links-list">
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="/conteudo/category/dores?utm_source=home_beneficios" title="CBD para Dor crônica">Dor crônica</a></li>
                <!-- <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://www.medicina.in/conteudo/artrite-reumatoide?utm_source=home_beneficios" title="CBD para Artrite">Artrite</a></li> -->
				  <li class="mdin-bnnfcsii-card-links-list--item">Artrite</li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/fibromialgia?utm_source=home_beneficios" title="CBD para Fibromialgia">Fibromialgia</a></li>
                  
                  <li class="mdin-bnnfcsii-card-links-list--item">Dores oncológica</li>

                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/endometriose?utm_source=home_beneficios" title="CBD para Endometriose">Endometriose</a></li>
                 <!-- <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://www.medicina.in/conteudo/enxaqueca-como-dizer-adeus-ou-pelo-menos-ate-logo-a-essa-praga-da-vida-moderna?utm_source=home_beneficios" title="CBD para Enxaqueca">Enxaqueca</a></li> -->
					<li class="mdin-bnnfcsii-card-links-list--item">Enxaqueca</li>


                </ul>
                
              </div>
             
             
            </div>
          </div>
          

         
        </div>

        <div class="col-md-4" name="Sistema Nervoso">
          <div class="mdin-flip">

            <!-- FRONT CARD -->
            <div class="mdin-bnfcsii-card-item front">
              <div class="mdin-bnfcsii-card-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/beneficios/mdin-img-card-sistema-nervoso.svg" width="125" height="114" alt="Sistema Nervoso">
              </div>

              <div class="mdin-bnfcsii-card-item-title">
                <h4 class="mdin-bnfcsii-card-item-title--item">Sistema Nervoso</h4>
                <span class="mdin-info-mobile d-block d-sm-none d-none d-sm-block d-md-none">Toque para expandir</span>

              </div>
             
            </div>

            <!-- BACK CARD -->
            <div class="mdin-bnfcsii-card-item back">

              <div class="mdin-bnfcsii-card-links">
                <h4 class="mdin-bnfcsii-card-item-title--item">Sistema Nervoso</h4>
                <small class="mdin-bnfcsii-card-item-subtitle">Condições relacionadas a Sistema Nervoso</small>

                <ul class="mdin-bnnfcsii-card-links-list">
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/parkinson?utm_source=home_beneficios" title="CBD para Parkinson">Parkinson</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/alzheimer?utm_source=home_beneficios" title="CBD para Alzheimer">Alzheimer</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/tudo-sobre-cbd/epilepsia-tem-cura?utm_source=home_beneficios" title="CBD para Epilepsia">Epilepsia</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/autismo?utm_source=home_beneficios" title="CBD para Autismo">Autismo</a></li>

                  
                  <li class="mdin-bnnfcsii-card-links-list--item">Esclerose Múltipla</li>

                  <!-- <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://www.medicina.in/conteudo/enxaqueca-como-dizer-adeus-ou-pelo-menos-ate-logo-a-essa-praga-da-vida-moderna?utm_source=home_beneficios" title="CBD para Enxaqueca">Enxaqueca</a></li> -->
					<li class="mdin-bnnfcsii-card-links-list--item">Enxaqueca</li>

                  <li class="mdin-bnnfcsii-card-links-list--item"></li>
 
                </ul>
                
              </div>
             
             
            </div>
          </div>
          

         
        </div>

        <div class="col-md-4" name="Articulações">
          <div class="mdin-flip">

            <!-- FRONT CARD -->
            <div class="mdin-bnfcsii-card-item front">
              <div class="mdin-bnfcsii-card-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/beneficios/mdin-img-card-articulacoes.svg" width="125" height="114" alt="Sistema Nervoso">
              </div>

              <div class="mdin-bnfcsii-card-item-title">
                <h4 class="mdin-bnfcsii-card-item-title--item">Articulações</h4>
                <span class="mdin-info-mobile d-block d-sm-none d-none d-sm-block d-md-none">Toque para expandir</span>

              </div>
             
            </div>

            <!-- BACK CARD -->
            <div class="mdin-bnfcsii-card-item back">

              <div class="mdin-bnfcsii-card-links">
                <h4 class="mdin-bnfcsii-card-item-title--item">Articulações</h4>
                <small class="mdin-bnfcsii-card-item-subtitle">Condições relacionadas a Articulações</small>

                <ul class="mdin-bnnfcsii-card-links-list">
                  <!-- <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://www.medicina.in/conteudo/artrite-reumatoide?utm_source=home_beneficios" title="CBD para Artrite">Artrite</a></li> -->
				  <li class="mdin-bnnfcsii-card-links-list--item">Artrite</li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/artrose?utm_source=home_beneficios" title="CBD para Artrose">Artrose</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item">Reumatismo</li>
               <!--   <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://www.medicina.in/conteudo/osteoporose?utm_source=home_beneficios" title="CBD para Osteoporose">Osteoporose</a></li> -->
					<li class="mdin-bnnfcsii-card-links-list--item">Osteoporose</li>


                </ul>
                
              </div>
             
             
            </div>
          </div>
          

         
        </div>

        <div class="col-md-4" name="Sistema Digestivo">
          <div class="mdin-flip">

            <!-- FRONT CARD -->
            <div class="mdin-bnfcsii-card-item front">
              <div class="mdin-bnfcsii-card-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/beneficios/mdin-img-card-sistema-digestivo.svg" width="125" height="114" alt="Sistema Digestivo">
              </div>

              <div class="mdin-bnfcsii-card-item-title">
                <h4 class="mdin-bnfcsii-card-item-title--item">Sistema Digestivo</h4>
                <span class="mdin-info-mobile d-block d-sm-none d-none d-sm-block d-md-none">Toque para expandir</span>

              </div>
             
            </div>

            <!-- BACK CARD -->
            <div class="mdin-bnfcsii-card-item back">

              <div class="mdin-bnfcsii-card-links">
                <h4 class="mdin-bnfcsii-card-item-title--item">Sistema Digestivo</h4>
                <small class="mdin-bnfcsii-card-item-subtitle">Condições relacionadas a Sistema Digestivo</small>

                <ul class="mdin-bnnfcsii-card-links-list">
                  <li class="mdin-bnnfcsii-card-links-list--item">Náusea</li>
                  <li class="mdin-bnnfcsii-card-links-list--item">Doença do Refluxo</li>
                  <li class="mdin-bnnfcsii-card-links-list--item">Doença Hepática Gordurosa (Gordura no Fígado)</li>
                  <li class="mdin-bnnfcsii-card-links-list--item">Síndrome do Intestino Irritável</li>
                  <li class="mdin-bnnfcsii-card-links-list--item">Doença de Crohn</li>
                  <li class="mdin-bnnfcsii-card-links-list--item">Colite Ulcerativa</li>
                </ul>
                
              </div>
             
             
            </div>
          </div>
          

         
        </div>


        <div class="col-md-4" name="Doenças Crônicas">
          <div class="mdin-flip">

            <!-- FRONT CARD -->
            <div class="mdin-bnfcsii-card-item front">
              <div class="mdin-bnfcsii-card-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/beneficios/mdin-img-card-dores-cronicas.svg" width="125" height="114" alt="Doenças Crônicas">
              </div>

              <div class="mdin-bnfcsii-card-item-title">
                <h4 class="mdin-bnfcsii-card-item-title--item">Doenças Crônicas</h4>
                <span class="mdin-info-mobile d-block d-sm-none d-none d-sm-block d-md-none">Toque para expandir</span>

              </div>
             
            </div>

            <!-- BACK CARD -->
            <div class="mdin-bnfcsii-card-item back">

              <div class="mdin-bnfcsii-card-links">
                <h4 class="mdin-bnfcsii-card-item-title--item">Doenças Crônicas</h4>
                <small class="mdin-bnfcsii-card-item-subtitle">Condições relacionadas a Doenças Crônicas</small>

                <ul class="mdin-bnnfcsii-card-links-list">
                  <li class="mdin-bnnfcsii-card-links-list--item">Doença de Crohn</li>
                  <li class="mdin-bnnfcsii-card-links-list--item">Síndrome do Intestino Irritável</li>

                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/endometriose?utm_source=home_beneficios" title="CBD para Endometriose">Endometriose</a></li>

                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/parkinson?utm_source=home_beneficios" title="CBD para Parkinson">Parkinson</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/alzheimer?utm_source=home_beneficios" title="CBD para Alzheimer">Alzheimer</a></li>
                  <li class="mdin-bnnfcsii-card-links-list--item"><a target="_blank" href="https://medicina.in/conteudo/category/diabetes?utm_source=home_beneficios" title="CBD para Diabetes">Diabetes</a></li>

                  <li class="mdin-bnnfcsii-card-links-list--item">Asma</li>
                  
                </ul>
                
              </div>
             
             
            </div>
          </div>
          

         
        </div>

    



      </div>
	</div>
</div>


<div class="mdin-together">
	<div class="container">
		<h3 class="mdin-together--title text-center">Junte-se a milhares de pacientes que já estão sentindo alívio nos sintomas</h3>

		
		<div class="row">
			<div class="col-md-4">
				<div class="mdin-together-box">
					<div class="mdin-together-box--stars"></div>

					<h4 class="mdin-together-box--title">4.9 estrelas</h4>
					<div class="mdin-together-box--span">Média de avaliação</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="mdin-together-box">
					<div class="mdin-together-box--nota"></div>

					<h4 class="mdin-together-box--title">9.7 nota</h4>
					<div class="mdin-together-box--span">Atendimento</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="mdin-together-box">
					<div class="mdin-together-box--users"></div>

					<h4 class="mdin-together-box--title">+100k usuários</h4>
					<div class="mdin-together-box--span">Em todas as plataformas</div>
				</div>
			</div>
		</div>

		<div class="row">
			<h3 class="mdin-together--title-benefits">Pacote de Benefícios</h3>

			<ul class="mdin-together--list">
				<li class="mdin-together--list-item">Encontramos o melhor médico indicado para o seu caso que prescrevem Canabidiol</li>
				<li class="mdin-together--list-item">Esqueça as listas intermináveis de <strong>médicos que prescrevem canabidiol</strong></li>
				<li class="mdin-together--list-item">Tenha acesso a uma calculadora comparativa de custo do seu tratamento</li>
				<li class="mdin-together--list-item">Programa de Acolhimento para te ajudar a ter o melhor resultado e o mais rápido possível</li>
				<li class="mdin-together--list-item">Pagamento único, sem taxas escondidas</li>
				<li class="mdin-together--list-item">Encontre a melhor oferta do medicamento em reais e em até 12x sem juros!</li>
			</ul>
		</div>

		<div class="row">
			<div class="col-md-3">
				<a href="https://medicina.in/agendar" target="_blank" class="btn btn-primary px-4 me-md-2 mdin-btn-primary" id="AgendarFooter">Agendar consulta inicial</a>
			</div>
		</div>
	</div>
</div>






<?php get_footer(); // This fxn gets the footer.php file and renders it ?>