<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://google.com
 *
 * @package WordPress
 * 
 * @since My Resume 1.0
 */
get_header(); ?>

<body>
	<div class="page new-skin">
		
		<!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- background -->
		<div class="background gradient">
			<ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
		</div>

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!-- Header-->
            <?=get_template_part( 'partials/card-header' )?>
            
			<!-- Card - Started -->
            <?=get_template_part( 'partials/card-started' )?>
            
			<!-- Card - About -->
            <?=get_template_part( 'partials/card-about' )?>
            
			<!-- Card - Resume -->
            <?=get_template_part( 'partials/card-resume' )?>
            
			<!-- Card - Works -->
            <?=get_template_part( 'partials/card-works' )?>
            
			<!-- Card - Blog -->
            <?=get_template_part( 'partials/card-blog' )?>
            
			<!-- Card - Contacts -->
            <?=get_template_part( 'partials/card-contacts' )?>

		</div>

		<div class="s_overlay"></div>
		<div class="content-sidebar">
            <?=get_sidebar()?>
		</div>

	</div>
	
<?=get_footer()?>