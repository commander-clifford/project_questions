<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <div class="header-container regShadow">
            <header class="wrapper clearfix">

                <h1 class="title"><a href="index.php?page=home">Questions</a></h1>

                <div class="userDisplay">
                    <span class="testBox userThumbnailmini"></span>
                    <span class="testBox userName">USERNAME</span>
                    <span class="testBox userProfileButton"></span>
                </div>
                
                <nav class="utility">
                    <ul>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="index.php?page=browse">Browse</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">

            <?php 
            //logic to load the correct page contents.
            //URI will look like domain/index.php?page=something
            switch( $_GET['page'] ){
                case 'home':
                    include('screens/home.php');
                break;

                case 'browse':
                    include('screens/browse.php');
                break;
                
                default:
                    include('screens/home.php');
            }
        ?>
        
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
