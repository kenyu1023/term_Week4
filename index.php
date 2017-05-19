<?php
$page = 'index';
include "partials/header.php";
?>
<div class="page-top">
    <div class="video-overlay">
        <div class="video-fit">
            <video id="top-vid" autoplay loop muted class="hide-for-small-only">
                <source src="video/Stunning New York City Skyline at Night - HD_edit.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="row">
        <?php
        if (isset($page)) {
            echo "<img src='img/logo.svg' class='logo' />";
        }
        ?>
    </div>
</div>
<!--========= page main section =================-->
<div class="main">
    <!--<div class="small-12 medium-12 large-12 columns">-->
    <div class="main-first-section">
        <div class="main-first-section-para">
            <p class="bridge animatable fadeIn">
                Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit,
                sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>

    <!--============================-->

    <div class="main-second-section">

        <div class="about-para">
            <div class="about-para-intro animatable fadeInUp">
                <h4>Lorem ipsum</h4>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="small-12 medium-12 large-12 columns">
                <div class="small-4 medium-4 large-4 columns">
                    <div class="about-icon-section-top animatable fadeIn">
                        <i class="fa fa-3x fa-book center" aria-hidden="true"></i>
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="small-4 medium-4 large-4 columns">
                    <div class="about-icon-section-top">
                        <i class="fa fa-3x fa-university" aria-hidden="true"></i>
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="small-4 medium-4 large-4 columns">
                    <div class="about-icon-section-top">
                        <i class="fa fa-3x fa-smile-o" aria-hidden="true"></i>
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="small-12 medium-12 large-12 columns">
                <div class="small-4 medium-4 large-4 columns">
                    <div class="about-icon-section-bottom animatable fadeIn">
                        <i class="fa fa-3x fa-plane" aria-hidden="true"></i>
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="small-4 medium-4 large-4 columns">
                    <div class="about-icon-section-bottom">
                        <i class="fa fa-3x fa-thumbs-up" aria-hidden="true"></i>
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

                <div class="small-4 medium-4 large-4 columns">
                    <div class="about-icon-section-bottom">
                        <i class="fa fa-3x fa-cogs" aria-hidden="true"></i>
                        <h5>Lorem ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="main-third-section">      
<!--         <div class="for-small-background show-for-small-only">-->
        <div class="small-12 medium-6 large-6 columns">
            <div class="about-author">
                <h3>Test lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                </p>
                
                <h3>Test lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                </p>
                
                <h3>Test lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                </p>
                
                 <h3>Test lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua.
                </p>             
            </div>
        </div>
<!--             </div>-->
        <div class="small-12 medium-6 large-6 columns hide-for-small-only author">
            <img src="img/girl.png" alt="author" class="animatable fadeInRight"/>
        </div>
    
    </div>



    <!--====================================-->
    <!--</div>-->
<!--    <div class="first-row">
        <a href="#">
            <div class="small-6 columns">
                <div class="first-row-left">
                    <h3>test</h3>      
                </div>
            </div>
        </a>
        <a href="#">
            <div class="small-6 columns">
                <div class="first-row-right">
                    <h3>test</h3>
                </div>
            </div>
        </a>
    </div>

    <div class="second-row">
        <a href="#">
            <div class="small-12 medium-12 large-12 columns">
                <div class="second-row-link">
                    <h3>lorem ipsum</h3>
                </div>
            </div>
        </a>
    </div>-->

    <div class="fourth-row">
        <a href="index.php">
            <div class="small-4 columns">
                <div class="fourth-row-left">
                    <h3>Home</h3>
                </div>
            </div>
        </a>
        <a href="works.php">
            <div class="small-4 columns">
                <div class="fourth-row-center">
                    <h3>Books</h3>
                </div>
            </div>
        </a>
        <a href="contact.php">
            <div class="small-4 columns">
                <div class="fourth-row-right">
                    <h3>Contact</h3>
                </div>
            </div>
        </a>
    </div>
</div>


<?php include "partials/footer.php"; ?>