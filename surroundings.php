<?php
	session_start();
?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="my.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Crimson+Text&display=swap" rel="stylesheet">
</head>
<style>
    .footer-box {

        padding: 0 0;
        background-color: rgba(189, 192, 186, 0.3);
    }

    .text1 {
        font-family: Cinzel Decorative;
        color: white;
        font-size: auto;
        font-weight: 800;
        letter-spacing: 8px;
    }
</style>

<body class="module" style="background: linear-gradient(180deg,#FFC408,#4188d7)">
    <div class="pos-f-t">
        <nav class="navbar navbar-dark" style="background-color: #F8c121">
            <div class="btn-group" style="height: 80px;">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                    data-display="static" aria-haspopup="true" aria-expanded="false" style="background-color: #FFC408;">
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
            <a href="#" style="margin-top: 1%;"><img src="Resource/Photo/jct/logo2%20(1).png"></a>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                    data-display="static" aria-haspopup="true" aria-expanded="false" style="background-color: #FFC408">
                    <span>
						<?php
							if(isset($_SESSION['username']))
							{
								$username = $_SESSION['username'];
								echo $username;
							}
							else
							{
								echo "You have not log in";
							}
						?>
					</span><span>&nbsp;&nbsp;</span>
                    <img class="button" style="width: 80px;" src="Resource/Photo/jct/27.jpg">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" type="button" href="User Profile.php">My profile</a>
                    <a class="dropdown-item" type="button">Shopping cart</a>
                    <a class="dropdown-item" type="button" <?php session_destroy()?> href="surroundings.php">Log out</a>
                </div>
            </div>

        </nav>
    </div>



    <div id=containers>
        <div class="container" style="margin-top:2%">
            <div style="box-shadow: 0 5px 15px rgba(0,0,0,.3)">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top:3%">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="mx-auto" style="width: 700px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Resource/Photo/jct/600/combine2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Resource/Photo/jct/600/5.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Resource/Photo/jct/600/0.0.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-3" style="margin-top:5%;">
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/TB2abAAancCL1FjSZFPXXXZgpXa_!!3164372799.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chihiro Ogino1</h5>
                            <p class="card-text">RM 149.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 50px;" src="Resource/Photo/jct/gif_03.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/TB2CYlOfUdnpuFjSZPhXXbChpXa_!!3164372799.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chihiro Ogino2</h5>
                            <p class="card-text">RM 149.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 50px;" src="Resource/Photo/jct/gif_03.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/TB2hMtEfItnpuFjSZFKXXalFFXa_!!3164372799.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chihiro Ogino3</h5>
                            <p class="card-text">RM 149.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 50px;" src="Resource/Photo/jct/gif_03.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Totoro bottle-1</h5>
                            <p class="card-text">RM 19.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 50px;" src="Resource/Photo/jct/i.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Totoro bottle-2</h5>
                            <p class="card-text">RM 19.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 50px;" src="Resource/Photo/jct/i.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/9.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Totoro bottle-3</h5>
                            <p class="card-text">RM 19.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 50px;" src="Resource/Photo/jct/i.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Totoro alarm-1</h5>
                            <p class="card-text">RM 39.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 30px;" src="Resource/Photo/jct/giphy.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Totoro alarm-2</h5>
                            <p class="card-text">RM 39.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 30px;" src="Resource/Photo/jct/giphy.gif">
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <img src="Resource/Photo/jct/11.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Totoro alarm-3</h5>
                            <p class="card-text">RM 39.9</p>
                            <a href="#" class="btn btn-primary">Shop now</a>
                            <img style="height: 30px;" src="Resource/Photo/jct/giphy.gif">
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example" style="margin-top:3%">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)"><a class="page-link"
                            href="#">1</a></li>
                    <li class="page-item" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)"><a class="page-link"
                            href="#">2</a></li>
                    <li class="page-item" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)"><a class="page-link"
                            href="#">3</a></li>
                    <li class="page-item" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-lg-5" style="margin-top:5%;">
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pvc Figure</h5>
                    <p class="card-text">RM 149.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/11.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Totoro T-shirt W</h5>
                    <p class="card-text">RM 99.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/22.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Totoro T-shirt C</h5>
                    <p class="card-text">RM 99.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/33.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Totoro T-shirt D</h5>
                    <p class="card-text">RM 99.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/44.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Charging box</h5>
                    <p class="card-text">RM 49.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/55.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">No face pendant</h5>
                    <p class="card-text">RM 9.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/111.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Totoro pendant</h5>
                    <p class="card-text">RM 19.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Totoro figure</h5>
                    <p class="card-text">RM 99.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Howl's phone shell</h5>
                    <p class="card-text">RM 9.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card" style="box-shadow: 0 15px 25px rgba(0,0,0,.5)">
                <img src="Resource/Photo/jct/800/99.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chihiro Ogino figure</h5>
                    <p class="card-text">RM 149.9</p>
                    <a href="#" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>
    </div>

    <hr style="border:1px dashed #0000fff" />




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <div class="footer-box mt-5 p-4 text1" style="width: 100vw; color: black;">
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