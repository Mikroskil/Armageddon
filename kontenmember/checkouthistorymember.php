<div class="page-header">
            <h2>Your Checkout History</h2>
</div>
 
<ul class="thumbnails"> 

<?php
include "koneksi/database.php";

$query=mysql_query ("SELECT * FROM checkout WHERE emailmember='$emailmember' ORDER BY `checkout`.`tanggal` DESC",$connection)or die(mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$iddata = $row['iddata'];
$tanggal = $row['tanggal'];
$kodepurchaseorder = $row['kodepurchaseorder'];
$detailprodukpurchase = $row['detailprodukpurchase'];
$totalpembayaran = $row['totalpembayaran'];
?>

<div class="thumbnail">
<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="305" height="44" align="left">
      <h4>Date Purchase Order : <?php echo $tanggal; ?></h4> 
    </td>
    <td height="44" align="right">
    </td>
    </tr>
  <tr>
    <td height="32" valign="top"></td>
    <td height="32" align="left">
    <h4><?php echo $detailprodukpurchase; ?></h4>
    </td>
  </tr>
  <tr>
    <td height="32" valign="top"></td>
    <td height="32" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="32" valign="top"></td>
    <td height="32" align="right">
    <font color="#FF0000"><h4>Total Purchase Order : Rp <?php echo $totalpembayaran; ?>,-</h4></font>
    </td>
  </tr>
  <tr>
    <td height="19" valign="top"></td>
    <td height="19" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="32" valign="top">
      </td>
    <td width="723" height="32" align="right">
    <p>
        <a href="member.php?kodekontenmember=addconfirmation&tanggal=<?php echo $tanggal; ?>&kodepurchaseorder=<?php echo $kodepurchaseorder; ?>" class="btn">Confirmation Purchase Order</a>
        <a href="prosesmember/proseshapuscheckouthistorymember.php?iddatapurchaseorder=<?php echo $iddata; ?>" class="btn">Delete Purchase Order</a>
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