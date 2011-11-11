<?php
session_start();
?>
<html>
<head>
<title>SHOPPING CART</title>
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
<?php 
if(isset($dropall))
{
destroy_session();
start_session();
}
?>
<?php if(count($_SESSION['cart'])==0)
{
echo "<center><font size=20px>THE CART IS EMPTY</center>";
}
else
{?> 
<table cellspacing="0">
<tr>
<td>
<?php include("category.php"); ?>
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
<a href="http://www..com"><img border="3" src="adv5.jpg" width="200" height="245">
</td>
</tr>
</table>
<center><h5 style="color:orange;font-size:30px;">YOUR CART</h5></center></br>

	<?php
	$con = mysql_connect("localhost","root","sahiliitcse");
	mysql_select_db("shopping_cart", $con); ?>
	<center>
	<table border="3" Alignment = "Center"  CELLPADDING="2" CELLSPACING="2" background="background17.jpg">
<!--	
	<tr>
	<td>NAME
	</td>
	<td>QUANTITY
	</td>
	<td>UNIT PRICE
	</td>
	<td>PRICE
	</td>
	<td><center>OPTION</center>	
	</td>
	</tr>
-->	
	<th>NAME</th>
	<th>QUANTITY</th>
	<th>UNIT PRICE</th>
	<th>PRICE</th>
	<th>OPTION</th>
	<?php
	for($i = 0; $i < count($_SESSION['cart']); $i++) {
	$p = $_SESSION['cart'][$i][0];
	$q = $_SESSION['cart'][$i][1];
	//echo $q;
	$result = mysql_query("SELECT * FROM product where id=$p");
	while($row = mysql_fetch_array($result))
	{ ?>
		<tr>
		<td><?php echo $row['name']?></td>
		<td><?php echo $_SESSION['cart'][$i][1]?></td>
		<td><?php echo $row['price']?></td>
		<td><?php echo $row['price']*$q?></td>
		<td>			
			<form action="newshowcart2.php" method="post">			
			    <input type="hidden" name="drop_product_id" value="<?php echo $row['id']; ?>"/>
			    <input type="submit" name="action" value="DROP"/>
			 <select name="drop">
			    <? $t=0;?>
			    <?php while($t!=$q){?>
			    <option value="<?php echo $q-$t ?>"><?php echo $q-$t?></option>
			    <?php $t=$t+1;
			    }
		?>
		</td>
		</form>
		</tr>
	
	<?php } ?>
	<?php } ?>
		</table>
	</center>
<center>
<form action="newshowcart2.php" methood="post">
	<input type="hidden" name="dropall" value="sahil"/>
	<input type="submit" name="EMPTY" value="DROP ALL THE PRODUCTS"/>
</form>
<form action="newcheckout.php" methood="post">
	<input type="hidden" name="checkout" value="sahil" />
	<input type="submit" name="checkout" value="CHECKOUT"/>
	</form>
<?php } ?>
</center>
</body>
</html>

