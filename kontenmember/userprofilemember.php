    <!-- Start: MAIN CONTENT -->
        <div class="page-header">
            <h2>Your User Profile</h2>
          </div>
          
              <center>
              <table width="1150" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="388" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Change Password</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesmember/prosesubahpasswordmember.php?emailmember=<?php echo $emailmember; ?>" method="POST">
                  <input type="password" name="oldpasswordmember" id="oldpasswordmember" placeholder="Old Password">
                  <input type="password" name="newpasswordmember" id="newpasswordmember" placeholder="New Password">
                  <input type="password" name="newconfirmpasswordmember" id="newconfirmpasswordmember" placeholder="New Confirm Password">
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
                <form class="form-horizontal form-signin-signup" action="prosesmember/prosesubahuserprofilemember.php?emailmember=<?php echo $emailmember; ?>" method="POST">
                  <input name="newfullname" type="text" id="newfullname" placeholder="Full Name" value="<?php echo $namalengkapmember; ?>">
                  <input name="email" type="text" id="email" placeholder="E-Mail" value="<?php echo $emailmember; ?>" readonly="readonly">
                  
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