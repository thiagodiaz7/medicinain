<?php 
/**
 * 	Template Name: Lucas Chinelatto
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header();  ?>

  
  
<div class="mdin-doctors-header" style="padding-top:130px;">
  <div class="container">
  
      <div class="mdin-profile-header">
        <div class="row justify-content-md-center">

          <div class="col-md-2 text-center">
            <div class="mdin-profile-header--avatar">
              <img src="https://medicina.in/wp-content/uploads/2022/02/mdin-doctors-lucas-chinelatto.png" alt="Lucas Chinelatto">
            </div>
          </div>

          <div class="col-md-7">
            <h1 class="mdin-profile-header--name">Dr. Lucas Chinellato</h1> <span class="mdin-profile-header--stars"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mdin-five-star.svg" alt=""></span>
            <p class="mdin-profile-header--small">Prescritor de Cannabis medicinal desde 2010 / Registro CRM 134633</p>
            <div class="mdin-profile-header--labels">
              <span class="mdin-profile-header--label-item">Medicina Canabinoide</span>
              <span class="mdin-profile-header--label-item">Medicina Esportiva</span>
            </div>
          </div>

          <div class="col-md-3">
            <a href="https://www.medicina.in/agendar/?utm_source=corpo-medico-lucas-chinelatto" target="_blank" class="btn btn-primary btn-lg mdin-btn-primary">Agendar consulta por R$ 1.500,00</a>
          </div>
        </div>
        
        <div class="mdin-profile-tabs--wrapper">
          <div class="row">
          
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Formação</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Pós-graduação</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="messages" aria-selected="false">Experiência</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="settings" aria-selected="false">Trabalhos científicos</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="settings" aria-selected="false">Depoimentos</button>
              </li>
            </ul>
          </div>
        </div>
       
      </div>

      <div class="mdin-profile-content">
        
        <div class="container">
           

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                  <div class="mdin-profile-tab-item">
                    <div class="mdin-profile-tab-item-header">
                      <h2 class="mdin-profile-tab-item--title">Formação acadêmica</h2>
                    </div>

                    <div class="mdin-profile-tab-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Título de Formação Acadêmica</h3>
                              <p class="mdin-profile-card--text">
                                Faculdade de Medicina da Universidade de Mogi das Cruzes. Inicio em 2003 e conclusão em 2008.
                              </p>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="mdin-profile-tab-item">
                    <div class="mdin-profile-tab-item-header">
                      <h2 class="mdin-profile-tab-item--title">Títulos de Pós-graduação</h2>
                    </div>

                    <div class="mdin-profile-tab-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Medicina do Trabalho</h3>
                              <p class="mdin-profile-card--text">
                                Faculdade de Ciências Médicas da Santa Casa de São Paulo – início 2009 conclusão 2011
                              </p>
                            </div>
                           
                          </div>

                          <div class="col-md-4">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Psiquiatria</h3>
                              <p class="mdin-profile-card--text">
                                Faculdades Unidas do Norte de Minas Gerais – FUNORTE / Instituto de Ciências da Saúde – ICS – início 2011 conclusão 2013
                              </p>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="messages-tab">
                  <div class="mdin-profile-tab-item">
                    <div class="mdin-profile-tab-item-header">
                      <h2 class="mdin-profile-tab-item--title">Experiência Profissional</h2>
                    </div>

                    <div class="mdin-profile-tab-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Prefeitura de Santa Branca</h3>
                              <p class="mdin-profile-card--text">
                                2008 a 2010 – médico plantonista do Pronto Socorro Municipal – atendimento das urgências e emergências clínicas de adultos, crianças e gestantes 
                              </p>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Prefeitura de Biritiba Mirim</h3>
                              <p class="mdin-profile-card--text">
                                2010 a 2012 – médico plantonista do Pronto Socorro Municipal - atendimento das urgências e emergências clínicas de adultos, crianças e gestantes 
                              </p>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Jockey Club de São Paulo</h3>
                              <p class="mdin-profile-card--text">
                                2008 a 2012 – médico do ambulatório do paddock – atendimento médico aos jóqueis e treinadores, atendimento de urgência e emergência na raia de corrida em caso de acidentes
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="settings-tab">
                  <div class="mdin-profile-tab-item">
                    <div class="mdin-profile-tab-item-header">
                      <h2 class="mdin-profile-tab-item--title">Trabalhos científicos</h2>
                    </div>

                    <div class="mdin-profile-tab-content">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Análise dos riscos ocupacionais e acidentes de trabalho entre Jóqueis Profissionais do Jockey Club de São Paulo nos dias de corrida</h3>
                              <span class="mdin-profile-header--label-item">2011</span>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="mdin-profile-tab--card">
                              <h3 class="mdin-profile-card--title">Depressão no Idoso: do conceito desse transtorno de humor às características específicas desse distúrbio na terceira idade</h3>
                              <span class="mdin-profile-header--label-item">2013</span>
                            </div>
                          </div>

                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="settings-tab">

                  <div class="mdin-profile-tab-item">
                    <div class="mdin-profile-tab-item-header">
                      <h2 class="mdin-profile-tab-item--title">Mais informações</h2>
                    </div>

                    <div class="mdin-profile-tab-content">
                      <div class="container">
                        <div class="row">
                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Lucas Buso</h3>
                                  <p class="mdin-profile-card--text">
                                  Perfeito. Nada a corrigir
                                  </p>
                                </div>
                              
                              </div>

                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Francely Salles</h3>
                                  <p class="mdin-profile-card--text">
                                  Quero agradecer a atenção, e as orientações do Dr Lucas, foi excelente a consulta
                                  </p>
                                </div>
                              
                              </div>

                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Jose Manuel Meneses</h3>
                                  <p class="mdin-profile-card--text">
                                  Tudo muito tranquilo, me senti muito a vontade.
                                  </p>
                                </div>
                              
                              </div>

                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Sara Andrade</h3>
                                  <p class="mdin-profile-card--text">
                                  Nada a acrescentar, atendeu todas minhas expectativas até o momento.
                                  </p>
                                </div>
                              
                              </div>

                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Denis Hideo</h3>
                                  <p class="mdin-profile-card--text">
                                  Me senti completamente confortável, foi como se estivesse presente; o Dr. foi um amor de pessoa e profissional; me esclareceu todas as dúvidas e fiquei muito grata.
                                  </p>
                                </div>
                              
                              </div>

                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Denis Hideo</h3>
                                  <p class="mdin-profile-card--text">
                                  Acho ótimo atendimento online temos acesso a médicos de outros estados. O dr me escutou eu mto ansiosa pra resolver uma doença que causa sofrimento há mtos anos sem tratamento tradicional com melhora. Agora só aguardando o produto chegar e testar. Obrigada
                                  </p>
                                </div>
                              
                              </div>


                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Nilson Conde</h3>
                                  <p class="mdin-profile-card--text">
                                  Nada a acrescentar foi tudo ótimo.Aguardo mais instruções.Obrigado
                                  </p>
                                </div>
                              
                              </div>

                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">José Carreiro Martins</h3>
                                  <p class="mdin-profile-card--text">
                                  Todas as expectativas criadas foram integralmente atendidas. O cumprimento da prescrição e a melhora do quadro completará o sucesso da consulta.
                                  </p>
                                </div>
                              
                              </div>

                              <div class="col-md-4">
                                <div class="mdin-profile-tab--card">
                                  <h3 class="mdin-profile-card--title">Simone N. Viera</h3>
                                  <p class="mdin-profile-card--text">
                                  A minha procura por melhor qualidade de vida, me fez chegar até vocês mas, acabei esquecendo de informar alguns detalhes importantes da causa de minhas dores.Tenho alguns problemas na coluna como, desgaste osseo, hérnia lombar e cervical, lordose, sifose e escoliose. O atendimento foi muito bom. Grata por tudo. Bom dia.
                                  </p>
                                </div>
                              
                              </div>
                         
                          
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>


        </div>

      </div>
   
  </div>
</div>


<?php get_footer(); // This fxn gets the footer.php file and renders it ?>