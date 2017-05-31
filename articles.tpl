<content class="wrap">

  <section>

      {foreach from=$article_list item="one_article"}
        <article>
          <h1> {$one_article.title } </h1>
          <content>{$one_article.content}
          <img src=" {$one_article.image}" >
        </article>
      {/foreach}
    </section>
  </content>
