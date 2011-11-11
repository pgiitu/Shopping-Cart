<?php
session_start();
if(!isset($_SESSION['cart']))
$_SESSION['cart']=array();
?>
<html>
<head>
<title>SHIPPING DETAILS</title>
<script language="JavaScript">
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}
function validate_numeric(field,alerttxt)
{
// with(field)
//{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;
   var i=0;
   //alert("the rock is back");
   for (i = 0; i < field.length && IsNumber == true; i++) 
      { 
	alert("the rock is back");
      Char = field.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
      	{
		IsNumber=false;
		alert(alerttxt);	         
		return false;
        }
      }
//alert("the rock is back");
   return true;
 //}
}  
function validate_alphanumeric(field,alerttxt)
{
 with(field)
 {
   var ValidChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890.";
   var IsNumber=true;
   var Char;

   for (i = 0; i < field.length && IsNumber == true; i++) 
      { 
      Char = field.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
	IsNumber=false;
	alert(alerttxt);	         
	return false;
         }
      }
   return true;
 }
}  
function validate_alphabets(field,alerttxt)
{
 with(field)
{
   var ValidChars = " abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
   var IsNumber=true;
   var Char;

   for (i = 0; (i < field.length) && (IsNumber == true); i++) 
      { 
      Char = field.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
	IsNumber=false;
	alert(alerttxt);	         
	return false;
         }
      }
   return true;
 }
}  
function validate_pin(field,alerttext)
{
with(field)
{
if(field.length<16)
{alert(alerttext);
return false;}
else
{return true;}
}
}
function validate_form(thisform)
{
with (thisform)
  {

  if(validate_required(name,"name must be filled out!")==false)
  {name.focus();return false;}
  if(validate_alphabets(name,"only alphabets are allowed!")==false)
  {name.focus();return false;}
  if(validate_required(phone,"phone number must be filled out!")==false)
  {phone.focus();return false;}
  if(validate_required(address1,"Street address field must be filled out!")==false)
  {address1.focus();return false;}
  if(validate_required(address2,"address field must be filled out!")==false)
  {address2.focus();return false;}
  if(validate_required(city,"city must be filled out!")==false)
  {city.focus();return false;}
  if(validate_required(postcode,"postal code must be filled out!")==false)
  {postcode.focus();return false;}
  if(validate_required(country,"country must be filled out!")==false)
  {country.focus();return false;}
  if(validate_required(pin,"pin number must be filled out!")==false)
  {pin.focus();return false;} 
  if(validate_required(card_no,"card number must be filled out!")==false)
  {card_no.focus();return false;}
  if(validate_numeric(card_no,"card number must only contain numbers!")==false)
  {card_no.focus();return false;}
  if(validate_email(email,"Not a valid e-mail address!")==false)
  {email.focus();return false;}
  if(validate_pin(card_no,"enter a 16 digit credit card number!")==false)
  {card_no.focus();return false;}
  }
}

</script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0" background="background24.jpg" height=" " width=" ">
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="lightvoilet">
  <tr>
<img border="3" src="electronics.jpg" width="200" height="120" />
<img border="3" src="cosmetics.jpg" width="200" height="120" />
<img border="3" src="books.gif" width="200" height="120" />
<img border="3" src="automobiles.jpg" width="190" height="120" />
<img border="3" src="sports.jpg" width="190" height="120" />
<img border="3" src="computers.jpg" width="190" height="120" />
  </tr>
	<tr>
	<hr />
<MARQUEE WIDTH=100% BEHAVIOR=ALTERNATE BGColor=black><h1 style="text-align:center;color:red;font-size:50px;background-image:background3.jpg"><i>SHOPPING.COM<i></h1></MARQUEE> 
<!--<h1 style="text-align:center;color:red;font-size:50px;background-image:background3.jpg"><i>SHOPPING.COM<i></h1>-->
<hr />
</tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="lightvoilet">
  <tr>
    <td width="100%"><img border="0" src="im2.jpg" width="200" height="66"></td>
    <!--
    <td width="100%"><font color="#B8C0F0" face="Verdena" size="3"><b>
 	<form name="input" action="newproducts.php" method="get">
	SEARCH:
	<input type="text" name="value" />
	<input type="submit" value="GO" />
	</form> 
	</b></font></td>
    -->
	</tr>
</table>
<!--
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="green">
  <tr>
    <td width="100%"><font color="lightvoilet" face="Verdena" size="5" align="left"><i>
      <a href="newhome.php" color="black"><img src="home.jpg"></a></i></font></td>
    <td width="100%"><font color="lightvoilet" face="Comic Sans" size="5" align="right"><i>
      <a href="newshowcart.php" color="black"><img src="viewcart.jpg"></a></i></font></td>
      </tr>
 </table>
</br>
-->
<!--
<table border="6" background="http://localhost/images/background2.jpg" 
Alignment = "Center" width="50" height="70" CELLPADDING="2" CELLSPACING="2" leftmargin="10">
<caption style="text-align:center;color:red;font-size:20px">CATEGORIES</caption>-->
<table cellspacing="0">
<tr>
<td>
<?php //include("category.php"); ?>
<a href="http://www..com"><img border="3" src="adv5.jpg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv1.gif" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv6.jpg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv3.jpeg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv4.jpeg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv2.jpg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv6.jpg" width="200" height="245">
</td>
</tr>
</table>

		<?php //include("category.php");
		$price=$_POST['bill'];
		 ?>		
	<center><h5 style="color:orange;font-size:30px;">Please Enter Your Details</h5></center></br>
	<form action="newfinal.php" method="post" onsubmit="return validate_form(this)">  
	<fieldset>
	<font color="white">  
	<legend>Contact Details</legend>  
	<ol>  
	<li>  
	NAME:<input id="name" name="name" type="text" />  
	</li>  
	<li>  
	EMAIL ADDRESS:<input id="email" name="email"  type="text" />  
	</li>  
	<li>  
	TELEPHONE<input id="phone" name="phone"  type="text" />  
	</li>  
	</ol>  
	</fieldset>  
	<fieldset>  
	<legend>Delivery Address</legend>  
	<ol>  
	<li>  
	STREET ADDRESS:<input id="address1" name="address1"   
	type="text" />  
	</li>  
	<li>  
	ADDRESS:<input id="address2" name="address2" 
	type="text" />  
	</li>  
	<li>  
	CITY:<input id="city" name="city"   
	type="text" />  
	</li>  
	<li>  
	POSTCODE:<input id="postcode" name="postcode"  
	 type="text" />  
	</li>  
	 
	<li>  
	COUNTRY:<input id="country" name="country"  
	type="text" />  
	</li>  
	</ol>  
	</fieldset>  
	<fieldset>  
	<legend>Payment Details</legend>  
	<ol>  
	<li> 
	CHOOSE YOUR BANK:	
	<select> 
	<option>State bank of india</option>
	<option>Allahbad Bank</option>
	<option>Punjab National Bank</option>
	</select> 
	</li>  
	<li>  
	CREDIT CARD NO:<input id="card_no" name="card_no" type="text" />  
	</li>  
	<li>  
	PIN:<input id="pin" name="pin" type="password" />  
	</li>  
	</ol>  
	</fieldset>  
	<input type="hidden" name="price" value="<?php echo $price ?>">
	<center><input class="submit" type="submit"  name="entered"
	value="Make Payment" /></center></font>  
	</fieldset>
	</form>

</body>
</html>
