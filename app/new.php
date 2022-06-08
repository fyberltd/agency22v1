<?php
/*template name: new fyber*/
?>

<?php
get_header();
?>

<main id="new_page">

    <div id="preloader">
        <img src="<?php echo bloginfo('template_directory'); ?>/images/new/Fyber-logo.png" alt="Fyber Agency logo">
    </div>

    <div id="cover">

        <div id="digital" class="part">
            <img class="logo" src="<?php echo bloginfo('template_directory'); ?>/images/digital-logo.svg" alt="Fyber Digital logo">
            <h3>Branding and Websites</h3>
            <a href="https://fyberdigital.co.uk" class="btn">Visit Site</a>
        </div>


        <div id="live" class="part">
            <img class="logo" src="<?php echo bloginfo('template_directory'); ?>/images/live-logo.svg" alt="Fyber Live logo">
            <h3>Events and Exhibitions</h3>
            <a href="https://fyber.live" class="btn">Visit Site</a>
        </div>

        <div id="direct" class="part">
            <img class="logo" src="<?php echo bloginfo('template_directory'); ?>/images/direct-logo.svg" alt="Fyber Live logo">
            <h3>Mail and Print</h3>
            <a href="https://fyber.direct" class="btn">Visit Site</a>
        </div>

        <img id="img-follower" src="<?php echo bloginfo('template_directory'); ?>/images/default_thumbnail.jpg" alt="img">
    </div>


</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<?php
get_footer();
?>