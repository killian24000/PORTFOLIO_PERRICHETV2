<?php
include "getRacine.php";
include "$racine/controler/MasterControler.php";
if(isset($_GET["action"])) {
  $action = $_GET["action"];
} else {
  $action = "defaut";
}
$fichier = MasterControler($action);
include "$racine/controler/$fichier";