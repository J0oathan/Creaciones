
function prod1(){

	var nombre = document.getElementById("n1").value;
	var precio = document.getElementById("p1").value;
	var num= 1;
	var data = 'nom='+nombre+'&pre='+precio+'&num='+num;


	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("res1").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "actualizar.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data);


}

function prod2(){

	var nombre = document.getElementById("n2").value;
	var precio = document.getElementById("p2").value;
	var num= 2;

	var data = 'nom='+nombre+'&pre='+precio+'&num='+num;


	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("res2").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "actualizar.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data);


}

function prod3(){

	var nombre = document.getElementById("n3").value;
	var precio = document.getElementById("p3").value;
	var num= 3;

	var data = 'nom='+nombre+'&pre='+precio+'&num='+num;


	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("res3").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "actualizar.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data);


}

function prod4(){

	var nombre = document.getElementById("n4").value;
	var precio = document.getElementById("p4").value;
	var num= 4;

	var data = 'nom='+nombre+'&pre='+precio+'&num='+num;


	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("res4").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "actualizar.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data);


}

function prod5(){

	var nombre = document.getElementById("n5").value;
	var precio = document.getElementById("p5").value;
	var num= 5;

	var data = 'nom='+nombre+'&pre='+precio+'&num='+num;


	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("res5").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "actualizar.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data);


}

function prod6(){

	var nombre = document.getElementById("n6").value;
	var precio = document.getElementById("p6").value;
	var num= 6;

	var data = 'nom='+nombre+'&pre='+precio+'&num='+num;


	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("res6").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "actualizar.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data);
}



function act1(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pr1").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/productos.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("num=1");
}

function act2(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pr2").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/productos.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("num=2");
}


function act3(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pr3").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/productos.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("num=3");
}


function act4(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pr4").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/productos.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("num=4");
}


function act5(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pr5").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/productos.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("num=5");
}


function act6(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pr6").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "login/php/productos.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("num=6");
}


function up1(){

	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up1").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "cargarf.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=0");
}


function up2(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up2").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "cargarf.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=1");
}


function up3(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up3").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "cargarf.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=2");
}

function up4(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up4").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "cargarf.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=3");
}

function up5(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up5").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "cargarf.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=4");
}

function up6(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("up6").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "cargarf.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num=5");
}



