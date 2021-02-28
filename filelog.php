<?php
  ob_start();
  session_start();
?>
<?php
$username="";
$password="";
$username_err="";
$password_err="";


   if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty($_POST["username"])){

        //$username_err = "Enter a Username.";
    } 
    else{
    	$username=$_POST['username'];      
     
    }    

    if(empty($_POST["password"])){
        //$password_err = "Enter a Password.";   
    }

    else{
    	$password=$_POST['password'];
    }
 } 


            


    $file = fopen("data1.txt","r") or die("fail to open file");

       while($row = fgets($file)) {
      list( $firstName, $lastname, $gender, $email,$usname,$pword ) = explode( ",", $row );

  
         if($username==$usname && $password== $pword){

         	echo"Login Done";
         
  }
         else{
           echo"please Enter valid Information";
  }
 
}
session_destroy();
fclose( $file );


?>

   
   <head>
      <title>File Handling 2</title>
      
   </head>
	
   <body>
   	     <h1><center>Login Form</center></h1>
       
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
          	       
                    <p><center><b>UserName</b></center></p>
                    <center><input type="text" name="username" value=""></center>
                    

                    <p><center><b>Password</b></center></p>
                   <center> <input type="password" name="password" value=""></center>
                    <br>
                    <br>
                    <center><input type="submit" name="submit" value="Submit"> </center>
                    
          </form>   
      
   </body>
</html>