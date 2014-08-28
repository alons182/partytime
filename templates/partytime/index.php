<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.Puravida
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;


$itemid   = $app->input->getCmd('Itemid', '');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');

// Add Stylesheets
//$doc->addStyleSheet('templates/'.$this->template.'/css/normalize.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/animate.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/main.css');


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />
    <link href='http://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
     
     
</head>



 <body class="<?php echo ($itemid ? ' bgid-' . $itemid : '')?>">

        <header class="header">
                <a href="<?php echo $this->baseurl ?>" class="logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="Party Time" /></a>
                <div class="redes">
                    <a href="https://www.facebook.com/partytimecr" class="facebook icon icon-facebook" target="_blank"></a>
                    <a href="#" class="twitter icon icon-twitter"></a>
                    <a href="#" class="google icon icon-googleplus"></a>
                </div>
                <span class="globos"></span>
                <span class="cloud">
                    <span class="info">
                         <jdoc:include type="modules" name="cloud-info" style="none" />
                    </span>
                </span>
                <div id="btn_mobile"><span class="icon-menu"></span></div>
                <div class="cart">
                   <jdoc:include type="modules" name="cart" style="none" />
                </div>
                <div class="search">
                   <jdoc:include type="modules" name="search" style="none" />
                </div>
                <nav class="menu">
                    <jdoc:include type="modules" name="menu" style="none" />
                </nav>
                
            </header>
        <div class="wrapper">
            <?php if ($this->countModules('slider')) : ?>
                <section class="slider">
                    <jdoc:include type="modules" name="slider" style="none" />
                </section>
            <?php endif; ?>
            <section class="main">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                
                <?php if ($this->countModules('top-sellers')) : ?>
                    <section class="top-sellers">
                            <jdoc:include type="modules" name="top-sellers" style="none" />               
                    </section>
                 <?php endif; ?>
            </section>
            <footer>
                <div class="inner-footer">
                    <div class="column">
                        
                        <jdoc:include type="modules" name="menu-footer" style="none" />            
                        
                    </div>

                    <div class="column">
                        <jdoc:include type="modules" name="top-categories" style="none" />            
                    </div>

                   
                    <div class="column ubicacion">
                        <jdoc:include type="modules" name="location" style="none" />   
                    </div>
                </div>
                
                <p class="copyright">Copyright &copy; 2014</p>
                
                
            </footer>


        </div>
       
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.cycle2.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.cycle2.carousel.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.cycle2.loader.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->


        <jdoc:include type="modules" name="debug" style="none" />
    </body>

</html>
