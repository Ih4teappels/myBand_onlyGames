<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Maak de database connectie
require_once 'includes/database.php' ;
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;



// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Only Games');
// Toon de template: output html
$templateParser->display('head.tpl');

$page = (empty($_GET['page'])) ? '' : $_GET['page'];
$templateParser->assign('curr_page',$page);

$templateParser->display('header.tpl');








switch ($page) {
    //Moet nog van php naar tpl converteren!

    case 'tournaments':

        include 'views/releases.html';
        $templateParser->display('tournaments.tpl');

        break;

    case 'socialmedia':

//        $templateParser->display('releases.html');
        include 'views/socialmedia.html';

        break;


    case 'contact':

        $templateParser->display('contact.tpl');

        break;

    case 'search':



        $search_string = (isset($_POST['search_string'])) ? $_POST['search_string'] : "" ;


        require 'models/select_search.php';
        $templateParser->assign('search_result',$search_result);
        $templateParser->display('search_results.tpl');

        break;

    default:
        //lees de page number uit
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

        $newsItemId = isset($_GET['newsItemId']) ? $_GET['newsItemId'] : "";



        // Haal de nieuws artikelen op

        include 'views/releases.html';

        require 'models/newsarticles.php';
        $result = select_newsarticles($page_nr);
        require 'models/search.php';

        $templateParser->assign('newsItemId',$newsItemId);
        $templateParser->assign('data',$result);
        $templateParser->assign('page_nr',$page_nr);
        $templateParser->assign('curr_pagi',$page_nr);
        $templateParser->display('newsarticles.tpl');
        $templateParser->display('search_form.tpl');






}

$templateParser->display('footer.tpl');