<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chantier pagodes Eurotunnel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="menu_nav">
        <ul>
		
          <li class="active"><a href="Accueil.html"><span>INDUSTEAM Nord</span></a></li>
          <li><a href="Page1.html"><span>INDUSTEAM France</span></a></li>
          <li><a href="Page2.html"><span>ERIEM</span></a></li>
        
          <li><a href="Page3.html"><span>INDUSTEAM Luxembourg</span></a></li>
        </ul>
      </div>
<?php

  $to = "pngouala@industeam.net";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>
</body>
</html>

