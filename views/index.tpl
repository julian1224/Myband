
<div class="flashback" style="height:900px">
  NEWS goes here. Eventually? For an extra point. Yes.

  <section>
      {foreach from=$news_list item="news"}
        <article  class="flashback">

          <h1> {$news.title } </h1> <br>
          <h3> {$news.subtitle} </h3> <br>
          <content>{$news.content} </content>
          <h2> {$news.Date}</h2>
          <br> <br> <hr>  </article>
        {/foreach}
    </section>
</div>
<hr>
