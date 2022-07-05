<?php 
/*
Template name: Emchilgee
*/
get_header();?>

<section class="bg-gray-50 py-[2%]">
    <section class="mx-[3%] bg-white my-4 py-4 border border-black px-6">
		<div class="px-0 md:!px-[8%]">
			<div class="major-title pt-4">
            <h3>Эмчилгээнүүд</h3>
        </div>
			<div class="grid gap-4 sm:grid-cols-2 sm:mx-auto md:grid-cols-4 lg:grid-cols-6 py-4 mx-4 my-8">
				<?php
					$args = array('post_type' => 'emchilgee', 'posts_per_page' => 30, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<a href="<?php the_permalink();?>">
					<div class="duration-300 cursor-pointer border border-black hover:text-violet-700">
						<div class="duration-300 hover:scale-110">
							<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
							?>
							<img class="w-full h-full cursor-pointer" src="<?php echo $thumb_url[0] ?>">

							<div class="relative bg-gray-50 h-12 duration-300 cursor-pointer hover:text-violet-700">
									<h1 class="absolute bottom-1 p-2 text-xs marker:text-sky-500"><?php the_title(); ?></h1>
								</div>
						</div>
					</div> 
				</a>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
    </section>
</section>
<?php get_footer();?>