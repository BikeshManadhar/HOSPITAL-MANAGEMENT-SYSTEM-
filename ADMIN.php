<!DOCTYPE html>
<html>
<head>
<title>HOSPITAL MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<style>
	
	 .hero{
      
      height: 150%;
      width: 100%;
      overflow: hidden;
  }

.hero{
	
	height: 580px;
	width: 100%;
	overflow: hidden;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));

}
.hero p{
	position: relative;
    top: -10px;
	left: 475px;
	font-size: 30px;
	color: black;
	font-family: Georgia, 'Times New Roman', Times, serif;
}



.form-box{
	width: 380px;
	height: 420px;
	position: relative;
	padding: 5px;
	overflow: hidden;
    background-color: black;
	left: 400px;

}
.input-group{
	top: 100px;
	position: absolute;
	width: 280px;
	transition: .5s;
	left:50px;
	
}
.input-field{
	width: 100%;
	
	margin: 10px 0;
	border-left: 0;
	border-top: 0;
	border-right: 0;	
	border-bottom: 3px solid white;
	outline: none;
	background: transparent;
	color: white;
	font-size:16px;
	font-family: Georgia, 'Times New Roman', Times, serif;
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #ff105f, #ffad06);
	border: 0;
	outline: none;
	border-radius: 30px;	
	font-size:14px;
	font-family: Georgia, 'Times New Roman', Times, serif;
}

.check-box{
	margin: 30px 10px 30px 0;
}

</style>
</head>
<body>
<!--Navigation bar-->
<div class="topnav">
		<h1>AROGYA HEALTH CARE HOSPITAL</h1> 
				<a class="active" href="HOME.php">HOME</a>
  				<a href="LOGIN.php">USER LOGIN</a>
  				<a href="ADMIN.php">ADMIN LOGIN</a>
  				<a href="ABOUT.php">ABOUT US</a>
  				<div class="search-container">
    				<form action="/action_page.php">
     					 <input type="text" placeholder="Search.." name="search">
      						<button type="submit"><i class="fa fa-search"></i></button>
    			</form>
  			</div>
</div>
<!--Navigation bar-->

<!--Admin form-->
<section>
	  <div class="w-80" >
  			<div class="section-img">
					<div class="hero">
        				<p>Admin Login</p>
      						<div class="form-box">
	      						<form id="login" class="input-group" 				action="userpass1.php" method="post">
				  			<?php if (isset($_GET['error'])) { ?>
			                <p class="error"><?php echo $_GET['error']; ?></p>
		                    <?php } ?>
	    					<input type="text" name="username" class="input-field" placeholder="Enter User Name" required>
	      					<input type="password" name="password" class="input-field" placeholder="Enter password" required>
					  <br>
					  <br>
					  <br>
		<input type="checkbox" class="check-box"><span style="color: white;
		font-size:14px;">Remember Password</span>
   			<button type="submit" class="submit-btn">Log In</button>
           				   <br>		
        			      <br>
      								</form>   	  
			 </div>
      		</div>	
      	</div>
  </div>
</section>

<!-- login  pannel -->
        
        
   



</body>
</html>
