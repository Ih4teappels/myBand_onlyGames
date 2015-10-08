<?php

function select_newsarticles($page_nr = 1) {

    global $mysqli;

    $nr_items_page = NR_ITEMS_PAGE;

    $offset = ($page_nr-1) * $nr_items_page;

    $sql = "SELECT * FROM newsarticles LIMIT " . $offset . ", " . $nr_items_page;
    $result = $mysqli->query($sql);
    while($newsarticle = $result->fetch_assoc()){
        $newsList[] = $newsarticle;
    }
    return $newsList;


}
