<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >

<?php

include("config.php");

$catg=$_REQUEST['catg'];
$subcatg=$_REQUEST['subcatg'];


   $sel=mysqli_query($user,"select * from items");
   echo"<form method='post'><table border='0' align='center'><tr>";
   $n=1;
    while($arr=mysqli_fetch_array($sel))
   {
   $i=$arr['itemno'];
    if($n%4==0)
	{
	echo "<tr>";
	}
   echo "
    
 <b>Item No:</b>".$arr['itemno'].
   "<br><b>Price:</b>Tk&nbsp;".$arr['price'].
   "<br><b>Description:</b>".$arr['desc'].
   "<br><b>Buying Price from Retailer:</b>".$arr['buy_price'].
   "<br><b>Number Remains:</b>".$arr['stock'].
   "<br><b>Sold Till now:</b>".$arr['sold_qnty'].
   
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>
  <div><br>


</select></td>
</tr>

<br>
<br>
<tr>
  <td colspan="2" align="center">&nbsp;</td>
</tr>
</table>
</form>
</fieldset></center>
</body>