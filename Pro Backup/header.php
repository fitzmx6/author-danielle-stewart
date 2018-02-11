<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Author Danielle Stewart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Open Graph -->
        <meta property="og:image" content="http://authordaniellestewart.com/_assets/img/slides/Danielle-Stewart-Website-Banner-Free-Books.gif"/>
        <meta property="og:site_name" content="Author Danielle Stewart"/>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" href="_assets/img/favicon.png" type="image/x-icon" />

        <link rel="stylesheet" href="_assets/css/normalize.css">
        <link rel="stylesheet" href="_assets/css/style.css">
        <script src="_assets/js/vendor/modernizr-2.6.2.min.js"></script>

        <script src="_assets/js/jquery-1.11.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="_assets/js/jquery.flexslider.js"></script>
        <!-- bxSlider CSS file -->
        <link href="_assets/css/flexslider.css" rel="stylesheet" />
        <link href="_assets/css/jquery.share.css" rel="stylesheet" />

        <!-- Google Analytics -->  
	<?php include_once("analyticstracking.php") ?>

    </head>
    <body>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=215968053284";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="backgroundWrapper">
            <div id="wrapper">
                <div id="header">
                  <h1><a href="index.php">Danielle Stewart</a></h1>
                  <!-- <a href="index.php"><img src="_assets/img/logo.png" alt="Danielle Stewart"></a> -->
                </div>
                <div id="nav">
                    <ul id="mainNav">
                        <a href="index.php"><li class="<?php echo $if_home ?>">Home</li></a>
                        <li class="<?php echo $if_books ?> books"><a class="books-padding" href="books.php">Books</a>
                            <ul>
                              <li class="piper-nav-li"><a class="piper-nav" href="piper-anderson-series.php">Piper Anderson Series</a>
                                    <ul>
                                      <a href="piper-anderson-series.php#chasing-justice"><li>Chasing Justice </br><span class="italic">(Free)</span></li></a> 
                                      <a href="piper-anderson-series.php#cutting-ties"><li>Cutting Ties</li></a> 
                                      <a href="piper-anderson-series.php#choosing-christmas"><li>Choosing Christmas</li></a>
                                      <a href="piper-anderson-series.php#changing-fate"><li>Changing Fate</li></a>
                                      <a href="piper-anderson-series.php#finding-freedom"><li>Finding Freedom</li></a>
                                      <a href="piper-anderson-series.php#bettys-journal"><li>Betty's Journal</li></a>
                                      <a href="piper-anderson-series.php#settling-scores"><li>Settling Scores </br><span class="italic">(Coming Soon)</span></li></a>  
                                    </ul>
                              </li>
                              <li class="clover-nav-li"><a class="clover-nav" href="clover-series.php">Clover Series</a> 
                                  <ul>
                                      <a href="clover-series.php#the-hearts-of-clover"><li>Hearts of Clover <span class="italic">(Free)</span></li></a>
                                      <a href="clover-series.php#all-my-heart"><li>All My Heart <span class="italic">(Coming 4.5.2014)</span></li></a>
                                  </ul>
                              </li>
                              <a href="trailers.php"><li>Book Trailers</li></a> 
                            </ul>
                        </li>
                        <a href="about.php"><li class="<?php echo $if_about ?>">About</li></a>
                        <a href="contact.php"><li class="<?php echo $if_contact ?>">Contact</li></a>
                    </ul>
                </div>








