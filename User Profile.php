<?php
	session_start();
	if(isset($_SESSION['alerted']))
	{
		if($_SESSION['alerted'])
		{
			if(isset($_SESSION['message']))
			{$message = $_SESSION['message'];
			echo "<script type='text/javascript'>alert('$message');</script>";
			}
			$_SESSION['alerted'] = 0;
		}
	}	
	if(!isset($_SESSION['username']))
		header('Location: LoginRegister.php');
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Crimson+Text&display=swap" rel="stylesheet">

</head>

<title>
    Home Page
</title>
<style>
.square-image {
    width: 300px;
    height: 300px;
    object-fit: cover;
}

.muyshadow {
    box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
}

.bg-A5DEE4 {
    /*background-color: rgba(252, 159, 77, 0.5);*/
    background-color: #e7ab79;

}

.body-bg-color {
    /*background-color: #ECA579;*/
    /*background-color: rgba(251, 150, 110);*/
    background-color: #eca579;
}

.btn-color {
    color: #212529;
    background-color: #cf675f;
    border-color: #cf675f;
}

.btn-color:hover {
    color: #212529;
    background-color: #B5495B;
    border-color: #B5495B;
}


.footer-box {

    padding: 0 0;
    background-color: rgba(189, 192, 186, 0.3);
    font-family:
}

.text1 {
    font-family: Cinzel Decorative;
    color: white;
    font-size: auto;
    font-weight: 800;
    letter-spacing: 8px;
    animation: textstretch 3s 1;
}
</style>

<body class="body-bg-color">
    <nav></nav>
	
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
	
    <div class="container mt-5">

        <div class="row justify-content-between">
            <div class="col-lg-4 shadow myshadow text-center rounded bg-A5DEE4">

                <div>
                    <image id="User_head" src="./Resource/Photo/User Profile/User_head.png"
                        class="image-fluid square-image rounded-circle mb-5" alt="Responsive image">
                    </image>
                    <h3 class="text-center">
                        <?php
							$username = $_SESSION['username'];
							echo $username;
						?>
                    </h3>
                </div>
            </div>
            <div class="col-lg-7 shadow myshadow rounded  bg-A5DEE4">
                <div class="row h-100">
                    <div class="col-lg-12 justify-content-around my-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <center>
                                    <h4>Country :</h4>
                                </center>
                            </div>
                            <div class="col-lg-7">
                                <?php
										$username = $_SESSION['username'];
										$xml = new DOMDocument('1.0', 'utf-8');
										$xml->formatOutput = true; 
										$xml->preserveWhiteSpace = false;
										
										//Get item Element
										$xml->load('./XML/User/'.$username.'/user.xml');
										$element = $xml->getElementsByTagName('user');  
										$country = $element->item(0)->getElementsByTagName('country')->item(0);
										
										echo '<center><h4>'.$country->nodeValue.'</h4></center>';
									?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 justify-content-around my-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <center>
                                    <h4>Age :</h4>
                                </center>
                            </div>
                            <div class="col-lg-7">
                                <?php
										$username = $_SESSION['username'];
										$xml = new DOMDocument('1.0', 'utf-8');
										$xml->formatOutput = true; 
										$xml->preserveWhiteSpace = false;
										
										//Get item Element
										$xml->load('./XML/User/'.$username.'/user.xml');
										$element = $xml->getElementsByTagName('user');  
										$age = $element->item(0)->getElementsByTagName('age')->item(0);
										
										echo '<center><h4>'.$age->nodeValue.'</h4></center>';
									?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 justify-content-around my-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <center>
                                    <h4>Address :</h4>
                                </center>
                            </div>
                            <div class="col-lg-7">
                                <?php
										$username = $_SESSION['username'];
										$xml = new DOMDocument('1.0', 'utf-8');
										$xml->formatOutput = true; 
										$xml->preserveWhiteSpace = false;
										
										//Get item Element
										$xml->load('./XML/User/'.$username.'/user.xml');
										$element = $xml->getElementsByTagName('user');  
										$address = $element->item(0)->getElementsByTagName('address')->item(0);
										
										echo '<center><h4>'.$address->nodeValue.'</h4></center>';
									?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 justify-content-around my-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <center>
                                    <h4>Balance :</h4>
                                </center>
                            </div>
                            <div class="col-lg-7">
                                <?php
										$username = $_SESSION['username'];
										$xml = new DOMDocument('1.0', 'utf-8');
										$xml->formatOutput = true; 
										$xml->preserveWhiteSpace = false;
										
										//Get item Element
										$xml->load('./XML/User/'.$username.'/user.xml');
										$element = $xml->getElementsByTagName('user');  
										$balance = $element->item(0)->getElementsByTagName('balance')->item(0);
										
										echo '<center><h4>'.$balance->nodeValue.'</h4></center>';
									?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 justify-content-around my-auto">
                        <div class="col-lg-5">
                            <form action="Edit_Password.php">
                                <center><button type="submit" class="btn btn-danger">Edit Your Password</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row shadow myshadow rounded mt-4 bg-A5DEE4">
            <div class="col-lg-12 ml-0 mr-0">

                <div class="col-lg-12 bordered rounded ">
                    <table class="table table-hover">
                        <tbody class="text-center">
                            <tr class="row" style="background-color:#cf675f">
                                <td class="col-1"></td>
                                <td class="col-10">Comment</td>
                                <td class="col-1"></td>
                            </tr>
                            <tr class="row" style="font-weight:500">
                                <td class="col-3">Subject</td>
                                <td class="col-3">Date</td>
                                <td class="col-6">Comment</td>
                            </tr>

                            <?php
								$username = $_SESSION['username'];
							 
								$xml = new DOMDocument('1.0', 'utf-8');
								$xml->formatOutput = true; 
								$xml->preserveWhiteSpace = false;
								if(file_exists('./XML/Comment/'.$username.'.xml'))
								{
									//Get item Element
									$xml->load('./XML/Comment/'.$username.'.xml');
									$element = $xml->getElementsByTagName('info');  
									
									for($i = 0;$i < count($element);$i++)
									{
										//Load child elements
										$subject = $element->item($i)->getElementsByTagName('subject')->item(0);
										$date = $element->item($i)->getElementsByTagName('date')->item(0);	
										$comment = $element->item($i)->getElementsByTagName('comment')->item(0);
										echo '<tr class="row"><td class="col-3">'.$subject->nodeValue.'</td><td class="col-3">'.$date->nodeValue.'</td><td class="col-6">'.$comment->nodeValue.'</td></tr>';
									}									
									
								}
								else
								{
									echo "<h3>Your comment is here</h3>";
								}
							 ?>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>



    <div class="footer-box mt-5 p-4 text1" style="width: 100vw; color:black; animation: none;">
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