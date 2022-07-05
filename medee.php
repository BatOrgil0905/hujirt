<?php 
/*
Template name: Medee
*/
get_header();?>

<section class="bg-gray-50 py-[2%]">
    <section class="mx-[3%] bg-white my-4 py-4 border border-black px-6">
		<div class="px-0 md:!px-[8%]">
			<div class="major-title pt-4">
				<h3>Мэдээ мэдээлэл</h3>
			</div>
			<div class="grid gap-4 sm:grid-cols-2 sm:mx-auto md:grid-cols-4 lg:grid-cols-5 py-4 mx-4 my-8">
				<?php
					$args = array('post_type' => 'medee', 'posts_per_page' => 50, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<a href="<?php the_permalink();?>">
						<div class="duration-300 cursor-pointer hover:text-violet-500 hover:scale-105">
							<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
							?>
							<img class="w-full h-full md:w-[220px] md:h-[150px]" src="<?php echo $thumb_url[0] ?>">
							<div class="bg-gray-50 duration-300 cursor-pointer w-full hover:text-[#014E4E] relative">
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
			</div>
		</div>
    </section>
</section>
<?php get_footer();?>