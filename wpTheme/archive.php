<?php get_header(); ?>

<?php get_sidebar(); ?>

<main class="ten columns offset-by-one" >

	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php /* If this is a category archive */ if (is_category()) { ?>
			<p class="archiveTitle"> <a href="<?php bloginfo('url'); ?>">Home</a> > <?php single_cat_title(); ?></p>

		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h4>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>

		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h4>Archive for <?php the_time('F jS, Y'); ?></h4>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h4>Archive for <?php the_time('F, Y'); ?></h4>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h4>Archive for <?php the_time('Y'); ?></h4>

		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h4>Author Archive</h4>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2>Blog Archives</h2>
		
		<?php } ?>

	<div class="socialicons right">
		<a href="https://www.facebook.com/shiyu.you" target="_blank"><i class="fa fa-facebook"></i></a>
		<a href="http://uk.linkedin.com/in/rubyyou" target="_blank"><i class="fa fa-linkedin"></i></a>
		<a href="https://github.com/RubyYou" target="_blank"><i class="fa fa-github-alt"></i></a>
		<a href="https://dribbble.com/Rubyyou" target="_blank"><i class="fa fa-dribbble"></i></a>
		<a href="mailto:shih@luluvirus.co.uk"><i class="fa fa-envelope"></i></a>
	</div>
	<hr/>
	<ul id="grid" class="grid effect-5">
		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>
		
			 <li class="block">
				<a href="<?php the_permalink() ?>">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
				</a>
				<date>
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				</date>
				<a class="btn" href="<?php the_permalink() ?>">READ MORE</a>
			</li>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h4>Nothing found</h4>

	<?php endif; ?>
	</ul>

</main>

<?php get_footer(); ?>