
<div>
  <section>
      {foreach from=$news_list item="news"}
        <article id="news" class="flashback">

          <h1> {$news.Title} </h1>
          <h3> {$news.Subtitle} </h3>
          <p>{$news.Content} </p>
          <h5> posted on: {$news.Date}</h2>
          <br> </article>
        {/foreach}
    </section>
</div>
<hr>
