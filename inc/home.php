<?php

/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<main>

  <section class="home">
    <div class="container">

      <div class="home__heading">

        <div class="title__primary title__primary--lg">
          <h2><?php echo get_field('titulo_home') ?></h2>
          <?php echo get_field('subtitulo_home') ?>
        </div>

      </div>

      <div class="home__projects-preview">
        <div class="home__projects-grid" id="toAppend">
          <!-- c-project-preview__card -->
        </div>
      </div>

    </div>
  </section>

  <script>
    const fetchData = async() => (await fetch('http://localhost/desafio-olivas-digital/wp-json/wp/v2/cadastro_projetos')).json();

    fetchData()
      .then(data => {
        for (let item of data) {
          toAppend.innerHTML += 
          `     <div class="c-project-preview__card">
                  <div class="c-project-preview__title">
                    <div class="title__primary title__primary--sm">
                      <h4>${item.acf.titulo_do_projeto}</h4>
                    </div>
                  </div>

                  <div class="c-project-preview__content">
                    ${item.acf.texto_do_projeto}
                  </div>

                  <div class="c-project-preview__category">
                    <p><span>Categoria:</span> ${item.acf.categoria}</p>
                    <i class="ph ph-pencil"></i>
                  </div>

                  <div class="button__primary">
                    <a href=" ${item.link}">
                      <span>Ver mais</span>
                      <i class="ph ph-arrow-right"></i>
                    </a>
                  </div>
                </div>
          `;
        
      }
    });
  </script>

<?php get_footer(); ?>
