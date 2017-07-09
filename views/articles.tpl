  <content class="wrap">
    <div>
  <section>
      {foreach from=$article_list item="one_article"}
        <article  class="flashback">

          <h1> {$one_article.title } </h1> <br>
          <img id="contentimg" src="{$one_article.image}"> </img> <br>
          <content>{$one_article.content} </content>
          <br> <br> <hr>  </article>
        {/foreach}
    </section>
  </div>
  </content>
