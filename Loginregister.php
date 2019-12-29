<?php
    $erros=array();
    if (isset($_POST['signin']))
    {
        
        $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
        $password = $_POST['password'];
        if(file_exists('./XML/User/'.$username)){
            $xml = new SimpleXMLElement('./XML/User/'.$username.'/user.xml', 0, true); // getthe user.xml file
            
            if($password == $xml->password){  // if the password correct
                session_start();                //
                $_SESSION['username'] = $username;    //user's session start
                header('Location: User Profile.php');     // open index.php
                die;
            }
            else
            {
                $message = 'Your password is not correct !';
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    
        else
        {
            $message = 'Your username does not exist !';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    
    if (isset($_POST['register']))
    {
        $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);   // Get user name
        $password = $_POST['password'];        //get the password
        $r_password = $_POST['repeat'];
        $email = $_POST['email'];

        if (file_exists('./XML/User/'.$username))
        {
            $errors[] = 'Username already exists';
        }
        if($username == ''){               
            $errors[] = 'Username is blank';
        }
      
        if($password == '' || $r_password == ''){
            $errors[] = 'Passwords are blank';
        }
        if($password != $r_password){
            $errors[] = 'Passwords do not match';
        }
        

        

        if(count($errors) == 0){
            
            if(!mkdir('./XML/User/'.$username))
            {
                $message = "$username has not been created";
            
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            if(!mkdir('./XML/User/'.$username.'/Account info'))
            {
                $message = "$username/Account info has not been created";
            
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            if(!mkdir('./XML/User/'.$username.'/Comment'))
            {
                $message = "$username/Comment has not been created";
            
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            
            $xml = new SimpleXMLElement('<user></user>');
            $xml->addChild('name', $username);
            $xml->addChild('email', $email);
            $xml->addChild('country', 'China');
            $xml->addChild('age', '18');
            $xml->addChild('address', 'China');
            $xml->addChild('balance', '4000');  // in xml 
            $xml->addChild('password', $password);    // add password to xml
            $xml->asXML('./XML/User/'.$username.'/user.xml');   // save as xml file 
            header('Location: User Profile.php');                // go to login
            
            die;
        }

    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="CSS/loginregister/style_logre.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body id="loginrepage">
    <video id="savideo" autoplay muted loop>
        <source src="Resource/Video/sa_register.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="panel">
            <div class="content signin">
                <form action="Loginregister.php" method="post">
                    <div class="switch row text-center">
                        <span id="signin" class='active col-md-4'>Sign In</span><span class="col-md-4">/</span><span
                            id="register" class="col-md-4">Register</span>
                    </div>
                    <div id='email' class="input" placeholder='Email'><input type="text" name="email"></div>
                    <div id='username' class="input" placeholder='User Name'><input type="text" name="username"></div>
                    <div id='password' class="input" placeholder='Password'><input type="text" name="password"></div>
                    <div id='repeat' class="input" placeholder='Repeat'><input type="text" name="repeat"></div>
                    <span>Forget?</span>
                    <button type="submit" name="signin">Login</button>
                </form>

            </div>
        </div>
    </div>


</body>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script>
$('#signin').click(function() {
    $('.switch span').removeClass('active');
    $(this).addClass('active');

    $(this).parents('.content').removeClass('register');
    $(this).parents('.content').addClass('signin');
    $(this).parents('form').children('button').removeAttr('name');
    $(this).parents('form').children('button').attr('name', 'signin');
})

$('#register').click(function() {
    $('.switch span').removeClass('active');
    $(this).addClass('active');

    $(this).parents('.content').removeClass('signin');
    $(this).parents('.content').addClass('register');
    $(this).parents('form').children('button').removeAttr('name');
    $(this).parents('form').children('button').attr('name', 'register');
})

$('.input input').on('focus', function() {
    $(this).parent().addClass('focus');
})

$('.input input').on('blur', function() {
    if ($(this).val() === '')
        $(this).parent().removeClass('focus');
})
</script>

</html>