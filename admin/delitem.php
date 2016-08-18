<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");


$itemno=$_REQUEST['t1'];

if(isset($_REQUEST['sub']))
  {
    if(mysqli_query($user,"DELETE FROM items  where itemno = $itemno"))
	   {
	    
		
		
	    echo "<font size='+2'>item deleted successfully</font>";
		}
	else
	 {
	   echo "item is not in the list";
	   }
	}   
		 
?><head>
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
xmlhttp.open("GET","dd.php?q="+str,true);
xmlhttp.send();
}
</script>

</head>


<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
-->
</style>
<body>
<br><br><br>
<center>
  <font color="#660066" size="+3">Delete Item </font>
</center>

<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >
<table align="center">



<tr>
  <td><span class="style3">Item No: </span></td>
  <td><label>
    <input name="t1" type="text" id="t1">
  </label></td>
</tr>
</tr>


<tr>

<tr><td  colspan="2" align="center"><input name="sub" type="submit" value="Delete"></td></tr>
</table>
</form>
</fieldset></center>
</body>
