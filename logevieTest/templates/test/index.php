<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <jdoc:include type="head" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->baseurl; ?>/templates/test/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/test/css/custom.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/test/css/w3.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/test/js/bootstrap.js" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/test/js/jquery.js" rel="stylesheet">

   

    

   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!--menu modle-->
    <jdoc:include type="modules" name="header" style="none" />

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
    <a href="http://mail11.lhe.lan" target="_blank"><button class="w3-quarter w3-red w3-hover-pink">
      <div class="w3-container w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <h4>MESSAGES</h4>
      </div>
    </button></a>
    <a href="http://www.20minutes.fr/" target="_blank"><button class="w3-quarter w3-blue w3-hover-pink">
      <div class="w3-container w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>NEWS</h4>
      </div>
    </button></a>
    <a href="tuto.html" target="_blank"><button class="w3-quarter  w3-teal w3-hover-pink">
      <div class="w3-container w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
       
        </div>
        <div class="w3-clear"></div>
        <h4>TUTOS</h4>
      </div>
    </button></a>
    <a href="http://serveurglpi/glpi/front/central.php" target="_blank"><button class="w3-quarter w3-orange w3-hover-pink" >
      <div class="w3-container  w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-cog w3-xxxlarge"></i></div>
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <h4>GLPI</h4>
      </div>
    </button> </a>
     <a href="http://srvwb1/WD150AWP/WD150AWP.EXE/CONNECT/wEoctime70" target="_blank"><button class="w3-quarter w3-orange w3-hover-pink">
      <div class="w3-container  w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>OCTIME</h4>
      </div>
    </button></a>
     <a href="http://srvnotys/Logevie/IndexPre" target="_blank"><button class="w3-quarter w3-teal w3-hover-pink">
      <div class="w3-container  w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-car w3-xxxlarge"></i></div>
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <h4>NOTYS</h4>
      </div>
    </button></a>
     <a href="http://logevie-partage.ddns.net/owncloud/" target="_blank"><button class="w3-quarter w3-blue w3-hover-pink">
      <div class="w3-container  w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-cloud w3-xxxlarge"></i></div>
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <h4>OWNCLOUD</h4>
      </div>
    </button></a>
     <a href="https://www.google.fr/" target="_blank"><button class="w3-quarter w3-red w3-hover-pink">
      <div class="w3-container  w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-search w3-xxxlarge"></i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>GOOGLE</h4>
      </div>
    </div>
  </button></a>
      </div>
    </div>

    <div class="container">
    <div class ="w3-half">
    <jdoc:include type="modules" name="newsfeed" style="none" /></div>
      <!-- Example row of columns -->
      <div class ="w3-half">
      <jdoc:include type="modules" name="carousel" style="none" /></div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
