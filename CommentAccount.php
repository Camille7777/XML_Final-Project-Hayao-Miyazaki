<?php
	$cname = $_POST['c_name'];
?>

<html>
<body>

	<h1>Comments</h1>
	<form method = "POST" action = "UserAccount.php">
	Name<input type = "text" name = "c_name"><br>
	</form>
	<button type="button" onclick="loadDoc_less()" value="g">View Less</button>
	<button type="button" onclick="loadDoc_all()" value="g">See all</button>
	
	
	<br><br>
	<div id="demo"></div>

	<script>
	//view comments
		var i = 0;
		function loadDoc_all() {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  myFunction_all(this,i);
			}
		  };
		  xhttp.open("GET", 'XML/'+'$cname' +'.xml', true);
		  xhttp.send();
		}

		function loadDoc_less() {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  myFunction_less(this,i);
			}
		  };
		  xhttp.open("GET", 'XML/'+'$cname' +'.xml', true);
		  xhttp.send();
		}

		function myFunction_all(xml, i){

			var xmlDoc = xml.responseXML;
			var x = xmlDoc.getElementsByTagName("info");
			var table = "<table><tr><th>Name</th><th>Date</th><th>Comments</th></tr>";
			for(i = 0; i < x.length; i++) {
					  table += '<tr><td>' + x[i].getElementsByTagName('name')[0].childNodes[0].nodeValue + '</td><td>'
								+ x[i].getElementsByTagName('date')[0].childNodes[0].nodeValue + '</td><td>'
								+ x[i].getElementsByTagName('comment')[0].childNodes[0].nodeValue +'</td></tr>' ;
			}
			table += "</table>";
			document.getElementById("demo").innerHTML = table;
		}

		function myFunction_less(xml, i){

			var xmlDoc = xml.responseXML;
			var x = xmlDoc.getElementsByTagName("info");
			var table = "<table><tr><th>Name</th><th>Date</th><th>Comments</th></tr>";
			for(i = 0; i < 2; i++) {
					  table += '<tr><td>' + x[i].getElementsByTagName('name')[0].childNodes[0].nodeValue + '</td><td>'
								+ x[i].getElementsByTagName('date')[0].childNodes[0].nodeValue + '</td><td>'
								+ x[i].getElementsByTagName('comment')[0].childNodes[0].nodeValue +'</td></tr>' ;
			}
			table += "</table>";
			document.getElementById("demo").innerHTML = table;
		}
	</script>


</body>
</html>


