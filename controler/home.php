<?php
if( $_SERVER["SCRIPT_FILENAME"] == __FILE__){
  $racine="..";
}

if(isset($_POST['mailform'])){

  $email = $_POST['email'];
  $name = $_POST['Nom'];
  $prenom = $_POST['prenom'];
  $message = $_POST['message'];

  $popup = 'Message Envoyé';

  $header="MIME-Version: 1.0\r\n";
  $header.='From:"'.$name. '' .$prenom.'"<'.$email.'>'."\n";
  $header.='Content-Type:text/html; charset="uft-8"'."\n";
  $header.='Content-Transfer-Encoding: 8bit';
  
  $message='
  <html>
      <body>
          <div align="center">
              '.$message.'
          </div>
      </body>
  </html>
  ';

  //echo($message);

  try {
    mail("killian.perrichet@androcode.fr", "Demande de contact", $message, $header);
  } catch (Execute $e) {
    echo('<script> alert("test")</script>');
  }
  
}

$titre = "Liste des formations";
include "$racine/vue/header.php";
include "$racine/vue/home.phtml";
include "$racine/vue/footer.php";