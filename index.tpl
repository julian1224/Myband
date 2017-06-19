<p id="pagenumber">Page {$page}</p>

<table id="pagechanger">
    <tr><td id="left">
      <a href="?url=home&page={$page-1}">Previous</a>
      {/if}
    </td>
    <td id="right">
      {if $page lt $number_of_pages}
      <a href="?url=home&page={$page+1}">Next</a>
        {/if}
      </td></tr>

    </table>

    {foreach from="$result" item=oneItem}
      <table class="content">
        <tr><td><h3>{$oneItem.id}</h3></td></tr>
        <tr><td><h4>{$oneItem.title}</h4></td></tr>
        <tr><td><p>{$oneItem.content}</p></td></tr>
        <tr><td><p>{$oneItem.date_created|date_format:"%e %B %Y"}</p></td></tr>
      </table><br>
      {/foreach}
