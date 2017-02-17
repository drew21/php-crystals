<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Registration Form</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="file:///C|/Users/John/Documents/wiu/php/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="../jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="../jquery.maskedinput.js" type="text/javascript">
</script>
<script src="file:///C|/Users/John/Documents/wiu/php/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($){
   $("#zip").mask("99999?-9999");
});
</script>
 
</head>
 
<body>
 
<div class="container">
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Hotels</a></li>
      <li><a href="#">Schedule</a></li>
      <li><a href="#">Parking</a></li>
      <li><a href="#">Register Now</a></li>
    </ul>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
  <?php
    if ($_POST['formsubmitted']) {
       if (($_POST['hotelpreference1'] =='') AND ($_POST['hotelpreference2'] =='')
          AND ($_POST['hotelpreference3'] =='')) { echo "Please select a hotel by hitting back"; }
           
           
          else {
     
        $to = 'AJ-Haubrich@wiu.edu';
        $subject = 'Conference Registration Webform - '.$_POST['firstname'].' '.$_POST['lastname'];
        $msg = 'Title: '. $_POST['title']."\r\n";
        $msg .= 'First Name: '. $_POST['firstname']."\r\n";
        $msg .= 'Last Name: '. $_POST['lastname']."\r\n\r\n";
        $msg .= 'Street: '. $_POST['street']."\r\n";
        $msg .= 'City: '. $_POST['city']."\r\n";
        $msg .= 'State: '. $_POST['state']."\r\n";
        $msg .= 'Zip Code: '. $_POST['zip']."\r\n";
        $msg .= 'Email: '. $_POST['email']."\r\n";
        $msg .= 'Payment Type: '. $_POST['paymenttype']."\r\n";
        $msg .= 'Hotel Preference: '."\r\n";
        if ($_POST['hotelpreference1'] !='')
            $msg .= $_POST['hotelpreference1'] . "\r\n";
        if ($_POST['hotelpreference2'] !='')
            $msg .= $_POST['hotelpreference2'] . "\r\n";
        if ($_POST['hotelpreference3'] !='')
            $msg .= $_POST['hotelpreference3'] . "\r\n";
             
        $headers = 'From: '.$_POST['firstname'].' '.$_POST['lastname']. '<'.$_POST['email'].'>' . "\r\n";
        mail($to,$subject,$msg,$headers);
             
    echo '<strong>Form Submitted</strong><br />';
    echo str_replace("\r\n", '<br />', $msg);
          }
    } //Do this if the form has been submitted
    else { ?>
   
    <h1>Conference Registration Form</h1>
    <p>Please complete the following form to register for our conference.</p>
    <form id="form1" name="form1" method="post" action="">
      <p>
        <label for="title">Title:</label>
        <select name="title" id="title">
          <option value="Select One" selected="selected">Select One...</option>
          <option value="Dr.">Dr.</option>
          <option value="Mr.">Mr.</option>
          <option value="Mrs.">Mrs.</option>
          <option value="Ms.">Ms.</option>
          <option value="None">None</option>
        </select>
        <br />
        <label for="firstname">First Name:</label>
        <span id="checkfirstname">
        <input name="firstname" type="text" id="firstname" size="15" maxlength="20" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span><br />
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" />
      </p>
      <p><br />
        <label for="street">Street:</label>
        <input name="street" type="text" id="street" size="50" maxlength="120" />
        <br />
        <label for="city">City:</label>
        <input type="text" name="city" id="city" />
        <label for="state">State:</label>
        <select name="state" id="state"><option value="" selected="selected">Select a State</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
           
        </select>
        <label for="zip">Zip Code:</label>
        <input name="zip" type="text" id="zip" size="10" maxlength="10" />
        <br />
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />
      </p><div style="width:400px">
      <div style="float:left"><p>Payment Type:<br />
<label>
          <input name="paymenttype" type="radio" id="paymenttype_0" value="Bill Me" checked="checked" />
          Bill Me</label>
        <br />
        <label>
          <input type="radio" name="paymenttype" value="PO" id="paymenttype_1" />
          Purchase Order</label>
        <br />
        <label>
          <input type="radio" name="paymenttype" value="CC" id="paymenttype_2" />
          Credit Card</label>
      </p></div>
      <div style="float:right" ><p>Suitable Hotel:<br />
<label>
          <input type="checkbox" name="hotelpreference1" value="Ramada" id="hotelpreference_0" />
          Ramada</label>
        <br />
        <label>
<input type="checkbox" name="hotelpreference2" value="Marriott" id="hotelpreference_1" />
Marriott</label>
        <br />
        <label>
          <input type="checkbox" name="hotelpreference3" value="Motel 8" id="hotelpreference_2" />
          Motel 8<br />
          <br />
        </label>
        
      </p></div>
      
      </div>
       
      <p>&nbsp;</p>
            <input type="submit" name="button" id="button" value="Submit" />
            <input name="formsubmitted" type="hidden" id="formsubmitted" value="true" />
            <p>
               
      </p>
    </form> <?php } ?>
    <p>&nbsp;</p>
    <h2>&nbsp;</h2>
    <!-- end .content --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("checkfirstname", "none", {minChars:2, validateOn:["blur"]});
</script>
</body>
</html>