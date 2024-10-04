<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mediasportportfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
	<link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/1cc2b7bb17.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap"
        rel="stylesheet">
	<?php wp_head(); ?>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

</head>

<body class="bg-white" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mediasportportfolio' ); ?></a>
	<header >
	<header id="masthead" class="xfont site-header px-4 py-6 font list-none w-[100%] flex justify-between items-center">
            <div class="md:w-[25%] md:w-[50%] w-full h-full">
                <div class="w-full gap-5 flex md:justify-start md:ml-8 justify-center items-center h-full">
                    <ul class=" flex justify-center">
                        <a href="#hero" class="visited:text-black text-black hover:text-[#00a6fb]">Home</a>
                    </ul>
                    <ul class="flex justify-center">
                        <a href="#about" class="visited:text-black text-black hover:text-[#00a6fb]">About</a>
                    </ul>
                    <ul class="flex justify-center">
                        <a href="#works" class="visited:text-black text-black hover:text-[#00a6fb]">Works</a>
                    </ul>
                    <ul class="flex justify-center">
                        <a href="#contact" class="visited:text-black text-black hover:text-[#00a6fb]">Contact</a>
                    </ul>
                </div>
            </div>
            <div class=" w-[50%] md:flex hidden justify-end">
                <ul>
                    <a href="#" class="visited:text-white hover:scale-[1.5%] duration-200 transtion-all shadow-md  mr-4 text-white hover:bg-white hover:text-[#2577c4] bg-[#00a6fb] py-2 px-4 rounded-full"><i class="fa-solid fa-phone"></i> Call Me</a>
                </ul>
            </div>
        </header>
	</header><!-- #masthead -->
