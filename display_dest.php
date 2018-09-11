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
session_start();
?>

<html>
<head>
    <title> Send Mail</title>
</head>
<body>

   
<?php
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/Applications/XAMPP/xamppfiles/htdocs/vendor/autoload.php';
    
if(isset($_POST['Submit']))
{ 
       
    $sql1="SELECT email,date FROM details";
    $res1=mysqli_query($conn, $sql1);
    $row=mysqli_fetch_assoc($res1);    




$mail = new PHPMailer(true);                              
try {
    
    $mail->SMTPDebug = 2;                                
    $mail->isSMTP();             
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;         
    $mail->Username = 'richabelair04@gmail.com';         
    $mail->Password = 'richa0404';                       
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;                                   
    
    $mail->setFrom('richabelair04@gmail.com', 'Administrator');
    $mail->addAddress($row["email"], 'Recipient');     
    
    $mail->isHTML(true);                               
    $mail->Subject = 'Due Payment';
    $mail->Body    = 'Your payment is due.Kindly pay before your due date .';
    

    $mail->send();
    header("location:display.php");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    
}
        
?>
   
</body>
</html>