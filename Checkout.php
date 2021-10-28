<?php

$CN = mysqli_connect("LocalHost","root","","ShoppingDB");		 

	if(isset($_GET['A']))
	{
		$ID = $_GET['A'];
		
        mysqli_query($CN,"Delete from tblCart Where CID='$ID' ");

		echo "<meta http-equiv='Refresh'; Content='0; URL=Checkout.php'>";

	}
?>
<html>
<body>
<h2 align=center> Hyperstar Shopping Website </h2>
<hr>
	
<table border=1 cellpadding=10 cellspacing=10 align=Center>
<tr bgcolor=LightGreen>
<td>Total Bill</td>
<?php

$IP = $_SERVER['REMOTE_ADDR'];

$AB = mysqli_query($CN,"Select Sum(UPrice) from tblCart Where IPAdres='$IP'");
$TR = mysqli_fetch_array($AB);

echo "<th>$TR[0] Rs.</th>";
?>
<td><a href="Index.php">Shopping</a></td>
</tr>
</table>

<table border=1 cellpadding=10 cellspacing=10 align=Center>
<tr bgcolor=LightBlue>
<th>Picture</th> <th>FullName</th> <th>Price</th> <th>Action</th></tr>
<?php

$IP = $_SERVER['REMOTE_ADDR'];

$AB	= mysqli_query($CN,"Select C.CID, P.PID, P.FullName, P.UPrice, C.IPAdres from tblProduct P, tblCart C Where C.IPAdres='$IP' and P.PID=C.PID");
	 
for($a=0; $a < mysqli_num_rows($AB); $a++)
{
	$RW = mysqli_fetch_array($AB);
	echo "<tr>";
	echo "<td align=center><img src='Products/$RW[1].png' width=70 height=70></td>";
	
	echo "<td>$RW[2]</td>";
	echo "<td>$RW[3]</td>";
	echo "<td><a href='CheckOut.php?A=$RW[0]'>Delete</a></td>";
	echo "</tr>";
}
?>
</table>
</body>
</html>
