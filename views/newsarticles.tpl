{*div voor bootstrap*}

    <div class="col-md-6">
<section>
    {foreach from=$data item=newsItem}
    <article id="news">


            <h1>{$newsItem.title}</h1>
            <h5>Published on: {$newsItem.date_created}</h5>
            {if $newsItem.id eq $newsItemId}
                <p>{$newsItem.content}<br><br/><a id="readMore" href="?page_nr={$page_nr}&index.php"> Hide</a></p>
        {else}
            {*<p>{$newsItem.content|truncate:200:""}<a href="?page_nr={$page_nr}&newsItemId={$newsItem.id}"> Read more</a></p>*}
                <p><a href="?page_nr={$page_nr}&newsItemId={$newsItem.id}"><img src="{$newsItem.image}"/></a><br/>
                    <a id="readMore" href="?page_nr={$page_nr}&newsItemId={$newsItem.id}"> Read More</a>
                </p>

        {/if}




    </article>
    {/foreach}
</section>

        {include file="pagination.tpl"}
    </div>

