<?php
    date_default_timezone_set('Europe/Lisbon');
    $hostname_DB = "localhost:3306";
    $database_DB = "shore_pt_main";     // Nome da base de dados
    $username_DB = "shore.pt";     // Utilizador
    $password_DB = "Ibo7o085_";     // Password


    $DB = new mysqli($hostname_DB, $username_DB, $password_DB, $database_DB);
    if ($DB->connect_error)
        die("Falhou a ligação: " . $DB->connect_error);

    $DB->query("SET NAMES 'utf8'");

?>
