const fetchData = async() => (await fetch('http://localhost/desafio-olivas-digital//wp-json/wp/v2/posts')).json();

fetchData()
.then(data => {
  for (let item of data) {
    toAppend.innerHTML += `
    <div class="blog-home__item">
      <div class="blog-home__content">
        <h4>${item.title.rendered}</h4>
        <div class="texto-excerpt">${item.excerpt.rendered}</div>
        <div class="btn_secondary">
          <a target="_blank" href="${item.link}">SAIBA MAIS</a>
        </div>
      </div>
    </div>
    `;
  }
});