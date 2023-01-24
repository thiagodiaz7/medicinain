<?php 
/**
 * 	Template Name: Corpo médico
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header();  ?>


<div class="mdin-doctors-header" style="padding-top:130px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="mdin-hero-title mdin-hero-title--item">Top 5 médicos que atendem pela Medicina In </h1>
      </div>

      <div class="col-md-4">
        <p class="mdin-doctors-header--text">
          São mais de 10 anos de experiência em Cannabis Medicinal e Sistema Endocanabinóide.
        </p>
      </div>
    </div>
  </div>
</div>


<div class="mdin-doctors-listing">
  <div class="container">
    <div class="row text-center">


      <div class="col-md-3" onclick="window.open('patrick-mesquita-vieira', '_blank');">
        <div class="mdin-doctors-listing--card mdin-atc-card">
          <figure class="mdin-doctors-listing--card-avatar">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/medico-cbd-medicinain-patrick.png" alt="Patrick Mesquita - Médico prescritor de Cannabis Medicinal da Medicina In">
          </figure>
          <h3 class="mdin-doctors-listing--card-title">Patrick Mesquita</h3>
          <p class="mdin-doctors-listing--card-text">
            CRM: 134633 - 
            Medicina Canabinoide e Psiquiatra <br>
            Valor da consulta: R$ 850,00
          </p>

          <!-- <div class="mdin-doctors-listing--action">
            <a href="#">AGENDAR</a>
          </div> -->
        </div>
        
      </div>

      <div class="col-md-3" onclick="window.open('thiago-braga', '_blank');">
        <div class="mdin-doctors-listing--card mdin-atc-card">
          <figure class="mdin-doctors-listing--card-avatar">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/medico-cbd-medicinain-thiago.png" alt="">
          </figure>
          <h3 class="mdin-doctors-listing--card-title">Thiago Braga</h3>
          <p class="mdin-doctors-listing--card-text">
            CRM: 183406 - 
            Medicina Canabinoide e Clinica Geral <br>
            Valor da consulta: R$ 500,00
          </p>

          <!-- <div class="mdin-doctors-listing--action">
            <a href="#">AGENDAR</a>
          </div> -->
        </div>
        
      </div>

      <div class="col-md-3" onclick="window.open('lucas-chinelatto', '_blank');">
        <div class="mdin-doctors-listing--card mdin-atc-card">
          <figure class="mdin-doctors-listing--card-avatar">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/mdin-doctors-lucas-chinelatto.png" alt="">
          </figure>
          <h3 class="mdin-doctors-listing--card-title">Chinelatto</h3>
          <p class="mdin-doctors-listing--card-text">
            CRM: 209795 - 
            Medicina Canabinoide e do Esporte <br>
            Valor da consulta: R$ 1.500,00
          </p>

          <!-- <div class="mdin-doctors-listing--action">
            <a href="#">AGENDAR</a>
          </div> -->
        </div>
        
      </div>

      <div class="col-md-3" onclick="window.open('natalia-cerri-vieira', '_blank');">
        <div class="mdin-doctors-listing--card mdin-atc-card">
          <figure class="mdin-doctors-listing--card-avatar">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/medico-cbd-medicinain-nathalia.png" alt="">
          </figure>
          <h3 class="mdin-doctors-listing--card-title">Natalia Cerri</h3>
          <p class="mdin-doctors-listing--card-text">
            CRM: 151337 - 
            Medicina Canabinoide e Geriatria <br>
            Valor da consulta: R$ 500,00
          </p>

          <!-- <div class="mdin-doctors-listing--action">
            <a href="#">AGENDAR</a>
          </div> -->
        </div>
        
      </div>

     

      
      

      <div class="col-md-3">
        <div class="mdin-doctors-listing--card mdin-atc-card">
          <figure class="mdin-doctors-listing--card-avatar">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/medico-cbd-medicinain-marcelo.png" alt="">
          </figure>
          <h3 class="mdin-doctors-listing--card-title">Marcelo Baboghluian</h3>
          <p class="mdin-doctors-listing--card-text">
            CRM: 73236 - 
            Medicina Canabinoide e do Esporte <br>
            Valor da consulta: R$ 1.800,00
          </p>

          <!-- <div class="mdin-doctors-listing--action">
            <a href="#">AGENDAR</a>
          </div> -->
        </div>
        
      </div>


    </div>
  </div>
</div>


<div class="mdin-doctors-infos">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="mdin-doctors-infos--title">
          O Sistema Endocanabinóide é bastante abrangente e o buscamos entender o paciente como um todo
        </h1>
      </div>

      <div class="col-md-5">
        <p class="mdin-doctors-infos--text">
          Por isso, um médico especializado em Geriatria ou Psiquiatria e também em Medicina Cannabinoide poderia tratar patologias ligadas ao Sistema Neurológico, por exemplo.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="mdin-doctors-exp">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors/corpo-medico-cannabis-medicinal-medicinain.png" class="w-100" alt="">
      </div>
      <div class="col-md-6">
        <h2 class="mdin-doctors-exp--title">
          Corpo médico científico com especialização em Medicina Canabinoide
        </h2>

        <p class="mdin-doctors-header--text">
          Experiência média de 10 anos no tratamento de pacientes com patologias beneficiadas pela Cannabis Medicinal. 
        </p>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); // This fxn gets the footer.php file and renders it ?>