document.forms["validation"].addEventListener("submit", function(e) {

  var erreur;
  var input = this;
  
  // Cas générique 
  for(var i = 0; i < input.length; i++) {
    if(!input[i].value) {
      erreur = "Veuillez renseigner tout les champs";
    }
  }
  
  if (erreur) {
    e.preventDefault();
    document.getElementById("error").innerHTML = erreur;
    return false;
  } else {
    alert("Formulaire Envoyé !");
  }

});
