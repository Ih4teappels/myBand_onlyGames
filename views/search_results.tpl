<div id="search_results">
{foreach from=$search_result item=search_row}


    <h3>{$search_row.title}</h3>
    <p>{$search_row.content}</p>

{/foreach}
</div>