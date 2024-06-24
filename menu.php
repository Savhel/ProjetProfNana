<?php
    if (empty($_GET['title'])) {
        include('pages/acceuil.php');
    }
    elseif (isset($_GET['title']) AND $_GET['title'] == 'Formulaire1') {
        # code...
        include('pages/formulaire1.php');

    }
    elseif (isset($_GET['title']) AND $_GET['title'] == 'Formulaire2') {
        # code...
        include('pages/formulaire2.php');

    }
    elseif (isset($_GET['title']) AND $_GET['title'] == 'Profil') {
        # code...
        include('pages/profile.php');

    }
    elseif (isset($_GET['title']) AND $_GET['title'] == 'Tableaux') {
        # code...
        include('pages/tables.php');

    }
    elseif (isset($_GET['title']) AND $_GET['title'] == 'Table1') {
        # code...
        include('pages/tables1.php');

    }
    elseif (isset($_GET['title']) AND $_GET['title'] == 'Table2') {
        # code...
        include('pages/tables2.php');

    }