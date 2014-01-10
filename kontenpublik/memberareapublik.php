    <!-- Start: MAIN CONTENT -->
        <div class="page-header">
            <h2>Member Area</h2>
          </div>
          
              <center>
              <table width="1150" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="388" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Login Member</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosesloginmember.php?access=memberlogin" method="POST">
                  <input type="text" name="emailmember" id="emailmember" placeholder="Email">
                  <input type="password" name="passwordmember" id="passwordmember" placeholder="Password">
                  <div>
                    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Login Member">
                  </div>
                  
                  
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  
                </form>
                </div></div>
                  
                  </td>
                  <td width="10">&nbsp;</td>
                  <td width="752" valign="top">
                  
                 <h4 class="widget-header"><i class="icon-gift"></i> Register Member</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="prosespublik/prosesdaftarmemberpublik.php" method="POST">
                  <input type="text" name="registerfullname" id="registerfullname" placeholder="Full Name">
                  <input type="text" name="email" id="email" placeholder="E-Mail">
                      
					<script src="js/cekakunemailmember/jquery.js" type="text/javascript" language="javascript"></script>
					<?php include "js/cekakunemailmember/cekakunproses2.php"; ?>
					<link href="js/cekakunemailmember/daftarakunemail.css" rel="stylesheet" type="text/css" />
					<span id="msgboxusername" style="display:none"></span>
		
                  <input type="password" name="registerpassword1" id="registerpassword1" placeholder="Password">
                  <input type="password" name="registerpassword2" id="registerpassword2" placeholder="Confirm Password">
                  <div>
                    <input name="Submit" type="submit" class="btn btn-primary btn-large" value="Register Member">
                  </div>
               
                </form>
                </div></div> 
                
                  </td>
                </tr>
              </table>
  </center>
                </div>
	<!-- End: MAIN CONTENT -->