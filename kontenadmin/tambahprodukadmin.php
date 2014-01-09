    <!-- Start: MAIN CONTENT -->
        <div class="page-header">
            <h2>Add Product</h2>
          </div>
          
              <center>
              <table width="858" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="858" align="left" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Input Product Detail for Order Member</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesadmin/prosestambahprodukadmin.php" method="POST"enctype="multipart/form-data">

<table width="850" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="249" height="29">&nbsp;</td>
    <td width="594" align="left">
    <input name="kodeproduk" type="text" id="kodeproduk" placeholder="Product Code" value="" />
    
    				<script src="js/cekkodeproduk/jquery.js" type="text/javascript" language="javascript"></script>
					<?php include "js/cekkodeproduk/cekakunproses2.php"; ?>
					<link href="js/cekkodeproduk/daftarkodeproduk.css" rel="stylesheet" type="text/css" />
					<span id="msgboxusername" style="display:none"></span>
    
    </td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td align="left"><input name="namaproduk" type="text" id="namaproduk" placeholder="Product Name" value="" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="31">&nbsp;</td>
    <td align="left"><input name="hargaproduk" type="text" id="hargaproduk" placeholder="Product Price" value="" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="93">&nbsp;</td>
    <td align="left"><textarea name="detailproduk" cols="50" rows="5" id="detailproduk" placeholder="Product Detail"></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td align="left"><p><input name="photoproduk" type="file" id="photoproduk" /></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td align="left"><input name="Submit" type="submit" class="btn btn-primary btn-large" value="Add Product" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<div></div>
</form>
                
                
                
              </div></div> 
                
                  </td>
                </tr>
              </table>
  </center>
                </div>
	<!-- End: MAIN CONTENT -->