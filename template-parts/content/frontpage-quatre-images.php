<?php
/**
 * Template part pour afficher les catégories du front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<div class="wp-block-column wp-block-media-text-perso">
	<figure class="wp-block-image">
		<a style="text-decoration:none;color:inherit;" class="a-quatre-images" href="<?php the_permalink(); ?>"><?php the_title(); ?>

		<?php 
	//	the_post_thumbnail(''); 

		$image = get_field('mon_image');
		$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}

		// add_post_meta($post_id, '_thumbnail_id', $attachment_id);
		
	?>
	</a>
	</figcaption>
	</figure>
</div>