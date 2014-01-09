    <!-- Start: MAIN CONTENT -->
        <div class="page-header">
            <h2>User Profile</h2>
          </div>
          
              <center>
              <table width="1150" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="388" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Change Password</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesadmin/prosesubahpasswordadmin.php?iddata=<?php echo $iddata; ?>" method="POST">
                  <input type="password" name="oldpasswordadmin" id="oldpasswordadmin" placeholder="Old Password">
                  <input type="password" name="newpasswordadmin" id="newpasswordadmin" placeholder="New Password">
                  <input type="password" name="newconfirmpasswordadmin" id="newconfirmpasswordadmin" placeholder="New Confirm Password">
                  <div>
                    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Change Password">
                  </div>
                  
                  
                  <p>&nbsp;</p>
                  
                </form>
                </div></div>
                  
                  </td>
                  <td width="10">&nbsp;</td>
                  <td width="752" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Change User Profile</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesadmin/prosesubahuserprofileadmin.php?iddata=<?php echo $iddata; ?>" method="POST">
                  <input name="namalengkap" type="text" id="namalengkap" placeholder="Full Name" value="<?php echo $namalengkap; ?>">
                  <input name="username" type="text" id="username" placeholder="Username" value="<?php echo $username; ?>">
                  
                  <div>
                    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Change User Profile">
                  </div>
               
                </form>
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
              </div></div> 
                
                  </td>
                </tr>
              </table>
  </center>
                </div>
	<!-- End: MAIN CONTENT -->