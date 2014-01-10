    <!-- MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h2>Product Items</h2>
        </div>
        <div class="row">
          <div class="span12">
            <ul class="thumbnails">

<?php
include "koneksi/database.php";
?>

<?php
$dataPerPage = 8;
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} 
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;  
?>

<?php
$idhidefade = 1;
$query=mysql_query ("SELECT * FROM produk ORDER BY `produk`.`kodeproduk` DESC LIMIT $offset, $dataPerPage",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$iddata = $row['iddata'];
$namaproduk = $row['namaproduk'];
$photoproduk = $row['photoproduk'];
$hargaproduk = $row['hargaproduk'];
$detailproduk = $row['detailproduk'];
?>
            
              <li class="span3">
                <a href="#portfolioModal<?php echo $idhidefade; ?>" class="thumbnail" data-toggle="modal">
                  <img src="img/produk/<?php echo $photoproduk; ?>">
                </a>
   
                <!-- Start: Modal -->
                <div class="modal hide fade" id="portfolioModal<?php echo $idhidefade; ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioList" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel"><?php echo $namaproduk; ?></h3>                    
                  </div>
                  <div class="modal-body">
                    <div class="center-align">
                      <img src="img/produk/<?php echo $photoproduk; ?>" class="bottom-space-less thumbnail" alt="image name">
                    </div>
                    <p><?php echo $detailproduk; ?></p>
                    <p><h4>Rp <?php echo $hargaproduk; ?>,-</h4></p>
                  </div>
                  <div class="modal-footer">
                  <a href="publik.php?kodekontenpublik=memberarea&title=Member Area" class="btn btn-primary">Buy Product</a>
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  </div>
                </div>
                <!-- End: Modal -->
              </li>
              
<?php
$idhidefade++;
}
?>
            </ul>
            
<?php
$query = "SELECT COUNT(*) AS jumData FROM produk";
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
                  echo "'".$_SERVER['PHP_SELF']."?kodekontenpublik=produk&title=Home&page=".($noPage-1)."'";
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
echo "<a href='".$_SERVER['PHP_SELF']."?kodekontenpublik=produk&title=Home&page=".($nomorhalaman)."'>";
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
	<li><a href='".$_SERVER['PHP_SELF']."?kodekontenpublik=produk&title=Home&page=".($noPage+1)."'>";
?>
                  &raquo;</a>
</li>
<?php
}
?>
                
                
                
              </ul>
            </div>
            
            
          </div>                                     
        </div>          
      </div>
    </div>
    
    <!-- MAIN CONTENT -->