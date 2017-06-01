<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MathuraLive</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css" />
    <script>
    
     
 $(document).ready(function(){ /* to make sure the script runs after page load */
	
	$('.item').each(function(event){ /* select all divs with the item class */
	
		var max_length = 150; /* set the max content length before a read more link will be added */
	
		if($(this).html().length > max_length){ /* check for content length */
			
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			
			$(this).html(short_content+
						 '<a href="#" class="read_more"><br/>और पढ़े </a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'<a href="#" class="show_less"><br/>वापस </a></span>'); /* Alter the html to allow the read more functionality */
						 
			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
				event.preventDefault(); /* prevent the a from changing the url */
		$(this).hide(); /* hide the read more button */
				$(this).parents('.item').find('.more_text').show(); /* show the .more_text span */
                  $(this).parents('.item').find('a.show_less').show();
              
		 
			});
            	$(this).find('a.show_less').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.item').find('.more_text').hide(); /* hide the .more_text span */
              $(this).parents('.item').find('a.read_more').show();
		 
			});
			
		}
		
	});
 
 
});
  </script>
   
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
</head>
<body>
    <?php
    
    
    	include'core.inc.php';
	include'connect.inc.php';


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
             $content[$d]=$query_row['content'];
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
            $vcontent[$d1]=$query_row['content'];
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
             $scontent[$d2]=$query_row['content'];
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
            $kcontent[$d3]=$query_row['content'];
			             $d3++;
		}
	}

	
    
    ?>
<!-- BEGIN navigation -->
<div id="navigation">
  <div class="wrapper">
    <ul>
        <li><div class="left"><a href="#"  >Home</a></div></li>
        <li><div class="right"><a href="signin.php">Login</a></div></li>
</ul>
   
  </div>
   
</div>
    <div class="wrapper">
        <div class="row">
        
        <center> <h1><img src="https://yt3.ggpht.com/-1enw_li161k/AAAAAAAAAAI/AAAAAAAAAAA/AjhM_N-U4BI/s100-c-k-no-mo-rj-c0xffffff/photo.jpg" title="neo mathura" alt="neo mathura"> मथुरा लाइव </h1> <img src="khatri.jpeg" alt="YOGESH KHATRI">  </center>
        </div>
    </div>
    
    <br><br><br><br>
    
    <div class="row">
        <div class="container col-sm-3">
  <h2>खास खबर </h2>
  <p>आप के लिए </p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>खबर </th>
      </tr>
    </thead>
    <tbody>
         <?php
       for($f=0;$f<$d3;$f++)
       {
        ?>
      <tr>
        <td> <div class="post">
          <p class="date"><?php echo $kdate[$f]?></p>
          <h2><a href="#"><?php echo $kheader[$f]?></a></h2>
          
         <div class="item">
	 
	<?php echo $kcontent[$f]?>


</div>
        </div></td>
      </tr>
        <?php }?>
      <tr>
        
    </tbody>
  </table>
</div>
        
         <div class="container col-sm-3">
  <h2>सुर्खियाँ </h2>
  <p>आप रहे जागरूक </p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>सुर्खी </th>
      </tr>
    </thead>
    <tbody>
         <?php
       for($f=0;$f<$d2;$f++)
       {
        ?>
      <tr>
        <td> <div class="post">
          <p class="date"><?php echo $sdate[$f]?></p>
          <h2><a href="#"><?php echo $sheader[$f]?></a></h2>
          
         <div class="item">
	 
	<?php echo $scontent[$f]?>


</div>
        </div></td>
      </tr>
        <?php }?>
      <tr>
        
    </tbody>
  </table>
</div>
        
        
         <div class="container col-sm-3">
  <h2>दर्शन </h2>
  <p>चलो बुलावा आया hai</p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>आज के दर्शन </th>
      </tr>
    </thead>
    <tbody>
         <?php
       for($f=0;$f<$d;$f++)
       {
        ?>
      <tr>
        <td> <div class="post">
          <p class="date"><?php echo $date[$f]?></p>
          <h2><a href="#"><?php echo $header[$f]?></a></h2>
          
         <div class="item">
	 
	<?php echo $content[$f]?>


</div>
        </div></td>
      </tr>
        <?php }?>
      <tr>
        
    </tbody>
  </table>
</div>
         <div class="container col-sm-3">
  <h2>वीडियोस </h2>
  <p>देखे सच्चाई  </p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>विडियो </th>
      </tr>
    </thead>
    <tbody>
         <?php
       for($f=0;$f<$d1;$f++)
       {
        ?>
      <tr>
        <td> <div class="post">
          <p class="date"><?php echo $vdate[$f]?></p>
          <h2><a href="#"><?php echo $vheader[$f]?></a></h2>
            <video width="200" controls>
    <source src="uploads/<?php echo $vheader[$f]?>" type="video/mp4">
  
    Your browser does not support HTML5 video.
  </video>
         <div class="item">
	 
	<?php echo $vcontent[$f]?>


</div>
        </div></td>
      </tr>
        <?php }?>
      <tr>
        
    </tbody>
  </table>
</div>
</div>
    
    
    

<!-- BEGIN footer -->
<div id="footer">
    	<ul class="comp-contact" id="comp-contact">
						<li>
				<span class="mobicn comp-icon"></span>
				<span id="mob_set" class="telnowpr"><div class="telCntct cmawht"><a class="tel">+(91)-9837114945</a></div> </span>
			</li>
			
								<li>
				<span class="comp-icon adrsicn hidden-xs"></span> <!-- Address Priority Set to Area > Streat >LandMark >City-Pin -->
				<span class="comp-text">
					<span class="adrstxtr" id="fulladdress">
						<span>
							<span>कृष्णा नगर , मथुरा  - 281004</span>
						 </span>
						   					</span>
				</span>
			</li>
								
			   
				</ul>
  <div class="wrapper">
    <p class="l">कॉपीराइट &copy; २०१७   - <a href="#">मथुरा लाइव </a> &middot; सर्वाधिकार सुरक्षित</p>
       <p class="r">विकसित द्वारा : अनिरुद्ध गुप्ता </p>
  </div>
</div>
<!-- END footer -->
</body>
</html>
