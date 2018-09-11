<?php

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
    <title> Signup Page</title>
    
</head>
<body>

<?php

    if(isset($_POST['submit']))
       {   
           $username=$_POST['username'];
           $designation=$_POST['designation'];
           $pass=$_POST['pass'];
           $repass=$_POST['repass'];

        
     if(empty($username)||empty($designation)||empty($pass))
           {
               echo "A field is left blank.Fill it please.";
           }
           elseif($pass!=$repass)
           {
               echo"Invalid Password";
               
           }
           elseif (!preg_match("/^[a-zA-Z ]*$/",$username)) {
           echo "Only letters and white space allowed for name";
           }
           elseif (!preg_match("/^[a-zA-Z ]*$/",$designation)) {
           echo "Only letters and white space allowed for designation !";
           }
           else
           {
               $sql="INSERT INTO signup(username,designation,pass)".
                "VALUES ('$username','$designation','$pass')";
               $res=mysqli_query($conn,$sql);
               echo $res;
               if(!$res)
               {
                   die("Querry failed" . mysqli_error($conn));
               }
               else
               {
                   header("location:login.php");
               }
               
               
           }
        }
           
       else
           {
               echo "Form not submitted";
               
           }   
?>
   
</body>
</html>

<?php
    mysqli_close($conn);
?>

