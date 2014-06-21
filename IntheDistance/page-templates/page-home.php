<?php
/*
 * Template Name: Home
 * Description: Home page template
 */

get_header(); ?>
<div class="container-outer">
<div class="container-inner clearfix">
<div id="home-content">
<?php if ($homepage_image = of_get_option('homepage_image', false) ) : ?>
	<div class="image clearfix" >
		<img src="<?php echo $homepage_image; ?>" alt="homepage_image">
	</div>
<?php endif; ?>
	<div class="desc clearfix">
		<div class="desc-text">
<?php if ($homepage_heading = of_get_option('homepage_heading', false) ) : ?>
			<h2><?php echo $homepage_heading; ?></h2>
<?php endif; ?>

<?php if ($homepage_description = of_get_option('homepage_description', false) ) : ?>
<?php echo $homepage_description; ?>
<?php endif; ?>
		</div>
	</div>
</div>
<?php $comments = get_comments();
if( $comments ) { ?>
<div class="commentarea">
	<?php comments_template(); ?>
</div>
<?php } ?>

</div><!-- container-inner-->
</div><!-- container-outer-->
<?php get_footer(); ?>