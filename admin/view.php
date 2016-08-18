<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");
$catg=$_REQUEST['cat'];
$subcatg=$_REQUEST['subcat'];
if($_REQUEST['sub'])
{
 echo "<script>location.href='home.php?view=$catg & view1=$subcatg'</script>";
}

  
?><head>
<head>
	<title>Table Example</title>
		<link rel="stylesheet" href="buttons.dataTables.min.css" />
		<link rel="stylesheet" href="jquery.dataTables.min.css" />
		
		<script src="jquery-1.11.3.min.js"></script>
		<script src="jquery.dataTables.min.js"></script>
		<script src="dataTables.buttons.min.js"></script>
		<script src="jszip.min.js"></script>
		<script src="pdfmake.min.js"></script>
		<script src="buttons.print.min.js"></script>
		<script src="jquery.min.js"></script>
		<script src="vfs_fonts.js"></script>
		<script src="buttons.html5.min.js"></script>
		<script src="script.js"></script>
	</head>
<script>
function showUser(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("subcat").innerHTML=xmlhttp.responseText;
}
}
//alert(str);
xmlhttp.open("GET","dd.php?q="+str,true);
xmlhttp.send();
}

</script>

</head>


<style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<body>

		
<br><br><br>
<center><font color="#660066" size="+3">View All</font></center>
<link rel="stylesheet" href="buttons.dataTables.min.css" />
		<link rel="stylesheet" href="jquery.dataTables.min.css" />
		
		<script src="jquery-1.11.3.min.js"></script>
		<script src="jquery.dataTables.min.js"></script>
		<script src="dataTables.buttons.min.js"></script>
		<script src="jszip.min.js"></script>
		<script src="pdfmake.min.js"></script>
		<script src="buttons.print.min.js"></script>
		<script src="jquery.min.js"></script>
		<script src="vfs_fonts.js"></script>
		<script src="buttons.html5.min.js"></script>
		<script src="script.js"></script>
<br><br>
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
   <td height='280' width='240' align='center'><img src='pics/$i.jpg' height='200' width='200'><br/>
  
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