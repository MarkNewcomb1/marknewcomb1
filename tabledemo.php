<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/cyborg/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mark Newcomb portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
<!--     <link rel="stylesheet" href="./css/bootstrap.min.css"> -->

    <script type="text/javascript" async="" src="./js/ga.js"></script><script type="text/javascript">


    </script>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicomatic/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicomatic/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicomatic/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicomatic/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicomatic/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicomatic/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicomatic/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicomatic/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="favicomatic/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="favicomatic/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="favicomatic/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicomatic/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="favicomatic/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="favicomatic/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="favicomatic/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="favicomatic/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="favicomatic/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="favicomatic/mstile-310x310.png" />

    </head>
  <body style="">
<!--     <script src="./js/bsa.js"></script> -->

    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-6">
            <h1>Mark Newcomb</h1>
            <p class="lead">Web Developer Portfolio site</p>
          </div>
        </div>
      </div>

      <!-- Navbar
      ================================================== -->
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            

            <div class="bs-example">
              <div class="navbar navbar-default">
    


              <div class="navbar navbar-inverse">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/index">Home</a>
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/pictures">Pictures</a></li>
                    <li class="active"><a href="/music">Music</a></li>
                    <li class="active"><a href="/tabledemo">PHP Demo</a></li>
                   <!-- <li class="dropdown">
                      <a href="http://bootswatch.com/cyborg/#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="http://bootswatch.com/cyborg/#">Action</a></li>
                        <li><a href="http://bootswatch.com/cyborg/#">Another action</a></li>
                        <li><a href="http://bootswatch.com/cyborg/#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="http://bootswatch.com/cyborg/#">Separated link</a></li>
                        <li><a href="http://bootswatch.com/cyborg/#">One more separated link</a></li>
                      </ul>
                    </li>-->
                  </ul>
                  
                  
                </div><!-- /.nav-collapse -->
              </div><!-- /.navbar -->
            </div><!-- /example -->

          </div>
        </div>
      </div>


      <!-- Buttons
      ================================================== -->
     

      <!-- Typography
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="type">My Cd Collection</h1>
            </div>
          </div>
            <?php
ini_set('display_errors','1');
include($_SERVER['DOCUMENT_ROOT'].'/data_access_object/MySQL/Client.MySQL.php');

$query_set=array(
	'table_set'=>array("CDs"),
	'index_set'=>array("Artist","Album_Title","Notes"),
	//'limit_set'=>5,
	'order_set'=>'Artist ASC'
);

$request=new Client_MySQL();
$result=$request->db_select($query_set);

            ?>


<?php

echo "<table>";
echo "<tr class='header'><th>Artist</th><th>Album</th><th>Notes</th></tr>";

$i=0;
for($i=0;$i<count($result->query);$i++){
	$album_title=$result->query[$i]['Album_Title'];
	$artist=$result->query[$i]['Artist'];
        $notes=$result->query[$i]['Notes'];
?>
<tr><td class="artist"><?php echo $artist; ?></td>
    <td class="album"><?php echo $album_title; ?></td>
    <td class="notes"><?php echo $notes; ?></td>
</tr>
<?php
}
echo "</table>";
?>
            
        </div>


        <!-- Blockquotes -->

        
      <footer>
        <div class="row">
          <div class="col-lg-12">
            
            <ul class="list-unstyled">
              <li class="pull-right"><a href="/#top">Back to Home</a></li>
              
                <li><h3 class="text-warning">Email Me at mark.newcomb@marknewcomb1.com</h3></li>
                <!--<li><a href="http://news.bootswatch.com/">Blog</a></li>-->
              
              <li><a href="https://github.com/marknewcomb1" target="_blank"> My GitHub</a></li></br>
                
            <li>&copy; Mark Newcomb 2015</li>
            </ul>


          </div>
        </div>
        
      </footer>
    

    </div>


    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootswatch.js"></script>
  
</body>
</html>