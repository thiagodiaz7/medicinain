<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="sr">
<head>
<meta name="facebook-domain-verification" content="s2sxxigs2252tcmh7zc3bijhmyg7iy" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link href="touch.webp" rel="apple-touch-icon-precomposed">

<meta property="og:image" content="https://medicina.in/touch.webp">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193009537-1"></script>
<script defer src="https://www.googleoptimize.com/optimize.js?id=OPT-MXBGW2D&v=001"></script>

<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}

gtag('js', new Date());
gtag('config', 'UA-193009537-1');
gtag('config', 'AW-520213081');

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||  
[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-193009537-1', 'auto');ga('send', 'pageview'); 



!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1549035102095641');
fbq('track', 'PageView');

</script>

<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1549035102095641&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<style>
	/* HEADER */

.mdin-navbar-light {
  box-shadow: rgba(99, 99, 99, 0.1) 0px 2px 8px 0px;
}

.mdin-navbar-brand {
  background:url('<?php echo get_template_directory_uri(); ?>/assets/header/logo-medicinain.png') no-repeat;
  width: 203px;
  height:34px;
  text-indent:-9999999px;
}

.mdin-navbar-light {
  background:#fff!important;
  padding:1em;
}

.mdin-hero,
.mdin-background {
  background:#F6F7FF;
}

.mdin-navbar-nav {
  font-family: "Exo 2", sans-serif;
  margin: 0 auto;
}

.mdin-navbar-nav a {
  color:#B1B1B1;
}

.mdin-navbar-nav div ul li {
  padding:0em 1.5em;
}

.mdin-btn-outline-success {
  border-color:#7380F3;
  color:#7380F3;
  font-family: "Exo 2", sans-serif;
}

.mdin-btn-outline-success:hover {
  background:#7380F3;
  border-color:#7380F3;
}

/* CONTENT */
.mdin-content-title {
  font-family: "Exo 2", sans-serif;
}

.mdin-hero-services--title {
  font-family: "Exo 2", sans-serif;
  font-size:1.2em;
  font-weight: 700;
}

.mdin-hero-services--lead {
  font-family: "Exo 2", sans-serif;
  color:#707070;
  font-size:1em;
}

.mdin-title-midia {
  font-family: "Exo 2", sans-serif;
  color:#707070;
  font-size:1em;
}

.mdin-hero-services.service-1 {
    background:url('<?php echo get_template_directory_uri(); ?>/assets/header/mdin-icon-event.svg') no-repeat left top;
    padding-left:40px;
}

.mdin-hero-services.service-2 {
  background:url('<?php echo get_template_directory_uri(); ?>/assets/header/mdin-icon-anvisa.svg') no-repeat left top;
  padding-left:40px;
}

.mdin-hero-services.service-3 {
  background:url('<?php echo get_template_directory_uri(); ?>/assets/header/mdin-icon-comprar-cbd.svg') no-repeat left top;
  padding-left:40px;
}

.mdin-hero-services.service-4 {
  background:url('<?php echo get_template_directory_uri(); ?>/assets/header/mdin-icon-acompanhamento.svg') no-repeat left top;
  padding-left:40px;
}

.mdin-content-extras--item {
  margin-left:20px;
}

.mdin-content--subtitle {
  font-family: "Exo 2", sans-serif;
  padding-bottom:10px;
}

.mdin-content--lead {
  opacity:.6;
  font-size:1em;
}

.mdin-content--title {
  font-family: "Exo 2", sans-serif;
}

.mdin-content--lead {
  font-size:1.2em;
  font-weight: 400;
}

.mdin-accordion-button {
  font-family:"Exo 2", sans-serif!important;
  color:#000!important;
  font-size:.6em;
}

.accordion-body p {
  font-size:1.05em;
}

.mdin-feature--title {
  font-family:"Exo 2", sans-serif;
  font-size:1.2em;
  font-weight: 700;
  margin:1em;
}

.mdin-feature--lead {
  font-family:"Exo 2", sans-serif;
  font-size:1em;
  opacity:.6;
}

.mdin-feature--item {
   border-radius: 8px;
    background: #fff;
    box-shadow: 0px 3px 6px rgb(0 0 0 / 5%);
    cursor: pointer;
    transition: all 0.2s ease 0s;
  padding:1em;
}

.mdin-feature--item:hover {
  transform: scale(1.05);
  box-shadow: rgb(0 0 0 / 2%) 0px 2.8px 2.2px, rgb(0 0 0 / 3%) 0px 6.7px 5.3px, rgb(0 0 0 / 4%) 0px 12.5px 10px, rgb(0 0 0 / 4%) 0px 22.3px 17.9px, rgb(0 0 0 / 5%) 0px 41.8px 33.4px, rgb(0 0 0 / 7%) 0px 100px 80px;
}


</style>
<?php flush(); ?>
</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>



<header>

	<nav class="navbar navbar-expand-lg navbar-light bg-light mdin-navbar-light">
		<div class="container-fluid">
			<a class="navbar-brand mdin-navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>">Medicina In</a>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse mdin-navbar-collapse" id="navbarSupportedContent">

				<nav class="navbar-nav me-auto mb-2 mb-lg-0 site-navigation main-navigation mdin-navbar-nav">
					<?php wp_nav_menu( array(
						'theme_location'  => 'primary',
						'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => '',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav mr-auto mdin-navbar-nav',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) ); ?>

        
				</nav><!-- .site-navigation .main-navigation -->

				
				<?php get_search_form(); ?>

			</div>
		</div>
	</nav>

</header>


<main class="main-fluid"><!-- start the page containter -->
