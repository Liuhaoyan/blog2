<?php
$this->load->helper("url");
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人网站</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet"  type="text/css" href="css/normalize.css">
    <link rel="stylesheet"  type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="css/index.css">
    <script>
        window.addEventListener("load",function(){
            setTimeout(hideURLbar,0);

        },false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>
</head>
<body>
<div class="responsive-header visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-section">
                    <div class="profile-image">
                        <img src="img/profile.jpg" alt="Gloria">
                    </div>
                    <div class="profile-content">
                        <h3 class="profile-title">Gloria 柳昊妍</h3>
                        <p class="profile-description">黑龙江大学</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
        <div class="main-navigation responsive-menu">
            <ul class="navigation">
                <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>Skills</a></li>
                <li><a href="#projects"><i class="fa fa-newspaper-o"></i>Projects</a></li>
                <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- SIDEBAR -->
<div class="sidebar-menu hidden-xs hidden-sm">
    <div class="top-section">
        <div class="profile-image">
            <img src="img/profile.jpg" alt="Gloria">
        </div>
        <h3 class="profile-title">Gloria</h3>
        <p class="profile-description">黑龙江大学</p>
    </div> <!-- top-section -->
    <div class="main-navigation">
        <ul class="navigation">
            <li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
            <li><a href="#about"><i class="fa fa-pencil"></i>Skills</a></li>
            <li><a href="#projects"><i class="fa fa-paperclip"></i>Projects</a></li>
            <li><a href="#contact"><i class="fa fa-link"></i>Contact Me</a></li>
        </ul>
    </div> <!-- .main-navigation -->
    <div class="social-icons">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
    </div> <!-- .social-icons -->
</div> <!-- .sidebar-menu -->

<!-- <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费模板</a></div> -->

<div class="banner-bg" id="top">
    <div class="banner-overlay"></div>
    <div class="welcome-text">
        <h2>Simple Design | Personal Portfolio</h2>
        <h5>This is a mobile friendly layout with Bootstrap v3.3.1 framework. Maecenas eu ante at nunc posuere fringilla sit amet non dolor. Proin condimentum fermentum nunc.</h5>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="fluid-container">

        <div class="content-wrapper">

            <!-- skills -->
            <div class=" skills-content" id="about">
                <div class="text-stitle">
                    <div>skills</div>
                </div>
                <span class="learn-skills">JS:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 80%"></div>
                    <span class="sr-only">80% Complete</span>
                </div>

                <span class="learn-skills">JQuery:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 70%"></div>
                    <span class="sr-only">70% Complete</span>
                </div>


                <span class="learn-skills">PHP:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width:55%"></div>
                    <span class="sr-only">55% Complete</span>
                </div>


                <span class="learn-skills">NodeJs:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 60%"></div>
                    <span class="sr-only">60% Complete</span>
                </div>


                <span class="learn-skills">Angular:</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" ariavaluemax="100" style="width: 45%"></div>
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
            <hr>
            <!--skills end-->

            <!-- PROJECTS -->
            <div class="page-section" id="projects">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">PHOTOS OF WHAT I DO</h4>
                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                    </div>
                </div>
                <div class="row projects-holder">
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/1.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/2.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/3.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/4.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/5.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-item">
                            <img src="img/6.jpg" alt="">
                            <div class="project-hover">
                                <div class="inside">
                                    <h5><a href="#">Pellentesque porta ligula</a></h5>
                                    <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .projects-holder -->
            </div>
            <hr>

            <!-- CONTACT -->
            <div class="page-section" id="contact">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="widget-title">PLACE TO TALK WITH ME</h4>
                        <p>Vestibulum ac iaculis erat, in semper dolor. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="post" class="contact-form">
                        <fieldset class="col-md-4 col-sm-6">
                            <input type="text" id="your-name" placeholder="Your Name...">
                        </fieldset>
                        <fieldset class="col-md-4 col-sm-6">
                            <input type="email" id="email" placeholder="Your Email...">
                        </fieldset>
                        <fieldset class="col-md-4 col-sm-12">
                            <input type="text" id="your-subject" placeholder="Subject...">
                        </fieldset>
                        <fieldset class="col-md-12 col-sm-12">
                            <textarea name="message" id="message" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                        </fieldset>
                        <fieldset class="col-md-12 col-sm-12">
                            <input type="submit" class="button big default" value="Send Message">
                        </fieldset>
                    </form>
                </div> <!-- .contact-form -->
            </div>
            <hr>

            <div class="row" id="footer">
                <!--  <div class="col-md-12 text-center">
                     <p class="copyright-text">Copyright &copy; 2084 Company Name | More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
                 </div> -->
            </div>

        </div>

    </div>
</div>
<script src="<?php echo base_url();?>js/vendor/modernizr-2.6.2.min.js"></script>
<script src="<?php echo base_url();?>js/vendor/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/min/plugins.min.js"></script>
<script src="<?php echo base_url();?>js/min/main.min.js"></script>

</body>
</html>


