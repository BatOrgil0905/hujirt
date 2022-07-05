<?php
/*
Template name: Hayg
*/
get_header(); ?>

<section class="bg-gray-50 p-[2%]">
    <section class="container bg-white py-4">
        <div class="my-4 flex flex-col items-center justify-center md:w-full md:justify-around md:flex-row">
            <div class="bg-gray-50 w-fit rounded-md !mx-auto px-3 py-4">
                <h1 class="major-title mt-4">Саналт хүсэлт</h1>
                <div data-aos="fade-down">
                    <div class="my-4 flex items-center justify-center">
                        <?php echo do_shortcode('
                            [contact-form-7 id="390" title="Санал хүсэлт"]
                        ')?>
                    </div>
                </div>
            </div>
            
            <div class="flex mx-6">
                <div class="justify-around p-2 mt-2">
                    <i class="fas fa-map-marker-alt flex flex-col p-6 text-3xl mt-24 md:mt-16 ml-0 md:-ml-4 text-center duration-300 hover:text-red-600"></i>
					<i class="fas fa-envelope flex flex-col p-6 text-3xl mt-16 md:mt-8 ml-0 md:-ml-4 text-center duration-300 hover:text-yellow-500"></i>
                    <i class="fas fa-phone-alt flex flex-col p-6 text-3xl mt-16 md:mt-8 ml-0 md:-ml-4 text-center duration-300 hover:text-green-600"></i>
                </div>
                <div class="flex flex-col justify-around p-2">
                    <?php
                        $args = array('post_type' => 'hayg', 'posts_per_page' => 3, 'order' => 'ASC');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                        <h1 class="text-lg md:text-xl font-semibold mt-5"><?php the_title(); ?></h1><br>
                        <p class="w-44 text-xs -mt-5">
                            <?php the_content(); ?>
                        </p>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>

    <div class="major-title py-4">Байршил</div>
    <iframe class="m-4 w-9/12 h-[300px] !mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.3946987617696!2d106.92363113660329!3d47.916684131412495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d9692476541435f%3A0x3d0ea636e74f9173!2sUBH%20Center!5e0!3m2!1sen!2smn!4v1643005476735!5m2!1sen!2smn" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</section>

<?php get_footer(); ?>