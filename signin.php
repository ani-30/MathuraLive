<html>
<head>
<title>LOG IN</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
<style>
h1{font-weight:bold;
text-decoration:underline;}
</style>

</head>
<?php 

require 'connect.inc.php';
require 'core.inc.php';

if (loggedin())
{
	header('location: welcome.php');
}
else
{
	if(isset($_POST['email']) && isset($_POST['pass']))
	{
		
	 $email=$_POST['email'];
	$password=$_POST['pass'];
	if(!empty($email) && !empty($password))
	{
    
		if($email !="asa@gmail.com" || $password !="asa")
        {
            echo '<script language="javascript">';
echo 'alert("invalid")';
echo '</script>';
        }
			else
			{
				
				$_SESSION['email']=$email;
				header('Location:welcome.php');
				
			
	
			}
			
		}
		else{
			echo '<script language="javascript">';
echo 'alert("valid")';
echo '</script>';
		}
	}
	
	}
	






?>
<body>
<div id="navigation">
  <div class="wrapper">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="signin.php">Login</a></li>
</ul>
   
  </div>
   
</div>
    <div class="wrapper">
        <center> <h1>MATHURA LIVE</h1>   </center>
    </div>

<div class="jumbotron">
<h1><center>Sign in</center></h1>
</div>
<form class="form-horizontal" role="form" action="<?php echo $current_file; ?>" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-3">
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-3"> 
      <input name="pass" type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <button class="btn btn-default"><a href="email.html">Forgot Password!</a></button>
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>







</body>
    <div id="footer">
  <div class="wrapper">
    <p class="l">Copyright &copy; 2016 - <a href="#">Mathura live</a> &middot; All Rights Reserved</p>
       <p class="r">Developed By: Anirudh Gupta</p>
  </div>
</div>
</html>