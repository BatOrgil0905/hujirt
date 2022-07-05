<?
/*
Template name: Gallery
*/
get_header();?>

<section class="bg-gray-50 p-[2%]">
	<section class="container bg-white my-3">
        <div class="major-title py-6">Галерей</div>
        <div class="container px-[8%] flex flex-row flex-wrap items-center justify-center">
		<?php
			$args = array('post_type' => 'gallery', 'posts_per_page' => 6, 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>  
		<div class="boxGallery">
			<div class="imgBox">
				<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
				?>
				<img src="<?php echo $thumb_url[0] ?>">
			</div>
			<div class="details">
				<div class="content">
					<h2><?php the_title();?></h2>
				</div>	
			</div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>
    </section>
</section>

<?php get_footer(); ?>