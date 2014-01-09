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
            <h2>Edit Public Content : Cara Pembelian</h2>
          </div>
          
              <left>
              <table width="1180" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="858" align="left" valign="top">
                  
                 <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesadmin/prosesubahkontenpublikcarapembelianadmin.php" method="POST"enctype="multipart/form-data">

<table width="850" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="12" height="93">&nbsp;</td>
    <td width="827" align="left">
    
    <!-- TinyMCE -->
<script src="tinymce/tiny_mce_popup.js"></script>
<script type="text/javascript" src="tinymce/tiny_mce.js"></script>

        <script type="text/javascript">
	tinyMCE.init({
		file_browser_callback : 'myFileBrowser', // <----PERHATIKAN INI !
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect,emotions,charmap,sub,sup,hr",
		theme_advanced_buttons2 : "|,search,replace,|,bullist,numlist,|blockquote,|,undo,redo,|,link,unlink,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,tablecontrols,fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
        </script>
<!-- /TinyMCE -->
    <p>
    <textarea name="kontencarapembelian" cols="80" rows="10" id="kontencarapembelian" placeholder="Content Public - Cara Pembelian"><?php echo $konten; ?></textarea>
    </p>
    </td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td align="left">
    <p>
    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Save Content" />
    </p>
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
<div></div>
</form>
                
                
                
              </div></div> 
                
                  </td>
                </tr>
              </table>
  </left>
                </div>
	<!-- End: MAIN CONTENT -->