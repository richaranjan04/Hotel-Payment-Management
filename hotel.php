<?php 
session_start();
// If Session not set send user to login page
if (!isset($_SESSION["username"])) {
  header("location:login.php");
} 

?>
 
 
<!DOCTYPE html>
<html lang="en">

<head>

    
    <script src="js/jquery.js"></script>
    <script>
    function addRow(obj)
		{
		     
			var lastTr = $('#delete').find('tr:last');
			//console.log(lastTr);
			var newTr = $(lastTr).clone();
			//console.log(newTr);
			$(lastTr).after(newTr);

		$(newTr).find('#Delete').attr("disabled",false);

		$(newTr).find('input[type=text]').each(function (key,temp) {
		$(temp).val("");
		$(temp).text("");
		});
	
			$(newTr).find('select').each(function(key,temp){
				var selected = $(temp).find('option:selected');
				$(temp).find('option').removeAttr('disabled');
				$(selected).removeAttr('selected');
			
			});
		}
        
        
    
    </script>
    
    <script>
    function myFunction() {
    document.getElementById("delete").deleteRow(0);
    }
    </script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<title>Hotel Details</title>
	<link rel="icon" href="images/hotel.png" type="image/x-icon">

	<link href="hotel.css" rel="stylesheet">

</head>

<body>

	<div  class="container">
     
   <header>
     <!--NAVIGATION BAR-->
      
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="images/download.jpg">
 
   <a class="navbar-brand name animated fadeInDownBig">&nbsp;Property Management | JTDC</a> </nav>   
       
    </header>
    <div class="content">
    <form action="hotel_dest.php" method="POST">
    <table class="table" id="dataTable">
       <thead class="thead-dark">
       <tr>
      <th scope="col"></th>
      <th scope="col">Name of Property</th>
      <th scope="col">Type of property</th>
      <th scope="col">Name pf Operator</th>
      <th scope="col">Lease Amount</th>
      <th scope="col">E-mail Id</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Date of Payment</th>
      </tr>
      </thead>
      <tbody id="delete">
      <tr>
      <th scope="row" style="font-size:25px; text-align:center;"><i class="fas fa-male"></i></th>
      <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="name[]" placeholder="Name of Property"></td>
      <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="type[]"placeholder="Type of Property"></td>
     <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="operator[]"placeholder="Name of operator"></td>
     <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="amount[]"placeholder="Lease Amount"></td>
     <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="email[]" placeholder="Email-Id"></td>
     <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="number[]" placeholder="Phone Number"></td>
     <td>
     <input type="date" name="date[]" class="form-control" id="formGroupExampleInput"></td>
     </tr>
    
    
  </tbody>
</table>

<button type="button" class="btn btn-dark" name="add" onclick="addRow()" ><i class="fas fa-plus-circle"></i>&nbsp;Add row</button>
<button type="button" class="btn btn-dark" id="delete" name="add"  onclick="myFunction()" ><i class="far fa-trash-alt"></i>&nbsp;Delete row</button>
            
 
<center>        
<input class="btn btn-dark"  name="Submit" type="submit" value="Submit">

<a class="btn btn-dark" href="display.php" role="button">View Details</a>

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
