<?php

include "koneksi/database.php";

$tanggal = $_GET['tanggal'];
$kodepurchaseorder = $_GET['kodepurchaseorder'];
$barcodedata = $_POST['data'];

$data = mysql_query("SELECT * FROM confirmation WHERE tanggalpurchaseorder='$tanggal' AND emailmember='$emailmember' AND kodepurchaseorder='$kodepurchaseorder' AND statusadmin='notvalid'");
$d = mysql_fetch_assoc($data);

if (!empty($d))
{
?>

<META HTTP-EQUIV=Refresh CONTENT='0; URL=member.php?kodekontenmember=confirmationhistory'>
<script type="text/javascript">
alert("Sorry, Your Confirmation Purchase Order must Confirm...!!!")
</script>

<?php
}

else
{
?>


    <!-- Start: MAIN CONTENT -->
<div class="page-header">
            <h2>Your Barcode Order Date : <?php echo $tanggal; ?></h2>
          </div>
          
<center>
              <table width="439" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="439" align="center" valign="top">
                 
            <div class="widget-body">
              <div class="center-align">			
                <p>
                <center>

<?php    
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    $PNG_WEB_DIR = '../temp/';

    include "qrlib.php";    

    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    $filename = $PNG_TEMP_DIR.'test.png';

    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 

        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');

        $filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    }    
?>
<p>
<img src="kontenmember/temp/
<?php
    echo ''.$PNG_WEB_DIR.basename($filename).'';     
?>
" />
</p>

              	</center>
                </p>
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