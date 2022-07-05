<?php get_header(); ?>
<div class="bg-gray-50 w-full  pt-1 relative" style="height: 80vh; object-fit: cover;">
    <div class="swiper myMainSwiper w-full h-full">
        <div class="swiper-wrapper">
			
				<?php
					$args = array('post_type' => 'slider', 'posts_per_page' => 5, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<div class="swiper-slide">
						<?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
						?>
						<img class="w-full h-[80vh] md:h-full object-cover object-center" src="<?php echo $thumb_url[0] ?>">
<!-- 						<div class="overlay">						
						</div>
						<div class="absolute top-1/5 left-1/4 right-1/3 md:left-1/3 bottom-1/4 hover:scale-110  ease-in duration-300">
							<img class="" src="https://scontent.fuln2-2.fna.fbcdn.net/v/t1.15752-9/259441183_1146767669433962_1196742741987680259_n.png?_nc_cat=100&ccb=1-5&_nc_sid=ae9488&_nc_ohc=odYJN5KP5dcAX_1adZR&tn=QOmDPG8Yvav07nwb&_nc_ht=scontent.fuln2-2.fna&oh=03_AVK3O9t0S1N743iM9KxKCgMwawg4Qti8F48JAJyZ5PyPAg&oe=6227E09B" alt="cover" height="600px" width="500px">	
						</div> -->
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<div class="swiper-pagination"></div>
		</div>
    </div>
</div>

<section class="flex flex-col md:flex-row bg-white pt-4">
	<div class="px-0 md:!px-[8%]">
		<div class="container w-full flex flex-col lg:justify-center lg:items-center lg:flex-row">
			<div class="flex flex-col w-auto md:w-1/2 lg:w-7/12 mx-6 my-4">
				<div class=" bg-violet-200 w-auto my-1 rounded-t-3xl ">
					<div class="">
						<p class="w-full py-6 px-3 text-2xl text-center font-medium">Сувилалд хэрхэн ирэх вэ?</p>
					</div>	
				</div>

				<div class="bg-violet-50 w-auto h-auto my-1 rounded-none md:rounded-l-full md:rounded-r-full">
					<div class="flex justify-between">
						<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/1.png"/>
						<!-- 					<i class="fa-solid fa-1 p-1"></i> -->
						<p class="flex items-center w-4/6 p-1 md:!py-4 md:px-5 text-[0.6rem] sm:text-xs md:text-sm text-left font-medium">Та манай илгээх бичгийг Улаанбаатар дахь Төлөөлөгчийн газраас эсвэл www.hujirt.mn вэб сайтнаас татаж хэвлэж авна.</p>
						<a class="p-0 m-0" href="<?php the_permalink( get_page_by_title('Илгээх бичиг') );?>">
							<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20 cursor-pointer duration-300 hover:rotate-180" src="http://test.hujirt.mn/wp-content/uploads/2022/02/R-1.png">
						</a>
						
					</div>	
				</div>

				<div class="bg-violet-50 w-auto h-auto my-1 rounded-none md:rounded-l-full md:rounded-r-full">
					<div class="flex justify-between">
						<img class="w-16 h-16 p-2 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/2.png"/>
						<p class="flex items-center w-4/6 p-1 md:!py-4 md:px-5 text-[0.6rem] sm:text-xs md:text-sm text-left font-medium">Та илгээх бичгээ өөрийн харъяа сум, өрхийн эмнэлэгээр бөглүүлэн эмчийн болон өрхийн эмнэлгийн гэсэн 2 тамга даруулсан байна.</p>
						<!-- 					<i class="fa-solid fa-print text-4xl flex items-center justify-center p-2 md:p-3"></i> -->
						<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/Printer.png">
					</div>	
				</div>

				<div class="bg-violet-100 w-auto h-auto my-1 rounded-none md:rounded-l-full md:rounded-r-full">
					<div class="flex justify-between">
						<img class=" w-16 h-16 p-2 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/3.png"/>
						<p class="flex items-center w-4/6 p-1 md:!py-4 md:px-5 text-[0.6rem] sm:text-xs md:text-sm text-left font-medium">Цус шээсний дэлгэрэнгүй шинжилгээ өгсөн байна. Хугарал болон үе мөчний өвчтэй бол өмнө нь авхуулсан рентген зургаа хавсаргаж болно.</p>
						<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/AES_Icons-03.png">
					</div>	
				</div>

				<div class="bg-violet-50 w-auto h-auto my-1 rounded-none md:rounded-l-full md:rounded-r-full">
					<div class="flex justify-between">
						<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/4.png"/>
						<p class="flex items-center w-4/6 p-1 md:!py-4 md:px-5 text-[0.6rem] sm:text-xs md:text-sm text-left font-medium">Та Улаанбаатар дахь Төлөөлөгчийн газраас өрөө болон автобусны билетээ захиалж, төлбөрөө төлж баталгаажуулна</p>
<!-- 						<i class="fas fa-bus text-4xl flex items-center px-3 py-2"></i> -->
						<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/Bus-icon.png">
					</div>	
				</div>

				<div class="bg-violet-100 w-auto h-auto rounded-b-3xl">
					<div class="flex justify-between">
						<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/5.png"/>
						<p class="flex items-center w-4/6 p-1 md:!py-4 md:px-5 text-[0.6rem] sm:text-xs md:text-sm text-left font-medium">Хувийн унаагаар явах бол 77115858, 80498089 дугаарт залгаж урьдчилан захиалж төлбөр тооцоог хийнэ.</p>
						<img class="p-2 w-16 h-16 !my-auto md:w-20 md:h-20" src="http://test.hujirt.mn/wp-content/uploads/2022/02/Mobile-1.png">
					</div>	
				</div>
			</div>
			<div class="w-11/12 h-full !mx-auto flex items-center lg:w-1/2">
				<a data-fancybox>
					<iframe width="500" height="475"
						src="https://www.youtube.com/embed/gzoGW8KHXL0">
				</iframe>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="bg-gray-50 pb-6 h-full z-0">
	<div class="px-[4%] md:px-[8%] py-[4%]">
		<div class="container w-full flex flex-col md:justify-center md:items-center md:flex-row">
			<div class="w-full md:w-1/2 mx-2 h-full bg-white">
				<div data-aos="fade-down">
					<div class="!mt-2 flex flex-col justify-between">
						<h1 class="major-title text-left py-3 px-4">Хужирт Рашаан Сувилал</h1>
						<p class="text-lg text-left py-3 px-4 text-gray-700">
							Хужирт рашаан сувилал нь 1939 онд байгуулагдсан манай улсын ууган сувиллын нэг бөгөөд Монгол улсын хүн амд рашаан сувиллын тусламж үйлчилгээ үзүүлэх үндсэн үйл ажиллагаа эрхэлж, нэг ээлжиндээ 500-800 хүн хүлээн авах хүчин чадалтайгаар жилийн дөрвөн улирал тогтмол ажиллан манай орны 21 аймаг, хотуудаас зорин ирсэн олон мянган иргэдэд үйлчилж байна.
						</p>
						<a class="text-left text-xl py-2 px-3 duration-300 hover:bg-sky-200 w-fit mb-2 text-gray-500" href="<?php the_permalink( get_page_by_title('Бидний тухай') );?>">Бидний Тухай</a>
					</div>
				</div>
			</div>
			
			<div class="w-full md:w-1/2 mx-2 grid grid-flow-cols grid-rows-1 md:grid-rows-4 md:grid-cols-4 gap-2 mb-4 mt-3">
				<div class="col-span-4 row-span-2">
					<img style="outline: 1px solid white; outline-offset: -10px;" class="w-full h-[250px] object-fit duration-300 hover:scale-110 hover:outline-0 hover:outline-offset-0" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1459.jpg">
				</div>
				<div class="col-span-2 row-span-2">
					<img style="outline: 1px solid white; outline-offset: -10px;" class="w-full h-[250px] object-fit duration-300 hover:scale-110 hover:outline-0 hover:outline-offset-0" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1442-scaled.jpg">
				</div>
				<div class="col-span-2 row-span-2">
					<img style="outline: 1px solid white; outline-offset: -10px;" class="w-full h-[250px] object-fit duration-300 hover:scale-110 hover:outline-0 hover:outline-offset-0" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1561-768x562.jpg">
				</div>					
			</div>	
		</div>
	</div>
</section>

<section class="bg-gray-50 pb-6">
	<div class="px-0 md:!px-[8%]">
		<div class="major-title pt-12 pb-6">
			<h3>Эмчилгээ Үйлчилгээ</h3>
		</div>
		<div class="mx-[2%] my-6">
			<div data-aos="fade-down">
				<div class="grid gap-4 grid-cols-2 mx-auto md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 mx-4 my-8">
					<?php
						$args = array('post_type' => 'emchilgee', 'posts_per_page' => 5, 'order' => 'ASC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<a href="<?php the_permalink();?>">
						<div class="duration-300 cursor-pointer hover:scale-105 hover:text-[#014E4E]">
							<div class="">
								<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
								?>
								<img class="w-full h-full cursor-pointer" src="<?php echo $thumb_url[0] ?>">

								<div class="bg-white h-12 duration-300 cursor-pointer hover:text-[#014E4E] relative">
									<h1 class="absolute bottom-1 p-2 text-xs marker:text-[#014E4E]"><?php the_title(); ?></h1>
								</div>
							</div>
						</div> 
					</a>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
					<div class="w-[150px] h-[147px] md:w-[175px] md:h-[172px] relative border border-black">
						<div class="absolute w-[125px] h-[122px] md:w-[150px] md:h-[147px] top-3 left-3 bg-gray-100 duration-300 hover:rounded-md hover:bg-gray-300 hover:text-white">
							<a class="flex items-center justify-center my-8 md:my-12 duration-300 hover:text-[#014E4E]" href="<?php the_permalink( get_page_by_title('Эмчилгээ Үйлчилгээ') );?>">Илүү ихийг</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="" style="height:100%; z-index: 0; ">
	<div class="px-[4%] md:px-[8%] py-[4%]">
		
		<div class="grid grid-flow-cols grid-rows-1 md:grid-rows-2 md:grid-cols-8 gap-2 mb-4 mt-3">
			
			<div class="col-span-3 row-span-1 md:col-span-2 md:row-span-2">
				<a data-fancybox="gallery" href="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1632-scaled.jpg" class="p-0 m-0">
					<img style="outline: 2px solid white; outline-offset: -10px;" class="w-full h-full object-fit duration-300 hover:scale-110" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1632-scaled.jpg">
				</a>	
			</div>
			
			<div class="col-span-3">
				<a data-fancybox="gallery" href="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1459.jpg" class="p-0 m-0">
					<img style="outline: 2px solid white; outline-offset: -10px;" class="w-full h-[250px] object-fit duration-300 hover:scale-110" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1459.jpg">
				</a>				
			</div>
			
			<div class="bg-gray-50 col-span-3">
				<div class="!mt-8 flex flex-col justify-between">
					<h1 class="major-title text-left py-3 px-4">Галерей</h1>
					<p class="text-lg text-left py-3 px-4 text-gray-700">Хужирт рашаан сувилалын зургийн цоморлигоос</p>
					<a class="text-left text-xl py-2 px-3 duration-300 hover:bg-sky-200 w-fit text-gray-500" href="<?php the_permalink( get_page_by_title('Галерей') );?>">Илүү ихийг</a>
				</div>
			</div>
			
			<div class="col-span-3 md:col-span-2">
				<a data-fancybox="gallery" href="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1442-scaled.jpg" class="p-0 m-0">
					<img style="outline: 2px solid white; outline-offset: -10px;" class="w-full h-[250px] object-fit duration-300 hover:scale-110 hover:outline-0 hover:outline-offset-0" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1442-scaled.jpg">
				</a>				
			</div>
			
			<div class="col-span-3 md:col-span-2">
				<a data-fancybox="gallery" href="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1561-768x562.jpg" class="p-0 m-0">
					<img style="outline: 2px solid white; outline-offset: -10px;" class="w-full h-[250px] object-fit duration-300 hover:scale-110" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1561-768x562.jpg">
				</a>				
			</div>
			
			<div class="col-span-3 md:col-span-2">
				<a data-fancybox="gallery" href="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1417-1-2048x1365.jpg" class="p-0 m-0">
					<img style="outline: 2px solid white; outline-offset: -10px;" class="w-full h-[250px] object-fit duration-300 hover:scale-110" src="http://test.hujirt.mn/wp-content/uploads/2022/02/DSC1417-1-2048x1365.jpg">
				</a>
			</div>
			
		</div>
	</div>
</section>

<section class="bg-gray-50 pb-6 h-full z-0">
	<div class="px-[4%] md:px-[8%] py-[4%]">
		<div class="container w-full flex flex-col md:justify-center md:items-center md:flex-row">
			<div class="w-full md:w-1/2 mx-2 h-full bg-white">
				<div class="!mt-2 flex flex-col justify-between">
					<h1 class="major-title text-left py-3 px-4">Ресторан</h1>
					<p class="text-lg text-left py-3 px-4 text-gray-700">
						Хужирт рашаан сувилал нь 1939 онд байгуулагдсан манай улсын ууган сувиллын нэг бөгөөд Монгол улсын хүн амд рашаан сувиллын тусламж үйлчилгээ үзүүлэх үндсэн үйл ажиллагаа эрхэлж, нэг ээлжиндээ 500-800 хүн хүлээн авах хүчин чадалтайгаар жилийн дөрвөн улирал тогтмол ажиллан манай орны 21 аймаг, хотуудаас зорин ирсэн олон мянган иргэдэд үйлчилж байна.
					</p>
				</div>
			</div>
			<div class="w-full md:w-1/2 mx-2  mb-4 mt-3">
				<div class="swiper myMainSwiper w-full my-6">
					<div class="swiper-wrapper">
						<?php
						$args = array('post_type' => 'restaurant', 'posts_per_page' => 10, 'order' => 'ASC');
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
				</div>	
			</div>	
		</div>
	</div>
</section>

<section class="bg-white pb-6">
	<div class="px-0 md:!px-[8%]">
		<div class="major-title pt-12 pb-6">
			<h3>Үйлчлүүлэгчдийн сэтгэгдэлүүд</h3>
		</div>
		<div class="container grid gap-4 grid-cols-1 mx-auto md:grid-cols-3 lg:grid-cols-4 my-8">
		<?php
			$args = array('post_type' => 'setgegdel', 'posts_per_page' => 4, 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div data-aos="fade-down" data-aos-duration="1000">
				<div class="bg-sky-50 w-56 h-[300px] shadow-md cursor-default !mx-auto p-2 px-4 my-4 md:mx-0 duration-300 hover:shadow-lg hover:bg-sky-100">
					<h1 class="text-xl font-medium text-black py-1 px-2"><?php the_title(); ?></h1>
					<p class="mt-2 text-justify md:indent-6"><?php the_content(); ?></p>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>		
<!--     <div class="flex flex-col md:flex-row mt-6">
        <div class="flex flex-col justify-around bg-white ml-0 w-full md:w-7/12 px-4">
            <div class="flex flex-col justify-between">
                <?php
                    $args = array('post_type' => 'suvilal', 'posts_per_page' => 5, 'order' => 'ASC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div data-aos="fade-down" data-aos-duration="1000">
                    <div class="bg-[#08f3ff] w-full cursor-default p-4 my-4 md:mx-0 duration-300 hover:shadow-lg">
                        <h1 class="major-title"><?php the_title(); ?></h1>
                        <p class="mt-2 text-left md:text-right md:indent-6 md:text-justify"><?php the_content(); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
        <div id="typing" class="min-h-screen absolute w-full md:w-1/2 bg-[url('<?php echo get_template_directory_uri(); ?>/images/typing.jpg')] bg-cover bg-center">
            <h1 class="major-title mt-4">Захиалга өгөх</h1>
            <div data-aos="fade-down">
                <div class="my-4 px-1 flex items-center justify-center">
                    <?php echo do_shortcode('
                        [contact-form-7 id="322" title="Contact form 1"]
                    ')?>
                </div>
            </div>
        </div>
    </div> -->
    
</section>

<!-- <section class="bg-white pb-6">
    <div class="major-title pt-12 pb-6">
        <h3>Эмч нар</h3>
    </div>
    <div class="mx-[2%] my-6">
        <div class="swiper docSwiper w-auto bg-white">
            <div class="swiper-wrapper">
				<?php
	$args = array('post_type' => 'emch', 'posts_per_page' => 4, 'order' => 'ASC');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="swiper-slide mx-4 w-[190px] h-auto">
					<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
					?>
					<div id="emch-container">
						<img id="emch-zurag" class="w-auto h-96 object-cover object-center" src="<?php echo $thumb_url[0] ?>">
						<div id="emch-middle">
							<div id="emch-text"><?php the_title(); ?></div>
						</div>
					</div>
					<div class="pb-4 bg-gray-50">
						<h1 class="p-4 text-sm marker:text-[#014E4E]"><?php the_content(); ?></h1>
					</div>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
			<div class="swiper-button-next right-0"></div>
			<div class="swiper-button-prev left-0"></div>
			<div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="bg-gray-50">
    <div id="countdown" class="bg-[url('<?php echo get_template_directory_uri(); ?>/images/bg-3.jpg')] bg-cover bg-center">
        <div data-aos="fade-up">
            <?php echo do_shortcode('[COUNTER_NUMBER id=346]'); ?>
        </div>
    </div>
</section> -->

<section class="bg-gray-50 pb-6">
	<div class="px-0 md:!px-[8%]">
		 <div class="major-title pt-12 pb-6">
			<h3>Мэдээ Мэдээлэл</h3>
		</div>
		<div class="mx-[2%] my-6">
			<div data-aos="fade-down" data-aos-duration="1500">
				<div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 sm:mx-auto lg:grid-cols-5 mx-4 my-8">
					<?php
						$args = array('post_type' => 'medee', 'posts_per_page' => 4, 'order' => 'ASC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<a href="<?php the_permalink();?>">
							<div class="duration-300 cursor-pointer hover:text-[#014E4E] hover:scale-105">
								<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
								?>
								<img class="w-full h-full md:w-[220px] md:h-[150px]" src="<?php echo $thumb_url[0] ?>">
								<div class="bg-white duration-300 cursor-pointer w-full hover:text-[#014E4E] relative">
									<p class="px-4 pt-3 text-gray-400 text-xs"><?php the_date('Y-m-d g:i A'); ?></p>
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
					<div class="mt-2 mx-2 w-[150px] h-[147px] md:w-[175px] md:h-[172px] relative border border-black">
						<div class="absolute w-[125px] h-[122px] md:w-[150px] md:h-[147px] top-3 left-3 bg-gray-100 duration-300 hover:rounded-md hover:bg-gray-300 hover:text-white">
							<a class="flex items-center justify-center my-8 md:my-12 duration-300 hover:text-[#014E4E]" href="<?php the_permalink( get_page_by_title('Мэдээ') );?>">Илүү ихийг</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>   
</section>

<?php get_footer(); ?>