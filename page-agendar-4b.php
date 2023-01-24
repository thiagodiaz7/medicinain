<?php 
/**
 * 	Template Name: Agendar 4b
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); ?>



<div class="fluid-container">
  <div class="row">
    <div class="col-sm-6">
      <!-- MEDICINA IN (3) - AGENDAMENTOS -->
      <script SameSite="None; Secure" src="https://cdn.landbot.io/landbot-3/landbot-3.0.0.js"></script>
        <div id="myLandbot" style="width: 100%; height: 100vh"></div>
        <script>
          var myLandbot = new Landbot.Container({
            container: '#myLandbot',
            configUrl: 'https://chats.landbot.io/v3/H-1217277-EYIJ8MJPAER5J673/index.json',
          });
        </script>

    </div>
    <div class="col-sm-6 mdin-col-mobile">
      <div class="mdin-agendar-background">

          <div class="mdin-agendar-depoimento"></div>

      </div>
    </div>
  </div>
</div>














