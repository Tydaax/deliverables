<?php /* Template Name: Test */ ?>

<?php

get_header(); ?>

<?php do_action( 'accelerate_before_post_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">


            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>


		</div><!-- #content -->
    </div><!-- #primary -->
    
    <?php do_action( 'accelerate_after_post_content' ); ?>

<?php get_footer(); ?>
