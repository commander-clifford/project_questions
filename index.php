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
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <div class="header-container">
            <header class="wrapper clearfix">

                <h1 id="logo_title" class="title">
                    <a href="index.php?page=home">Questions</a>
                </h1>

                <div class="userDisplay">
                    <span class="userThumbnailmini"></span>
                    <span class="userName">Log In</span>
                    <a href="#" class="userProfileButton"></a>
                </div>
                
                <nav class="utility">
                    <ul>
                        <li><a href="index.php?page=notifications">Notifications</a></li>
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

                case 'notifications':
                    include('screens/notifications.php');
                break;
                
                default:
                    include('screens/home.php');
            }
        ?>
        
        </div> <!-- #main-container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>
