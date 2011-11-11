		<table border="6" background="background5.jpg"
		Alignment = "Center" width="50" height="70" CELLPADDING="2" CELLSPACING="2">
		<th style="text-align:center;color:blue;font-size:30px">Categories</th>		
		<!--<caption style="text-align:center;color:red;font-size:30px">Categories</caption>-->
		<?php
		$con = mysql_connect("localhost","root","sahiliitcse");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db("shopping_cart", $con);
		$result = mysql_query("SELECT * FROM categories");
		
		while($row = mysql_fetch_array($result))
		  {
			
			echo"<tr>";
		 	echo"<td style=font-size:25px ><a href="."newproducts.php?var=".$row['cat']."><font color="."cyan".">".$row['cat']."</font></a></td>";		
			echo"</tr>";	
		 
		
		  }
		mysql_close($con);
		?> 
</table>

