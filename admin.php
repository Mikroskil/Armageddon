<?php
session_start();

if(!isset($_SESSION['username'])){
		die("
		<script type='text/javascript'>
		alert('Sorry, You must Login before Access...!!!')
		</script>
		
		<META HTTP-EQUIV=Refresh CONTENT='0; URL=administrator/'>
		"); }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Armagedon Administrator Access</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.html" class="brand brand-bootbus">Armageddon - Administrator</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maintenance All Data<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="admin.php?kodekontenadmin=tambahproduk">Add Product</a></li>
                    <li><a href="admin.php?kodekontenadmin=semuaproduk">All Data Product</a></li>
                    <li><a href="admin.php?kodekontenadmin=pencarianproduk&statuspencarian=belummencari">Find Product</a></li>
                    
                    <li><a href="admin.php?kodekontenadmin=editpubliktentangkami">Edit Publik Page : Tentang Kami</a></li>
                    <li><a href="admin.php?kodekontenadmin=editpublikcarapembelian">Edit Publik Page : Cara Pembelian</a></li>
                    
                  </ul>
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Check & Maintenance Member<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="admin.php?kodekontenadmin=cekdanambilpurchaseordermember&status=cek">Check & Take Purchase Order Member</a></li>
                    <li><a href="admin.php?kodekontenadmin=semuatidakterkonfirmasi">All Data Not Confirm Member</a></li>
                    <li><a href="admin.php?kodekontenadmin=semuadatacheckoutmember">All Data Checkout Member</a></li>
                    <li><a href="admin.php?kodekontenadmin=semuadatakonfirmasimember">All Data Confirmation Member</a></li>
                    <li><a href="admin.php?kodekontenadmin=pencariandatakonfirmasi&statuspencarian=belummencari">Find Data Confirmation Member</a></li>
                    <li><a href="admin.php?kodekontenadmin=semuadatapesanandiambilmember">All Take Order Member</a></li>
                  </ul>
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi! <?php echo $_SESSION['namalengkap']; ?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="admin.php?kodekontenadmin=userprofile">User Profile</a></li>
                    <li><a href="prosesloginadmin.php?access=adminlogout">LogOut</a></li>
                  </ul>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          <div class="row-fluid"> 
          <?php include "kontenadmin/kontrolkontenadmin.php"; ?>
          </div>
          
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
        <p>
          <p align="center">&copy; 2013 Armageddon</p>
        </p>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>
