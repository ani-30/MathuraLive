<html>
    <head>
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css" />
   <style>

.container {
    width: 80%;
}
 
  </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            </head>
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
	<?php 
	
	
	include'core.inc.php';
	include'connect.inc.php';

	$email=$_SESSION['email'];
        $d=0;
	$query="select * from darshan";
	if($query_run=mysql_query($query))
	{
		$Sno=array();
		$header=array();
		$date=array();
		$content=array();
		
		while($query_row=mysql_fetch_assoc($query_run))
		{
			             $Sno[$d]=$query_row['Sno'];
            			 $header[$d]=$query_row['header'];
            			 $date[$d]=$query_row['date'];
			             $d++;
		}
	}
               $d1=0;
	$query="select * from videos";
	if($query_run=mysql_query($query))
	{
		$vSno=array();
		$vheader=array();
		$vdate=array();
		$vcontent=array();
		
		while($query_row=mysql_fetch_assoc($query_run))
		{
			             $vSno[$d1]=$query_row['Sno'];
            			 $vheader[$d1]=$query_row['vname'];
            			 $vdate[$d1]=$query_row['date'];
			             $d1++;
		}
	}
	
	       $d2=0;
	$query="select * from surkhiyan";
	if($query_run=mysql_query($query))
	{
		$sSno=array();
		$sheader=array();
		$sdate=array();
		$scontent=array();
		
		while($query_row=mysql_fetch_assoc($query_run))
		{
			             $sSno[$d2]=$query_row['Sno'];
            			 $sheader[$d2]=$query_row['header'];
            			 $sdate[$d2]=$query_row['date'];
			             $d2++;
		}
	}
	
	       $d3=0;
	$query="select * from samachar";
	if($query_run=mysql_query($query))
	{
		$kSno=array();
		$kheader=array();
		$kdate=array();
		$kcontent=array();
		
		while($query_row=mysql_fetch_assoc($query_run))
		{
			             $kSno[$d3]=$query_row['Sno'];
            			 $kheader[$d3]=$query_row['header'];
            			 $kdate[$d3]=$query_row['date'];
			             $d3++;
		}
	}

	
	
	
	
	?>


<div class="jumbotron">
<h1><center>Welcome</center></h1>
</div>
<div class="row">

  <div class="col-sm-6" style="padding:10px">
  <div class="container">
  <h2>Khas Khabar</h2>
  
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Header</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
        <?php
       for($f=0;$f<$d3;$f++)
       {
        ?>
      <tr>
        <td><?php echo $kSno[$f]?></td>
        <td><?php echo $kheader[$f]?></td>
        <td><?php echo $kdate[$f]?></td>
      </tr><?php
       }?>
    </tbody>
  </table>
  </div>
</div>
 <div class="col-sm-6" style="padding:10px">
  <div class="container">
  <h2>Surkhiyan</h2>
  
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Header</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    <?php
       for($f=0;$f<$d2;$f++)
       {
        ?>
      <tr>
        <td><?php echo $sSno[$f]?></td>
        <td><?php echo $sheader[$f]?></td>
        <td><?php echo $sdate[$f]?></td>
      </tr><?php
       }?>
    </tbody>
  </table>
  </div>
</div>
</div>
<div class="row">

  <div class="col-sm-6" style="padding:10px">
  <div class="container">
  <h2>Video</h2>
  
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Header</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
       for($f=0;$f<$d1;$f++)
       {
        ?>
      <tr>
        <td><?php echo $vSno[$f]?></td>
        <td><?php echo $vheader[$f]?></td>
        <td><?php echo $vdate[$f]?></td>
      </tr><?php
       }?>
    </tbody>
  </table>
  </div>
</div>
 <div class="col-sm-6" style="padding:10px">
  <div class="container">
  <h2>Darshan</h2>
  
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Header</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
       for($f=0;$f<$d;$f++)
       {
        ?>
      <tr>
        <td><?php echo $Sno[$f]?></td>
        <td><?php echo $header[$f]?></td>
        <td><?php echo $date[$f]?></td>
      </tr><?php
       }?>
    </tbody>
  </table>
  </div>
</div>
</div>

       <a href="upload.php"><button class="btn btn-default">Upload</button></a>
<br><br><br>
 <form action="delete.php" method="post">
               <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Delete</button>
  <div id="demo" class="collapse">
 <select name="tabledelete">
  <option value="samachar">Khabar</option>
  <option value="surkhiyan">Surkhi</option>
  <option value="videos">Video</option>
  <option value="darshan">Darshan</option>
</select>
      
     S.no<input name="deleteSno" type="text">
       <a href="delete.php"><button class="btn btn-default">DELETE</button></a>
  </div>
        
        </form> 
        <br><br>
      <form action="logout.php">
  <div class="form-group"> 
     <button type="submit" class="btn btn-default">Log Out!</button>
  </div>
          </form>
       
      <div class="container-fluid text-center">
<div class="jumbotron">


</div>
</div>
        <div id="footer">
  <div class="wrapper">
    <p class="l">Copyright &copy; 2016 - <a href="#">Mathura live</a> &middot; All Rights Reserved</p>
       <p class="r">Developed By: Anirudh Gupta</p>
  </div>
</div>
    </body>
</html>