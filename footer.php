<?php?>

<?php wp_footer(); ?>
<!-- ---Footer--- -->

<footer class="footer-1 white px-[7%]">
    <!-- start container -->
    <div class="container mx-auto pt-8 pb-4">
        <div class="flex flex-wrap items-center justify-between overflow-hidden md:-mx-px">
            <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
                <!-- Column 1 Content -->
                <a class="flex" href="http://test.hujirt.mn/">
                    <img class="w-16 pb-4" src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="logo">
                    <p class="mt-4 mx-2 text-gray-900 text-xs duration-300 hover:text-sky-600 lg:text-md">Хужирт<br> Рашаан Сувилал</p>
                </a>
            </div>
            <div class="flex justify-between overflow-hidden md:my-px md:px-px pb-6">
                <!-- Column 2 Content -->
                <ul class="nav navbar-nav">
                    <li id="navi-2" class="leading-4 text-sm lg:text-lg">
                        <a class="text-black text-xs leading-9 opacity-70 duartion-300 hover:opacity-100" href="<?php the_permalink( get_page_by_title('Бидний тухай') );?>">
                            Бидний тухай
                        </a>
                    </li>
                    <li id="navi-1" class="leading-4 text-sm">
                        <a class="text-black text-xs leading-9 opacity-70 duartion-300 hover:opacity-100" href="<?php the_permalink( get_page_by_title('Эмчилгээ Үйлчилгээ') );?>">
                            Эмчилгээ Үйлчилгээ
                        </a>
                    </li>
                    <li id="navi-2" class="leading-4 text-sm">
                        <a class="text-black text-xs leading-9 opacity-70 duartion-300 hover:opacity-100" href="<?php the_permalink( get_page_by_title('Мэдээ') );?>">
                            Мэдээ
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex justify-between overflow-hidden md:my-px md:px-px pb-6">
                <!-- Column 3 Content -->
                <ul class="">
                    <li id="navi-1" class="leading-4 text-sm">
                        <a class="text-black text-xs leading-9 opacity-70 duartion-300 hover:opacity-100" href="<?php the_permalink( get_page_by_title('Илгээх бичиг') );?>">
                            Илгээх бичиг
                        </a>
                    </li>
                    <li id="navi-2" class="leading-4 text-sm">
                        <a class="text-black text-xs leading-9 opacity-70 duartion-300 hover:opacity-100" href="<?php the_permalink( get_page_by_title('Price') );?>">
                            Үнэ тариф
                        </a>
                    </li>
                    <li id="navi-1" class="leading-4 text-sm">
                        <a class="text-black text-xs leading-9 opacity-70 duartion-300 hover:opacity-100" href="<?php the_permalink( get_page_by_title('Хаяг') );?>">
                            Хаяг байрлал
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <!-- Start footer bottom -->

        <div class="md:flex md:items-center md:justify-between " style="border-top:1px solid lightgray">
                <div class="flex flex-col justify-center items-center mt-6 mb-0">
                    <h1 class="my-1 font-medium text-sm">Утас</h1>
					<?php
                        $args = array('post_type' => 'hayg', 'posts_per_page' => 1, 'order' => 'desc');
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                        <p class="mx-2 text-sm">
                            <?php the_content(); ?>
                        </p>
					<?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <div class="flex flex-row justify-center items-center mt-6 mb-0">
                    <p class="text-black text-xs md:text-sm text-center opacity-80">
                        Copyright © 2022 ХУЖИРТ РАШААН СУВИЛАЛ, <br>Бүх эрх хуулиар хамгаалагдсан.
                    </p>
                </div>
                <ul class="text-center mt-2 md:text-end">
                    <li class="mx-1 inline leading-7 text-sm"><a class="text-black text-small" href="https://www.facebook.com/pages/Hujirt%20Rashaan%20Suvilal/154049824734914/"><i class="fab fa-facebook-square mx-1 text-xl cursor-pointer duration-300 hover:text-blue-800"></i></a></li>
                    <li class="mx-1 inline leading-7 text-sm"><a class="text-black text-small" href="#"><i class="fab fa-instagram mx-1 text-xl cursor-pointer duration-300 hover:text-fuchsia-600"></i></a></li>
                    <li class="mx-1 inline leading-7 text-sm"><a class="text-black text-small" href="#"><i class="fab fa-youtube mx-1 text-xl cursor-pointer duration-300 hover:text-red-600"></i></a></li>
                    <li class="mx-1 inline leading-7 text-sm"><a class="text-black text-small" href="#"><i class="fas fa-envelope mx-1 text-xl cursor-pointer duration-300 hover:text-yellow-600"></i></a></li>
                </ul>
        </div>
        <!-- end container -->
    </div>
</footer>

 <!-- ---Script--- -->
    <script>
        // ---Hamburger Bar---
        const toggleBtn = document.querySelector('#nav-toggle');
        const navList = document.querySelector('#nav-list');
        
        toggleBtn.addEventListener('click', () => {
            navList.classList.toggle("active");
        })
        // ---ScrollUpBtn--
        const scrollToTopBtn = document.querySelector(".scrollToTop");
        const rootElement = document.documentElement;

        function handleScroll() {
        const scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
        if (rootElement.scrollTop / scrollTotal > 0.8) {
            // Show button
            scrollToTopBtn.classList.add("showBtn");
        } else {
            // Hide button
            scrollToTopBtn.classList.remove("showBtn");
        }
        }

        function scrollToTop() {
        // Scroll to top logic
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        });
        }
        scrollToTopBtn.addEventListener("click", scrollToTop);
        document.addEventListener("scroll", handleScroll);
    </script>
    <script>
        // Initialize AOS
        AOS.init();
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
	Fancybox.bind('[data-fancybox="gallery"]', {
	  caption: function (fancybox, carousel, slide) {
		return (
		  `${slide.index + 1} / ${carousel.slides.length} <br />` + slide.caption
		);
	  },
	});
	</script>

    <!-- Swiper Emch nariin heseg -->
    <script>
        const swiperDoc = new Swiper(".docSwiper", {
            slidesPerView: 4,
            cssMode: true,
            spaceBetween: 30,
            grabCursor: true,
            loop: true,
            breakpoints: {
            
            0: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            
            1024: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
    <!-- Swiper undsen swiper heseg -->
    <script>
        const swiperMain = new Swiper(".myMainSwiper", {
            grabCursor: true,
            // sliderPerView: 3,
            spaceBetween: 30,
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    </script>
    <!-- Room 1 Swiper -->
    <script>
        const swiper = new Swiper(".myRoomSwiperOne", {
			grabCursor: true,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>

<!-- 	---Responsive--- -->
	<script>	
		module.exports = {
			theme: {
				screens: {
					'tablet': '800px',
					'laptop': '1025px',
					'desktop': '1281px',
				},
			}
		}
    </script>
</body>
</html>