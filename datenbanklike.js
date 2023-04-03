function updateData() {
    // AJAX-Anfrage senden
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Erfolgreiche Antwort erhalten, weitere Schritte hier ausführen
        alert(this.responseText);
      }
    };
    xhttp.open("POST", "upload_post.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=1"); // ID des Datensatzes, den du aktualisieren möchtest
  }