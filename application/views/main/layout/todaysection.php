<?php
$banner2 = $this->AuthModel->fetch_main_page('banner_section');?>
 <section id="cta" class="cta">
            <div class="container">
                <div class="text-center">
                    <p ><?php echo $banner2->today_content	; ?></p>
                    <a class="cta-btn" href="">Contact Us Today</a>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->
    </main>