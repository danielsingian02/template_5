<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php
	wp_head();
	?>
</head>

<body>

	<header>

		<nav class="navbar navbar-expand-lg desktop">

			<div class="container-fluid d-flex flex-column justify-content-center p-0">

				<div class="logo">

					<a class="header-link" href="<?php bloginfo( 'url' ); ?>">
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

						if ( has_custom_logo() ) {
							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						} else {
							echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
						}
						?>
					</a>

				</div>

				<div 
					class="container-fluid d-flex flex-row justify-content-center p-0 header-ctn">

					<button 
						class="hamburger"
						type="button" 
						data-bs-toggle="offcanvas" 
						data-bs-target="#offcanvasScrolling" 
						aria-controls="offcanvasScrolling">

							<i class="fa fa-bars" aria-hidden="true"></i>

					</button>


					<div 
						class="offcanvas offcanvas-end"
						data-bs-scroll="true" 
						data-bs-backdrop="false" 
						tabindex="-1" 
						id="offcanvasScrolling" 
						aria-labelledby="offcanvasScrollingLabel">

						<div class="offcanvas-header">

							<h5 class="offcanvas-title" id="staticBackdropLabel">
								<?php echo get_bloginfo(); ?>
							</h5>

							<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

						</div>

						<div class="offcanvas-body">

							<div class="w-100">

								<?php wp_nav_menu( 'primary' ); ?>

							</div>

						</div>

					</div>
				</div>

			</div>

		</nav>

	</header>
