<?php
include "koneksi/database.php";

$query=mysql_query ("SELECT * FROM publikkonten WHERE tipepublik='carapembelian'",$connection)or die (mysql_error());
$jumlah = mysql_num_rows($query); 
while ($row=mysql_fetch_array($query)) { 
$konten = $row['kontenpublik'];
}
?>


    <!-- Start: MAIN CONTENT -->
        <div class="page-header">
            <h2>Cara Pembelian</h2>
          </div>
          
              <left>
              <table width="1180" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="858" align="left" valign="top">
                  
                 <div class="widget-body">
              <div class="center-align">
               
<table width="1180" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20" height="93" align="left" valign="top">
      </td>
    <td width="1126" align="left" valign="top">
    <?php echo $konten; ?>
    </td>
    <td width="34" align="left" valign="top">&nbsp;</td>
    </tr>
  
</table>
<div></div>     
              </div></div> 
                
                  </td>
                </tr>
              </table>
  </left>
                </div>
	<!-- End: MAIN CONTENT -->