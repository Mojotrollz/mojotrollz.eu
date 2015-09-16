<!DOCTYPE html>
<html>
     <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="${meta_description}">
        <meta name="author" content="${meta_author}">
        <link rel="icon" href="./api.php?call=files&cat=content&id=favicon.ico" type="image/x-icon"/>
        ${css}
        ${js}
        <style type="text/css">
            @font-face {        
                font-family: TrojanPro; 
                src: url(./api.php?call=files&cat=content&id=TrajanPro-Regular.otf); 
            }
        </style>
    </head>
    <body style="background: url(./api.php?call=files&cat=content&id=bg_brown_sun.jpg)fixed repeat;">
        <div class="container">
            <nav class="navbar navbar-inverse" style="margin-top: 45px; margin-bottom: 0;padding-left: 0px; padding-right: 15px;" role="navigation" id="mojotrollz_nav">
                <div id="home_content" class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse anchor">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a class="mojotrollz_scroll" href="#mojotrollz_client">MOJOTROLLZ</a></li>
                        <li><a class="mojotrollz_scroll" href="#mojotrollz_server" onClick="">SERVERS</a></li>
                        <li><a class="mojotrollz_scroll" href="#mojotrollz_tshirt" onClick="">T-SHIRTS</a></li>
                        <li><a class="mojotrollz_scroll" href="#mojotrollz_addons">ADDONS</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.facebook.com/pages/Mojo-WoW/204351992944865" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href="https://www.youtube.com/user/Mojotrolltribe/videos" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
                        <li><a href="#!login"><i class="glyphicon glyphicon-user"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="row-fluid row_centered clearfix" id="mojotrollz_client_row" style="padding-bottom: 10px; background-image: url(./api.php?call=files&cat=content&id=main_holder_middle.png);  background-size: contain; background-repeat: repeat-y;">
                <div class="col-md-12 row_centered mojotrollz_client" style="padding-left: 29px; padding-right: 29px;">
                    <h1 id="mojotrollz_title" class="fadeInDown animated lead" style="width: 100%; z-index: 2;color: #B7B7B7; font-size: 90px; text-align: center; top: 15px; position: absolute; visibility: visible; animation-delay: 0.9s; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">MOJOTROLLZ.EU</h1>
                    <div class="flexslider">
                        <ul class="slides">
                            <li><img alt="slider_image_01.jpg" src="./api.php?call=files&cat=content&id=slider_image_01.jpg" width="100%"></li>
                            <li style="display: none"><img alt="slider_image_02.jpg" src="./api.php?call=files&cat=content&id=slider_image_02.jpg" width="100%"></li>
                            <li style="display: none"><img alt="slider_image_03.jpg" src="./api.php?call=files&cat=content&id=slider_image_03.jpg" width="100%"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" style="padding-bottom: 20px; background-image: url(./api.php?call=files&cat=content&id=main_holder_middle.png);  background-size: contain; background-repeat: repeat-y;"></div>
            ${content_more}
        </div>
    </body>
</html>