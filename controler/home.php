<?php
if( $_SERVER["SCRIPT_FILENAME"] == __FILE__){
  $racine="..";
}

$titre = "Liste des formations";
include "$racine/vue/header.php";
include "$racine/vue/home.phtml";
include "$racine/vue/footer.php";