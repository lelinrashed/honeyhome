<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HoneyHome
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
  <!--<![endif]-->
  <head>
    <!-- meta character set -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Meta Description -->
    <meta name="description" content="Html Template for Builders and Constraction"/>
    <meta name="keywords"
      content="html template, honey home, honeyhome, realestate, construction, architecture, home builder"/>
    <meta name="author" content="PrismSpark"/>
    <!-- mobile configuration -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png"/>

    <!--font-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!--animate css-->
    <link rel="stylesheet" href="css/animate.css"/>
    <!--normalize css-->
    <link rel="stylesheet" href="css/style.css"/>

    <?php wp_head(); ?>
  </head>
  <body id="body" <?php body_class(); ?>>
    <!-- Navigation-->
    <nav class="main-nav dark stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo-->
        <div class="nav-logo-wrap local-scroll">
          <a href="index.html" class="logo">
          <img src="images/logo.png" alt="" />
          </a>
        </div>
        <div class="mobile-nav">
          <i class="fa fa-bars"></i>
        </div>
        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
          <ul class="clearlist">
            <!-- Item-->
            <li>
              <a href="index.html">HOME</a>
            </li>
            <!-- End Item -->
            <!-- Item-->
            <li>
              <a href="index.html#service">SERVICE</a>
            </li>
            <!-- End Item -->
            <!-- Item-->
            <li>
              <a href="index.html#about">ABOUT US</a>
            </li>
            <!-- End Item -->
            <!-- Item-->
            <li>
              <a href="index.html#project">PROJECT</a>
            </li>
            <!-- End Item -->
            <!-- Item-->
            <li>
              <a href="index.html#price">PRICE</a>
            </li>
            <!-- End Item -->
            <!-- Item With Sub -->
            <li>
              <a href="#" class="mn-has-sub">Pages <i class="fa fa-angle-down"></i></a>
              <!-- Sub Multilevel -->
              <ul class="mn-sub to-left mn-has-multi">
                <li class="mn-sub-multi">
                  <ul>
                    <li>
                      <a href="blog.html">BLOG</a>
                    </li>
                    <li>
                      <a href="singleblog.html">SINGLE BLOG</a>
                    </li>
                  </ul>
                </li>
                <li class="mn-sub-multi">
                  <ul>
                    <li>
                      <a href="shop.html">SHOP</a>
                    </li>
                    <li>
                      <a href="shop-details.html">SHOP DETAILS</a>
                    </li>
                  </ul>
                </li>
				<li class="mn-sub-multi">
                  <ul>
                    <li>
                      <a href="login.html">Login/Register <span class="label-new">New</span></a>
                    </li>
                    <li>
                      <a href="404.html">404 Page</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- End Sub Multilevel -->
            </li>
            <!-- End Item With Sub -->
            <!-- Item-->
            <li>
              <a href="index.html#contact">CONTACT</a>
            </li>
            <!-- End Item -->
            <!-- Divider -->
            <li><a>&nbsp;</a></li>
            <!-- End Divider -->
            <!-- Search -->
            <li>
              <a href="#" class="mn-has-sub"><i class="fa fa-search"></i> Search</a>
              <ul class="mn-sub">
                <li>
                  <div class="mn-wrap">
                    <form method="post" class="form">
                      <div class="search-wrap">
                        <button class="search-button animate" type="submit" title="Start Search">
                        <i class="fa fa-search"></i>
                        </button>
                        <input type="text" class="form-control search-field" placeholder="Search...">
                      </div>
                    </form>
                  </div>
                </li>
              </ul>
            </li>
            <!-- End Search -->  
          </ul>
        </div>
        <!-- End Main Menu -->
      </div>
    </nav>
    <!-- End Navigation-->
    <!--main site-content-->
    <main class="site-content">