

<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling -2</title>
</head>
<body>

<?php


       
        $userName = $password = $userNameErr = $passwordErr = $msg = "";
        $filepath = "reg.txt";
        $f = fopen($filepath,'r') or die("fail to open file");
        $userlist = file ('reg.txt');
       
        $success = false; 
       foreach ($userlist as $userName) {
         $user_details = explode('|', $userName);

     if ($user_details[0] == $userName) {
          $success = true;
          break;
     }
}

        if ($success) {
        echo "<br> You have been logged in. <br>";
        } 
        else {
        echo "<br> You have entered the wrong userNameame or passwordord. Please try again. <br>";
        }


    session_unset();
    session_destroy();
    fclose($f);

?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

   
    <h1>User Login</h1>
    
    <b> <p >userName</p> <input type="text" name="uname" value="" placeholder="Type userName">
    <p><?php echo $userNameErr; ?></p>
    
                    
    <b> <p>password</p> <input type="password" name="password" value="" placeholder="Type passwordord">
    <p><?php echo $passwordErr; ?></p>
    
    <br> <br> <input type="submit" name="" value="Login">
    
    
      

</form>


</body>
</html>
