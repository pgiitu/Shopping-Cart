<?php
session_start();
?>
<html>
<head>
<title>SHOPPING DETAILS</title>
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
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="green">
  <tr>
    <td width="100%"><font color="lightvoilet" face="Verdena" size="5" align="left"><i>
      <a href="newhome.php" color="black"><img src="home.jpg"></a></i></font></td>
    <td width="100%"><font color="lightvoilet" face="Comic Sans" size="5" align="right"><i>
      <a href="newshowcart.php" color="black"><img src="viewcart.jpg"></a></i></font></td>
      </tr>
 </table>
</br>
<table cellspacing="0">
<tr>
<td>
<?php include("category.php"); ?>
</td>
<td>
<a href="http://www..com"><img border="3" src="adv1.gif" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv2.jpg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv3.jpeg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv6.jpg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv5.jpg" width="200" height="245">
</td>
</tr>
</table>

<?php 
$con=mysql_connect("localhost","root","sahiliitcse");
if (!$con)
{
     die('Could not connect: ' . mysql_error());
 }
mysql_select_db("shopping_cart", $con);	
?>
<center>
<table border="3" Alignment = "Center"  CELLPADDING="2" CELLSPACING="2" background="background17.jpg">
<th>NAME</th>
<th>CATEGORY</th>
<th>QUANTITY</th>
<th>UNIT PRICE</th>
<th>PRICE</th>
<!--
<tr>
<td>
NAME
</td>
<td>
CATEGORY
</td>
<td>
QUANTITY
</td>
<td>
PRICE
</td>
</tr>
-->
<?php
	$price=0;
	for($i = 0; $i < count($_SESSION['cart']); $i++) {
	$p = $_SESSION['cart'][$i][0];
	$q = $_SESSION['cart'][$i][1];
	$result = mysql_query("SELECT * FROM product where id=$p");
	while($row = mysql_fetch_array($result))
	{ ?>
		<tr>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['category']?></td>
		<td><?php echo $q ?></td>
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
<table border="3" Alignment = "Center"  CELLPADDING="2" CELLSPACING="2" background="background17.jpg">
<tr>
<th>TOTAL AMOUNT</th>
<td>RS.<?php echo $price ?></td>
</tr>
</table>
</center>
</br>
<center>
<form action="newbill.php" method="post" />
	<input type="hidden" name="bill" value="<?php echo $price ?>"/>
	<input type="submit" name="sahil" value="Proceed To Payment Counter" />
</form>
</center>
</body>
</html>
