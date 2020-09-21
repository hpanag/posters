<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_REQUEST['title']; ?>  </title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300,200' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="css/responsive.css" rel="stylesheet" media="screen" type="text/css"/>
<link rel="stylesheet" href="sidr/stylesheets/jquery.sidr.dark.css">
<script src="js/jquery.min.js"></script>
<script src="sidr/jquery.sidr.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>


<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='8ef951f0b917021c762425dae19e84ee' data-cfasync='false' async='async'></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71752002-1', 'auto');
  ga('send', 'pageview');
  
  ga('set', 'userId', {{USER_ID}}); // Set the user ID using signed-in user_id.

</script>

</head>

<body>
	<div class="header">
    	<div class="container">
    		<div class="logo-menu">
        		<div class="logo">
            		<h1><a href="index.php">HARJOT</a></h1>
            	</div>
                <!--<a id="simple-menu" href="#sidr">Toggle menu</a>-->
                <div id="mobile-header">
<a class="responsive-menu-button" href="#"><img src="images/11.png"/></a>
</div>
            	<div class="menu" id="navigation">
            		<ul>
                    	<li><a href="index.php">Home</a></li>
             
                    </ul>
            	</div>
        	</div>
        </div>
    </div>
	<div class="color-border">
    </div>
    
    
     	<div class="container">
        	<h3 class="text-head"><?php echo $_REQUEST['title']; ?> </h3>
        	<div class="features-section">
                <ul>
               	  <li>
               	    <div class="feature-icon3 icon4"></div>
                   	<h5> Small</h5>
                      <p>Ideal for viewing only.</p>
                      <p>8.5&quot; by 11&quot;  </p>
                                                                                   
                                                                                            
                  <p> Files size: 
                        
<?php                   

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'k', 'M', 'G', 'T');   

    return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
}

                        $filename = "posters/JPG85by11/".$_REQUEST ["name"] . ".jpg";
						$fsize = filesize($filename);	
						echo formatBytes($fsize, 0);

  
?>
                        
                        </p>                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                                                                                            
                        
                     <a href="poster.php?size=a&name=<?php echo $_REQUEST ["name"]; ?>&title=<?php echo $_REQUEST ["title"]; ?>" class="myButton">Small </a>    
                  </li>
                  <li>
               	    <div class="feature-icon3 icon5"></div>
                   	<h5>Medium</h5>
                   <p>Ideal for viewing and  printing at home.</p>
                     <p>12&quot; by 18&quot;</p>
                        
                        
                        
                          <p> Files size: 
                        
<?php                   
 
                        $filename = "posters/JPG12by18/".$_REQUEST ["name"] . ".jpg";
						$fsize = filesize($filename);	
						echo formatBytes($fsize, 0);

  
?>
                        
                        </p>
                        
                        
                        
                        
                        
                       <a href="poster.php?size=b&name=<?php echo $_REQUEST ["name"]; ?>&title=<?php echo $_REQUEST ["title"]; ?>" class="myButton">Medium </a>    
                    </li>
                  <li>
               	    <div class="feature-icon3 icon6"></div>
               	    <h5>Large</h5>
                      <p>Ideal for large poster printing only.</p>
                     <p>24&quot; by 36&quot; </p>
                       
                        
                        
                        
                                                                           <p> Files size: 
                        
<?php                   

                        $filename = "posters/JPG24by36/".$_REQUEST ["name"] . ".jpg";
						$fsize = filesize($filename);	
						echo formatBytes($fsize, 0);

?>
                        
                        </p>
                        
                        
                       
                        
                        
                        <a href="poster.php?size=c&name=<?php echo $_REQUEST ["name"]; ?>&title=<?php echo $_REQUEST ["title"]; ?>" class="myButton">Large </a>    
                  </li>
                </ul>
            </div>
        </div>   
    
    
     <div class='shareaholic-canvas' data-app='share_buttons' data-app-id='22374844'></div>
    
    
    
    
    
    
    
    
    
 
    
    
    
    
   
<div class="saveinstructions">
 
    
    <?php
		$size = $_REQUEST ["size"]; 
	
		if($size == "a")
		{
		 	echo("<img src=\"posters/JPG85by11/". $_REQUEST ["name"]. ".jpg\" width=\"704\" height=\"1056\" alt=\"". $_REQUEST ["title"]."/>");
    	
		}
   		 if($size == "c")
		 {
			 echo("<img src=\"posters/JPG24by36/". $_REQUEST ["name"]. ".jpg\" width=\"7200\" height=\"10800\" alt=\"". $_REQUEST ["title"]."/>");
    	
		 }
		if($size != "a") 
		{
			if($size != "c") 
			{
			echo("<img src=\"posters/JPG12by18/". $_REQUEST ["name"]. ".jpg\" width=\"1152\" height=\"1728\" alt=\"". $_REQUEST ["title"]."/>");
			}
		}
    
    ?>
    
   
    
    </div>
 <div class="contact" id="contact">
    	<div class="container">
        <br/>
        <br/>
        	<h3 class="text-head">Contact me </h3>
            <p class="box-desc">Please feel free to share your comments or suggestions. I can be reached at the following email address.</p>
            <p class="box-desc"><a href="mailto:harj@panag.ca"><img src="images/email.png" width="200" height="50" alt=""/></a></p>
            	<div class="contact-section"></div>
        </div>
    </div>
    <div class="color-border">
    </div>
    <div class="footer">
        	<div class="container">
            	<div class="infooter">
                <p class="copyright">Copyright &copy; Harjot.com<a class="credit"href="http://www.harjot.com"></a></p>
            	</div>
         <ul class="socialmedia">
                
                <li><a href="https://www.facebook.com/harjot.panag"><i class="icon-facebook"></i></a></li>
                
                <li><a href="http://ca.linkedin.com/in/panag"><i class="icon-linkedin"></i></a></li>
                 
            </ul>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript">		
			 $(document).ready(function() {
				$('#simple-menu').sidr({
				side: 'right'
			});
			});
			$('.responsive-menu-button').sidr({
				name: 'sidr-main',
				source: '#navigation',
				side: 'right'

				});
			$(document).ready(
			function() {
			$("html").niceScroll({cursorborder:"0px solid #fff",cursorwidth:"5px",scrollspeed:"70"});
			}
			);
		</script>
</body>
</html>
