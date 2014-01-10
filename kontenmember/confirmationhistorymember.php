<div class="page-header">
            <h2>Your Confirmation History</h2>
</div>
 
<ul class="thumbnails"> 

<?php
include "koneksi/database.php";

$query=mysql_query ("SELECT * FROM confirmation WHERE emailmember='$emailmember' ORDER BY `confirmation`.`tanggalpurchaseorder` DESC",$connection)or die(mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) {
	 
$tanggalpurchaseorder = $row['tanggalpurchaseorder'];
$kodepurchaseorder = $row['kodepurchaseorder'];
$statusadmin = $row['statusadmin'];
$statusorderreceived = $row['statusorderreceived'];
$barcode = $row['barcode'];
$detailpurchaseorder = $row['detailpurchaseorder'];

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
    <p>
    <a href="prosesmember/proseshapusconfirmationmember.php?kodepurchaseorder=<?php echo $kodepurchaseorder; ?>&tanggalconfirmation=<?php echo $tanggalpurchaseorder; ?>" class="btn">Delete Confirmation</a>


	<form action="member.php?kodekontenmember=barcodeview&kodepurchaseorder=<?php echo $kodepurchaseorder; ?>&tanggal=<?php echo $tanggalpurchaseorder; ?>" method="post">
        <input name="data" value="<?php echo $barcode; ?>" type="hidden">
        <input name="size" value="5" type="hidden">
        <input name="level" value="H" type="hidden">
        <input name="submit" type="submit" class="btn btn-primary btn-large" value="View Barcode Order">
    </form>

    </p>
    </td>
    
    
  </tr>
</table> 
</div>

<p></p>

<?php
}
?>

</ul>
 
<hr />