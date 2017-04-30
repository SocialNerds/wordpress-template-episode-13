<?php get_header(); ?>

<div class="container">
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p>
			<?php echo $post->post_content; ?>
		</p>
	</div>
</div>
<?php get_footer(); ?>
