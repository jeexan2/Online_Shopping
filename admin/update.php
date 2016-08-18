<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");

$catg=$_REQUEST['cat'];
$subcatg=$_REQUEST['subcat'];
$img=$_FILES['file']['tmp_name'];
$itemno=$_REQUEST['t1'];
$price=$_REQUEST['t2'];
$desc=$_REQUEST['text'];
$t=date("d-m-y h-i-s");
$buy = $_REQUEST['t3'];
$stock = $_REQUEST['t3'];
$sold_qnty = 0;

if(isset($_REQUEST['sub']))
  {
    /**if(mysqli_query($user,"insert into items  values('$catg','$subcatg','$img','$itemno','$price','$buy','$stock','$sold_qnty','$desc','$t','') "))
	   {
	    move_uploaded_file($_FILES['file']['tmp_name'],"pics/$itemno.jpg");
		
		
	    echo "<font size='+2'>item inserted successfully</font>";
		}
	else
	 {
	   echo "item is not inserted";
	   }**/
	   #<td height='280' width='240' align='center'><img src='pics/$i.jpg' height='200' width='200'><br/>
	   $sel=mysqli_query($user,"select * from items where itemno = $itemno");
	   #echo"<form method='post'><table border='0' align='center'><tr>";
    $arr=mysqli_fetch_array($sel);
	if(mysqli_query($user,"update items set price = $price,stock = $stock where itemno = $itemno") == true) {
		echo "Item updated successfully<br/>";
	}
	else echo "Update is not completeed";
   
 # echo "
   
  
 /**<b>Item No:</b>".$arr['itemno'].
   "<br><b>Price:</b>Tk&nbsp;".$arr['price'].
   "<br><b>Description:</b>".$arr['desc'].
   "<br><b>Buying Price from Retailer:</b>".$arr['buy_price'].
   "<br><b>Number Remains:</b>".$arr['stock'].
   "<br><b>Sold Till now:</b>".$arr['sold_qnty']." "**/
   
  

	}   
	   
		 
?>
<head>
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
  <font color="#660066" size="+3">Update Info </font>
</center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >
<table align="center">



</select></td>
</tr>


</td>
</tr>
<tr>
  <td><span class="style3">Item No: </span></td>
  <td><label>
    <input name="t1" type="text" id="t1">
  </label></td>
  <tr>
  <td><span class="style3">Update Price </span></td>
  <td><label>
    <input name="t2" type="text" id="t2">
  </label></td>
  <td><span class="style3">Update stock </span></td>
  <td><label>
    <input name="t3" type="int" id="t3">
  </label></td>

</tr>

  <td  colspan="2" align="center"><input name="sub" type="submit" value="Submit"></td>
</tr>
</table>
</form>
</fieldset></center>
</body>
