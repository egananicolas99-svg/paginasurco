<!-- 
  - #PIE DE PÁGINA
-->

<footer class="footer section has-bg-image text-center"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer-bg.jpg')">
  <div class="container">

    <div class="footer-top grid-list">

      <div class="footer-brand has-before has-after">

        <a href="<?php echo esc_url(home_url()); ?>" class="logo">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.svg" width="160" height="50" loading="lazy" alt="<?php echo esc_attr(get_bloginfo('name')); ?> Inicio">
        </a>

        <?php
          // Dirección en texto plano
          $address_text = 'Almirante Brown 2403, Chacras de Coria, Mendoza';
          // URL de Google Maps con la dirección
          $maps_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( $address_text );
        ?>
        <address class="body-4">
          <a href="<?php echo esc_url( $maps_url ); ?>" target="_blank" rel="noopener nofollow">
            <?php echo esc_html( $address_text ); ?>
          </a>
        </address>

        <a href="mailto:correo@surcorestaurant.ar" class="body-4 contact-link">correo@surcorestaurant.ar</a>

        <a href="tel:+34678353897" class="body-4 contact-link">Solicitud de Reserva: +34 678 35 38 97</a>

        <p class="body-4">
          Horarios de Atención: 09:00 am - 01:00 pm
        </p>

        <div class="wrapper">
          <div class="separator"></div>
          <div class="separator"></div>
          <div class="separator"></div>
        </div>

        <p class="title-1">Recibe Noticias y Ofertas</p>

        <p class="label-1">
          Suscríbete y Obtén <span class="span">25% de Descuento.</span>
        </p>

        <form action="" class="input-wrapper">
          <div class="icon-wrapper">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <input type="email" name="email_address" placeholder="Tu correo electrónico" autocomplete="off" class="input-field">
          </div>

          <button type="submit" class="btn btn-secondary">
            <span class="text text-1">Suscribirse</span>
            <span class="text text-2" aria-hidden="true">Suscribirse</span>
          </button>
        </form>

      </div>

      <ul class="footer-list">
        <li><a href="<?php echo esc_url(home_url()); ?>" class="label-2 footer-link hover-underline">Inicio</a></li>
        <li><a href="#menu" class="label-2 footer-link hover-underline">Menú</a></li>
        <li><a href="#about" class="label-2 footer-link hover-underline">Acerca de Nosotros</a></li>
        <li><a href="#chefs" class="label-2 footer-link hover-underline">Nuestros Chefs</a></li>
        <li><a href="#contact" class="label-2 footer-link hover-underline">Contacto</a></li>
      </ul>

      <ul class="footer-list">
        <li><a href="#" class="label-2 footer-link hover-underline">Facebook</a></li>
        <li><a href="#" class="label-2 footer-link hover-underline">Instagram</a></li>
        <li><a href="#" class="label-2 footer-link hover-underline">Twitter</a></li>
        <li><a href="#" class="label-2 footer-link hover-underline">YouTube</a></li>
        <li><a href="<?php echo esc_url( $maps_url ); ?>" target="_blank" rel="noopener nofollow" class="label-2 footer-link hover-underline">Google Maps</a></li>
      </ul>

    </div>

    <div class="footer-bottom">
      <p class="copyright">
        &copy; <?php echo date('Y'); ?> Surco Restaurant. Todos los derechos reservados | Creado por 
        <a href="https://instagram.com/nicolas_egana" target="_blank" class="link">@nicolas_egana</a>
      </p>
    </div>

  </div>
</footer>


<!-- 
  - #VOLVER ARRIBA
-->
<a href="#top" class="back-top-btn active" aria-label="volver arriba" data-back-top-btn>
  <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>


<?php wp_footer(); ?>

</body>
</html>
