<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content entry-content-cours">
		<div class="wp-block-media-text alignwide" style="grid-template-columns:30% auto">
			<figure class="wp-block-media-text__media">
			<?php
				$image = get_field('mon_image');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}
				
			?>
			</figure>
			<div class="wp-block-media-text__content">
				<?php
					the_content();
				?>
				<?php echo "Sigle: " . get_field('sigle') . "<br>"; ?>
				<?php echo "Professeurs qui offrent le cours: " . get_field('professeurs') . "<br>";?>
				<?php echo "Durée du cours: " . get_field('duree') . "<br>"; ?>
				<?php echo "Projets: " . get_field('projets') . "<br>"; ?>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
	<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
