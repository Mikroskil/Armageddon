<div class="page-header">
            <h2>All Data Member - Not Confirm</h2>
</div>
           
<ul class="thumbnails"> 

<?php
include "koneksi/database.php";


$dataPerPage = 5;
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} 
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;  


$query=mysql_query ("SELECT * FROM confirmation WHERE statusadmin='notvalid' ORDER BY `confirmation`.`tanggalpurchaseorder` DESC LIMIT $offset, $dataPerPage",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$emailmember = $row['emailmember'];
$transferbank = $row['transferbank'];
$anbank = $row['anbank'];
$tanggalpurchaseorder = $row['tanggalpurchaseorder'];
?>

<div class="thumbnail">

<table width="1028" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="19" valign="top">
    <strong>
    <font color="#FF0000">Date Confirmation : <?php echo $tanggalpurchaseorder; ?></font>
    </strong>
    </td>
    <td height="19" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="309" height="19" valign="top"></td>
    <td height="19" align="left">
    <strong>
    <p>Transfer via BANK : <?php echo $transferbank; ?></p>
    <p>Transfer Name : <?php echo $anbank; ?></p>
    <p>E-Mail Member : <?php echo $emailmember; ?></p>
    </strong>
    </td>
  </tr>
  <tr>
    <td height="32" valign="top">
      </td>
    <td width="719" height="32" align="right">
    <p>
    <a href="prosesadmin/prosesconfirmationmemberadmin.php?tanggalpurchaseorder=<?php echo $tanggalpurchaseorder; ?>&emailmember=<?php echo $emailmember; ?>" class="btn">Confirm Customer</a>
    </p>
    </td>
    
    
  </tr>
</table>

</div>
<p>&nbsp;</p>
<?php
}
?>
</ul>

<?php
$query = "SELECT COUNT(*) AS jumData FROM confirmation WHERE statusadmin='notvalid'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$dataPerPage);
?>

            <div class="pagination pagination-centered">
              <ul>            
<?php
//previous page
if($noPage=='1')
{
?>
<li class="disabled">
                  <a href="#">&laquo;</a>
</li>
<?php
}
else if($noPage > 1)
{
?>
<li>
                  <a href=
                  <?php
                  echo "'".$_SERVER['PHP_SELF']."?kodekontenadmin=semuatidakterkonfirmasi&page=".($noPage-1)."'";
                  ?>
                  >&laquo;</a>
</li>
<?php
}
?>

<?php
if($jumPage >= 1)
{
$nomorhalaman=1;
while($nomorhalaman <= $jumPage)
{
?>
<li
<?php
if("$noPage"=="$nomorhalaman")
{
	echo " class=active";
}
?>
>
<?php
echo "<a href='".$_SERVER['PHP_SELF']."?kodekontenadmin=semuatidakterkonfirmasi&page=".($nomorhalaman)."'>";
echo "$nomorhalaman";
echo "</a>";
?>
</li>
<?php
$nomorhalaman++;
}
}
?>

<?php
//next page
if($noPage >= $jumPage)
{
?>
				<li class=disabled>
                  <a href="#">&raquo;</a>
				</li>
<?php
}
else if($jumPage > 1)
{
	echo "
	<li><a href='".$_SERVER['PHP_SELF']."p?kodekontenadmin=semuatidakterkonfirmasi&page=".($noPage+1)."'>";
?>
                  &raquo;</a>
</li>
<?php
}
?>
                
                
                
              </ul>
            </div>


<hr />