<?php get_header(); ?>

<?php get_sidebar(); ?>


    <main class="ten columns offset-by-one">

    	<div class="socialicons right">
			<a href="https://www.facebook.com/shiyu.you" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="http://uk.linkedin.com/in/rubyyou" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="https://github.com/RubyYou" target="_blank"><i class="fa fa-github-alt"></i></a>
			<a href="https://dribbble.com/Rubyyou" target="_blank"><i class="fa fa-dribbble"></i></a>
			<a href="mailto:shih@luluvirus.co.uk"><i class="fa fa-envelope"></i></a>
		</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="contentBlock" id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="content">

				<?php the_content(); ?>

				<?php //wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php //the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this content','','.'); ?>
			
		</div>

	<?php //comments_template(); ?>

	<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>