<?php
/*
Template name: Price
*/
get_header(); ?>

<section class="bg-gray-50 p-[2%]">
    <section class="container bg-white">
		<div class="px-0 md:!px-[8%]">
			<div class="major-title py-4">Сувилалын Үнэ</div>
				<?php
					$args = array('post_type' => 'une', 'posts_per_page' => 1, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="py-4 px-[2%] flex flex-col justify-center">
					<?php the_content();?>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			<h1 class="px-[4%] py-[2%] font-medium text-xl">Энгийн өрөө</h1>
			<div class="px-[2%] !mx-auto w-full flex flex-col md:justify-center md:items-center md:flex-row">
				<table class="border border-black !mx-4 my-4 p-2 w-full md:w-[500px]">
					<tr class="border border-black w-full bg-gray-50">
						<th class="border border-black w-[80%] text-center p-2">Өрөөний төрөл</th>
						<th class="border border-black text-center p-2">Үнэ</th>
					</tr>
					<tr class="border border-black">
						<td class="border border-black w-[80%] p-2">2 ортой өрөө </td>
						<td class="border border-black text-center p-2">400,000₮</td>
					</tr>
					<tr class="border border-black bg-gray-50">
						<td class="border border-black w-[80%] p-2">3-4 ортой өрөө</td>
						<td class="border border-black text-center p-2">380,000₮</td>
					</tr>
					<tr class="border border-black">
						<td class="border border-black w-[80%] p-2">5-6 ортой өрөө</td>
						<td class="border border-black text-center p-2">565,000₮</td>
					</tr>
					<tr class="border border-black bg-gray-50">
					  <td class="border border-black text-center p-2" colspan="3">
							<p align="center"><strong>Хүүхэд</strong></p>
						</td>
					</tr>
					<tr class="border border-black">
						<td class="border border-black w-[80%] p-2">0-2 нас хүртэл</td>
						<td class="border border-black text-center p-2">80,000₮</td>
					</tr>
					<tr class="border border-black bg-gray-50">
						<td class="border border-black w-[80%] p-2">3-7 нас хүртэл</td>
						<td class="border border-black text-center p-2">200,000₮</td>
					</tr>
					<tr class="border border-black">
						<td class="border border-black w-[80%] p-2">7-12 нас хүртэл</td>
						<td class="border border-black text-center p-2">280,000₮</td>
					</tr>
					<tr class="border border-black bg-gray-50">
						<td class="border border-black w-[80%] p-2">12-с дээш бол</td>
						<td class="border border-black text-center p-2">Том хүний зардлаар явна</td>
					</tr>
				</table>
				<div>
					<div class="swiper myRoomSwiperOne w-full md:w-[500px] h-[400px] my-6">
						<div class="swiper-wrapper">
							<?php
								$args = array('post_type' => 'engiinOroo', 'posts_per_page' => 10, 'order' => 'ASC');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
							?>
							<div class="swiper-slide  w-full h-[400px]">
								<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
								?>
								<img class="w-full h-full object-cover object-center" src="<?php echo $thumb_url[0] ?>">
							</div>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</div>
						<div class="swiper-button-next right-0 border border-white bg-sky-600 text-gray-200 px-3 py-4"></div>
						<div class="swiper-button-prev left-0 border border-white bg-sky-600 text-gray-200 px-3 py-4"></div>
					</div>
				</div>
			</div>
				<section class="container bg-white pb-6">
					<h1 class="px-[4%] py-[2%] font-medium text-xl">Люкс өрөө</h1>
					<div class="px-[2%] !mx-auto flex flex-col justify-center md:flex-row">
						<table class="border border-black !mx-4 !my-auto p-2 h-[200px] w-full md:h-[200px]">
							<tr class="border border-black w-full bg-gray-50">
								<th class="border border-black w-full text-center p-2">Өрөөний төрөл</th>
								<th class="border border-black text-center p-2">Үнэ</th>
							</tr>
							<tr class="border border-black">
								<td class="border border-black w-full p-2">2 ортой өрөө </td>
								<td class="border border-black text-center p-2">750,000₮</td>
							</tr>

						</table>
						<div>
							<div class="swiper myRoomSwiperOne w-full md:w-[500px] h-[400px] my-6">
								<div class="swiper-wrapper">
									<?php
										$args = array('post_type' => 'luxOroo', 'posts_per_page' => 10, 'order' => 'ASC');
										$loop = new WP_Query( $args );
										while ( $loop->have_posts() ) : $loop->the_post();
									?>
									<div class="swiper-slide  w-full h-[400px]">
										<?php
											$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
										?>
										<img class="w-full h-full object-cover object-center" src="<?php echo $thumb_url[0] ?>">
									</div>
									<?php endwhile; ?>
									<?php wp_reset_query(); ?>
								</div>
								<div class="swiper-button-next right-0 border border-white bg-sky-600 text-gray-200 px-3 py-4"></div>
								<div class="swiper-button-prev left-0 border border-white bg-sky-600 text-gray-200 px-3 py-4"></div>
							</div>
						</div>
					</div>   
			</section>
		</section>
</section>

<?php get_footer(); ?>