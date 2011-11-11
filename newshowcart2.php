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
<a href="http://www..com"><img border="3" src="adv1.gif" width="200" height="245">
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


<center>
<center><h5 style="color:orange;font-size:30px;">SELECTED ITEMS WILL BE REMOVED FROM THE LIST</h5></center></br>
</center>
</br>

<center><td style=font-size:125px><a href="newshowcart.php"><font color="cyan"><img src="continue.jpg"></font></a></td>
<!-- 	
	<form name="input" action="newshowcart.php" method="get">
	SEARCH:
	<input type="hidden" name="value" />
	<input type="submit" value="GO" />
	</form>
--> 
<table >
<tr>
	<td width="80%">
	<?php
	$con = mysql_connect("localhost","root","sahiliitcse");
	mysql_select_db("shopping_cart", $con); ?>
	<?php
	$_sahil=array();
$p=$_POST['drop'];
if(isset($_POST['drop_product_id']))
{
	for($i = 0; $i < count($_SESSION['cart']); $i++) 
	{
		if($_SESSION['cart'][$i][0]==$_POST['drop_product_id'])
		{
			if($_SESSION['cart'][$i][1]-$p > 0)
			{
				$_SESSION['cart'][$i][1]=$_SESSION['cart'][$i][1]-$p;
				$_sahil[]=$_SESSION['cart'][$i];
			}
			//unset($_SESSION['cart'][$i]);	
			//$_SESSION['cart']=array_values($_SESSION['cart']);
		}	
		else
		$_sahil[]=$_SESSION['cart'][$i];
	}


}
$_SESSION['cart']=$_sahil;?>
	</td>
</tr>		
</table>
</body>
</html>
