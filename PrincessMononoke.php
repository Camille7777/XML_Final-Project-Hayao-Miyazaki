<?php
    session_start();
    $_SESSION['cur_page'] = basename(__FILE__);
	if(isset($_SESSION['alerted']))
	{
		if($_SESSION['alerted'])
		{
			if (isset($_SESSION['message']))
			{
				$message = $_SESSION['message'];
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			$_SESSION['alerted'] = 0;
		}
    }
?>
<html>
<head>
    <title>Princess Mononoke</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/PrincessMononoke/PrincessMononoke.css">

    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Crimson+Text&display=swap" rel="stylesheet">
    <style>
    body {
        background: #255359
    }

    html {
        box-sizing: border-box;
    }

    .footer-box {

        padding: 0 0;
        background-color: rgba(189, 192, 186, 0.3);
        font-family:
    }
    </style>
</head>

<body>
        <div class="pos-f-t">
            <nav class="navbar navbar-dark">
                <div class="btn-group" style="height: 80px;">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="background-color: #FFC408">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item" type="button" href="homepage.php">Homepage</a>
						<a class="dropdown-item" type="button" href="Miyazaki Hayao.php">Miyazaki Hayao</a>
                        <a class="dropdown-item" type="button" href="PrincessMononoke.php">Princess Mononoke</a>
						<a class="dropdown-item" type="button" href="SpiritAway.php">Spirited Away</a>
                        <a class="dropdown-item" type="button" href="surroundings.php">Shop</a>
                    </div>
                </div>

            </nav>
        </div>	

    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="text1">Princess Mononoke</h1>
                <br>
                <h3 class="text2">Spirit/Monster Princess</h3>
            </div>
        </div>

        <div class="row p-1">
            <div class="col-md-4">
                <div class="zoom">
                    <img src="Resource/Photo/PrincessMononoke/PMbackground3.jpg" style="width:100%; border-radius:30px">
                </div>
            </div>

            <div class="col-md-4">
                <div class="zoom">
                    <img src="Resource/Photo/PrincessMononoke/PMbackground.jpg" style="width:100%; border-radius:30px">
                </div>
            </div>

            <div class="col-md-4">
                <div class="zoom">
                    <img src="Resource/Photo/PrincessMononoke/PMbackground2.jpg" style="width:100%; border-radius:30px">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="text3">Introduction</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h5 class="text4">Princess Mononoke is a 1997 Japanese animated fantasy film written and directed by
                    Hayao Miyazaki,
                    animated by Studio Ghibli for Tokuma Shoten, Nippon Television Network and Dentsu, and distributed
                    by Toho.
                </h5>
                <br>
                <h5 class="text4">Princess Mononoke is set in the late Muromachi period (approximately 1336 to 1573) of
                    Japan with fantasy
                    elements. The story follows the young Emishi prince Ashitaka's involvement in a struggle between the
                    gods of
                    a forest and the humans who consume its resources.</h5>
            </div>
            <div class="col-1"></div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-12">
                <h3 class="text3">Character</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/PrincessMononoke/CharacterPM.png" style="border-radius:100px "
                                class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="flip-card-back">
                            <img src="Resource/Photo/PrincessMononoke/CharacterPM.jpg" style="border-radius:100px"
                                class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/PrincessMononoke/CharacterA.jpg" style="border-radius:100px"
                                class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="flip-card-back">
                            <img src="Resource/Photo/PrincessMononoke/CharacterA.png" style="border-radius:100px"
                                class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/PrincessMononoke/CharacterE.png" style="border-radius:100px"
                                class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="flip-card-back">
                            <img src="Resource/Photo/PrincessMononoke/CharacterE.jpg" style="border-radius:100px"
                                class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-12">
                <h3 class="text3">Plot</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="zoom">
                    <img src="Resource/Photo/PrincessMononoke/Princess Mononoke1.jpg" class="image"
                        style="width:100%; border-radius:30px;">
                    <div class="middle"></div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="container">
                        <h5 class="text4">The ambitious Lady Eboshi and her loyal clan use their guns against the gods
                            of the forest
                            and a brave young woman, Princess Mononoke, who was raised by a wolf-god. Ashitaka sees the
                            good in both sides
                            and tries to stem the flood of blood.</h5>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="text3">Award</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <br>
                <table>
                    <tr>
                        <th><b>Year<b></th>
                        <th><b>Award<b></th>
                        <th><b>Category<b></th>
                    </tr>
                    <tr>
                        <td>1997</td>
                        <td>52nd Mainichi Film Awards</td>
                        <td>Best Film</td>
                    </tr>

                    <tr>
                        <td>1998</td>
                        <td>21st Japan Academy Awards</td>
                        <td>Best Film</td>
                    </tr>

                    <tr>
                        <td>1998</td>
                        <td>
                            40th Blue Ribbon Awards
                        </td>
                        <td>Best Film</td>
                    </tr>

                    <tr>
                        <td>2001</td>
                        <td>27th Saturn Awards</td>
                        <td>Best Home Video Release</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-7">
                <div class="zoom">
                    <img src="Resource/Photo/PrincessMononoke/Princess Mononoke3.jpg"
                        style="width:100%; border-radius:30px;">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="text3">Comment</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                <button type="button" onclick="loadDoc_less()" value="g" class="btn btn-info" width="100%">View
                    Less</button>
            </div>
            <div class="col-3">
                <button type="button" onclick="loadDoc_all()" value="g" class="btn btn-info" width="100%">See
                    all</button>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div id="demo"></div>
            </div>
            <div class="col-1"></div>
        </div>



        <div class="row">
            <div class="col-12">
				<?php 
					require ('InsertComment.php');
				?>
            </div>
        </div>
    </div>



    <script>
    //view comments
    var i = 0;

    function loadDoc_all() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myFunction_all(this, i);
            }
        };
        xhttp.open("GET", "XML/Comment/PageComment/PMcomment.xml", true);
        xhttp.send();
    }

    function loadDoc_less() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myFunction_less(this, i);
            }
        };
        xhttp.open("GET", "XML/Comment/PageComment/PMcomment.xml", true);
        xhttp.send();
    }

    function myFunction_all(xml, i) {

        var xmlDoc = xml.responseXML;
        var x = xmlDoc.getElementsByTagName("info");
        var table = "<div class='row justify-content-center'><div class='col-12'>" +
            "<table><tr><th>Name</th><th>Date</th><th>Comments</th></tr>";
        for (i = 0; i < x.length; i++) {
            table += '<tr><td>' + x[i].getElementsByTagName('name')[0].childNodes[0].nodeValue + '</td><td>' +
                x[i].getElementsByTagName('date')[0].childNodes[0].nodeValue + '</td><td>' +
                x[i].getElementsByTagName('comment')[0].childNodes[0].nodeValue + '</td></tr>';
        }
        table += "</table></div></div>";
        document.getElementById("demo").innerHTML = table;
    }

    function myFunction_less(xml, i) {

        var xmlDoc = xml.responseXML;
        var x = xmlDoc.getElementsByTagName("info");
        var table = "<table><tr><th>Name</th><th>Date</th><th>Comments</th></tr>";
        for (i = 0; i < 2; i++) {
            table += '<tr><td>' + x[i].getElementsByTagName('name')[0].childNodes[0].nodeValue + '</td><td>' +
                x[i].getElementsByTagName('date')[0].childNodes[0].nodeValue + '</td><td>' +
                x[i].getElementsByTagName('comment')[0].childNodes[0].nodeValue + '</td></tr>';
        }
        table += "</table>";
        document.getElementById("demo").innerHTML = table;
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <div class="footer-box mt-5 p-4 text1" style="width: 100vw; color: black; animation: none;">
        <div class="row my-auto">
            <div class="col-lg-12">
                <footer>
                    <div id="tail-Logo" class="text-center">
                        <h3>Hayao Miyazaki</h3>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>