<div class="page-header">
            <h2>Your Market Today</h2>
</div>
 
<?php
include "koneksi/database.php";

$tanggaltoday = date('d-m-Y');

$query=mysql_query ("SELECT * FROM member WHERE emailmember='$emailmember'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$iddatafqu = $row['iddata'];
}

$query=mysql_query ("SELECT SUM(totalpurchase) FROM markettoday WHERE tanggal='$tanggaltoday' AND emailmember='$emailmember'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$totalpurchasecheckout = $row['SUM(totalpurchase)'];
}
?>           

<ul class="thumbnails"> 

<?php
$data = mysql_query("SELECT * FROM checkout WHERE tanggal='$tanggaltoday' AND emailmember='$emailmember'");
$d = mysql_fetch_assoc($data);

if (!empty($d))
{
?>

<div class="thumbnail">
<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="44" align="left">
      <h4><font color="#00FF00">You have been Checkout Market Today...!!!</font><font color="#FF0000"> if you Change Order Product Today, delete Checkout History Today...!!!</font></h4>
    </td>
    </tr>
</table> 
</div>


<?php
}
else
{
?>

<div class="thumbnail">
<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="44" align="left">
      <h4>Code Unique Purchase : <?php echo $iddatafqu+95; ?></h4> 
    </td>
    <td height="44" align="right">
    <h4>Total Purchase Checkout Today : Rp <?php echo $iddatafqu+95+$totalpurchasecheckout; ?>,-</h4>
    </td>
    </tr>
  <tr>
    <td height="32" valign="top">
      </td>
    <td width="690" height="32" align="right">
    <p>
        <a href="prosesmember/prosescheckoutmarkettodaymember.php?tanggal=<?php echo $tanggaltoday; ?>&kodepurchaseorder=<?php echo $iddatafqu+95; ?>&emailmember=<?php echo $emailmember; ?>&totalpurchasecheckout=<?php echo $totalpurchasecheckout+$iddatafqu+95; ?>&detailprodukpurchase=

<?php        
$query=mysql_query ("SELECT * FROM markettoday WHERE tanggal='$tanggaltoday' AND emailmember='$emailmember'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$detkodeproduk = $row['kodeproduk'];
$detnamaproduk = $row['namaproduk'];
$detquantityorder = $row['quantityorder'];

echo "<p>Code Product : $detkodeproduk, Name Product : $detnamaproduk, Quantity Order : $detquantityorder</p>";

}
?>
        
        " class="btn">Checkout My Market Today</a></p>
    </td>
    
    
  </tr>
</table> 
</div>

<?php
}
?>

<p></p>

<?php
$query=mysql_query ("SELECT * FROM markettoday WHERE tanggal='$tanggaltoday' AND emailmember='$emailmember'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$iddata = $row['iddata'];
$tanggal = $row['tanggal'];
$kodeproduk = $row['kodeproduk'];
$namaproduk = $row['namaproduk'];
$photoproduk = $row['photoproduk'];
$hargaproduk = $row['hargaproduk'];
$quantityorder = $row['quantityorder'];
$totalpurchase = $row['totalpurchase'];
?>

<div class="thumbnail">
<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2">
      <font color="#0066FF"><h3><?php echo "$namaproduk"; ?></h3></font>
    </td>
    </tr>
  <tr>
    <td width="338" height="275" rowspan="4" valign="top">
    <img src="img/produk/<?php echo "$photoproduk"; ?>" alt="product name">
    </td>
    <td width="690" height="20" valign="top" align="justify">
    <strong><h4>Price Per Product : Rp <?php echo "$hargaproduk"; ?>,-</h4></strong>
    </td>
    
  </tr>
  <tr>
    <td height="20" valign="top" align="justify">
    <strong><h4>Quantity Order Product : <?php echo "$quantityorder"; ?></h4></strong></td>
  </tr>
  <tr>
    <td height="20" valign="top" align="justify">
    <strong><h4>Total Purchase Product : Rp <?php echo "$totalpurchase"; ?>,-</h4></strong>
    </td>
  </tr>
  <tr>
    <td height="153" valign="top" align="justify"></td>
  </tr>
  <tr>
    <td height="32" valign="top">
    
    <p align="center">
    <a href="prosesmember/proseshapusmarkettodaymember.php?kodeproduk=<?php echo $kodeproduk; ?>&tanggal=<?php echo $tanggal; ?>" class="btn">Delete from Market Today</a></p>
    </td>
    <td height="32" valign="top">&nbsp;</td>
    
    
  </tr>
</table> 
</div>

<p>&nbsp;</p>
<?php
}
?>
</ul>
 
<hr />