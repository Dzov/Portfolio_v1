
<main id = "main" class = "flex flexColumn">
  <section id = "webDevSection" class = "flex">
    <h4 class = "sectionTitle"> Développement Web </h4>
    <aside id = "webDevAside" class = "flex">
      <article id = "htmlArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/htmlIcon.png">
          <figcaption> HTML </figcaption>
        </figure>
        <ul class = "flex stars">
          <?php echo str_repeat("<li>
            <i class = 'fa fa-star'></i>
          </li>", 3)?>
        </ul>
      </article>
      <article id = "cssArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/css.png">
          <figcaption> CSS3 </figcaption>
        </figure>
        <ul class = "flex stars">
          <?php echo str_repeat("<li>
            <i class = 'fa fa-star'></i>
          </li>", 2)?>
        </ul>
      </article>
      <article id = "jsArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/jsIcon.png">
          <figcaption> JavaScript </figcaption>
        </figure>
        <ul class = "flex stars">
          <li>
            <i class = 'fa fa-star'></i>
          </li>
        </ul>
      </article>
    </aside>
  </section>

  <section id = "compSkillsSection" class = "flex">
    <h4 class = "sectionTitle"> Informatique </h4>
    <aside id = "compSkillsAside" class = "flex">
      <article id = "wordArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/word.png">
          <figcaption> Word </figcaption>
        </figure>
        <ul class = "flex stars">
          <?php echo str_repeat("<li>
            <i class = 'fa fa-star'></i>
          </li>", 4)?>
        </ul>
      </article>
      <article id = "excelArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/excel.png">
          <figcaption> Excel </figcaption>
        </figure>
        <ul class = "flex stars">
          <?php echo str_repeat("<li>
            <i class = 'fa fa-star'></i>
          </li>", 3)?>
        </ul>
      </article>
      <article id = "photoshopArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/photoshop.png">
          <figcaption> Photoshop </figcaption>
        </figure>
        <ul class = "flex stars">
          <li>
            <i class = "fa fa-star"></i>
          </li>
        </ul>
      </article>
    </aside>
  </section>

  <section id = "languageSection" class = "flex">
    <h4 class = "sectionTitle"> Langue </h4>
    <aside id = "languageAside" class = "flex">
      <article id = "englishArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/english.png">
          <figcaption> Anglais </figcaption>
        </figure>
        <ul class = "flex stars">
          <?php echo str_repeat("<li>
            <i class = 'fa fa-star'></i>
          </li>", 4)?>
        </ul>
      </article>
      <article id = "italianArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/italian.png">
          <figcaption> Italien </figcaption>
        </figure>
        <ul class = "flex stars">
          <?php echo str_repeat("<li>
            <i class = 'fa fa-star'></i>
          </li>", 3)?>
        </ul>
      </article>
      <article id = "japArticle" class = "flex flexColumn">
        <figure>
          <img src = "img/japan.png">
          <figcaption> Japonais </figcaption>
        </figure>
        <ul class = "flex stars">
          <li>
            <i class = "fa fa-star"></i>
          </li>
        </ul>
      </article>
    </aside>
  </section>
</main>
