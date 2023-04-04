<?php

function MasterControler($action) {
  $lesActions = array();
  $lesActions["defaut"] = "home.php";
  $lesActions["home"] = "home.php";
  $lesActions["etude"] = "etude.php";
  $lesActions["projet"] = "projet.php";
  $lesActions["competences"] = "languages.php";
  

  if (array_key_exists($action, $lesActions)) {
      return $lesActions[$action];
  } 
  else {
      return $lesActions["defaut"];
  }
}

?>