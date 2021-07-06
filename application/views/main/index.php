<?php
$banner = $this->AuthModel->fetch_main_page('header_section');
$banner2 = $this->AuthModel->fetch_main_page('banner_section');
$testinomial = $this->AuthModel->fetch_main_page('testinomial');
?>
<section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(<?php echo $banner2->banner_url ?>)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2><?php echo $banner2->banner_heading; ?></h2>
                            <p><?php echo $banner2->banner_content; ?></p>
                            <a href="<?=base_url('contact-us');?>" class="btn-get-started scrollto">Contact Us</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="hero-service">
                <div class="section-title">
                    <p><?php echo $banner2->service_heading; ?> 1</p>
                </div>
                <header class="section-header  mb-20">
                    <p class="event-heading-index"><span><?php echo $banner2->service_content; ?></span></p>
                </header>
                <?php //echo $banner2->add_service_html; ?>
            </div>
            <div class="text-center mt-30">
                <a href="<?=base_url('service');?>" class="cta-btn get-in-touch">Get In Touch</a>
            </div>

        </section>
        <!-- End Services Section -->
        <!-- ======= Counts Section ======= -->
        <section id="our_mission" class="search search-global ">
            <div class="search-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6 our-mission-box">
                            <h4 class="our-mission-heading">About Us</h4>
                            <p><?php echo $banner2->about_us_content	; ?></p>

                            <a class="cta-btn get-in-touch" href="<?=base_url('about-us');?>">Read More</a>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="services section-bg">
            <div class="container">
                <div class="section-title">
                    <p>What Makes Globalization Solutions Different?</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="service-box ">
                            <div class="service-box-content-height">
                                <a class="logo mr-auto">
                                    <img src="assets/img/service/svg/global-expansion.svg" alt="" width="60"
                                        class="img-fluid mb-20 mt-10"></a>
                                <h3>Expedite Global Expansion </h3>
                                <p class="p-color2">With Globalization Solution’s Strong global presence, companies can
                                    quickly
                                    start their business operations in any country worldwide.</p>
                            </div>
                            <div class="text-center">
                                <a class="cta-btn get-in-touch" href="#">Read More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="service-box ">
                            <div class="service-box-content-height">
                                <a class="logo mr-auto">
                                    <img src="assets/img/service/svg/global-talent.svg" alt="" width="60"
                                        class="img-fluid mb-20 mt-10"></a>
                                <h3>Hire Market's Best Talent</h3>

                                <p class="p-color2">Simplify your overseas hiring with professional assistance from
                                    experts at Globalization Solutions.
                                </p>
                            </div>
                            <div class="text-center">
                                <a class="cta-btn get-in-touch" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="service-box ">
                            <div class="service-box-content-height">
                                <a class="logo mr-auto">
                                    <img src="assets/img/service/svg/global-hr.svg" width="60" alt=""
                                        class="img-fluid mb-20 mt-10"></a>
                                <h3>Unrivaled Expertise</h3>
                                <p class="p-color2">The best way to streamline business operation is to rely on
                                    expertise. </p>
                            </div>
                            <div class="text-center">
                                <a class="cta-btn get-in-touch" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="service-box ">
                            <div class="service-box-content-height">
                                <a class="logo mr-auto">
                                    <img src="assets/img/service/svg/third-party.svg" width="70" alt=""
                                        class="img-fluid  mt-10"></a>
                                <h3 style="margin-top: 12px;">No Third Party Agencies. </h3>
                                <p class="p-color2">Your work will be entirely handled by us, we will be looking into
                                    your business matters, understanding your protocols.</p>
                            </div>
                            <div class="text-center">
                                <a class="cta-btn get-in-touch" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->
        <!-- ======= Maps Section ======= -->
        <section id="map-section" class="map-section">
            <div class="container">
                <div class="map-section-info-block text-center">
                    <div class="section-title">
                        <p>Our Global Reach</p>
                    </div>
                    <p class="map-text-info text-section wow fadeInUp" style="visibility: visible;">
                        Compliantly hire contractors and employees in 170+ countries around the world. No matter where
                        your workforce lives, you're covered. </p>
                    <a class="map-link" href="our-global-reach.html"  style="display:none;"target="">
                        Find More </a>
                </div>

            </div>
            <div class="animation-holder">
                <div class="earth">
                    <div class="animation-container">
                        <object class="map-image" type="image/svg+xml" data="assets/img/maps/map.svg">
                        </object>
                        <!--America-->
                        <div class="continets america-continent">
                            <img class="north-america" src="assets/img/maps/North-America.svg" alt="North America"
                                style="opacity: 0;">
                            <img class="central-america" src="assets/img/maps/Central-America.svg" alt="Central America"
                                style="opacity: 0;">
                            <img class="south-america" src="assets/img/maps/South-America.svg " alt="South America"
                                style="opacity: 0;">
                            <!--na-pin-->
                            <div class="na-pin wow fadeIn" data-wow-delay="0.5s"
                                style="visibility: visible; animation-delay: 0.5s;">
                                <div class="pin-effect pulse-animation"></div>
                                <div class="countries-holder-na" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                                <div class="tippy-popper" role="tooltip" id="tippy-1" tabindex="-1" x-placement="bottom"
                                    style="z-index: 9999; visibility: hidden; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(425px, 2510px, 0px);">
                                    <div class="tippy-tooltip map-theme" data-size="large" data-animation="perspective"
                                        data-state="hidden" data-interactive=""
                                        style="transition-duration: 275ms; bottom: 0px;">
                                        <div class="tippy-arrow" style="left: 181px;"></div>
                                        <div class="tippy-content" data-state="hidden"
                                            style="transition-duration: 275ms;">
                                            <div class="country-column-na" id="north-america">
                                                <div class="country">
                                                    <div class="top-head-country">
                                                        <h3 class="map-tooltip-title">
                                                            North America </h3>
                                                        <div class="link-block">
                                                            <a class="map-link" href="" target="">
                                                                View Our Full Coverage </a>
                                                        </div>
                                                    </div>
                                                    <div class="flag-block">
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Canada.png)">
                                                            </div>
                                                            <div class="name_country" data-country="1">
                                                                Canada </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Jamaica.png)">
                                                            </div>
                                                            <div class="name_country" data-country="2">
                                                                Jamaica </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Mexico.png)">
                                                            </div>
                                                            <div class="name_country" data-country="3">
                                                                Mexico </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Puerto_Rico.png)">
                                                            </div>
                                                            <div class="name_country" data-country="4">
                                                                Puerto Rico </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/United_States_of_America.png)">
                                                            </div>
                                                            <div class="name_country" data-country="5">
                                                                United States </div>
                                                        </div>
                                                    </div>
                                                    <div class="describe-block"></div>
                                                </div>
                                                <!--country-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--ca-pin-->
                            <div class="ca-pin wow fadeIn" data-wow-delay="0.6s"
                                style="visibility: visible; animation-delay: 0.6s;">
                                <div class="pin-effect"></div>
                                <div class="countries-holder-ca" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                                <div class="tippy-popper" role="tooltip" id="tippy-2" tabindex="-1" x-placement="bottom"
                                    style="z-index: 9999; visibility: hidden; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(448px, 2602px, 0px);">
                                    <div class="tippy-tooltip map-theme" data-size="large" data-animation="perspective"
                                        data-state="hidden" data-interactive=""
                                        style="transition-duration: 275ms; bottom: 0px;">
                                        <div class="tippy-arrow" style="left: 181px;"></div>
                                        <div class="tippy-content" data-state="hidden"
                                            style="transition-duration: 275ms;">
                                            <div class="country-column-ca" id="central-america">
                                                <div class="country">
                                                    <div class="top-head-country">
                                                        <h3 class="map-tooltip-title">
                                                            Central America </h3>
                                                        <div class="link-block">
                                                            <a class="map-link" href="" target="">
                                                                View our full coverage </a>
                                                        </div>
                                                    </div>
                                                    <div class="flag-block">
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Bahamas.png)">
                                                            </div>
                                                            <div class="name_country" data-country="1">
                                                                Bahamas </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Barbados.png)">
                                                            </div>
                                                            <div class="name_country" data-country="2">
                                                                Barbados </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Belize.png)">
                                                            </div>
                                                            <div class="name_country" data-country="3">
                                                                Belize </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Bermuda.png)">
                                                            </div>
                                                            <div class="name_country" data-country="4">
                                                                Bermuda </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Cayman_Islands.png)">
                                                            </div>
                                                            <div class="name_country" data-country="5">
                                                                Cayman Islands </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Costa_Rica.png)">
                                                            </div>
                                                            <div class="name_country" data-country="6">
                                                                Costa Rica </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Dominican_Republic.png)">
                                                            </div>
                                                            <div class="name_country" data-country="7">
                                                                Dominican Republic </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/El_Salvador.png)">
                                                            </div>
                                                            <div class="name_country" data-country="8">
                                                                El Salvador </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Grenada.png)">
                                                            </div>
                                                            <div class="name_country" data-country="9">
                                                                Grenada </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Guatemala.png)">
                                                            </div>
                                                            <div class="name_country" data-country="10">
                                                                Guatemala </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Honduras.png)">
                                                            </div>
                                                            <div class="name_country" data-country="11">
                                                                Honduras </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Nicaragua.png)">
                                                            </div>
                                                            <div class="name_country" data-country="12">
                                                                Nicaragua </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Panama.png)">
                                                            </div>
                                                            <div class="name_country" data-country="13">
                                                                Panama </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Trinidad_and_Tobago.png)">
                                                            </div>
                                                            <div class="name_country" data-country="14">
                                                                Trinidad and Tobago </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Saint_Lucia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="15">
                                                                St Lucia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Saint_Vicent_and_the_Grenadines.png)">
                                                            </div>
                                                            <div class="name_country" data-country="16">
                                                                St. Vincent and the Grenadines </div>
                                                        </div>
                                                    </div>
                                                    <div class="describe-block"></div>
                                                </div>
                                                <!--country-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--sa-pin-->
                            <div class="sa-pin wow fadeIn" data-wow-delay="0.7s"
                                style="visibility: visible; animation-delay: 0.7s;">
                                <div class="pin-effect"></div>
                                <div class="countries-holder-sa" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                                <div class="tippy-popper" role="tooltip" id="tippy-3" tabindex="-1" x-placement="bottom"
                                    style="z-index: 9999; visibility: hidden; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(573px, 2684px, 0px);">
                                    <div class="tippy-tooltip map-theme" data-size="large" data-animation="perspective"
                                        data-state="hidden" data-interactive=""
                                        style="transition-duration: 275ms; bottom: 0px;">
                                        <div class="tippy-arrow" style="left: 181px;"></div>
                                        <div class="tippy-content" data-state="hidden"
                                            style="transition-duration: 275ms;">
                                            <div class="country-column-sa" id="south-america">
                                                <div class="country">
                                                    <div class="top-head-country">
                                                        <h3 class="map-tooltip-title">
                                                            South America </h3>
                                                        <div class="link-block">
                                                            <a class="map-link" href="" target="">
                                                                View our full coverage </a>
                                                        </div>
                                                    </div>
                                                    <div class="flag-block">
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Argentina.png)">
                                                            </div>
                                                            <div class="name_country" data-country="1">
                                                                Argentina </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Bolivia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="2">
                                                                Bolivia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Brazil.png)">
                                                            </div>
                                                            <div class="name_country" data-country="3">
                                                                Brasil </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Chile.png)">
                                                            </div>
                                                            <div class="name_country" data-country="4">
                                                                Chile </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Colombia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="5">
                                                                Colombia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Ecuador.png)">
                                                            </div>
                                                            <div class="name_country" data-country="6">
                                                                Ecuador </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Guyana.png)">
                                                            </div>
                                                            <div class="name_country" data-country="7">
                                                                Guyana </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Paraguay.png)">
                                                            </div>
                                                            <div class="name_country" data-country="8">
                                                                Paraguay </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Peru.png)">
                                                            </div>
                                                            <div class="name_country" data-country="9">
                                                                Peru </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Suriname.png)">
                                                            </div>
                                                            <div class="name_country" data-country="10">
                                                                Suriname </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Uruguay.png)">
                                                            </div>
                                                            <div class="name_country" data-country="11">
                                                                Uruguay </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Venezuela.png)">
                                                            </div>
                                                            <div class="name_country" data-country="12">
                                                                Venezuela </div>
                                                        </div>
                                                    </div>
                                                    <div class="describe-block"></div>
                                                </div>
                                                <!--country-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Europe-->
                        <div class="continets europe-continent">
                            <img class="europe" src="assets/img/maps/Europe.svg" alt="Europe" style="opacity: 0;">
                            <!--eu-pin-->
                            <div class="eu-pin wow fadeIn" data-wow-delay="0.8s"
                                style="visibility: visible; animation-delay: 0.8s;">
                                <div class="pin-effect"></div>
                                <div class="countries-holder-eu" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                                <div class="tippy-popper" role="tooltip" id="tippy-7" tabindex="-1" x-placement="bottom"
                                    style="z-index: 9999; visibility: visible; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(454px, 2482px, 0px);">
                                    <div class="tippy-tooltip map-eu-theme" data-size="large"
                                        data-animation="perspective" data-state="hidden" data-interactive=""
                                        style="transition-duration: 325ms; bottom: 0px;">
                                        <div class="tippy-arrow" style="left: 536px;"></div>
                                        <div class="tippy-content" data-state="visible"
                                            style="transition-duration: 325ms;">
                                            <div class="country-column-eu" id="europe">
                                                <div class="country">
                                                    <div class="top-head-country">
                                                        <h3 class="map-tooltip-title">
                                                            Europe </h3>
                                                        <div class="link-block">
                                                            <a class="map-link" href="" target="">
                                                                View our full coverage </a>
                                                        </div>
                                                    </div>
                                                    <div class="flag-block">
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Albania.png)">
                                                            </div>
                                                            <div class="name_country" data-country="1">
                                                                Albania </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Armenia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="2">
                                                                Armenia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Andorra.png)">
                                                            </div>
                                                            <div class="name_country" data-country="3">
                                                                Andorra </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Austria.png)">
                                                            </div>
                                                            <div class="name_country" data-country="4">
                                                                Austria </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Belarus.png)">
                                                            </div>
                                                            <div class="name_country" data-country="5">
                                                                Belarus </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Belgium.png)">
                                                            </div>
                                                            <div class="name_country" data-country="6">
                                                                Belgium </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Bosnia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="7">
                                                                Bosnia and Herzegovina </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Bulgaria.png)">
                                                            </div>
                                                            <div class="name_country" data-country="8">
                                                                Bulgaria </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/jersey.png)">
                                                            </div>
                                                            <div class="name_country" data-country="9">
                                                                Channel Islands </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Croatia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="10">
                                                                Croatia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Cyprus.png)">
                                                            </div>
                                                            <div class="name_country" data-country="11">
                                                                Cyprus </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Czech_Republic.png)">
                                                            </div>
                                                            <div class="name_country" data-country="12">
                                                                Czech Republic </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Denmark.png)">
                                                            </div>
                                                            <div class="name_country" data-country="13">
                                                                Denmark </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Estonia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="14">
                                                                Estonia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Finland.png)">
                                                            </div>
                                                            <div class="name_country" data-country="15">
                                                                Finland </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/France.png)">
                                                            </div>
                                                            <div class="name_country" data-country="16">
                                                                France </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Germany.png)">
                                                            </div>
                                                            <div class="name_country" data-country="17">
                                                                Germany </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Gibraltar.png)">
                                                            </div>
                                                            <div class="name_country" data-country="18">
                                                                Gibraltar </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Greece.png)">
                                                            </div>
                                                            <div class="name_country" data-country="19">
                                                                Greece </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Hungary.png)">
                                                            </div>
                                                            <div class="name_country" data-country="20">
                                                                Hungary </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Iceland.png)">
                                                            </div>
                                                            <div class="name_country" data-country="21">
                                                                Iceland </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Ireland.png)">
                                                            </div>
                                                            <div class="name_country" data-country="22">
                                                                Ireland </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Italy.png)">
                                                            </div>
                                                            <div class="name_country" data-country="23">
                                                                Italy </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Kosovo.png)">
                                                            </div>
                                                            <div class="name_country" data-country="24">
                                                                Kosovo </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Latvia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="25">
                                                                Latvia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Liechtenstein.png)">
                                                            </div>
                                                            <div class="name_country" data-country="26">
                                                                Liechtenstein </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Lithuania.png)">
                                                            </div>
                                                            <div class="name_country" data-country="27">
                                                                Lithuania </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Luxembourg.png)">
                                                            </div>
                                                            <div class="name_country" data-country="28">
                                                                Luxembourg </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Macedonia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="29">
                                                                Macedonia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Malta.png)">
                                                            </div>
                                                            <div class="name_country" data-country="30">
                                                                Malta </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Moldova.png)">
                                                            </div>
                                                            <div class="name_country" data-country="31">
                                                                Moldova </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Monaco.png)">
                                                            </div>
                                                            <div class="name_country" data-country="32">
                                                                Monaco </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Montenegro.jpg)">
                                                            </div>
                                                            <div class="name_country" data-country="33">
                                                                Montenegro </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Netherlands.png)">
                                                            </div>
                                                            <div class="name_country" data-country="34">
                                                                Netherlands </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Norway.png)">
                                                            </div>
                                                            <div class="name_country" data-country="35">
                                                                Norway </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Poland.png)">
                                                            </div>
                                                            <div class="name_country" data-country="36">
                                                                Poland </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Portugal.png)">
                                                            </div>
                                                            <div class="name_country" data-country="37">
                                                                Portugal </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Romania.png)">
                                                            </div>
                                                            <div class="name_country" data-country="38">
                                                                Romania </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Russian_Federation.png)">
                                                            </div>
                                                            <div class="name_country" data-country="39">
                                                                Russian Federation </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Serbia_and_Montenegro.png)">
                                                            </div>
                                                            <div class="name_country" data-country="40">
                                                                Serbia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Slovakia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="41">
                                                                Slovakia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Slovenia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="42">
                                                                Slovenia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Spain.png)">
                                                            </div>
                                                            <div class="name_country" data-country="43">
                                                                Spain </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Sweden.png)">
                                                            </div>
                                                            <div class="name_country" data-country="44">
                                                                Sweden </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Switzerland.png)">
                                                            </div>
                                                            <div class="name_country" data-country="45">
                                                                Switzerland </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Turkey.png)">
                                                            </div>
                                                            <div class="name_country" data-country="46">
                                                                Turkey </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Ukraine.png)">
                                                            </div>
                                                            <div class="name_country" data-country="47">
                                                                Ukraine </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/United_Kingdom.png)">
                                                            </div>
                                                            <div class="name_country" data-country="48">
                                                                United Kingdom </div>
                                                        </div>
                                                    </div>
                                                    <div class="describe-block"></div>
                                                </div>
                                                <!--country-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Australia & Oceania Asia-->
                        <div class="continets asia-oceania-continent">
                            <img class="asia" src="assets/img/maps/Asia.svg" alt="Asia">
                            <img class="australia" src="assets/img/maps/Australia-and-Oceania.svg"
                                alt="Australia &amp; Oceania" style="opacity: 0;">
                            <img class="mid-east" src="assets/img/maps/Middle-East.svg" alt="Middle East"
                                style="opacity: 0;">
                            <!--asi-pin-->
                            <div class="asi-pin wow fadeIn" data-wow-delay="0.9s"
                                style="visibility: visible; animation-delay: 0.9s;">
                                <div class="pin-effect"></div>
                                <div class="countries-holder-asi" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                                <div class="tippy-popper" role="tooltip" id="tippy-8" tabindex="-1" x-placement="bottom"
                                    style="z-index: 9999; visibility: visible; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(934px, 2532px, 0px);">
                                    <div class="tippy-tooltip map-eu-theme" data-size="large"
                                        data-animation="perspective" data-state="hidden" data-interactive=""
                                        style="transition-duration: 325ms; bottom: 0px;">
                                        <div class="tippy-arrow" style="left: 325px;"></div>
                                        <div class="tippy-content" data-state="visible"
                                            style="transition-duration: 325ms;">
                                            <div class="country-column-asi" id="asia">
                                                <div class="country">
                                                    <div class="top-head-country">
                                                        <h3 class="map-tooltip-title">
                                                            Asia </h3>
                                                        <div class="link-block">
                                                            <a class="map-link" href="" target="">
                                                                View our full coverage </a>
                                                        </div>
                                                    </div>
                                                    <div class="flag-block">
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Bangladesh.png)">
                                                            </div>
                                                            <div class="name_country" data-country="1">
                                                                Bangladesh </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Brunei.png)">
                                                            </div>
                                                            <div class="name_country" data-country="2">
                                                                Brunei </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Cambodia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="3">
                                                                Cambodia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/China.png)">
                                                            </div>
                                                            <div class="name_country" data-country="4">
                                                                China </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Hong_Kong.png)">
                                                            </div>
                                                            <div class="name_country" data-country="5">
                                                                Hong Kong </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/India.png)">
                                                            </div>
                                                            <div class="name_country" data-country="6">
                                                                India </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Indonesia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="7">
                                                                Indonesia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Japan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="8">
                                                                Japan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Malaysia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="9">
                                                                Malaysia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Maldives.png)">
                                                            </div>
                                                            <div class="name_country" data-country="10">
                                                                Maldives </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Mongolia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="11">
                                                                Mongolia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Myanmar.png)">
                                                            </div>
                                                            <div class="name_country" data-country="12">
                                                                Myanmar </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Philippines.png)">
                                                            </div>
                                                            <div class="name_country" data-country="13">
                                                                Philippines </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Singapore.png)">
                                                            </div>
                                                            <div class="name_country" data-country="14">
                                                                Singapore </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/South_Korea.png)">
                                                            </div>
                                                            <div class="name_country" data-country="15">
                                                                South Korea </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Sri_Lanka.png)">
                                                            </div>
                                                            <div class="name_country" data-country="16">
                                                                Sri Lanka </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Taiwan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="17">
                                                                Taiwan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Thailand.png)">
                                                            </div>
                                                            <div class="name_country" data-country="18">
                                                                Thailand </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Uzbekistan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="19">
                                                                Uzbekistan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Vietnam.png)">
                                                            </div>
                                                            <div class="name_country" data-country="20">
                                                                Vietnam </div>
                                                        </div>
                                                    </div>
                                                    <div class="describe-block describe-block-asia"></div>
                                                </div>
                                                <!--country-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mid-pin-->
                            <div class="mid-ea-pin wow fadeIn" data-wow-delay="1s"
                                style="visibility: visible; animation-delay: 1s;">
                                <div class="pin-effect"></div>
                                <div class="countries-holder-mid-ea" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                                <div class="tippy-popper" role="tooltip" id="tippy-5" tabindex="-1" x-placement="bottom"
                                    style="z-index: 9999; visibility: visible; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(729px, 2557px, 0px);">
                                    <div class="tippy-tooltip map-eu-theme" data-size="large"
                                        data-animation="perspective" data-state="hidden" data-interactive=""
                                        style="transition-duration: 325ms; bottom: 0px;">
                                        <div class="tippy-arrow" style="left: 325px;"></div>
                                        <div class="tippy-content" data-state="visible"
                                            style="transition-duration: 325ms;">
                                            <div class="country-column-mid-ea" id="middle-east">
                                                <div class="country">
                                                    <div class="top-head-country">
                                                        <h3 class="map-tooltip-title">
                                                            Middle East </h3>
                                                        <div class="link-block">
                                                            <a class="map-link" href="" target="">
                                                                View our full coverage </a>
                                                        </div>
                                                    </div>
                                                    <div class="flag-block">
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Afghanistan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="1">
                                                                Afghanistan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Azerbaijan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="2">
                                                                Azerbaijan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Bahrain.png)">
                                                            </div>
                                                            <div class="name_country" data-country="3">
                                                                Bahrain </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Georgia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="4">
                                                                Georgia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Israel.png)">
                                                            </div>
                                                            <div class="name_country" data-country="5">
                                                                Israel </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Jordan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="6">
                                                                Jordan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Kazakhstan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="7">
                                                                Kazakhstan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Kuwait.png)">
                                                            </div>
                                                            <div class="name_country" data-country="8">
                                                                Kuwait </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Kyrgyzstan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="9">
                                                                Kyrgyzstan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Lebanon.png)">
                                                            </div>
                                                            <div class="name_country" data-country="10">
                                                                Lebanon </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Oman.png)">
                                                            </div>
                                                            <div class="name_country" data-country="11">
                                                                Oman </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Palestine.png)">
                                                            </div>
                                                            <div class="name_country" data-country="12">
                                                                Palestine </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Pakistan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="13">
                                                                Pakistan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Qatar.png)">
                                                            </div>
                                                            <div class="name_country" data-country="14">
                                                                Qatar </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Saudi_Arabia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="15">
                                                                Saudi Arabia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Tajikistan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="16">
                                                                Tajikistan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Turkmenistan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="17">
                                                                Turkmenistan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/UAE.png)">
                                                            </div>
                                                            <div class="name_country" data-country="18">
                                                                United Arab Emirates </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Yemen.png)">
                                                            </div>
                                                            <div class="name_country" data-country="19">
                                                                Yemen </div>
                                                        </div>
                                                    </div>
                                                    <div class="describe-block describe-block-asia"></div>
                                                </div>
                                                <!--country-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--aus-pin-->
                            <div class="aus-pin wow fadeIn" data-wow-delay="1.1s"
                                style="visibility: visible; animation-delay: 1.1s;">
                                <div class="pin-effect"></div>
                                <div class="countries-holder-aus" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tippy-popper" role="tooltip" id="tippy-6" tabindex="-1" x-placement="bottom"
                                style="z-index: 9999; visibility: visible; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(1173px, 2727px, 0px);">
                                <div class="tippy-tooltip map-theme" data-size="large" data-animation="perspective"
                                    data-state="hidden" data-interactive=""
                                    style="transition-duration: 325ms; bottom: 0px;">
                                    <div class="tippy-arrow" style="left: 181px;"></div>
                                    <div class="tippy-content" data-state="visible" style="transition-duration: 325ms;">
                                        <div class="country-column-aus" id="australia">
                                            <div class="country">
                                                <div class="top-head-country">
                                                    <h3 class="map-tooltip-title">
                                                        Oceania </h3>
                                                    <div class="link-block">
                                                        <a class="map-link" href="" target="">
                                                            View our full coverage </a>
                                                    </div>
                                                </div>
                                                <div class="flag-block">
                                                    <div class="flag-wrap">
                                                        <div class="image-services"
                                                            style="background-image: url(assets/img/country/Australia.png)">
                                                        </div>
                                                        <div class="name_country" data-country="1">
                                                            Australia </div>
                                                    </div>
                                                    <div class="flag-wrap">
                                                        <div class="image-services"
                                                            style="background-image: url(assets/img/country/Fiji.png)">
                                                        </div>
                                                        <div class="name_country" data-country="2">
                                                            Fiji </div>
                                                    </div>
                                                    <div class="flag-wrap">
                                                        <div class="image-services"
                                                            style="background-image: url(assets/img/country/Guam.png)">
                                                        </div>
                                                        <div class="name_country" data-country="3">
                                                            Guam </div>
                                                    </div>
                                                    <div class="flag-wrap">
                                                        <div class="image-services"
                                                            style="background-image: url(assets/img/country/New_Zealand.png)">
                                                        </div>
                                                        <div class="name_country" data-country="4">
                                                            New Zealand </div>
                                                    </div>
                                                    <div class="flag-wrap">
                                                        <div class="image-services"
                                                            style="background-image: url(assets/img/country/Papua_New_Guinea.png)">
                                                        </div>
                                                        <div class="name_country" data-country="5">
                                                            Papua New Guinea </div>
                                                    </div>
                                                    <div class="flag-wrap">
                                                        <div class="image-services"
                                                            style="background-image: url(assets/img/country/Samoa.png)">
                                                        </div>
                                                        <div class="name_country" data-country="6">
                                                            Samoa </div>
                                                    </div>
                                                    <div class="flag-wrap">
                                                        <div class="image-services"
                                                            style="background-image: url(assets/img/country/New-Caledonia.png)">
                                                        </div>
                                                        <div class="name_country" data-country="7">
                                                            New Caledonia </div>
                                                    </div>
                                                </div>
                                                <div class="describe-block"></div>

                                            </div>
                                            <!--country-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Africa-->
                        <div class="continets africa-continent">
                            <img class="africa" src="assets/img/maps/Africa.svg" alt="Africa" style="opacity: 0;">
                            <!--af-pin-->
                            <div class="af-pin wow fadeIn" data-wow-delay="1.2s"
                                style="visibility: visible; animation-delay: 1.2s;">
                                <div class="pin-effect"></div>
                                <div class="countries-holder-af" tabindex="0">
                                    <div class="wrap-circle-hover">
                                        <div class="circle-hover"></div>
                                    </div>
                                </div>
                                <div class="tippy-popper" role="tooltip" id="tippy-4" tabindex="-1" x-placement="bottom"
                                    style="z-index: 9999; visibility: visible; transition-duration: 0ms; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(438px, 2617px, 0px);">
                                    <div class="tippy-tooltip map-eu-theme" data-size="large"
                                        data-animation="perspective" data-state="hidden" data-interactive=""
                                        style="transition-duration: 325ms; bottom: 0px;">
                                        <div class="tippy-arrow" style="left: 536px;"></div>
                                        <div class="tippy-content" data-state="visible"
                                            style="transition-duration: 325ms;">
                                            <div class="country-column-af" id="africa">
                                                <div class="country">
                                                    <div class="top-head-country">
                                                        <h3 class="map-tooltip-title">
                                                            Africa </h3>
                                                        <div class="link-block">
                                                            <a class="map-link" href="" target="">
                                                                View our full coverage </a>
                                                        </div>
                                                    </div>
                                                    <div class="flag-block">
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Algeria.png)">
                                                            </div>
                                                            <div class="name_country" data-country="1">
                                                                Algeria </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Angola.png)">
                                                            </div>
                                                            <div class="name_country" data-country="2">
                                                                Angola </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Benin.png)">
                                                            </div>
                                                            <div class="name_country" data-country="3">
                                                                Benin </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Botswana.png)">
                                                            </div>
                                                            <div class="name_country" data-country="4">
                                                                Botswana </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Burkina_Faso.png)">
                                                            </div>
                                                            <div class="name_country" data-country="5">
                                                                Burkina Faso </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Burundi.png)">
                                                            </div>
                                                            <div class="name_country" data-country="6">
                                                                Burundi </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Cameroon.png)">
                                                            </div>
                                                            <div class="name_country" data-country="7">
                                                                Cameroon </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Central_African_Republic.png)">
                                                            </div>
                                                            <div class="name_country" data-country="8">
                                                                Central Africa Republic </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Chad.png)">
                                                            </div>
                                                            <div class="name_country" data-country="9">
                                                                Chad </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Democratic_Republic_of_the_Congo.png)">
                                                            </div>
                                                            <div class="name_country" data-country="10">
                                                                Dem. Rep. of Congo </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Egypt.png)">
                                                            </div>
                                                            <div class="name_country" data-country="11">
                                                                Egypt </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Equatorial_Guinea.png)">
                                                            </div>
                                                            <div class="name_country" data-country="12">
                                                                Equatorial Guinea </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Eritrea.png)">
                                                            </div>
                                                            <div class="name_country" data-country="13">
                                                                Eritrea </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Ethiopia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="14">
                                                                Ethiopia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Gabon.png)">
                                                            </div>
                                                            <div class="name_country" data-country="15">
                                                                Gabon </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Ghana.png)">
                                                            </div>
                                                            <div class="name_country" data-country="16">
                                                                Ghana </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Guinea.png)">
                                                            </div>
                                                            <div class="name_country" data-country="17">
                                                                Guinea Conakry </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Ivory_coast.png)">
                                                            </div>
                                                            <div class="name_country" data-country="18">
                                                                Ivory Coast </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Kenya.png)">
                                                            </div>
                                                            <div class="name_country" data-country="19">
                                                                Kenya </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Lesotho.png)">
                                                            </div>
                                                            <div class="name_country" data-country="20">
                                                                Lesotho </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Liberia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="21">
                                                                Liberia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Malawi.png)">
                                                            </div>
                                                            <div class="name_country" data-country="22">
                                                                Malawi </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Mali.png)">
                                                            </div>
                                                            <div class="name_country" data-country="23">
                                                                Mali </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/mauritania.png)">
                                                            </div>
                                                            <div class="name_country" data-country="24">
                                                                Mauritania </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Mauritius.png)">
                                                            </div>
                                                            <div class="name_country" data-country="25">
                                                                Mauritius </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Morocco.png)">
                                                            </div>
                                                            <div class="name_country" data-country="26">
                                                                Morocco </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Mozambique.png)">
                                                            </div>
                                                            <div class="name_country" data-country="27">
                                                                Mozambique </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Namibia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="28">
                                                                Namibia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Niger.png)">
                                                            </div>
                                                            <div class="name_country" data-country="29">
                                                                Niger </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Nigeria.png)">
                                                            </div>
                                                            <div class="name_country" data-country="30">
                                                                Nigeria </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Senegal.png)">
                                                            </div>
                                                            <div class="name_country" data-country="31">
                                                                Senegal </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Seychelles.png)">
                                                            </div>
                                                            <div class="name_country" data-country="32">
                                                                Seychelles </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Sierra_Leone.png)">
                                                            </div>
                                                            <div class="name_country" data-country="33">
                                                                Sierra Leone </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/South_Africa.png)">
                                                            </div>
                                                            <div class="name_country" data-country="34">
                                                                South Africa </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Sudan.png)">
                                                            </div>
                                                            <div class="name_country" data-country="35">
                                                                Sudan </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Swaziland.png)">
                                                            </div>
                                                            <div class="name_country" data-country="36">
                                                                Swaziland </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Tanzania.png)">
                                                            </div>
                                                            <div class="name_country" data-country="37">
                                                                Tanzania </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Togo.png)">
                                                            </div>
                                                            <div class="name_country" data-country="38">
                                                                Togo </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Tunisia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="39">
                                                                Tunisia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Uganda.png)">
                                                            </div>
                                                            <div class="name_country" data-country="40">
                                                                Uganda </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Zambia.png)">
                                                            </div>
                                                            <div class="name_country" data-country="41">
                                                                Zambia </div>
                                                        </div>
                                                        <div class="flag-wrap">
                                                            <div class="image-services"
                                                                style="background-image: url(assets/img/country/Zimbabwe.png)">
                                                            </div>
                                                            <div class="name_country" data-country="42">
                                                                Zimbabwe </div>
                                                        </div>
                                                    </div>
                                                    <div class="describe-block"></div>
                                                </div>
                                                <!--country-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- continets hover END -->
                </div>
                <!--earth-->
                <div class="map-on-mobile">
                    <object class="map-default" id="map-default" type="image/svg+xml"
                        data="assets/img/maps/map-dotted.svg">
                    </object>
                    <!-- <div class="country">Europe, North America, South America, Africa, Asia, Oceania</div>
                    <div class="mob-map-link">
                        <a href="" target="">
                            View our full coverage
                        </a>
                    </div> -->
                </div>
            </div>
            <!--animation-holder-->
        </section>
        <!-- ======= End Maps Section ======= -->
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
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts" style="display:none;">
            <div class="container">
                <div class="section-title">
                    <p>How Globalization Solutions Work?</p>
                </div>
                <header class="section-header">
                    <p class="event-heading"><span>When you join hands with Globalization Solutions, you are provided
                            with hassle-free international hiring and can commence operations within days. We enable you
                            hire without an entity and make global expansion easier for you while dealing with all
                            complexities.</span></p>
                </header>
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span>1.</span>
                            <p><strong>Select the Talent</strong></p>
                            <a> You can search for a candidate or let us assist you.
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span>2.</span>
                            <p><strong>Onboard Employees</strong></p>
                            <a> We enable quick onboarding of employees to your organization.
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span>3.</span>
                            <p><strong>Leave Everything on us</strong></p>
                            <a> Our Global PEO takes care of all in-country compliances from tax, payroll to employee
                                management.
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span>4.</span>
                            <p><strong>You are All Set</strong></p>
                            <a> Start operating globally in no time and further your business expansion.
                            </a>
                        </div>
                    </div>

                </div>

                <!-- 
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <p class="count-box-heading"><strong>Select the Talent</strong></p>
                            <a> You can search for a candidate or let us assist you.
                            </a>
                        </div>
                        <div class="right-arrow right-arrow-css">
                            <p> <i class="fa fa-arrow-right"></i> </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <p class="count-box-heading"><strong>Onboard Employees</strong></p>
                            <a> We enable quick onboarding of employees to your organization.
                            </a>
                        </div>
                        <div class="right-arrow right-arrow-css">
                            <p> <i class="fa fa-arrow-right"></i> </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <p class="count-box-heading"><strong>Leave Everything on us</strong></p>
                            <a> Our Global PEO takes care of all in-country compliances from tax, payroll to employee management.
                            </a>
                        </div>
                        <div class="right-arrow right-arrow-css">
                            <p> <i class="fa fa-arrow-right"></i> </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <p class="count-box-heading"><strong>You are All Set</strong></p>
                            <a> Start operating globally in no time and further your business expansion.
                            </a>
                        </div>

                    </div>
                </div> -->
            </div>
        </section><!-- End Counts Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">
                <div class="section-title">
                    <!-- <h2>Testimonials</h2> -->
                    <p>See What Our Clients Say About Us </p>
                </div>
                <div class="owl-carousel testimonials-carousel owl-loaded owl-drag">
                   
                <div class="owl-stage-outer">
				<div class="owl-stage" style="transform: translate3d(-2775px, 0px, 0px); transition: all 0.25s ease 0s; width: 6105px;">
                  <?php echo $banner2->testinomial_html;?>
                </div>
                </div>
              
					
				</div>	
            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= Cta Section ======= -->
        
    