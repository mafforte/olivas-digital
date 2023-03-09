<?php

/**
 * Template Name: Contato
 */
?>

<?php get_header(); ?>

<section class="contato">
    <div class="container">

        <div class="title__primary title__primary--md">
          <h3>Fale <span>Conosco</span></h3>
          <p>Deixe aqui a sua <span>dúvida</span> ou <span>sujestão</span></p>
        </div>

        <div class="contato__form">
          <?php echo do_shortcode('[contact-form-7 id="17" title="Formulário de contato 1"]'); ?>
        </div>

    </div>

    <div class="contato__map">
        
    </div>
</section>

<?php get_footer(); ?>