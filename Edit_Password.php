<?php

if (isset($_POST['edit_psw']))
{
    $xml = new DOMDocument('1.0', 'utf-8');

    $xml->formatOutput = true; 

    $xml->preserveWhiteSpace = false;
    
    if(isset($_POST['c_psw']))
        $cur_psw = $_POST['c_psw'];
    if(isset($_POST['n_psw']))
        $n_psw = $_POST['n_psw'];
    if(isset($_POST['username']))
    {    
        $userName = $_POST['username'];    
        if (file_exists('./XML/User/'.$username))
        {
            $xml->load('./XML/User/'.$userName.'/user.xml');
            $old_psw = $xml->getElementsByTagName('password')->item(0);
    
            if (strcmp($old_psw->nodeValue, $cur_psw))
            {
                $message = 'Your password is not correct !';
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else 
            {
                $old_psw->nodeValue = $n_psw;
                $message = 'You have sucessfully changed you password!';
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            htmlentities($xml->save('./XML/User/'.$userName.'/user.xml'));
        }
    }
}
?>
<html>


<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Crimson+Text&display=swap" rel="stylesheet">

</head>

<title>
    Edit Password
</title>
<style>
.bg-A5DEE4 {
    /*background-color: rgba(252, 159, 77, 0.5);*/
    background-color: #EBB471;

}

.body-bg-color {
    /*background-color: #ECA579;*/
    /*background-color: rgba(251, 150, 110);*/
    background-color: #DAC9A6;
}

.btn-color {
    color: #212529;
    background-color: #F6C555;
    border-color: #F6C555;
}

.btn-color:hover {
    color: #212529;
    background-color: #EFBB24;
    border-color: #EFBB24;
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
    <div class="pos-f-t">
        <nav>
            <div class="btn">
                Back
            </div>

        </nav>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6 shadow bg-A5DEE4 p-3" style="font-weight:700;">
                <form method="POST" action="Edit_Password.php">
                    <label for="userName">UserName</label>
                    <input type="text" class="form-control" name="username" id="userName" aria-describedby="">
                    <label for="c_psw">Current Password</label>
                    <input type="password" class="form-control" name="c_psw" id="c_psw" aria-describedby="">
                    <small id="emailHelp" class="form-text text-muted">Please input your current password.</small>

                    <label for="n_psw">New Password</label>
                    <input type="password" class="form-control" name="n_psw" id="n_psw">
                    <div class="mt-3">
                        <button type="submit" name="edit_psw" class="btn btn-color shadow ">Submit</button>
                    </div>
                </form>
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


    </div>

    <div class="footer-box container-fluid mt-5 p-4 text1"
        style="width: 100vw; color: black; animation: none; bottom: 0;">
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