<?php
/* Template Name:Home Page */
get_header();
?>

<!-- First Section -->

<section class="main-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
<?php
$args = array( 'post_type' => 'sliders', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args );
?>
				<div class="slider">
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="loop-custom" style="background:url(<?php the_post_thumbnail_url();?>);  background-size: cover; background-position:top;">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
<?php endwhile; wp_reset_postdata(); ?>
				</div>
<?php else :  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>

<!-- Second Section -->

<section class="second-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
<?php
$args1 = array( 'post_type' => 'properties', 'posts_per_page' => 4, 'order' => 'ASC' );
$the_query1 = new WP_Query( $args1 );
$i=1;
?>

					<div class="manage-property">

<?php if ( $the_query1->have_posts() ) : ?>
<?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
<?php $text = get_post_meta(get_the_ID(), 'explore_more', true); ?>
						<div class="under-property demo<?php echo $i; ?> <?php if($i=='1' || $i=='3' || $i=='5' || $i=='7'){ echo 'oddcls';}else{ echo 'evencls';} ?>" >
							<div class="col-md-6">
								<?php the_post_thumbnail(); ?>
								<div class="black-overly">
									<h2><?php the_title(); ?></h2>
									<a href="<?php the_permalink(); ?>"><h3><?php echo $text; ?></h3></a>
								</div>
							</div>
						</div>
<?php $i++; endwhile; wp_reset_postdata(); ?>
					</div>
<?php else :  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
				</div>

				<div class="col-md-6">
<?php
$args2 = array( 'post_type' => 'properties', 'posts_per_page' => 1, 'order' => 'DESC' );
$the_query2 = new WP_Query( $args2 );
?>
					<div class="manage-right">

<?php if ( $the_query2->have_posts() ) : ?>
<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
<?php $text = get_post_meta(get_the_ID(), 'explore_more', true); ?>
						<div class="under-property">
								<div class="col-md-12">
									<?php the_post_thumbnail(); ?>
									<div class="black-overly">
										<h2><?php the_title(); ?></h2>
										<a href="<?php the_permalink(); ?>"><h3><?php echo $text; ?></h3></a>
									</div>
								</div>
						</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
<?php else :  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Third Section -->

<section class="third-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="manage-title">
				<?php
					global $wp_query;
					$postid = $wp_query->post->ID;
				?>
						<h3><?php echo get_post_meta($postid, 'newsletter_text', true); ?></h3>
				<?php wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-9">
					<div class="manage-newsletter">
						<?php echo do_shortcode('[wysija_form id="1"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>