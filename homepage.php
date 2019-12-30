<?php
    session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" href="CSS/Home/home.css">
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
    animation: textstretch 3s 1;
}
</style>

<body class="module"
    style="background:url(Resource/Photo/jct/18.jpeg);  background-size:cover; background-repeat: no-repeat;">

    <nav class="navbar navbar-dark">
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static"
                aria-haspopup="true" aria-expanded="false" style="background-color:#A8D8B9;">
                <span class="navbar-toggler-icon" style="height: 30px; width: 30px;"></span>
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
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static"
                aria-haspopup="true" aria-expanded="false" style="background-color: #A8D8B9">
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
                <a class="dropdown-item" type="button" href="Loginregister.php">Log in</a>
                <a class="dropdown-item" type="button" id="logout" onclick="logout()" href="">
                    <div id="logout_div"></div>Log out
                </a>
            </div>
        </div>

    </nav>


    <div class="container" style="height: 2800px;">
        <div class="texthome" style="margin-top: 10%">
            <p style="font-size: 64px;font-weight: bold;font-family: Cinzel Decorative"> Introduction to Miyazaki Hayao
            </p>
        </div>
        <p class="texthome3" style="font-size: 24px;font-weight: bold;font-family: Crimson Text; margin-top: 7%;">Serve
            heart and soul to the follower of Miyazaki Hyao</p>

        <div class="arrow" style="margin-top: 15%;">
            <a href="#down"><span></span>
                <span></span>
                <span></span></a>

        </div>

        <div class="row row-cols-1 row-cols-md-3" style="margin-top:35%;">
            <div class="col mb-4" id="down">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_01.jpg" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/Totoro"><img src="Resource/Photo/jct/9/1.jpg"
                                    alt="Responsive image" style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_02.jpg" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/Howl%27s_Moving_Castle"><img
                                    src="Resource/Photo/jct/9/6.jpg" alt="Responsive image"
                                    style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_03.gif" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/Princess_Mononoke"><img
                                    src="Resource/Photo/jct/9/3.jpg" alt="Responsive image"
                                    style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_04.jpg" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/Valley_of_the_Wind"><img
                                    src="Resource/Photo/jct/9/4.jpg" alt="Responsive image"
                                    style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_05.jpg" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/Spirited_Away"><img src="Resource/Photo/jct/9/2.jpg"
                                    alt="Responsive image" style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_06.gif" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/The_Wind_Rises"><img
                                    src="Resource/Photo/jct/9/7.jpg" alt="Responsive image"
                                    style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_07.gif" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/The_Cat_Returns"><img
                                    src="Resource/Photo/jct/9/8.jpg" alt="Responsive image"
                                    style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_08.gif" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/Kiki%27s_Delivery_Service"><img
                                    src="Resource/Photo/jct/9/12.jpg" alt="Responsive image"
                                    style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Resource/Photo/jct/9/000_09.gif" alt="Responsive image"
                                style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <a href="https://ghibli.fandom.com/wiki/Laputa:_Castle_in_the_Sky"><img
                                    src="Resource/Photo/jct/9/11.jpg" alt="Responsive image"
                                    style="width:300px;height:300px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top: 10%">
            <p style="font-size: 64px;color: white; font-weight: bold;font-family: Crimson Text; margin-top: 7%;">Future
                Activity</p>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://www.nact.jp/"><img src="Resource/Photo/jct/timg6.jpeg" class="d-block w-100"
                            alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Totoro show</h5>
                        <p>The National Art Center, Tokyo , 25/1/2020</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.moma.org/"><img src="Resource/Photo/jct/20.jpg" class="d-block w-100"
                            alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Spirited Away show</h5>
                        <p>The Museum of Modern Art, New York, 20/4/2020</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="http://www.artgallery.gov.my/?page_id=3263&lang=en"><img src="Resource/Photo/jct/21.jpg"
                            class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Hawl's Moving Castle</h5>
                        <p>National Art Gallery, Kuala Lumpur, 15/6/2020</p>
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

    <div class="footer-box mt-5 p-3 text1" style="width: 100vw; color: white;animation:none">
        <div class="row my-auto p-0">
            <div class="col-lg-12 p-0">
                <footer>
                    <div id="tail-Logo p-0" class="text-center">
                        <h3>Hayao Miyazaki</h3>
                    </div>
                </footer>
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
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    function logout() {
        $.get("./logout.php")
        alert('logout');
    }
    </script>
</body>

</html>