<?php 
$banner = $this->AuthModel->fetch_main_page('header_section');?>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Global Headquaters<span></span></h4>
                        <p><?php echo $banner->address;?>
                            <br>
                            <strong>Phone:</strong><?php echo $banner->contact?><br>
                            <strong>Email:</strong><?php echo $banner->email?><br>
                        </p>
                        <a href="" class="btn-get-started scrollto" style="display:none;">Our Global Offices</a>

                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Company</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="about-us">Our Company</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="our-approach">Our Approach</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="social-responsibilites">Social Responsibility</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="diversity-inclusion">Diversity & Inclusions</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="why-work-with-us"> Why work with us?</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="global-employer-of-record-service">Global EOR Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="international-peo-service">International PEO Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="global-talent-acquisition">Global Talent Acquisition</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="global-project-management-service">Global Project Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="global-payroll">Global Payroll</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="global-mobility-and-immigration">Global Mobility & Immigration</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="multijurisdictional-service">  Multi Jurisdictional Billing & Payment</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="hr-and-compliance-management-service">Global HR & Compliance Management</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Signup for latest services and news.</p>
                        <form action="<?=('subscribe');?>" method="post" class="mb-20">
                            <input type="email" name="email">
                            <input type="hidden" name="url" value="<?php $_GET; ?>">
                            <input type="submit" value="Subscribe">
                        </form>
                        <h4>Join the Conversation</h4>
                        <div class="footer-icons mb-20">
                            <ul>
                                <li>
                                    <a href="#"><i class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-linkedin"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-twitter"></i></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Globalization Solutions</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class=" text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="pad-r-15">Disclaimer</a>
                <a href="#" class="pad-r-15">Privacy Policy</a>
                <a href="#" class="pad-r-15">Terms of Service</a>
                <a href="#" class="pad-r-15">Cookie Policy</a>
                <a href="#" class="pad-r-15">Cookie Setting</a>
            </div>
        </div>
    </footer>
   
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <!-- Template Main JS File -->
    <script src='assets/js/tippy.all.min.js' id='tippy-js'></script>
    <script src="assets/js/animation.js"></script>
    <link rel='stylesheet' id='jquery-ui-css' href='assets/css/jquery.modal.min.css' type='text/css' media='all' />
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
