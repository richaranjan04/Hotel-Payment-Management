
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
if (!isset($_SESSION["username"])) {
  header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<title>Hotel Details</title>
	<link rel="icon" href="images/hotel.png" type="image/x-icon">

	<link href="display.css" rel="stylesheet">
	<style>
  
    table {
    border-collapse: collapse;
    width: 100%;
    }

th, td {
    text-align: left;
    padding: 8px;
    }

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:black;
    font-family: 'Hind', sans-serif;
    color: white;
    }
</style>

<script>
function myReminder() {
    alert("Mail sent successfully !");
}
</script>

</head>

<body>

	<div class="container">
     
   <header>
     <!--NAVIGATION BAR-->
      
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="images/download.jpg">
 
   <a class="navbar-brand name animated fadeInDownBig">&nbsp;Property Management | JTDC</a> </nav>   
       
    </header>
    
    <div style="height:100%;" class="content">
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> 
        
                
 <?php
              
    $sql="SELECT name,type,operator,amount,email,number,date FROM details";
     
    if($res = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($res) > 0){
        
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Type</th>";
                echo "<th>Operator</th>";
                echo "<th>Amount</th>";
                echo "<th>Email</th>";
                echo "<th>Number</th>";
                echo "<th>Date</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($res)){
            echo "<tr >";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['operator'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    } else{
        echo "No Matching records are found.";
    }
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    
?>
 </form>
   
<form action="display_dest.php" method="POST">
<br>
<br>
<center>    
<input class="btn btn-dark" type="submit" name="Submit" onclick="myReminder()" value="Send E-mail Reminders" >
<a class="btn btn-dark" href="hotel.php" role="button">Enter a new Hotel Detail</a>
<a class="btn btn-dark" href="logout.php" role="button">Log Out</a>
</center> 
</form> 
    
<br>
</div>
    
    <footer>
        <center>&copy;Created By :Richa Ranjan <br>E-mail: richabelair04@gmail.com</center>
    </footer>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>



</body>

</html>
