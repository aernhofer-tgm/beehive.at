$("form").submit(function(){

  //Speichern der Variablen
  var emailAddress = $('input[name=absenderEmail]').val(); //Die eingegebene email Adresse
  var validemail = true;
  var valid = true;//Variable ob alles Korrekt ist

  //Ueberpruefen der eingegebene email Adresse
  if (emailAddress != ""){
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    var validemail = pattern.test(emailAddress);
  }
  //Speichern des Fehlers in die Ausgabe und das absenden verhindern
  if(!validemail){
    valid = false;
    //Modal für falsch aufrufen
    $('#fModal').modal('show');
  }else {
    //Modal für erfolgreich aufrufen
    $('#eModal').modal('show');
  }

  //Ausgeben des/der Fehler(s)
  //$("#erfolgreich").text(ausgabe);
  //Mit Bootstrap alert!!!!

  //Rückgabe ob alles korrekt ist
  return valid;
}
);
