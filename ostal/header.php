<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php _e('Ostal Numérique', 'ostal'); ?></title>
    <meta name=description content="Ostal Numérique: Association d'assistance et de formation en informatique,conseils,fab'lab, repair café, wifi libre-service, petits travaux d'impression a Saint Aulaye 24410">
    <meta name=robots content="index, follow">
    <meta property=og:title content="Ostal Numérique, Association autour du numérique à Saint Aulaye 24410">
    <meta property=og:description content="Ostal Numérique: Association d'assistance et de formation en informatique,conseils, répare-café, wifi libre-service, petits travaux d'impression">
    <meta property=og:url content=https://ostal24.fr/>
    <meta property=og:type content=website>
    <meta property=og:site_name content="Ostal Numérique">
    <meta http-equiv=Permissions-Policy content="interest-cohort=()">
    <link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
    

      <div class="header">
        <div id="top" class="logo_title">
          <a href="/" class="logolink">
          <img class="logo" width="200" height="200" src="<?php echo get_template_directory_uri(); ?>/assets/images/logoostal.webp" alt="<?php _e('l&apos;Ostal tiers-lieu', 'ostal'); ?>" />
          </a>
          <ul class="nav">
              <li class="nav-item"><a href="#situation" class="nav-link"><?php _e('Localisation', 'ostal'); ?></a></li>
              <li class="nav-item"><a href="#fablab" class="nav-link"><?php _e('Fab&apos;Lab', 'ostal'); ?></a></li>
              <li class="nav-item"><a href="#ateliers" class="nav-link nav-link-magic"><?php _e('Ateliers', 'ostal'); ?></a></li>
              <li class="nav-item"><a href="#links" class="nav-link nav-link-magic"><?php _e('Liens utiles', 'ostal'); ?></a></li>
          </ul>
        </div>
      </div>
      <div class="intro-container">
        <div class="intro-photo">
          <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/pexels-airam-datoon-20044382.webp" sizes="(min-width: 768px) 900px, 60vw">
            <img class="photo" width="320" height="200" src="<?php echo get_template_directory_uri(); ?>/assets/images/pexels-airam-datoon-20044382.webp" alt="<?php _e('image de fond avec plusieurs personnes travaillant autour d&apos;un ordinateur', 'ostal'); ?>" />
          </picture>
        </div>
        <p class="intro">
        <?php 
        $introduction = get_option('ostal_settings_field_introduction');
        
        echo $introduction;
        ?>
        </p>
      </div>
      
    </header>