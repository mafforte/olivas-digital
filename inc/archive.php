<?php

/**
 * Template Name: Projetos
 */
?>

<?php get_header(); ?>

<section class="projetos">
    <div class="container">

        <div class="title__primary title__primary--md">
          <h3><?php echo get_field('titulo_projetos') ?></h3>
          <p><?php echo get_field('subtitulo_projetos') ?></p>
        </div>

        <div style="display: flex; gap: 4rem;">

        <div class="projetos__filter">

            <div class="projetos__filter-grid c-filter">

                <div class="c-filter__item">
                    <p>todos</p>
                    <label>
                        <input type="radio" name="filter" value="*" checked="checked" />
                        <span></span>
                        <i class="ph-bold ph-squares-four"></i>
                    </label>
                    
                </div>
                <div class="c-filter__item">
                    <p>code</p>
                    <label>
                        <input type="radio" name="filter" value="code" />
                        <span></span>
                        <i class="ph-bold ph-code"></i>
                    </label>
                    
                </div>
                <div class="c-filter__item">
                    <p>design</p>
                    <label>
                        <input type="radio" name="filter" value="design" />
                        <span></span>
                        <i class="ph-bold ph-pencil"></i>
                    </label>
                    
                </div>
                <div class="c-filter__item">
                    <p>mkt</p>
                    <label>
                        <input type="radio" name="filter" value="marketing" />
                        <span></span>
                        <i class="ph-bold ph-projector-screen-chart"></i>
                    </label>
                    
                </div>

            </div>
        
        </div>

        <div class="projetos__grid">

            <div class="c-project-preview__card code" data-category="categoryCode">
                <div class="c-project-preview__title">
                    <div class="title__primary title__primary--sm">
                        <h4>Projeto Web 01</h4>
                    </div>
                </div>

                <div class="c-project-preview__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin justo metus, eget egestas turpis lacinia vitae. Ut laoreet imperdiet orci sit amet dictum. Aliquam id tincidunt nibh.</p>
                </div>

                <div class="c-project-preview__category">
                    <p><span>Categoria:</span> code</p>
                    <i class="ph ph-code"></i>
                </div>

                <div class="button__primary">
                  <a href="#0">
                    <span>Ver mais</span>
                    <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="c-project-preview__card code" data-category="categoryCode">
                <div class="c-project-preview__title">
                    <div class="title__primary title__primary--sm">
                        <h4>Projeto Web 02</h4>
                    </div>
                </div>

                <div class="c-project-preview__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin justo metus, eget egestas turpis lacinia vitae. Ut laoreet imperdiet orci sit amet dictum. Aliquam id tincidunt nibh.</p>
                </div>

                <div class="c-project-preview__category">
                    <p><span>Categoria:</span> code</p>
                    <i class="ph ph-code"></i>
                </div>

                <div class="button__primary">
                  <a href="#0">
                    <span>Ver mais</span>
                    <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>


            <div class="c-project-preview__card design" data-category="categoryDesign">
                <div class="c-project-preview__title">
                    <div class="title__primary title__primary--sm">
                        <h4>Projeto Design 01</h4>
                    </div>
                </div>

                <div class="c-project-preview__content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin justo metus, eget egestas turpis lacinia vitae. Ut laoreet imperdiet orci sit amet dictum. Aliquam id tincidunt nibh.</p>
                </div>

                <div class="c-project-preview__category">
                    <p><span>Categoria:</span> design</p>
                    <i class="ph ph-pencil"></i>
                </div>

                <div class="button__primary">
                    <a href="#0">
                        <span>Ver mais</span>
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="c-project-preview__card design" data-category="categoryDesign">
                <div class="c-project-preview__title">
                    <div class="title__primary title__primary--sm">
                        <h4>Projeto Design 02</h4>
                    </div>
                </div>

                <div class="c-project-preview__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin justo metus, eget egestas turpis lacinia vitae. Ut laoreet imperdiet orci sit amet dictum. Aliquam id tincidunt nibh.</p>
                </div>

                <div class="c-project-preview__category">
                    <p><span>Categoria:</span> design</p>
                    <i class="ph ph-pencil"></i>
                </div>

                <div class="button__primary">
                    <a href="#0">
                        <span>Ver mais</span>
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>


            <div class="c-project-preview__card marketing" data-category="categoryMarketing">
                <div class="c-project-preview__title">
                    <div class="title__primary title__primary--sm">
                        <h4>Projeto Marketing 01</h4>
                    </div>
                </div>

                <div class="c-project-preview__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin justo metus, eget egestas turpis lacinia vitae. Ut laoreet imperdiet orci sit amet dictum. Aliquam id tincidunt nibh.</p>
                </div>

                <div class="c-project-preview__category">
                    <p><span>Categoria:</span> marketing</p>
                    <i class="ph ph-projector-screen-chart"></i>
                </div>

                <div class="button__primary">
                    <a href="#0">
                        <span>Ver mais</span>
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="c-project-preview__card marketing" data-category="categoryMarketing">
                <div class="c-project-preview__title">
                    <div class="title__primary title__primary--sm">
                        <h4>Projeto Marketing 02</h4>
                    </div>
                </div>

                <div class="c-project-preview__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin justo metus, eget egestas turpis lacinia vitae. Ut laoreet imperdiet orci sit amet dictum. Aliquam id tincidunt nibh.</p>
                </div>

                <div class="c-project-preview__category">
                    <p><span>Categoria:</span> marketing</p>
                    <i class="ph ph-projector-screen-chart"></i>
                </div>

                <div class="button__primary">
                    <a href="#0">
                        <span>Ver mais</span>
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>