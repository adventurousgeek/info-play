<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>InfoPlay</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="final-styles.css">

  </head>
<body id="app-root">



    <?php require_once "svg-icons.php"; ?>


    <div id="site-loader" class="site-loader">
        <svg version="1.1" id="maze" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 38.3 38.3" style="enable-background:new 0 0 38.3 38.3;" xml:space="preserve">
               <use xlink:href="#icon-loader"></use>
           </svg>
        <ul class="loader">
            <li class="center"></li>
            <li class="item item-2"></li>
            <li class="item item-4"></li>
            <li class="item item-6"></li>
            <li class="item item-8"></li>
        </ul>
    </div>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-2">
                    <a class="off-canvas-menu" href="#"  data-toggle="modal" data-target="#main-menu">
                        <button type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-8">
                    <div class="site-logo">
                        <img src="assets/images/logo.png" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 hidden-xs">
                    <a class="btn btn-join-now" data-toggle="modal" data-target="#join-us-modal">Join Us</a>
                </div>
            </div>
        </div>
    </header>
