<?php
get_header(); ?>
  <div class="site-content-404">
	  <article class="no-results">

	    <header class="entry-header">
	      <h1 class="page-title"><?php esc_html_e( ' Page Not Found :( '); ?></h1>
	    </header><!-- .entry-header -->

	    <div class="entry-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location.'); ?></p>
	    </div><!-- .entry-content -->

        <div class="searchbar-404">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<div>
<input class="text-404" type="text" value=" " name="s" id="s" placeholder="Search..."/>
<input type="submit" class="submit button-404" name="submit" value="<?php _e('Search');?>" />
</div>
</form>
        </div>
        <div class="home-link">
			<p class="404p"><a class="home_link" href="<?php echo home_url('/'); ?>"> <--- Go back</a></p>
	    </div>

	  </article><!-- .no-results -->
	</div><!-- .site-content -->
    <?php
get_footer();
?>