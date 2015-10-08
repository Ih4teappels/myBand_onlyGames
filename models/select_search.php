<?php

//$sql = "SELECT title, content FROM newsarticles
//  WHERE title LIKE '%" . $search_string ."%'";
//
//$search_result = $mysqli->query($sql);


function select_search() {

}

$sql = "SELECT * FROM newsarticles
  WHERE title LIKE '%$search_string%'";

$search_result = $mysqli->query($sql);
