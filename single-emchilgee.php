<?php get_header(); ?>
<section class="bg-zinc-50">
    <!-- <main class="grid grid-rows-4 grid-flow-col gap-2 p-4">
        <div class="col-span-4 md:row-span-4 md:col-span-3 bg-white px-4 py-3">
            <div class="my-4 flex flex-col">
                <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                    ?>
                <img class="w-full h-7/8 md:w-full md:h-5/8 mx-auto" src="<?php echo $thumb_url[0] ?>">
                <div class="mx-[7%] mt-8">
                    <h1 class="py-1 font-medium text-3xl text-center border-b border-sky-100 border-t">
                        <?php the_title(); ?>
                    </h1>
                </div>
                <p class="mx-2 my-6">
                    <?php the_content();?>
                </p>
            </div>
        </div>
        <div class="col-span-4 row-span-1 sm:row-span-4 sm:col-span-1 bg-white">
            <h1 class="p-4 text-center font-medium text-xl uppercase">Эмчилгээ Үйлчилгээ</h1>
            <ul class="border-t border-sky-100 m-2 py-4"> -->
                <!-- <?php wp_nav_menu(array('theme_location' => 'auto','container' => false, 'items_wrap' => '%3$s')); ?> -->
                <!-- <?php
                    $args = array('post_type' => 'emchilgee',  'posts_per_page' => 30, 'order' => 'ASC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <a class="m-0 p-0" href="<?php the_permalink(); ?>">
                    <li class="text-start mx-4 p-0 leading-0"><?php the_title(); ?></li>
                </a>
                 <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </main> -->
    <div class="mx-[3%]">
        <div class="row">
            <div class="bg-white col-12 col-md-9 my-4">
                <div class="mx-4 mt-8">
                    <h1 class="py-1 font-medium text-3xl text-start">
                        <?php the_title(); ?>
                    </h1>
                </div>
                <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                ?>
                <img class="w-full h-7/8 md:w-full md:h-5/8 lg:w-auto lg:h-3/8 lg:!mx-auto mt-3" src="<?php echo $thumb_url[0] ?>">
                
                <div class="p-4">
                    <p class="m-4 indent-6">
                        <?php the_content();?>
                    </p>
                </div>
            </div>
            <div class="bg-[rgb(253,253,253)] col-12 col-md-3 my-4">
                <h1 class="p-2 text-center font-medium text-xl uppercase">Эмчилгээ Үйлчилгээ</h1>
                <ul class="border-t border-sky-100 pt-4 px-4">
                    <?php
                        $args = array('post_type' => 'emchilgee', 'posts_per_page' => 30, 'order' => 'ASC');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <a class="m-0 p-0" href="<?php the_permalink(); ?>">
                        <li class="text-start mx-0 md:mx-4 text-sm leading-10"><?php the_title(); ?></li>
                    </a>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>