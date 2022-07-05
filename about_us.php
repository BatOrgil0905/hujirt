<?php
/*
template name: About_us
*/
get_header(); ?>
<section id="home-map" class="bg-gray-50 py-4 pt-6">
    <div class="">
        <img class="w-full h-auto md:h-screen bg-no-repeat bg-center" src="<?php echo get_template_directory_uri(); ?>/images/map3.PNG" alt="">      
    </div>
    <div class="mx-[3%] px-0 md:!px-[8%] mb-[3%] bg-white my-4 py-4 border border-black">
        <?php
            $args = array('post_type' => 'bidniiTuhai', 'posts_per_page' => 4, 'order' => 'ASC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <div>
            <?php the_content(); ?>
        </div>
        
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>
<?php get_footer(); ?>