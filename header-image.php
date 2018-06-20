<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<!--<div class="custom-header-media">
			<?php //the_custom_header_markup(); ?>
		</div>-->

	<?php //get_template_part( 'template-parts/header/site', 'branding' ); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
					<?php the_custom_logo(); ?>
				</div>
				
				<div class="col-md-9">
					<?php if ( has_nav_menu( 'top' ) ) : ?>
						<div class="navigation-top">
							<div class="wrap">
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							</div><!-- .wrap -->
						</div><!-- .navigation-top -->
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

</div><!-- .custom-header -->
