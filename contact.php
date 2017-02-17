<!doctype html>
<html>
<head>
<script type="text/javascript">
jQuery(function($){
   $("#zip").mask("99999?-9999");
});
</script>
 
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Crystals and Bows - Contact</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="../styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
.clearfloat {
}
#po {
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bolder;
	color: #C4F727;
	background-color: #5F27AD;
}
body {
	background-color: #ada49f;
}
</style>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<div class="container">

  <header>
   <nav>
     <ul> 
      <table>
     
    <tr valign="bottom"> <td>
     <li> <img src="logo2.jpg" width="211" height="216" alt=""/></li>
      </td>
    
      <td >
      <li>  <a href="http://www.crystalsandbows.com/"> Home </a></li>
        </td>
      <td >
       <li><a href="http://www.crystalsandbows.com/about.php">About</a></li>
        </td>
      <td >
       <li> <a href="http://www.crystalsandbows.com/contact.php">Contact</a></li>
        </td>
      <td >
      
   <li> <a href="http://www.crystalsandbows.com/Products.php">Products</a>
			<ul>
				<li><a href="http://www.crystalsandbows.com/Weddings.php">Weddings</a></li>
				<li><a href="http://www.crystalsandbows.com/Ornaments.php">Ornaments</a></li>
                   <li><a href="http://www.crystalsandbows.com/Gift.php">Gift Boxes</a></li><li><a href="http://www.crystalsandbows.com/Fashion.php">Fashion Accessories</a></li>    
                    <li><a href="http://www.crystalsandbows.com/QuailEggs.php">Quail Eggs</a>
			</ul>
		</li>
       
        </td>
      
        
      
    </tr>
    </table>
  </ul>
</nav></a>
  </header>
  
  <article class="content">
    <?php
    if ($_POST['formsubmitted']) {
       echo "Please select a hotel by hitting back"; 
           
     
        $to = 'cyrstalsandbows@comcast.net, jmh@adams.net';
        $subject = 'Crystals and bows Order follow up - '.$_POST['firstname'].' '.$_POST['lastname'];
        $msg .= 'First Name: '. $_POST['name']."\r\n";
        $msg .= 'Street: '. $_POST['address']."\r\n";
        $msg .= 'City: '. $_POST['city']."\r\n";
        $msg .= 'State: '. $_POST['state']."\r\n";
        $msg .= 'Zip Code: '. $_POST['zip']."\r\n";
		$msg .= 'Phone: '. $_POST['phone']."\r\n";
        $msg .= 'Email: '. $_POST['email']."\r\n";
		$msg .= 'comments'. $_POST['comments']."\r\n";
       
	    $headers = 'From: '.$_POST['firstname'].' '.$_POST['lastname']. '<'.$_POST['email'].'>' . "\r\n";
        mail($to,$subject,$msg,$headers);
	   
    echo '<strong>Form Submitted</strong><br />';
    echo str_replace("\r\n", '<br />', $msg);
          } #Do this if the form has been submitted
	else { ?>
	
    <h1>Contact US</h1>
    <section>
     <h2>Have questions about our products?</h2>
     <p>Email us or submit the form with the required information.</p>
     <p>We will contact you within 1-2 business days. </p>
     <p>Email : crystalsandbows@comcast.net     </p>
     <p>form: </p>
     <p align="center">REQUIRED INFO*</p>
     <form id="form1" name="form1" method="post">
       <p>
         <label for="name">*Name:</label>
         <input type="text" name="name" id="name">
         *
         <label for="address">Address:</label>
         <input type="text" name="address" id="address">
         *
         <label for="city">City:</label>
         <input type="text" name="city" id="city">
       </p>
       <p>*State
  <label for="state">:</label>
         <input type="text" name="state" id="state">
         *Zip
         <label for="zip">:</label>
         <input type="text" name="zip" id="zip">
       </p>
       <p>Please enter a valid email or phone# :</p>
       <p>
         <label for="email">Email:</label>
         <input type="email" name="email" id="email">
         <label for="phone"> Phone :</label>
         <input type="text" name="phone" id="phone">
       </p>
       <p>
         <label for="comments">Comments:</label>
         <textarea name="comments" id="comments"></textarea>
       </p>
       <p>
         <input type="submit" name="submit" id="submit" value="Submit">
         <input name="formsubmitted" type="hidden" id="formsubmitted" value="true" />
       </p>
     </form><?php } ?>
     <p>&nbsp;</p>
    </section>
    
    
  <!-- end .content --></article>
  
  <footer>
  
  </footer>
<!-- end .container --></div>
</body>
</html>
