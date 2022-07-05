<?php get_header(); ?>
<section class="bg-gray-50">
    <!-- <main class="grid grid-rows-4 grid-flow-col gap-2 p-8">
        <div class="col-span-4 md:row-span-4 md:col-span-3 bg-white p-8">
            <div class="my-4 flex flex-col">
                <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                    ?>
                <img class="w-full h-7/8 md:w-11/12 md:h-4/8 mx-auto" src="<?php echo $thumb_url[0] ?>">
                <div class="mx-[7%] mt-8">
                    <h1 class="py-1 font-semibold text-3xl text-center border-b border-purple-600 border-t">
                        <?php the_title(); ?>
                    </h1>
                </div>
                <p class="mx-2 my-6">
                    <?php the_content();?>
                </p>
            </div>
        </div>
        <div class="col-span-4 row-span-1 sm:row-span-4 sm:col-span-1 bg-white">
            <div class="major-title pt-8">
                <h3>Мэдээ Мэдээлэл</h3>
            </div>
            <div class="grid gap-4 grid-row mx-4 my-8">
                <?php
                    $args = array('post_type' => 'medee', 'posts_per_page' => 10, 'order' => 'ASC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <a href="<?php the_permalink();?>">
                        <div class="duration-300 cursor-pointer hover:text-violet-700">
                            <?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                            ?>
                            <img class="w-fit h-fit" src="<?php echo $thumb_url[0] ?>">
                            <div class="pb-4 bg-sky-50">
                                <p class="px-4 pt-3 text-gray-500 text-xs"><?php the_date('Y-m-d g:i A'); ?></p>
                                <h1 class="p-4 text-sm"><?php the_title(); ?></h1>
                                
                            </div>
                        </div> 
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </main> -->
    <div class="mx-[3%]">
        <div class="row">
            <div class="bg-white col-12 col-lg-9 my-4">
                <div class="mx-4 my-8 pt-4">
                    <h1 class="py-3 font-semibold text-2xl text-left">
                        <?php the_title(); ?>
                    </h1>
                    <i class="far fa-calendar-alt absolute text-left my-2"></i><p class="relative pl-4 my-2 text-gray-500 text-xs"><?php the_date('Y-m-d g:i A'); ?></p>
                </div>
                <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                ?>
                <img class="w-full h-7/8 md:w-10/12 md:h-6/8 mt-4 md:!mx-auto" src="<?php echo $thumb_url[0] ?>">
                
                <div class="p-4">
                    <p class="m-4 indent-6">
                        <?php the_content();?>
                    </p>
                </div>
            </div>
            <div class="bg-[rgb(253,253,253)] col-12 col-lg-3 my-4">
                <h1 class="p-2 text-center font-medium text-xl uppercase">Мэдээ мэдээлэл</h1>
                <ul class="border-t border-sky-100 pt-4 px-4">
                    <?php
                        $args = array('post_type' => 'medee', 'posts_per_page' => 5, 'order' => 'DESC');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <a href="<?php the_permalink();?>">
                        <div class="duration-300 cursor-pointer hover:text-violet-500">
                            <?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                            ?>
                            <img class="w-fit h-[200px] md:w-fit md:h-fit" src="<?php echo $thumb_url[0] ?>">
                            <div class="bg-gray-50 w-fit md:w-full">
                                <p class="px-4 pt-3 text-gray-500 text-xs"><?php the_date('Y-m-d g:i A'); ?></p>
                                <h1 class="text-xs py-2 px-4">
								<?php $title = the_title('', '', false);
									echo substr($title, 0, 35);
									if (strlen($title) >35){
										echo '&hellip;';
									} ?>
								</h1>
                                
                            </div>
                        </div> 
                    </a>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>