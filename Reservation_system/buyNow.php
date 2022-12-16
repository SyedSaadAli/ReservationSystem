<?php 
include('security.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Souq | BuyNow</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<div class="portcontainer"></div>
	<header>
		<a href="index.php" class="logo">Souq</a>
        <nav>
			<ul class="nlinks">
			   <li><a href="index.php">Home</a></li> 
			   <li><a href="products.php">Products</a></li>
			   <li><a href="about.php">About</a></li>
			   <li><a href="buyNow.php">Buy now</a></li>
			   
		   
		   
			   </ul>
		   </nav>
			<a href="contact.php"><button class="contact">Contact us</button></a>
		</header>
		<h1 style="color: white;font-size: 52px;margin: 20px 0; text-align: center ; font-weight: 400; " >Book our products now</h1>
			<center>	 <?php  
                    if(isset($_SESSION['success']) && $_SESSION['success'] != '')
                    {
    echo '<h2 class="bg-primary"> '.$_SESSION['success'].' </h2>';# text-white
    unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status'] != '' )
{
      echo '<h2 class="big-danger"> '.$_SESSION['status'].' </h2>';# text-white
      unset($_SESSION['status']);
  }
  ?></center>
	<div class="formc">
	 <form action="code.php" method="POST" style="text-align: center;justify-content: center">
  
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>


    <input type="text" id="contact" name="contact" placeholder="Contact No"><br>

    
    <select id="gender" name="gender">
        <option value="" disabled selected>Gender</option>

      <option value="Male">Male</option>
      <option value="Female">Female</option>
	  </select><br>
	 
    <select id="types" name="types"  > 
        <option value="" disabled selected>Select your product</option>

      <option value="p1">Airpods Pro</option>
      <option value="p2">Curology</option>
		<option value="p3">Shoes</option>
		<option value="p3">Kettle</option>
		
	  </select><br>
	
    <input type="text" id="address" name="address" placeholder="Address">

  <br>
    <button class="submit_contact" name="BookNow_btn" type="submit">Book now</button>
		 
  </form>
		</div>
		
</body>
<footer>
	<p> &copy;2021 | A1 Insurance All Rights Reserved. </p>
</footer>
</html>
