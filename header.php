<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - etiquetas meta principales
  -->
  <title><?php wp_get_document_title(); ?></title>
  <meta name="title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- 
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" type="image/svg+xml"> -->

  <!-- 
    - enlace de fuentes de Google
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - enlace de CSS personalizado
  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

  <!-- 
    - precargar imágenes
  -->
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/hero-slider-3.jpg">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
  <?php wp_body_open(); ?>

  <!-- 
    - #PRECARGADOR
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Surco</p>
  </div>




  <!-- 
    - #BARRA SUPERIOR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Almirante Brown 2403, Chacras de Coria, Mendoza
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Diario: 09:00 am a 01:00 pm</span>
      </div>

      <a href="tel:+34678353897" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+34 678 35 38 97</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:correo@surcorestaurant.ar" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">correo@surcorestaurant.ar</span>
      </a>

    </div>
  </div>




  <!-- 
    - #CABECERA
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="160" height="50" alt="<?php bloginfo('name'); ?> - Inicio">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="cerrar menú" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="160" height="50" alt="<?php bloginfo('name'); ?> - Inicio">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Inicio</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menús</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Acerca de Nosotros</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#chefs" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Nuestros Chefs</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contacto</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visítanos</p>

          <address class="body-4">
            Almirante Brown 2403, <br>
            Chacras de Coria, Mendoza
          </address>

          <p class="body-4 navbar-text">Abierto: 09:00 am - 01:00 pm</p>

          <a href="mailto:correo@surcorestaurant.ar" class="body-4 sidebar-link">correo@surcorestaurant.ar</a>

          <div class="separator"></div>

          <p class="contact-label">Solicitud de Reserva</p>

          <a href="tel:+34678353897" class="body-1 contact-number hover-underline">
            +34 678 35 38 97
          </a>
        </div>

      </nav>

      <a href="#contact" class="btn btn-secondary">
        <span class="text text-1">Reservar Mesa</span>

        <span class="text text-2" aria-hidden="true">Reservar Mesa</span>
      </a>

      <button class="nav-open-btn" aria-label="abrir menú" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>
