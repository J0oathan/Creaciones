function up1i(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up1i").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/upfotos.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=0");
}

function up2i(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up2i").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/upfotos.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=1");
}

function up3i(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up3i").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/upfotos.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=2");
}

function up4i(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up4i").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/upfotos.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=3");
}

function up5i(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up5i").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/upfotos.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=4");
}

function up6i(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up6i").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/upfotos.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=5");
}


