
<?php
error_reporting(0);
?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Display feeds</title>
    <style type="text/css">
	body{
	font-family:"Trebuchet MS";
	font-size:12px;
	}
	a{
	color:#333333;
	text-decoration:none;
	}
	a:hover{ color:#0066CC; text-decoration:underline; font-weight:bold}
	hr{
	color: #dedede;
background-color: #dedede;
height: 1px;	}
       .vas{
	   float:left;
		width:270px;
		
		padding:10px;
	   }
	
      .title-head {
            
        font-size:18px;
        font-weight:bold;
        text-align:left;
        background-color:#006699;
		color:#FFFFFF;
	   
        padding:5px;
       
      }
      .feeds-links {
        
       
        text-align:left;
		
        padding:5px;
        border:1px solid #dedede;
      }
       
       .footer {
	   font-size:11px;
	   font-weight:bold;
	   font-family:Verdana, Arial, Helvetica, sans-serif;	  
        }
    </style>
  </head>
  <body style="height:80px; background:url(http://lh6.ggpht.com/_N9kpbq3FL74/SRsQfDF2nII/AAAAAAAAAqE/qP1kEU5oMTo/logochange.png) top no-repeat">
  <div style=" height:15px; padding-top:60px; text-align:center;padding-bottom:10px; color:#000; font-size:16px; "><b>.blogspot.com</b></div>
<div style="height:20px">

<span style="float:right; font-size:16px"><img src="http://lh4.ggpht.com/srinivas.tamada/SMjzHjv978I/AAAAAAAAAT0/6vh8WXZhqdE/feed-ico.gif" /><a href="http://feeds2.feedburner.com/9lesson">Subscribe to my feeds</a></span></div>
  <div>
  <?php
  include('rssclass.php'); 
  
   $feedlist = new rss('http://vnexpress.net/rss/tin-moi-nhat.rss');
  echo $feedlist->display(2,"Tin moi nhat");
  
?> 

    </div>
	
     
	
  </body>
</html>