<?php

include "koneksi/database.php";

$tanggal = $_GET['tanggal'];
$kodepurchaseorder = $_GET['kodepurchaseorder'];

$data = mysql_query("SELECT * FROM confirmation WHERE tanggalpurchaseorder='$tanggal' AND emailmember='$emailmember' AND kodepurchaseorder='$kodepurchaseorder'");
$d = mysql_fetch_assoc($data);

if (!empty($d))
{
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=member.php?kodekontenmember=checkouthistory'>
<script type="text/javascript">
alert("Sorry, You has been Confirmation this Purchase Order...!!!")
</script>

<?php
}

else
{
?>


    <!-- Start: MAIN CONTENT -->
<div class="page-header">
            <h2>Confirmation Purchase Order</h2>
          </div>
          
<center>
              <table width="439" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="439" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Insert Data Confirmation Detail</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesmember/prosesconfirmationhistorymember.php" method="POST">				
                <p>
                  <select name="viatransfer">
                    <option value="BANK BCA">VIA BANK BCA</option>
                    <option value="BANK BNI">VIA BANK BNI</option>
                    <option value="BANK BRI">VIA BANK BRI</option>
                  </select>
                </p>
                  <input type="text" name="antransfer" id="antransfer" placeholder="Name of Transfer">
                <p>
                  <textarea name="detailmessagetransfer" cols="" rows="" placeholder="Detail Message Transfer"></textarea>
                  </p>
                  <input name="tanggal" type="text" id="tanggal" placeholder="Date Checkout" value="<?php echo $tanggal; ?>" readonly="readonly">
                  <input name="kodepurchaseorder" type="text" id="kodepurchaseorder" placeholder="Code Purchase Order" value="<?php echo $kodepurchaseorder; ?>" readonly="readonly">
                  <div>
                    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Confirmation Purchase Order Now">
                  </div>
               
                </form>
                </div></div> 
                
                  </td>
                </tr>
              </table>
  </center>
                </div>
	<!-- End: MAIN CONTENT -->
    
<?php
}
?>