<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Desafio Olivas Digital - Raphael Mafforte Diniz</title>

  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>

  <?php wp_head(); ?>

  <header>
    <div class="header container">

      <div class="header__logo">
        <a href="<?php echo get_template_directory_uri() ?>/home">
          <h4>Rapha<span>Mafforte</span></h4>
        </a>
      </div>

      <div class="header__menu">

        <nav class="menu" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">
          <ul class="primary-menu reset-list-style">

            <?php
            if ( has_nav_menu( 'header-menu' ) ) {

              wp_nav_menu(
                array(
                  'container'  => '',
                  'items_wrap' => '%3$s',
                  'theme_location' => 'header-menu',
                  'fallback_cb' => false,
                )
              );

            } elseif ( ! has_nav_menu( 'expanded' ) ) {

              wp_list_pages(
                array(
                  'match_menu_classes' => true,
                  'show_sub_menu_icons' => true,
                  'title_li' => false,
                )
              );

            }
            ?>

          </ul>
        </nav>

        <div class="toggle-menu">
          <div class="line line1"></div>
          <div class="line line2"></div>
          <div class="line line3"></div>
        </div>

      </div>

    </div>   
  </header>
