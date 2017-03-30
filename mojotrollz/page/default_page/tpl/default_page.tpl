<!DOCTYPE html>
<html>
     <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="${meta_start_description}">
        <meta name="author" content="${meta_start_author}">
        <meta name="keywords" content="${meta_start_keywords}">
        <title>${title_start}</title>
        <meta name="fragment" content="!">
        <link rel="icon" href="./files/content/favicon.ico" type="image/x-icon"/>
        <style type="text/css">
            @font-face {        
                font-family: TrojanPro; 
                src: url(./files/content/TrajanPro-Regular.otf); 
            }
            body{
                background: url(./files/content/bg_brown_sun.jpg)fixed no-repeat;
                background-size: cover;
            }
            .mojotrollz_download_text{
                background: url(./files/content/download_client.png) no-repeat;
                background-size: cover;
            }
            #tapete{
                background: url(./files/content/main_holder_middle.png) repeat-y;
                background-size: contain;
                margin-top: 45px;
                padding-left: 15px;
                padding-right: 15px;
            }
        </style>
        ${css}
        ${js}
    </head>
    <body>
        <h1 class="fadeInDown animated lead mojotrollz_heading"><img class="img-responsive" title="mojotrollz.eu logo" alt="${mojotrollz_heading}" src="./files/content/mojotrollz_logo.png" width="100%"></h1>
        <div class="container">
            <div id="tapete" class="row">
                <!-- Navbar -->
                <div class="navbar navbar-inverse mojotrollz_nav" role="navigation">
                    <div id="content_home" class="navbar-header ontop">
                        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navigation">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand hidden-lg" href="#" style="text-align: center;"><b>${mojotrollz_mojotrollz}</b></a>-->
                    </div>
                    <div class="collapse navbar-collapse anchor" id="navigation">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active ontop"><a href="#content_home">${mojotrollz_mojotrollz}</a></li>
                            <li class="ontop"><a href="#!serverlist">${mojotrollz_servers}</a></li>
                            <li class="ontop"><a href="#!beta">${mojotrollz_beta}</a></li>
                            <!--<li><a href="#content_tshirts" onClick="">${mojotrollz_tshirts}</a></li>-->
                            <!--<li><a href="#content_addons">${mojotrollz_addons}</a></li>-->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="ontop"><a href="${link_twitch}" target="_blank"><i class="fa fa-twitch fa-lg"></i></a></li>
                            <li class="ontop"><a href="${link_facebook}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li class="ontop"><a href="${link_youtube}" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
                            <li class="ontop"><a href="#!donate"><i class="fa fa-usd fa-lg"></i></a></li>
                            <li class="ontop"><a href="#!account"><i class="glyphicon glyphicon-user"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Flexslider -->
                <div class="row-fluid">
                    <div class="col-md-12 mojotrollz_col">
                        <div class="flexslider mojotrollz_flexslider">
                            <ul class="slides">
                                <li><img alt="WoW Classic Vanilla Banner" src="./files/content/banner_mojotrollz_1.png" width="100%"></li>
                                <li style="display: none"><img alt="WoW The Burning Crusade Banner" src="./files/content/banner_mojotrollz_2.png" width="100%"></li>
                                <li style="display: none"><img alt="World of Warcraft Pandaria Banner" src="./files/content/banner_mojotrollz_3.png" width="100%"></li>
                                <li style="display: none"><img alt="The Struggle of our Community Banner" src="./files/content/banner_mojotrollz_4.png" width="100%"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="row-fluid">
                    <div id="content" class="col-md-12 mojotrollz_col mojotrollz_col_contentmain"></div>
                </div>
            </div>
            <!-- Content More -->
            <div class="row-fluid">
                <div id="content_more" class="col-md-12">
                    <div class="row">
                    <div class="col-md-4">
                        <a href="#content_home">${mojotrollz_mojotrollz}</a><br><br>
                        <a href="#!serverlist">${mojotrollz_servers}</a><br><br>
                        <a href="#!beta">${mojotrollz_beta}</a><br><br>
                        <a href="#!account"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp; ${mojotrollz_login}</a> / <a href="#!register"> REGISTER</a><br><br>
                        <!--<a href="#content_tshirts">${mojotrollz_tshirts}</a><br><br>-->
                        <!--<a href="#content_addons">${mojotrollz_addons}</a><br><br>-->
                    </div>
                    <div class="col-md-4">
                        <!--<a href="#!guild">GUILD PAGES</a><br><br>
                        <a href="#!gshirt">GUILD SHIRTS</a><br><br>-->
                        <a href="${link_twitch}" target="_blank"><i class="fa fa-twitch fa-lg"></i>&nbsp;&nbsp; TWITCH</a><br><br>
                        <a href="${link_facebook}" target="_blank"><i class="fa fa-facebook fa-lg"></i>&nbsp;&nbsp; FACEBOOK</a><br><br>
                        <a href="${link_youtube}" target="_blank"><i class="fa fa-youtube fa-lg"></i>&nbsp;&nbsp; YOUTUBE</a><br><br>
                        <a href="#!donate"><i class="fa fa-usd fa-lg"></i>&nbsp;&nbsp; DONATE</a><br><br>
                    </div>
                    <div class="col-md-4">
                        <a href="#!impressum">${mojotrollz_impressum}</a><br><br>
                        <a href="${link_webcraft}" target="_blank">${mojotrollz_webcraft}</a><br><br>
                        <a href="${link_slingit}" target="_blank">${mojotrollz_slingit}</a><br><br>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>