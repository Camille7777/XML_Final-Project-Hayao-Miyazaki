<?php

if (isset($_POST['edit_psw']))
{
    $xml = new DOMDocument('1.0', 'utf-8');

    $xml->formatOutput = true; 

    $xml->preserveWhiteSpace = false;

    $userName = $_POST['userName'];
    $cur_psw = $_POST['c_psw'];
    $n_psw = $_POST['n_psw'];

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
?>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<title>
    Edit Password
</title>

<body>
    <nav>


    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 shadow">
                <form method="POST" action="Edit_Password.php">
                    <label for="userName">UserName</label>
                    <input type="text" class="form-control" name="userName" id="userName" aria-describedby="">
                    <label for="c_psw">Current Password</label>
                    <input type="password" class="form-control" name="c_psw" id="c_psw" aria-describedby="">
                    <small id="emailHelp" class="form-text text-muted">Please input your current password.</small>

                    <label for="n_psw">New Password</label>
                    <input type="password" class="form-control" name="n_psw" id="n_psw">

                    <button type="submit" name="edit_psw" class="btn btn-primary">Submit</button>
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

</body>

</html>