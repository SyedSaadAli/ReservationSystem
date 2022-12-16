<?php 
include('security.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Souq | Contact</title>
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
		<h1 style="color: white;font-size: 32px;margin: 20px 20%; text-align: center ; " >Contact us</h1>
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


    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    
  
	
	
    <input type="text" id="contact" name="contact" placeholder="Contact No">
	<textarea style="padding: 10px 0; font-size: 18px;" name="message" id="message" cols="30" rows="8" placeholder="Type your message here" ></textarea>

  <br>
    <button class="submit_contact" name="contact_btn" type="submit">Submit</button>
		 
  </form>
		</div>
		
</body>
<footer>
	<p> &copy;2021 | A1 Insurance All Rights Reserved. </p>
</footer>
</html>
