<section id="recent-posts">

<?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => 1,
        'orderby' => 'date'
    );

    $query = new WP_Query( $args );
    $no_of_posts = $query->found_posts;
?>

<div class="container">
    <?php if( $query->have_posts() ): $counter = 0; ?>

    <h2>
        Recent Posts
    </h2>

    <div class="row  blog_posts">
        <?php while( $query->have_posts() ): $query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="col-lg-4 margin-bottom">
            <div class="post">
            <div class="img-box">
                <?php if( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else: ?>
                <img src="<?php echo wp_get_attachment_image_url(134, 'full'); ?>" alt="Default Thumbnail">
                <?php endif; ?>
                </div>
                <div class="text-box">
                    <h3 class="title"><?php echo get_the_title(); ?></h3>
                    <p class="excerpt"><?=  mb_strimwidth(get_the_excerpt(),0,150,"..."); ?></p>
                </div>
                <div class="button-row">
                    <p>
                        <?php echo get_the_date(); ?>
                    </p>
                    <div class="button capitalise pink">Read</div>

                </div>

            </div>
        </a>
        <?php $counter++; ?>
        <?php endwhile; wp_reset_postdata(); ?>
        <div class="loading_icon">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/loading.gif" alt="Loading GIF">
        </div>
    </div>
    <?php if( $counter != $no_of_posts ): ?>
    <div class="row justify-content-center margin-top">
        <a href="javascript:;" id="archive_load_more" class="button loadmore" data-page="1">SEE MORE</a>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>

</section>