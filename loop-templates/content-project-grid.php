<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php
/* get project time values */
$project_start = get_field('project_start_time',  get_the_ID());
$project_end = get_field('project_end_time',  get_the_ID());
?>
	<div class="card">
		<?php
			// Must be inside a loop.

			if ( has_post_thumbnail($post->ID) ) {
				the_post_thumbnail('grid_image', array('class' => 'card-img-top'));
			}
			?>
			<div class="card-body">
				<div id="time" class="h4 pt-3">
					<?php echo $project_start; ?>
						<?php if ($project_end) {
							 if( $project_end !== $project_start) {
							 	echo ' - ' . $project_end ;
							 }
						}
						?>
				</div>
			<h5 class="card-title">
			<?php	the_title() ; ?>
			</h5>

	<div class="card-text">

			<?php the_content(); ?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->
		</div>
	</div>
