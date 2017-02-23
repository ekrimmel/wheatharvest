<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/wheat.css" type="text/css"/>
<title>wheat hARvesT :: Upcoming Events</title>
</head>

<body>

<div id="container">

	<div id="header">
	<a href="index.html"><img src="/images/header2.png" alt="" width="627" height="101"/></a>
	</div>
  
	<div id="nav">
  	<ul>
  		<li><b><a href="events_c.html">events</a></b></li>
    	<li><a href="findwheat.html">find wheat</a></li>
    	<li><a href="publicity.html">publicity</a></li>
    	<li><a href="support.php">support</a></li>
    	<li><a href="bio.html">bio</a></li>
    	<li><a href="otherprojects.html">other projects</a></li>
  	</ul>
  	</div>
  
	<div id="main">
    
	<div id="subnav">
 	<ul>
 		<li><a href="events_c.html">Current</a></li>
 		<li><b><a href="events_u.php">Upcoming</a></b></li>
 		<li><a href="events_p.html">Past</a></li>
 	</ul>
 	</div>
    
		<br /><br /><span><img src="/images/kidssift.jpg" height="301" width="225"/><br />Students sift wheat at a presentation<br />hosted by the Kensington Library</span>
        <br /><p>Please add yourself to the mailing list for information about wheat hARvesT's next event, <i>Demeter's Chariot</i> (summer 2013):</p><br /><br />
        <?php
function check($email) 
  {
	if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
	else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {
	$mailcheck = check($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "<i>Invalid e-mail address; please press the back button on your browser to try again.</i>";
    }
  else
	{	  
    $name = $_REQUEST['name'] ;
  	$email = $_REQUEST['email'] ;
  	mail( "info@wheatharvest.org", "Subject: E-Mail List",
  	$name, "From: $email" );
  	echo "<i>Thank you for joining our mailing list!</i";
  	}
  }
else
  {
  echo "<form method='post' action='support.php'>
  <b>Name:</b> <input name='name' type='text' />
  <b>E-mail:</b> <input name='email' type='text' /><br /><br>
  <input type='submit' />
  </form>";
  }
?>
    	<!--<li>Come try your hand grain processing at the Art Produce Garden (Herman St. &amp; University Ave.) during the North Park Farmers Market, <b>Thursdays 3-6pm</b> through <b>October 21st</b></li>
        <br />
    	<li>School, library and community center presentations - <a href="mailto:dkrimmel@gmail.com">Contact David</a> for information if you would like to schedule a wheat hARvesT presentation for your students</li>-->
  	</div>
 
	<div id="footer">
    <a href="mailto:david@wheatharvest.org">david@wheatharvest.org</a>
  	</div>

</div>  
</body>
</html>
