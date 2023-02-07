<!DOCTYPE html>
<html>
<head>
<title>HOSPITAL MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<style>

	section .section-img{
                width: 100%;
                height:100%;
                background: url(1.jpg) no-repeat;
                background-size: cover;       
            }
			section .section-bg-box{
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.4);
                text-align: center;
                
            }
.hero{
	
	height: 100%;
	width: 100%;
	overflow: hidden;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
	background-position: center;
	background-size: cover;
}
.hero p{
	text-align: center;
	font-size: 30px;
	color: white;
	font-family: Georgia, 'Times New Roman', Times, serif;
}
.form-box{
	width: 380px;
	height: 620px;
	position: relative;
	margin: 6% auto;
	padding: 5px;
	overflow: hidden;
	
}

.form-box a{
	 background: rgba(0,0,0,0.4);
	font-size: 15px;
	
}
.button-box{
	width: 220px;
	margin: 35px auto;
	position: relative;
	box-shadow: 0 0 20px 20px #ff61241f;
	border-radius: 30px;
}
.toggle-btn{
	padding: 15px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
	font-family: Georgia, 'Times New Roman', Times, serif;
  font-size:14px;
  color:#fffaf0;
}

#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: linear-gradient(to right, #ff105f, #ffad06);
	border-radius: 30px;
	transiction: .5s;
	
	
}
.input-group{
	top: 100px;
	position: absolute;
	width: 280px;
	transition: .5s;
	
}
.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
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
span{
	color: #777;
	font-size: 15px;
}

#login{
	left: 50px;
}
#register{
	left: 450px;
}
</style>
</head>
<body>

        
  

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

<section>
  <div class="w-80" >
  <div class="section-img">
  <div class="section-bg-box" >
<div class="hero">
        	<p>Login/Register Page</p>
      		<div class="form-box">
      			<div class="button-box">
      				<div id="btn"></div>
      				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
      				<button type="button" class="toggle-btn" onclick="register()">Register</button>
      				
      			</div>
	      		<form id="login" class="input-group" action="userpass.php" method="post">
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
	      			<a " href="/adminforgot.jsp" style="color:white;">forgot your password?</a><br>
					
	      			
      			</form>   
      			<form id="register" class="input-group" method="post" action="insert.php">
      				<input type="text" name="fname" class="input-field" placeholder="First Name" required>
      				<input type="text" name="lname" class="input-field" placeholder="Last Name" required>
      				<input type="text" name="phoneNo" class="input-field" placeholder="Phone Number" required>
	      			<input type="text" name="email" class="input-field" placeholder="City" required>
	      			<input type="text" name="username" class="input-field" placeholder="Email " required>	      			
	      			<input type="password" name="password" class="input-field" placeholder="password" required>
	      			<input type="checkbox" class="check-box" ><span  style="color: white;
						font-size:14px;">I agree to the terms & condition</span>
	      			<button type="submit" class="submit-btn">Register</button>
					  
      </div>
      			
      		</div>

      		   		
      	</div>
	
      	
<!-- JavaScript for user login and regisert form  -->
      	
        <script type="text/javascript">
		
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        
        function register(){
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		
		}
        function login(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		
		}
        
		</script>
  </div> 
  </div>
</section>

<!-- login reg pannel -->
        
        
   



</body>
</html>
