<?php
/*template name: homepage*/
?>

<?php
get_header();
?>

<main id="home_page">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div id="digital" class="swiper-slide">
                <a href="#" class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/digital-logo.svg" alt="Fyber Digital logo">
                </a>
                <h3>Shaping brands for a digital world</h3>
                <a href="" class="link">Visit Digital</a>
            </div>
            <div id="live" class="swiper-slide">
                <a href="#" class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/live-logo.svg" alt="Fyber Live logo">
                </a>
                <h3>Ultimate brand experiences</h3>
                <a href="" class="link">Visit Live</a>
            </div>
            <div id="direct" class="swiper-slide">
                <a href="#" class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/direct-logo.svg" alt="Fyber Live logo">
                </a>
                <h3>Your message, delivered</h3>
                <a href="" class="link">Visit Direct</a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>