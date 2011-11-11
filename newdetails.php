<?php
session_start();
if(!isset($_SESSION['cart']))
$_SESSION['cart']=array();
?>
<html>
<head>
<title>PRODUCT DETAILS</title>
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
    <td width="100%"><font color="#B8C0F0" face="Verdena" size="3"><b>
 	<form name="input" action="www.google.com" method="get">
	SEARCH:
	<input type="text" name="value" />
	<input type="submit" value="GO" />
	</form> 
	</b></font></td>
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
<!--
<table border="6" background="http://localhost/images/background2.jpg" 
Alignment = "Center" width="50" height="70" CELLPADDING="2" CELLSPACING="2" leftmargin="10">
<caption style="text-align:center;color:red;font-size:20px">CATEGORIES</caption>-->
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
<table width="1260" border="3">
<tr>
	<td width="100%" align="center">		
		<?php
		$con = mysql_connect("localhost","root","sahiliitcse");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("shopping_cart", $con);	
		$p=$_POST['product_id'];
		//echo $_POST['product_id'];
		//echo $p;	
		//$r=1;	
		$result = mysql_query("SELECT * FROM product where id=$p");
		while($row=mysql_fetch_array($result))
		{				
			//echo $r;
			//echo $row['id'];
			$path=$row['image'];
			 ?>
			<img border="3" src= <?php echo $path;?> width="500" height="320" /><br>			
			<p1 style="text-align:center;color:white;font-size:20px;"><?php echo $row['name'] ;?></p1><br>				
			<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['description'] ;?></p1><br>	
			<p1 style="text-align:center;color:white;font-size:30px;"><?php echo $row['price'] ;?></p1><br>	
			<form action="newpopup.php" width = 450, height = 450 method="post">	
			  <div>
			    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
			    <input type="submit" name="action" value="ADD TO CART"/>
			    <select name="quantity">
			    <option value=1>1</option>
			    <option value=2>2</option>
			    <option value=3>3</option>
			    <option value=4>4</option>
			    <option value=5>5</option>
			    <option value=6>6</option>
			    <option value=7>7</option>
			    <option value=8>8</option>
			    <option value=9>9</option>
			    <option value=10>10</option>

			    </select> 
			  </div>
			</form>
	<?php	}?>
	</td>
</tr>
</table>
</body>
</html>
