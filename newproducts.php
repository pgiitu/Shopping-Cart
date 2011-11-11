<?php
session_start();
?>
<html>
<head>
<title><?php echo $_GET['var']?></title>
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
 	<form name="input" action="newproducts.php" method="get">
	SEARCH:
	<input type="text" name="value" />
	<input type="submit" value="GO" name="search2" />
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
<a href="http://www..com"><img border="3" src="adv6.jpg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv4.jpeg" width="200" height="245">
</td>
<td>
<a href="http://www..com"><img border="3" src="adv3.jpeg" width="200" height="245">
</td>
</tr>
</table>

<table width="1260" border="3">
<tr>
	<td width="100%"><?php	
	if(isset($_GET['search2']))
{?>
		<table width="100%">		
		<?php
		$con = mysql_connect("localhost","root","sahiliitcse");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("shopping_cart", $con);	
		$var=$_GET['value'];
		$result = mysql_query(" SELECT * FROM product where (category LIKE '%$var%') OR (description LIKE '%$var%') OR (name LIKE '%$var%') ");
		$num_rows = mysql_num_rows($result);		
		$i=0;
	if(($num_rows>0) && ($var!=""))
	{		
		while(($row = mysql_fetch_array($result)))
		  {
				if($i%3==0)
				{	?>
					<tr>
						<td>
				<?php $path=$row['thumbnail'];?>
				<img border="3" src=<?php echo $path ;?> width="200" height="120" /><br>			
				<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['name'] ;?></p1><br>				
				<!--<p1 style="text-align:center;color:cyan;font-size:15px;"><?php echo $row['description'] ;?></p1><br>-->	
				<p1 style="text-align:center;color:white;font-size:30px;"><?php echo $row['price'] ;?></p1><br>	
				<form action="newdetails.php" method="post">			
				    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"/>
				    <input type="submit" name="action" value="Details"/>
				</form>
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
					</td><hspace=5>
			<?php $i=$i+1;			
				}
			 else
				{
				?>
				<td>
					<?php $path=$row['thumbnail'];?>
					<img border="3" src=<?php echo $path ;?> width="200" height="120" /><br>			
					<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['name'] ;?></p1><br>					
					<!--<p1 style="text-align:center;color:cyan;font-size:15px;"><?php echo $row['description'] ;?></p1><br>-->	
					<p1 style="text-align:center;color:white;font-size:30px;"><?php echo $row['price'] ;?></p1><br>	
					<form action="newdetails.php" method="post">			
					    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"/>
					    <input type="submit" name="action" value="Details"/>
					</form>
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
					</td><hspace=5>
				<?php
				if($i%3==2)
				{?>
				</tr><?php
				}
				$i=$i+1;
			}
		}
	}
	else
	{
	//<center><h5 style="color:orange;font-size:30px;">SORRY YOUR SEARCH DOES NOT MATCH ANY RESULTS ! SEARCH AGAIN !</h5></center>
	echo "<center><h5 style="."color:orange;font-size:30px;".">"."SORRY YOUR SEARCH DOES NOT MATCH ANY RESULTS ! SEARCH AGAIN !</h5></center>";
	}		
		mysql_close($con);
		
 }	
else
{
	
	if(isset($_GET['search']))
	{ ?>
		<table width="100%">		
		<?php
		$con = mysql_connect("localhost","root","sahiliitcse");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("shopping_cart", $con);	
		$var=$_GET['search_string'];
		$result = mysql_query(" SELECT * FROM product where (category LIKE '%$var%') OR (description LIKE '%$var%') OR (name LIKE '%$var%') ");
		$i=0;
		$num_rows = mysql_num_rows($result);		
	if(($num_rows>0) && ($var!=""))
	{		

		while($row = mysql_fetch_array($result))
		  {
				if($i%3==0)
				{	?>
					<tr>
						<td>
				<?php $path=$row['thumbnail'];?>
				<img border="3" src=<?php echo $path ;?> width="200" height="120" /><br>			
				<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['name'] ;?></p1><br>				
				<!--<p1 style="text-align:center;color:cyan;font-size:15px;"><?php echo $row['description'] ;?></p1><br>-->	
				<p1 style="text-align:center;color:white;font-size:30px;"><?php echo $row['price'] ;?></p1><br>	
				<form action="newdetails.php" method="post">			
				    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"/>
				    <input type="submit" name="action" value="Details"/>
				</form>
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
					</td><hspace=5>
			<?php $i=$i+1;			
				}
			 else
				{
				?>
				<td>
					<?php $path=$row['thumbnail'];?>
					<img border="3" src=<?php echo $path ;?> width="200" height="120" /><br>			
					<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['name'] ;?></p1><br>					
					<!--<p1 style="text-align:center;color:cyan;font-size:15px;"><?php echo $row['description'] ;?></p1><br>-->	
					<p1 style="text-align:center;color:white;font-size:30px;"><?php echo $row['price'] ;?></p1><br>	
					<form action="newdetails.php" method="post">			
					    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"/>
					    <input type="submit" name="action" value="Details"/>
					</form>
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
					</td><hspace=5>
				<?php
				if($i%3==2)
				{?>
				</tr><?php
				}
				$i=$i+1;
			}
		}
	}
	else{
	//<center><h5 style="color:orange;font-size:30px;">SORRY YOUR SEARCH DOES NOT MATCH ANY RESULTS ! SEARCH AGAIN !</h5></center>
	echo "<center><h5 style="."color:orange;font-size:30px;".">"."SORRY YOUR SEARCH DOES NOT MATCH ANY RESULTS ! SEARCH AGAIN !</h5></center>";
		}		
		mysql_close($con);
		?>	
		</table>
		<?php	
	}		
	else
	{	?>	
		<table width="100%">		
		<?php
		$con = mysql_connect("localhost","root","sahiliitcse");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("shopping_cart", $con);	
		$result = mysql_query("SELECT * FROM product where category='$_GET[var]' ");
		$i=0;
		while($row = mysql_fetch_array($result))
		  {
				if($i%3==0)
				{	?>
					<tr>
						<td>
			<?php $path=$row['thumbnail'];?>
			<img border="3" src=<?php echo $path ;?> width="200" height="120" /><br>			
			<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['name'] ;?></p1><br>				
			<!--<p1 style="text-align:center;color:cyan;font-size:15px;"><?php echo $row['description'] ;?></p1><br>-->	
			<p1 style="text-align:center;color:white;font-size:30px;"><?php echo $row['price'] ;?></p1><br>	
			<form action="newdetails.php" method="post">			
			    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"/>
			    <input type="submit" name="action" value="Details"/>
			</form>
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
				</td><hspace=5>
			<?php $i=$i+1;			
				}
			 else
				{
				?>
				<td>
			<?php $path=$row['thumbnail'];?>
			<img border="3" src=<?php echo $path ;?> width="200" height="120" /><br>			
			<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['name'] ;?></p1><br>				
			<!--<p1 style="text-align:center;color:white;font-size:15px;"><?php echo $row['description'] ;?></p1><br>-->	
			<p1 style="text-align:center;color:white;font-size:30px;"><?php echo $row['price'] ;?></p1><br>	
			<form action="newdetails.php" method="post">			
			    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"/>
			    <input type="submit" name="action" value="Details"/>
			</form>
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
				</td><hspace=5>
			<?php
				if($i%3==2)
				{?>
				</tr><?php
				}
				$i=$i+1;
				}
		}
		mysql_close($con);
		?>	
		</table>
	<?php } 
}?>
	</td>
</tr>
</table>
</body>
</html>
