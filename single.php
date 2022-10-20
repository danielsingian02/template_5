<?php
get_header();
?>

<div class="single-page">
	<?php
	while ( have_posts() ) :

		the_post();
		?>
  
		<article <?php post_class(); ?> >
		
			<?php the_post_thumbnail( 'my-custom-image-size' ); ?>

			<header class="entry-header">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<div class="meta mb-3"> 
				<span class="date"> <?php the_date(); ?> </span>   
				<span class="comment"><a href="#comments"><i class='fas fa-comment'></i> <?php comments_number(); ?> </span>   </a></span>
			</div> 

			<div class="content">
				<?php
					esc_html( comments_template() );
				?>
			</div>
			
		</article><!-- #post -->

		<?php
	endwhile;
	?>
</div>

<?php
get_footer();
?>