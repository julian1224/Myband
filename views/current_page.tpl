<hr>
<table id="pagechanger" >
  <tr><td id="left">
    {if $page gt 1}
    <a href="?url=articles&page={$page+1}"><==</a>
    {/if}
  </td>
  <td> {$page} </td>
  <td id="right">
    {if $page lt $number_of_pages}
    <a href="?url=articles&page={$page+1}">==></a>
    {/if}
  </td></tr>
