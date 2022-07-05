<?php 
/*
Template name: Zaalt
*/
get_header();?>

<section class="bg-gray-50 p-[2%]">
	<section class="container bg-white my-3">
        <div class="major-title py-6">Өвчний заалт</div>
        <div class="px-[4%] py-4">
            <?php
                $args = array('post_type' => 'zaalt', 'posts_per_page' => 1, 'order' => 'ASC');
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
</section>

<?php get_footer(); ?>