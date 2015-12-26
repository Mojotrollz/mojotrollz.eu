<!DOCTYPE html>
<html>
     <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="${meta_description}">
        <meta name="author" content="${meta_author}">
        <title>${meta_title}</title>
        <meta name="fragment" content="!">
        <link rel="icon" href="./api.php?call=files&amp;cat=content&amp;id=favicon.ico" type="image/x-icon"/>
        <style type="text/css">
            @font-face {        
                font-family: TrojanPro; 
                src: url(./api.php?call=files&cat=content&id=TrajanPro-Regular.otf); 
            }
            body{
                background: url(./api.php?call=files&cat=content&id=bg_brown_sun.jpg)fixed no-repeat;
                background-size: cover;
            }
            .mojotrollz_nav{
                background: url(./api.php?call=files&cat=content&id=main_holder_middle.png) repeat-y;
                background-size: contain;
            }
            .mojotrollz_col{
                background: url(./api.php?call=files&cat=content&id=main_holder_middle.png) repeat-y;
                background-size: contain;
            }
            .mojotrollz_download_text{
                background: url(./api.php?call=files&cat=content&id=download_client.png) no-repeat;
                background-size: cover;
            }
        </style>
        ${css}
        ${js}
    </head>
    <body>
        <div class="container">
            <!-- Navbar -->
            <div class="navbar navbar-inverse mojotrollz_nav" role="navigation">
                <div id="content_home" class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse anchor">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active" style="z-index: 3;"><a href="#content_home">${mojotrollz_mojotrollz}</a></li>
                        <li style="z-index: 3;"><a href="#content_servers">${mojotrollz_servers}</a></li>
                        <li style="z-index: 3;"><a href="#!beta">${mojotrollz_beta}</a></li>
                        <!--<li><a href="#content_tshirts" onClick="">${mojotrollz_tshirts}</a></li>-->
                        <!--<li><a href="#content_addons">${mojotrollz_addons}</a></li>-->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li style="z-index: 3;"><a href="${link_facebook}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li style="z-index: 3;"><a href="${link_youtube}" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
                        <li style="z-index: 3;"><a href="#!login"><i class="glyphicon glyphicon-user"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Flexslider -->
            <div class="row-fluid">
                <div class="col-md-12 mojotrollz_col">
                    <h1 class="fadeInDown animated lead mojotrollz_heading"><img alt="${mojotrollz_heading}" src="./api.php?call=files&amp;cat=content&amp;id=mojotrollz_logo.png" width="650"></h1>
                    <div class="flexslider mojotrollz_flexslider">
                        <ul class="slides">
                            <li><img alt="slider_image_01.jpg" src="./api.php?call=files&amp;cat=content&amp;id=banner_mojotrollz_1.gif" width="100%"></li>
                            <li style="display: none"><img alt="slider_image_02.jpg" src="./api.php?call=files&amp;cat=content&amp;id=banner_mojotrollz_2.gif" width="100%"></li>
                            <!--<li style="display: none"><img alt="slider_image_03.jpg" src="./api.php?call=files&amp;cat=content&amp;id=slider_image_03.jpg" width="100%"></li>-->
                            <li style="display: none"><img alt="slider_image_03.jpg" src="./api.php?call=files&amp;cat=content&amp;id=banner_mojotrollz_3.gif" width="100%"></li>
                            <li style="display: none"><img alt="slider_image_03.jpg" src="./api.php?call=files&amp;cat=content&amp;id=banner_mojotrollz_4.gif" width="100%"></li>
                            <!--<li style="display: none"><img alt="slider_image_03.jpg" src="./api.php?call=files&amp;cat=content&amp;id=slider_image_06.jpg" width="100%"></li>
                            <li style="display: none"><img alt="slider_image_03.jpg" src="./api.php?call=files&amp;cat=content&amp;id=slider_image_07.jpg" width="100%"></li>
                            <li style="display: none"><img alt="slider_image_03.jpg" src="./api.php?call=files&amp;cat=content&amp;id=slider_image_08.png" width="100%"></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div id="content"></div>
            <!-- Content More -->
            <div class="row-fluid">
                <div id="content_more" class="col-md-12">
                    <div class="col-md-4">
                        <a href="#content_home">${mojotrollz_mojotrollz}</a><br><br>
                        <a href="#content_servers">${mojotrollz_servers}</a><br><br>
                        <!--<a href="#content_tshirts">${mojotrollz_tshirts}</a><br><br>-->
                        <!--<a href="#content_addons">${mojotrollz_addons}</a><br><br>-->
                    </div>
                    <div class="col-md-4">
                        <a href="#!login">${mojotrollz_login}</a><br><br>
                        <!--<a href="#!login(register)">REGISTER</a><br><br>
                        <a href="#!guild">GUILD PAGES</a><br><br>
                        <a href="#!gshirt">GUILD SHIRTS</a><br><br>-->
                        <a href="${link_facebook}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>&nbsp;&nbsp;
                        <a href="${link_youtube}" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#!impressum">${mojotrollz_impressum}</a><br><br>
                        <a href="${link_webcraft}" target="_blank">${mojotrollz_webcraft}</a><br><br>
                        <a href="${link_slingit}" target="_blank">${mojotrollz_slingit}</a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>