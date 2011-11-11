<?php
session_start();
if(!isset($_SESSION['cart']))
$_SESSION['cart']=array();
?>
<html>
<head>
<title>THANK YOU</title>
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
 	<form name="input" action="www.google.com" method="get">
	SEARCH:
	<input type="text" name="value" />
	<input type="submit" value="GO" />
	</form> 
	</b></font></td>
    -->
	</tr>
</table>
<?php
$con = mysql_connect("localhost","root","sahiliitcse");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("shopping_cart", $con);	
for($i = 0; $i < count($_SESSION['cart']); $i++)
{
	$p=$_SESSION['cart'][$i][0];
	$q=$_SESSION['cart'][$i][1];	
	mysql_query("UPDATE product
	SET rating=rating+$q
	WHERE id=$p");

} 
mysql_close($con);
?>





<center><h5 style="color:orange;font-size:30px;">Thank you for shopping with us.Hope you enjoyed.Your order will be delivered with in the next 10 days.</h5></center></br>
<center>
</br>
<center><h6 style="color:orange;font-size:30px;">CONTACT DETAILS</h6></center></br>
<table border="3" Alignment = "Center"  CELLPADDING="2" CELLSPACING="2" background="background17.jpg">
<tr>
<td>NAME</td>
<td><?php echo $_POST['name']?> </td>
</tr>
<tr>
<td>EMAIL</td>
<td><?php echo $_POST['email']?></td>
</tr>
<tr>
<td>TELEPHONE</td>
<td><?php echo $_POST['phone']?></td> 
</tr>
<tr>
<td>STREET ADDRESS</td>
<td><?php echo $_POST['address1']?></td>
</tr>
<tr>
<td>ADDRESS</td>
<td><?php echo $_POST['address2']?></td>
</tr>
<tr>
<td>CITY</td>
<td><?php echo $_POST['city']?></td>
</tr>
<tr>
<td>POSTCODE</td>
<td><?php echo $_POST['postcode']?></td>
</tr>
<tr>
<td>COUNTRY</td>
<td><?php echo $_POST['country']?></td>
</tr>
</table>
</center>
</br>
<center>
</br>
<center><h6 style="color:orange;font-size:30px;">PRODUCT DETAILS</h6></center></br>
<!--PRODUCT DETAILS-->
<table border="3" Alignment = "Center"  CELLPADDING="2" CELLSPACING="2" background="background17.jpg">
<tr>
<td>NAME</td>
<td>CATEGORY</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>PRICE</td>
</tr>
<?php
$con=mysql_connect("localhost","root","sahiliitcse");
mysql_select_db("shopping_cart",$con);
for($i = 0; $i < count($_SESSION['cart']); $i++) {
	$p = $_SESSION['cart'][$i][0];
	$q = $_SESSION['cart'][$i][1];
	$result = mysql_query("SELECT * FROM product where id=$p");
	while($row = mysql_fetch_array($result))
	{ ?>
		<tr>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['category']?></td>
		<td><?php echo $_SESSION['cart'][$i][1]?></td>
		<td>RS.<?php echo $row['price']?></td>
		<td>RS.<?php echo $row['price']*$q?></td>
		</tr>
		<?php $price=$price+$q*$row['price'];?>			
	<?php } 
	} 
	?>
</table>
</center>
</br>
<center>
</br>
<!--BILLING DETAILS-->
<center><h6 style="color:orange;font-size:30px;">BILLING DETAILS</h6></center></br>
<table border="3" Alignment = "Center"  CELLPADDING="2" CELLSPACING="2" background="background17.jpg">
<tr>
<td>TOTAL AMOUNT</td>
<td>RS.<?php echo $price ?></td>
</tr>
</table>
</center>
<?php 
session_destroy();
?>
</br>
<center>
<form action="newhome.php" method="post">
	<input type="submit" name="sahil" value="NEXT ORDER">
	</form>
</center>
</body>
</html>
