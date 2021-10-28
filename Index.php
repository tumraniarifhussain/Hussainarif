<?php

$CN = mysqli_connect("LocalHost","root","","ShoppingDB");

if(isset($_GET['A']))
{
	$ID = $_GET['A'];
	$RS = $_GET['B'];
	$IP = $_SERVER['REMOTE_ADDR'];	
	
     mysqli_query($CN,"Insert into tblCart values ('','$ID','$RS','$IP')");
		  
 echo "<meta http-equiv='Refresh'; Content='0; URL=Index.php'>";
}
?>
<html>
<body>
<h2 align=center> Hyperstar Shopping Website </h2>
<hr />

<table border=1 cellpadding=10 cellspacing=10 align=Center>
<tr bgcolor=LightGreen>
<td>Products</td>
<?php
$IP = $_SERVER['REMOTE_ADDR'];
	 
$AB = mysqli_query($CN,"Select PID from tblCart Where IPAdres='$IP'");
$TR = mysqli_num_rows($AB);
	  
echo "<th>$TR</th>";
?>
<td><a href="Checkout.php">Checkout</a></td>
</tr>
</table>

<table border=0 cellpadding=10 cellspacing=10 align=Center>

<?php

	 
$AB	= mysqli_query($CN,"Select * from tblProduct");
	  
echo "<tr>";
	
for($a=0; $a<mysqli_num_rows($AB); $a++)
{
	$RW = mysqli_fetch_array($AB);
	if($a%6==0)
	{ 	
		echo "<tr>";
	}
		echo "<td bgcolor=LightGreen align=center>
		<img src='Products/$RW[0].png' width=100 height=100>";
		echo "<br>$RW[1] <br> Rs.$RW[2]<br>
		<a href='Index.php?A=$RW[0]&B=$RW[2]'>Add-Cart</a></td>";
}
	echo "</tr>";
?>
	
</table>
</body>
</html>
