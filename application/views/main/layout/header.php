<?php
$banner = $this->AuthModel->fetch_main_page('header_section');
?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="<?=base_url('index');?>" class="logo mr-auto"><img src="<?php echo $banner->logo_url ?>" alt="" class="img-fluid"></a>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="drop-down"><a href="<?=base_url('service');?>">Our Services</a>
                        <ul>

                            <li><a href="<?=base_url('global-employer-of-record-services');?>"><i class="fa fa-globe"
                                        aria-hidden="true"></i>Global EOR Services </a></li>
                            <li><a href="<?=base_url('international-peo-service');?>"><i class="fa fa-connectdevelop"
                                        aria-hidden="true"></i>
                                    International PEO Services</a></li>
                            <li><a href="<?=base_url('global-talent-acquisition');?>"><i class="fa fa-graduation-cap"
                                        aria-hidden="true"></i>Global Talent Acquisition</a></li>
                            <li><a href="<?=base_url('global-project-management-service');?>"><i class="fa fa-folder-open"
                                        aria-hidden="true"></i>
                                    Global Project Management</a></li>
                            <li><a href="<?=base_url('global-payroll');?>"><i class="fa fa-usd" aria-hidden="true"></i>
                                    Global Payroll</a></li>
                            <li><a href="<?=base_url('hr-and-compliance-management-service');?>"><i class="fa fa-male"
                                        aria-hidden="true"></i>
                                    Global HR & Compliance
                                    Management</a></li>
                            <li><a href="<?=base_url('multijurisdictional-service');?>"><i class="fa fa-file" aria-hidden="true"></i>
                                    Multi Jurisdictional Billing & Payment
                                    Solutions</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url('our-global-reach');?>">Our Global Reach</a></li>
                    <li class="drop-down"><a href="<?=base_url('about-us');?>">About Us</a>
                        <ul>
                            <li><a href="<?=base_url('about-us');?>"><i class="fa fa-database" aria-hidden="true"></i>
                                    Our Company</a></li>
                            <li><a href="<?=base_url('our-approach');?>"><i class="fa fa-american-sign-language-interpreting"
                                        aria-hidden="true"></i>
                                    Our Approach</a></li>
                            <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i>
                                    Social responsibility</a></li>
                            <li><a href="#"><i class="fa fa-map" aria-hidden="true"></i>
                                    Diversity & inclusion</a></li>
                            <li><a href="<?=base_url('leadership');?>"><i class="fa fa-user" aria-hidden="true"></i>
                                    Leadership</a></li>
                           <li><a href="<?=base_url('why-work-with-us');?>"><i class="fa fa-question-circle" aria-hidden="true"></i>
                                    Why work with us?</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url('careers');?>">Careers</a></li>
                    <li><a href="<?=base_url('blog');?>" style="display:none;">Blog</a></li>
                    <a href="<?=base_url('contact-us');?>" class="get-started-btn" style="color: #fff;">Contact Us</a>
                    <li><a href="#"><?php echo $banner->contact ?></a></li>
                    <li class="drop-down">
                        <a href=""><span>English</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>
                                    Español</a></li>
                            <li><a href="#"><i class="fa fa-inr" aria-hidden="true"></i>
                                    Hindi</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>