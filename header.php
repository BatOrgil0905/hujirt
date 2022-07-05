<?php?><!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- --FontAwesome-- -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- ---Bootstrap--- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- -- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- --AOS-- -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!--Google Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat&family=PT+Sans&display=swap" rel="stylesheet">
	<!--FancyBox3-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link  href="/path/to/jquery.fancybox.min.css" rel="stylesheet">
	<script src="/path/to/jquery.fancybox.min.js"></script>

	<?php wp_head(); ?>
    <style>
        #menu-toggle:checked + #menu{
            background-color: rgb(249 250 251);
            display: block;
            line-height: 100%;
            padding-top: 0;
            text-align: start;
        }
        /* @media (max-width:1080px){
            .swiper-slide{
                width: 150px !important;
                height:425px;
            } 
            .swiper .content-swiper{
                font-size: 9px;
                height: 300px;
            }
        } */
    </style>
</head>

<body class="!overflow-x-hidden h-full" <?php body_class(); ?>>

<div class="px-[7%] bg-gray-100">
    <marquee class="bg-gray-100 py-2" behavior="smooth" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <?php
            $args = array('post_type' => 'zar', 'posts_per_page' => 4, 'order' => 'ASC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <h1 class="text-sm"><?php the_content(); ?></h1>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </marquee>
</div>
<header class="z-50 w-full flex-1 w-2/8 bg-white -mt-2 flex flex-wrap items-center">
    <div class="lg:px-[7%] px-[3%] flex-1 w-2/8 bg-white flex justify-between items-center">
        <a class="flex" href="/">
            <img class="w-16" src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="logo">
            <p class="mt-4 mx-2 text-gray-900 text-xs duration-300 hover:text-sky-600 lg:text-md">Хужирт<br> Рашаан Сувилал</p>
        </a>
    </div>

    <label for="menu-toggle" class="lg:px-[7%] px-[3%] mt-2 cursor-pointer lg:hidden block">
        <div class="p-3 ease-in duration-500 hover:bg-gray-50">
            <div class="h-[2px] w-4 bg-black mt-1"></div>
            <div class="h-[2px] w-4 bg-black mt-1"></div>
            <div class="h-[2px] w-3 bg-black my-1"></div>
        </div>
    </label>
    <input class="hidden duration-300" type="checkbox" id="menu-toggle" />

    <div class="lg:px-[7%] px-[3%] hidden lg:flex lg:items-center lg:w-auto duration-300 w-full" id="menu">
        <nav class="">
            <ul class="lg:flex items-center justify-between z-50 text-base text-gray-700 pt-2 -mt-1 lg:pt-0"> 
                <li class="hidden">
                    <a class="mx-4 py-5 px-4 leading-8 text-base hover:text-[#014E4E]" href="#">
                        <?php wp_nav_menu(array('theme_location' => 'footer','container' => false, 'items_wrap' => '%3$s')); ?>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
