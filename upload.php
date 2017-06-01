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

     
 
  </style>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({dateFormat:"dd-mm-yy"});
  } );
  </script>
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
        require 'core.inc.php';
require 'connect.inc.php';
        if(isset($_POST['action'])){
    
       $name       = $_FILES['userfile']['name'];  
    $temp_name  = $_FILES['userfile']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = 'uploads/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
        if(isset($_POST['vheader']) || isset($_POST['kheader']) || isset($_POST['sheader']) || isset($_POST['dheader']))
                                                                   {
        if(isset($_POST['vheader']) && isset($_POST['vcontent'])&& isset($_POST['vdatepicker']) )
        {
            $vheader=$_POST['vheader'];
            $vcontent=$_POST['vcontent'];
           echo $date=$_POST['vdatepicker'];
            if(!empty($vheader) && !empty($vcontent) && !empty($date))
                                                                                       
                {
                    $query="insert into videos (vname,content,date) VALUES ('$vheader','$vcontent','$date')";
		if($query_run=mysql_query($query))
        {
           
        }
                else
                {
                   echo '<script language="javascript">';
echo 'alert("error")';
echo '</script>'; 
                }
                }
        }
        
          if(isset($_POST['kheader']) && isset($_POST['kcontent'])&& isset($_POST['kdatepicker']) )
        {
            $kheader=$_POST['kheader'];
            $kcontent=$_POST['kcontent'];
           echo $date=$_POST['kdatepicker'];
            if(!empty($kheader) && !empty($kcontent) && !empty($date))
                                                                                       
                {
                    $query="insert into samachar (header,content,date) VALUES ('$kheader','$kcontent','$date')";
		if($query_run=mysql_query($query))
        {
           
        }
                else
                {
                   echo '<script language="javascript">';
echo 'alert("error")';
echo '</script>'; 
                }
                }
        }
           if(isset($_POST['sheader']) && isset($_POST['scontent'])&& isset($_POST['sdatepicker']) )
        {
            $sheader=$_POST['sheader'];
            $scontent=$_POST['scontent'];
           echo $date=$_POST['sdatepicker'];
            if(!empty($sheader) && !empty($scontent) && !empty($date))
                                                                                       
                {
                    $query="insert into surkhiyan (header,content,date) VALUES ('$sheader','$scontent','$date')";
		if($query_run=mysql_query($query))
        {
           
        }
                else
                {
                   echo '<script language="javascript">';
echo 'alert("error")';
echo '</script>'; 
                }
                }
        }
        
          if(isset($_POST['dheader']) && isset($_POST['dcontent'])&& isset($_POST['ddatepicker']) )
        {
            echo $dheader=$_POST['dheader'];
            $dcontent=$_POST['dcontent'];
           echo $date=$_POST['ddatepicker'];
            if(!empty($dheader) && !empty($dcontent) && !empty($date))
                                                                                       
                {
                    $query="insert into darshan (header,content,date) VALUES ('$dheader','$dcontent','$date')";
		if($query_run=mysql_query($query))
        {
          
        }
                else
                {
                   echo '<script language="javascript">';
echo 'alert("error")';
echo '</script>'; 
                }
                }
        }
        
       header('location:welcome.php');
        }
        ?>
        
<h1><center>Upload</center></h1>
<br><br>
        <center>
            <form class="form-horizontal" role="form" action="upload.php" method="post">
                
                <div class="grp">
        <h1>Khas Khabar</h1>
        <div class="form-group">
  <label for="kheader">HEADER</label>
  <input type="text" name="kheader" class="form-control" id="kheader">
</div>
         <div class="form-group">
  <label for="kcontent">Content</label>
  <textarea name="kcontent" class="form-control" rows="7" id="kcontent"></textarea>
</div> 
      <div class="form-group">
  <label for="datepicker">Date:</label>
  <input name="kdatepicker" type="text"  class="datepicker">
</div>
                </div>
        <br><br><br><br>
        
                 <div class="grp">
             <h1>Surkhiyaan</h1>
        <div class="form-group">
  <label for="sheader">HEADER</label>
  <input name="sheader" type="text" class="form-control" id="sheader">
</div>
         <div class="form-group">
  <label for="scontent">Content</label>
  <textarea name="scontent" class="form-control" rows="7" id="scontent"></textarea>
</div> 
     <div class="form-group">
  <label for="datepicker">Date:</label>
  <input name="sdatepicker" type="text"  class="datepicker">
</div>
                </div>
        
         <br><br><br><br>
         <div class="grp">
             <h1>Video</h1>
   <p>
Please choose a video file, or a set of files:<br>
<input type="file" name="vheader" size="400000000">
</p>
         <div class="form-group">
  <label for="vcontent">Content</label>
  <textarea name="vcontent" class="form-control" rows="7" id="vcontent"></textarea>
</div> 
      <div class="form-group">
 <label for="datepicker">Date:</label>
  <input name="vdatepicker"type="text"  class="datepicker">
</div>
                </div>
         <br><br><br><br>
         <div class="grp">
             <h1>Darshan</h1>
        <div class="form-group">
  <label for="dheader">HEADER</label>
  <input name="dheader" type="text" class="form-control" id="dheader">
</div>
         <div class="form-group">
  <label for="dcontent">Content</label>
  <textarea name="dcontent" class="form-control" rows="7" id="dcontent"></textarea>
</div> 
      <div class="form-group">
<label for="datepicker">Date:</label>
  <input name="ddatepicker" type="text"  class="datepicker">
</div>
                </div><br><br><br><br>
      <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
       
      <button type="submit" class="btn btn-default">POST</button>
    </div>
  </div>
            </form><br><br><br><br>
             <form class="form-horizontal" role="form" action="upload.php" method="post" enctype="multipart/form-data">
                  <div class="grp">
  <h1>Video</h1>
   <p>
Please choose a video file, or a set of files:<br></p>
<input type="file" name="userfile" id="userfile">

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
<input type="submit" name="action" value="upload">
    </div>
  </div>
                 </div>
</form><br><br>
        </center>    <div id="footer">
  <div class="wrapper">
    <p class="l">Copyright &copy; 2016 - <a href="#">Mathura live</a> &middot; All Rights Reserved</p>
       <p class="r">Developed By: Anirudh Gupta</p>
  </div>
</div>  </body>
  
</html>
