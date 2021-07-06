<?php 
$banner = $this->AuthModel->fetch_main_page('service_page');?>
<section id="inner-hero">
        <div class="carousel-item active" style="background-image: url(<?php echo $banner->banner_url?>)">
            <div class="carousel-container">
                <div class="container">
                    <p class="inner-hero-ser-heading">
                    <?php echo $banner->banner_top1_heading ?>
                    </p>
                    <h2><?php echo $banner->banner_top2_heading ?></h2>
                    <p><?php echo $banner->banner_top3_heading ?> </p>
                    <a href="#about" class="btn-get-started  scrollto">Contact Us</a>
                </div>
            </div>
        </div>
    </section>    
    <!-- End Hero -->
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services ">
            <div class="container">
                <div class="inner-section-title">
                    <p><?php echo $banner->section2_heading ?></p>
                </div>
                <header class="section-header border-left-2">
                    <p>
                        <span class="section-header-sub"><?php echo $banner->section_content ?>
                        </span>
                    </p>
                    
                </header>
            </div>
        </section>

        <section id="inner-service-pg" class="inner-service-pg section-bg">
            <?php echo $banner->service_section?>
            <div class="text-center">
                <a href="<?=base_url('contact-us');?>" class="cta-btn get-in-touch">Get In Touch</a>
            </div>
        </section>
        <!-- End Services Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="service-left-right" class="service-left-right why-us-top-pad-100">
            <div class="container-fluid" >

                <div class="row">

                    <div class="col-lg-6 align-items-stretch video-box"
                        style='background-image: url("<?php echo $banner->f_sidepanel_imageurl?>");'>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3 style="margin-bottom: 10px;"><?php echo $banner->f_sidepanel_heading?></h3>
                        </div>

                        <div class="accordion-list">
                            <p class="service-left-right-content-p">
                            <?php echo $banner->f_sidepanel_content?>
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section id="service-left-right" class="service-left-right  why-us-bottom-pad-100">
            <div class="container-fluid" >

                <div class="row">
                    <div class="col-lg-6 align-items-stretch video-box mobile-view-display"
                    style='background-image: url("<?php echo $banner->s_sidepanel_imageurl?>");'>
                </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3 style="margin-bottom: 10px;"><?php echo $banner->s_sidepanel_heading?></h3>
                        </div>

                        <div class="accordion-list">
                            <p class="service-left-right-content-p">
                            <?php echo $banner->s_sidepanel_content?>
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-6 align-items-stretch video-box laptop-view-display"
                        style='background-image: url("<?php echo $banner->s_sidepanel_imageurl?>");'>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Search Section ======= -->
        <section id="search" class="search search-global">
            <div class="search-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h4>Expand Globally With Confidence</h4>
                            <p>Select a country you want to build your team</p>
                        </div>
                        <div class="col-lg-6">
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End Search Section ======= -->
        <!-- <br><br><br> -->
        <!-- ======= What More Section ======= -->
        <section id="whats_more" class="search search-global" style="padding: 40px 0px;">

            <div class="row justify-content-center">

                <div class="col-lg-6 whats-more-box">
                    <h4 class="what-more-heading">With Globalization Solutions !!</h4>

                    <ul class="what-more-ul">
                        <li class="what-more-li">Start operating in new countries in as little as 48 hours.</li>
                        <li class="what-more-li">Global expansion without setting a local entity.</li>
                        <li class="what-more-li">Focus on expansion without wasting time on managing compliances.
                        </li>
                        <li class="what-more-li">Managing and monitoring your teams with our intuitive cloud
                            platform.
                        </li>
                        <li class="what-more-li">24/7 customer support.</li>
                        <li class="what-more-li">Save up to 60% on traditional expansion costs.</li>
                    </ul>

                    <a class="cta-btn get-in-touch"  href="#">Request Proposal</a>

                </div>
                <div class="col-lg-6">
                </div>

            </div>

        </section>
        <!-- End What More Section -->
