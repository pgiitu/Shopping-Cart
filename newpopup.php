<?php
session_start();
?>
<html>
<head>
<title>SAHIL BHAGAT</title>
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
<a href="http://www..com"><img border="3" src="adv6.jpg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv2.jpg" width="200" height="245">
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

<table width="1260" border="3">
<tr>
	<td width="100%">			
	<center><h5 style="color:orange;font-size:30px;">The item has been successfully added to the cart.Do you want to continue shopping?</h5></center></br>
	<center>
	<table>
	<tr>
	<td align="left">
	<?php
	$con = mysql_connect("localhost","root","sahiliitcse");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("shopping_cart", $con);
	$result = mysql_query("SELECT * FROM product where id='$_POST[id]' ");
	$row = mysql_fetch_array($result);
	$cat=$row['category'];
	$l=0;
	$t=0;
	if((isset($_SESSION['cart']))&&(isset($_POST['id'])))		
		for($i = 0; $i < count($_SESSION['cart']); $i++) {
			if($_SESSION['cart'][$i][0]==$_POST['id'])
			{
				$_SESSION['cart'][$i][1]=$_SESSION['cart'][$i][1]+$_POST['quantity'];
				$t=1;
			}
		}
		if($l==$t)
		{
		$_SESSION['cart'][]=array( $_POST['id'],$_POST['quantity']);
		}	
	//mysql_query("INSERT INTO cart (name,description,id,category,price,thumbnail,subcategory,image)
	//VALUES ('$row[name]','$row[description]','$row[id]','$row[category]','$row[price]','$row[thumbnail]','$row[subcategory]','$row[image]')");
	mysql_close($con);
	?>
	
	<?php //echo"<td style=font-size:25px ><a href="."newproducts.php?var=".$cat."><font color="."cyan".">"."YES"."</font></a></td>"; ?>
	<td style=font-size:25px ><a href="newproducts.php?var=<?php echo $cat?>"><img src="yes.jpg"></a></td>	
	<hspace=70>
	</td>
	<td align="right">
	<?php //echo"<td style=font-size:25px ><a href="."newshowcart.php?var=".$cat."><font color="."cyan".">"."NO(VIEW CART)"."</font></a></td>"; ?>	
	<td style=font-size:25px ><a href="newshowcart.php?var=<?php echo $cat?>"><img src="no.jpg"></a></td>	
	</td>	
	</tr>	
	</table>	
	</td>
	
</tr>
</table>
</center>
</body>
</html>
