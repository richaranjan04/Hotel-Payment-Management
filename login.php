<?php 

session_start();
// If Session not set send user to login page
if (isset($_SESSION["username"])) {
  header("location:hotel.php");
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
	
    

	<title>Hotel Management | LogIn</title>
	<link rel="icon" href="images/hotel.png" type="image/x-icon">

	<link href="login.css" rel="stylesheet">

</head>

<body>

	<div  class="container">
     
    <header>
     <!--NAVIGATION BAR-->
      
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="images/download.jpg">
 
   <a class="navbar-brand name animated fadeInDownBig">&nbsp;Property Management | JTDC</a> </nav>   
       
    </header>
    
<div id="particles-js" style="height:700px">
      

 <form action="login_dest.php" method="POST" >        
<div class="form-group padtop">


<h1 class=" head" style="font-size:40px;"><i class="fas fa-user-circle"></i> &nbsp;Login</h1>
<br>
<br>
      
<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Username</span>
</div>
<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<br>
      
<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Password</span>
</div>
<input type="password" name="pass" class="form-control" placeholder="Enter your password" aria-label="Username" aria-describedby="basic-addon1">
</div>
   
<br>  

<center>
  
    <input class="btn btn-secondary  btn-lg"  name="Submit" type="submit"  value="Submit" class="button1">
      &nbsp;
      <a class="btn btn-secondary  btn-lg" href="signup.php" role="button" style="color:white;"> SignUp ? </a>
</center>
        
<br>
</div>   
</form>
    </div>
    
    <footer>
        <center>&copy;Created By :Richa Ranjan <br>E-mail: richabelair04@gmail.com</center>
    </footer>
	</div>
	
	<script type="text/javascript" src="js/particles.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>



</body>

</html>
