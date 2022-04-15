<?php
/*template name: homepage*/
?>

<?php
get_header();
?>

<main id="home_page">
    <!-- Slider main container -->
    <div id="swiper" class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="https://fyber.live" id="digital" class="swiper-slide">
                <div class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/digital-logo.svg" alt="Fyber Digital logo">
                </div>
                <h3>Shaping brands for a digital world</h3>
            </a>
            <a href="https://fyberdigital.co.uk" id="live" class="swiper-slide">
                <div class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/live-logo.svg" alt="Fyber Live logo">
                </div>
                <h3>Ultimate brand experiences</h3>
            </a>
            <a href="https://fyber.direct" id="direct" class="swiper-slide">
                <div class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/direct-logo.svg" alt="Fyber Live logo">
                </div>
                <h3>Your message, delivered</h3>
            </a>
        </div>
    </div>
    <div id="circle" class="circle">
        <span>
        View
        </span>
    </div>
</main>

<?php
get_footer();
?>