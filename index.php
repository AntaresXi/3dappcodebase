<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzk7jvx.css">
    <link rel="stylesheet" href="css/custom.css">
    <script type="text/javascript" src="https://www.x3dom.org/download/x3dom.js"></script>
    <link rel="stylesheet" href="css/custom.css" src="https://www.x3dom.org/download/x3dom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/2.1.0/showdown.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <title>Coca Cola Journey</title>
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">

</head>

<body>
<!--NAVBAR-->
    <nav class="navbar navbar-expand-sm fixed-top" id="navbar_coca_cola">
        <div class="container-fluid" id="fixed_navbar">

            <!--Brand-->
            <div class="logo">
                <a class="navbar-brand" id="navHome" href="#" onclick="showHome()">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>

            <!--Hamburger icon-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">   
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link collapsible_nav_item" id="navHomeRight" href="#" onclick="showHome()">Home</a>
                    </li>            
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="Yuxuan Xiao" data-content="YuxuanXiao@sussex.ac.uk">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-menu-end" href="#" id="navbardrop" data-toggle="dropdown">Drinks</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item collapsible_nav_item" href="#" onClick="switchModelView('cola');" >Coca Cola</a>
                            <a class="dropdown-item collapsible_nav_item" href="#" onClick="switchModelView('sprite');">Sprite</a>
                            <a class="dropdown-item collapsible_nav_item" href="#" onClick="switchModelView('pepper');">Dr Pepper</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsible_nav_item" id="navAbout" href="#" onclick="showAbout()">About</a>
                    </li>
                </ul>
            </div>
        </div>       
    </nav>

<!-- PAGE 1: Landing page-->
    <div id="home" class="container-fluid main_contents">
        <!--CAROUSEL-->
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel_image" id="img_one">
                        <div class="col-xs-12 col-sm-4 main_text">
                            <div><h1 id="slideOneTitle"></h1></div>
                            <div><h3 id="slideOneSubtitle"></h3></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel_image" id="img_two">
                        <div class="col-xs-12 col-sm-4 main_text">
                            <div><h1 id="slideTwoTitle"></h1></div>
                            <div><h3 id="slideTwoSubtitle"></h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--MID PAGE DIVIDER-->
        <hr>
        <div class="col-sm-12">
            <h1 id="our_brands_header">
                OUR BRANDS
            </h1>
        </div>
        <hr>
            
        <!--ROW OF DRINKS CARDS-->
        <div class="row">
            
            <!--COCA COLA-->
            <div class="col-sm-4">
                <div class="card borderless">
                    <a href="#" class="home_card_img">
                        <img id="cokeCardImage" class="img-fluid" alt="coca cola logo">
                    </a>
                    <div class="card-body">
                        <div class="card-title" id="cokeCardTitle"></div>
                        <div class="card-text" id="cokeCardDescription"></div>
                        <a id="cokeCardLink" href="#" class="btn btn-sm btn-outline-primary">Find out more...</a>
                    </div>
                </div>
            </div>

            <!--SPRITE-->
            <div class="col-sm-4">
                <div class="card borderless">
                    <a href="#" class="home_card_img">
                        <img id="spriteCardImage" class="img-fluid" alt="sprite logo">
                    </a>
                    <div class="card-body">
                        <div class="card-title" id="spriteCardTitle"></div>
                        <div class="card-text" id="spriteCardDescription"></div>
                        <a id="spriteCardLink" href="#" class="btn btn-sm btn-outline-primary">Find out more...</a>
                    </div>
                </div>
            </div>

            <!--DR PEPPER-->
            <div class="col-sm-4">
                <div class="card borderless">
                    <a href="#" class="home_card_img">
                        <img id="pepperCardImage" class="img-fluid" alt="dr pepper logo">
                    </a>
                    <div class="card-body">
                        <div class="card-title" id="pepperCardTitle"></div>
                        <div class="card-text" id="pepperCardDescription"></div>
                        <a id="pepperCardLink" href="#" class="btn btn-sm btn-outline-primary">Find out more...</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!--PAGE 2: Product Page contents-->
    <div id="modelDiv" class="container-fluid main_contents" style="display:none;">
        <h1 id="modelTitle"></h1>
        <hr>
        <div class="row">
            <!--LHS column: 3D viewer and gallery-->
            <div class="col-sm-8">
                <div class="card text-left" id="viewer_3d">
                    <div class="card-body">
                        <div id="modelStyle">
                            <x3d id="x3d_viewer">
                                <scene>
                                    <transform id="modelViewer"></transform>
                                </scene>
                            </x3d>
                        </div>
                    </div>
                    <!--Image gallery-->
                    <div class="card gallery">
                        <div id="image_gallery"></div>
                    </div>
                    <div id="gallery"></div>
                </div>
            </div>


            <!--RHS column: buttons and description-->
            <div class= "col-sm-4" id="interaction">
                <div>
                    <ul class = "nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="modelOneLabel" href="#" onClick="showModelOne();" ></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="modelTwoLabel" href="#" onClick="showModelTwo();"></a>
                        </li>
                    </ul>

                </div>
                <!-- Model Description -->
                <div class="card description">
                    <div class="card-body">
                        <div id="modelDescription"></div>
                        <a href="#" class="btn btn-outline-primary" id="buyURL">Buy</a>
                    </div>
                </div>

                <!-- Interaction buttons -->
                <div class="card">
                    <div class="card-body">
                        <h6>Animation options
                            <div class="btn-group btn-group-toggle">
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="spin();">Play</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="stopRotation();">Pause</a>
                            </div>                            
                        </h6>
                        <hr>
                        <h6>Camera views 
                            <div class="btn-group btn-group-toggle">
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraFront();">Front</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraBack();">Back</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraTop();">Top</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="cameraBottom();">Bottom</a>
                            </div>
                        </h6>
                        <hr>                    
                        <h6>Render options
                            <div class="btn-group btn-group-toggle">
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="setRenderView(1);">Vertex</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="setRenderView(2);">Wire</a>
                                <a href="#" class="btn btn-sm btn-outline-primary btn-responsive camera-font" onClick="setRenderView(0);">Default</a>
                            </div>
                        </h6>
                    </div>
                </div>
            </div>


        </div>
    </div>

<!-- PAGE3: Information page for assessment -->
    <div id="aboutPage" class="container-fluid main_contents" style="display:none;">
        <div class="row">
            <div class="card about">
                <div class="card-body">
                    <div id="markdown-content"></div>
                </div>

            </div>
        </div>
        
    </div>
    <br>

<!-- FOOTER -->
    <nav class="navbar navbar-expand-sm footer container-fluid">
        <div class="container-fluid">
            <div class="navbar-text float-left copyright">
                <span>2023 Web 3D Applications</span>
            </div>
            <div class="navbar-text float-right social">
                <a href="https://www.facebook.com/Coca-Cola/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/CocaCola"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/cocacola/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/user/cocacola"><i class="fa-brands fa-youtube"></i></a>

            </div>
        </div>
    </nav>






    <!-- <script src="assets/font_awesome/js/all.js"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script   src="https://code.jquery.com/jquery-3.6.4.min.js"   
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="   
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="scripts/js/pageController.js"></script>
    <script src="scripts/js/modelInteractions.js"></script>



</body>

</html>