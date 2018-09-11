<?php

session_start();

$host="localhost";
$dbuser="root";
$dbname="hotel";
$password="";

$conn=mysqli_connect($host,$dbuser,$password,$dbname);
if(mysqli_connect_error())
{
    die("Connection Failed" . mysqli_connect_error());
}
?>
<html>
<head>
    <title> Login Page</title>
</head>
<body>
    <?php
    if(isset($_POST['Submit']))
    {
     $username=$_POST['username'];
     $pass=$_POST['pass'];
           
           if(empty($username)||empty($pass))
           {
               echo "A field is left blank.Fill it please.";
           }
           
           if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
           echo "Only letters and white space allowed";
           }
          
           else
           {
               $sql="SELECT * FROM signup where username='$username' and pass='$pass'";
              
          
               $res=mysqli_query($conn,$sql);
              
               if(!$res)
               {
                   die("Querry failed" . mysqli_error($conn));
               }
               
               
               $result=mysqli_fetch_assoc($res);
    
               if($pass!=$result['pass'])
               {
                   echo " Wrong password entered !";
               }
               else
               {
                $_SESSION["username"] = $username;
                header('location:hotel.php');   
               }
            
            }
        }
    
    else
           {
            echo "Not a user ! Want to create an account ?";
           
           }
?>
   
   
</body>
</html>
<?php
    mysqli_close($conn);
?>

