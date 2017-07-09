<div class="flashback">
<table id="pagechanger" >
  <tr><td id="left">
    {if $page gt 1}
    <a href="?page=articles&num={$page-1}"><==</a>
    {/if}
  </td>
  <td> {$page} </td>
  <td id="right">
    {if $page lt $number_of_pages}
    <a href="?page=articles&num={$page+1}">==></a>
    {/if}
  </td></tr>
</table>
</div>
<hr>
