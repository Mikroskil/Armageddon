<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title><?php echo "Armageddon - "; echo $_GET['title']; ?></title>
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
            <a href="index.html" class="brand brand-bootbus">Armageddon</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li><a href="publik.php?kodekontenpublik=produk&title=Home">Home</a></li>
                <li><a href="publik.php?kodekontenpublik=carapembelian&title=Cara Pembelian">Cara Pembelian</a></li>
                <li><a href="publik.php?kodekontenpublik=tentangkami&title=Tentang Kami">Tentang Kami</a></li>
                <li><a href="publik.php?kodekontenpublik=memberarea&title=Member Area">Member Area</a></li>
                
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
           
          <?php include "kontenpublik/kontrolkontenpublik.php"; ?>
     
          
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