

<?php get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <section class="the-post">

            <div class="the-post__container container">


                <div class="toAppend"></div>

            </div>

        </section>


        <?php 
    }
}
get_footer(); ?>

<script>
    const fetchData = async() => (await fetch(`http://localhost/desafio-olivas-digital/wp-json/wp/v2/cadastro_projetos/${id}`)).json();

    fetchData()
    .then(data => {
      for (let item of data) {
        toAppend.innerHTML += `
        <div class="c-project-preview__card">
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
                <i class="ph ph-code"></i>
            </div>

            <div class="button__primary">
                <a href=" ${item.acf.link}">
                    <span>Ver mais</span>
                    <i class="ph ph-arrow-right"></i>
                </a>
            </div>
        </div>
        `;
    }
});
</script>
