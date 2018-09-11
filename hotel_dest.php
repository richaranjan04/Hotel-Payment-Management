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
    <title> Hotel Details </title>
</head>
<body>
    <?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '/Applications/XAMPP/xamppfiles/htdocs/vendor/autoload.php';
    
    if(isset($_POST['Submit']))
       {   
        
         
        $count=count($_POST['name']);
        for($i=0;$i<$count;$i++)
        {
               
            $name[$i]=$_POST['name'][$i];
            $type[$i]=$_POST['type'][$i];
            $operator[$i]=$_POST['operator'][$i];
            $amount[$i]=$_POST['amount'][$i];
            $email[$i]=$_POST['email'][$i];
            $number[$i]=$_POST['number'][$i];
            $date[$i]=$_POST['date'][$i];
            
        if (!preg_match("/^[a-zA-Z ]*$/",$name[$i])) {
           echo "Only letters and white space allowed for property name";
           }
        elseif (!preg_match("/^[a-zA-Z ]*$/",$type[$i])) {
           echo "Only letters and white space allowed for the type of property.";
           }
        elseif (!preg_match("/^[a-zA-Z ]*$/",$operator[$i])) {
           echo "Only letters and white space allowed for the name of operator";
           }
        elseif (!preg_match("/^[\w-]+(?:\.[\w-]+)*@(?:[\w-]+\.)+[a-zA-Z]{2,7}$/",$email[$i])) {
         echo "Invalid email format";
        }
        else
        {
                
      $sql="INSERT INTO details(name,type,operator,amount,email,number,date)".
      "VALUES ('$name[$i]','$type[$i]','$operator[$i]','$amount[$i]','$email[$i]','$number[$i]','$date[$i]')";
      $res=mysqli_query($conn,$sql);
      echo $res;
     
      if(!$res)
      {
      die("Querry failed" . mysqli_error($conn));
      }
      else
      {
      header("location:display.php");
      }
     }
    }
   }

?>
   
</body>
</html>
<?php
    mysqli_close($conn);
?>

