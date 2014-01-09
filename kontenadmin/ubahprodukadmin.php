<?php
include "koneksi/database.php";

$iddataproduk = $_GET['iddata'];

$query=mysql_query ("SELECT * FROM produk WHERE iddata='$iddataproduk'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) {
$kodeproduk = $row['kodeproduk'];
$namaproduk = $row['namaproduk'];
$hargaproduk = $row['hargaproduk'];
$detailproduk = $row['detailproduk'];
}
?>
    <!-- Start: MAIN CONTENT -->
        <div class="page-header">
            <h2>Maintenance Product : <?php echo $namaproduk; ?></h2>
          </div>
          
              <center>
              <table width="1150" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="388" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Change Product Image</h4>
            <div class="widget-body">
              <div class="center-align">
                <form action="prosesadmin/prosesubahphotoprodukadmin.php?iddataproduk=<?php echo $iddataproduk; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal form-signin-signup">
                  <input type="file" name="photoproduk" id="photoproduk" />
                  <div>
                    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Change Product Image">
                  </div>
                  
                  
                  <p>&nbsp;</p>
                  
                </form>
                </div></div>
                  
                  </td>
                  <td width="10">&nbsp;</td>
                  <td width="752" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Edit Product</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesadmin/prosesubahprodukadmin.php?iddataproduk=<?php echo $iddataproduk; ?>" method="POST">
                  <input name="kodeproduk" type="text" id="kodeproduk" placeholder="Product Code" value="<?php echo $kodeproduk; ?>" />
                  <input name="namaproduk" type="text" id="namaproduk" placeholder="Product Name" value="<?php echo $namaproduk; ?>" />
                  <input name="hargaproduk" type="text" id="hargaproduk" placeholder="Product Price" value="<?php echo $hargaproduk; ?>" />
                  <p>
                  <textarea name="detailproduk" cols="50" rows="5" id="detailproduk" placeholder="Product Detail"><?php echo $detailproduk; ?></textarea>
                  </p>
                  <div>
                    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Change Data Product">
                  </div>
               
                </form>
                
                
              </div></div> 
                
                  </td>
                </tr>
              </table>
  </center>
                </div>
	<!-- End: MAIN CONTENT -->