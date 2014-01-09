<div class="page-header">
            <h2>Check & Take Purchase Order Member</h2>
</div>

<?php

include "koneksi/database.php";

$status = $_GET['status'];

if($status=="cek")
{
?>
<form class="form-horizontal form-signin-signup" action="admin.php?kodekontenadmin=cekdanambilpurchaseordermember&status=ambil" method="POST"enctype="multipart/form-data">

<table width="850" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" height="29">&nbsp;</td>
    <td width="829" align="left"><input name="barcode" type="text" id="barcode" placeholder="Barcode Purchase Order Member" value="" /></td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td align="left"><input name="Submit" type="submit" class="btn btn-primary btn-large" value="Check Barcode Purchase Order" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<div></div>
</form>
<?php
}
?>

<?php
if("$status"=="ambil")
{
?>

<?php  
$data = mysql_query("SELECT * FROM confirmation WHERE barcode='$barcode' AND statusadmin='valid'");
$d = mysql_fetch_assoc($data);

if (!empty($d))
{
?>
         
<ul class="thumbnails"> 

<?php
$barcode = $_POST['barcode'];

$query=mysql_query ("SELECT * FROM confirmation WHERE barcode='$barcode' AND statusadmin='valid'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$transferbank = $row['transferbank'];
$anbank = $row['anbank'];
$tanggalpurchaseorder = $row['tanggalpurchaseorder'];
$kodepurchaseorder = $row['kodepurchaseorder'];
$barcodepurchaseorder = $row['barcode'];
$statusadmin = $row['statusadmin'];
$statusorderreceived = $row['statusorderreceived'];
$detailpurchaseorder = $row['detailpurchaseorder'];
}
?>

<div class="thumbnail">

<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="44" colspan="2" align="left">
      <h4>Date Confirmation Order : <?php echo $tanggalpurchaseorder; ?></h4> 
    </td>
    </tr>
  <tr>
    <td width="309" height="32" valign="top"></td>
    <td height="32" align="left">
    <h4>
	<?php echo $detailpurchaseorder; ?>
    </h4>
    </td>
  </tr>
  <tr>
    <td height="32" valign="top"></td>
    <td height="32" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="32" valign="top"></td>
    <td height="32" align="right">
    <h4><font color="#0000FF">Status Confirmation Admin : </font>
	<?php 
	if("$statusadmin"=="notvalid")
	{
		echo "<font color='#FF0000'>No Confirm</font>";
	}
	else
	{
		echo "<font color='#00FF00'>Confirm</font>";
	}
	?>
    </h4>
    </td>
  </tr>
  <tr>
    <td height="32" valign="top"></td>
    <td height="32" align="right">
    <h4>
    <font color="#0000FF">Status Received Order :</font> 
	<?php 
	if("$statusorderreceived"=="notvalid")
	{
		echo "<font color='#00FF00'>Order is not Take</font>";
	}
	else
	{
		echo "<font color='#FF0000'>Order have been Taked</font>";
	}
	?>
    </h4>
    </td>
  </tr>
  <tr>
    <td height="19" valign="top"></td>
    <td height="19" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="32" valign="top">
      </td>
    <td width="719" height="32" align="right">
    <?php
	if("$statusorderreceived"=="valid")
	{
	}
	else
	{
	?>
    <p>
    <a href="prosesadmin/prosespengambilanpesananadmin.php?barcode=<?php echo $barcodepurchaseorder; ?>" class="btn">Take Order Customer</a>
    </p>
    <?php
	}
	?>
    </td>
    
    
  </tr>
</table>


</div>
<p>&nbsp;</p>
</ul>

<hr />
<?php
}
else
{
?>
<META HTTP-EQUIV=Refresh CONTENT='0; URL=admin.php?kodekontenadmin=cekdanambilpurchaseordermember&status=cek'>
<script type="text/javascript">
alert("Sorry, Data Cannot Finded...!!!")
</script>
<?php	
}
}
?>