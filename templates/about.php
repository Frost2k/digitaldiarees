<?php
/*
 * Template Name: About
 * Template Post Type: post, page
 */

get_header();

/*───────────────────────────────────────────
 * Helpers
 *───────────────────────────────────────────*/

/**
 * Turn any ACF Image field (array / ID / URL) into ['url','alt'].
 */
function dd_get_image_meta( $field ) {
	$out = [ 'url' => false, 'alt' => '' ];

	// Image array
	if ( is_array( $field ) && isset( $field['url'] ) ) {
		$out['url'] = $field['url'];
		$out['alt'] = $field['alt'] ?? '';
		return $out;
	}

	// Attachment ID
	if ( is_numeric( $field ) ) {
		$src        = wp_get_attachment_image_src( $field, 'full' );
		$out['url'] = $src ? $src[0] : false;
		$out['alt'] = get_post_meta( $field, '_wp_attachment_image_alt', true );
		return $out;
	}

	// Plain URL string
	if ( is_string( $field ) ) {
		$out['url'] = $field;
		return $out;
	}

	return $out;
}

/**
 * Turn any ACF Link / Page Link / URL / Post Object into a clean URL string.
 */
function dd_get_link_url( $field ) {
	if ( ! $field ) {
		return false;
	}

	// ACF “Link” array
	if ( is_array( $field ) && isset( $field['url'] ) ) {
		return $field['url'];
	}

	// Post or page ID
	if ( is_numeric( $field ) ) {
		return get_permalink( $field );
	}

	// Already a URL string
	if ( is_string( $field ) ) {
		return $field;
	}

	return false;
}

/*───────────────────────────────────────────
 * Fetch ACF fields
 *───────────────────────────────────────────*/
$bg_image     = dd_get_image_meta( get_field( 'about_background_image' ) );
$mission_text = get_field( 'about_mission_text' );

$media = [
	[
		'img'  => dd_get_image_meta( get_field( 'about_video_1' ) ),
		'link' => dd_get_link_url( get_field( 'featured_stories_images_link1' ) ),
	],
	[
		'img'  => dd_get_image_meta( get_field( 'about_video_2' ) ),
		'link' => dd_get_link_url( get_field( 'featured_stories_images_link2' ) ),
	],
	[
		'img'  => dd_get_image_meta( get_field( 'about_video_3' ) ),
		'link' => dd_get_link_url( get_field( 'featured_stories_images_link3' ) ),
	],
];
?>

<!-- ───── Hero banner ───── -->
<section class="about-banner"
	<?php if ( $bg_image['url'] ) : ?>
		style="background-image:url('<?php echo esc_url( $bg_image['url'] ); ?>');"
	<?php endif; ?>>
	<div class="about-heading-outer">
		<h2 class="mission-title-outer">Our Mission</h2>
		<p class="mission-subtitle-outer">“Preserving Voices, Sharing Stories”</p>
	</div>
</section>

<!-- ───── Main content ───── -->
<section class="about-inner">
	<div class="about-container">

		<?php if ( $mission_text ) : ?>
			<div class="about-text">
				<div class="about-mission-text"><?php echo wp_kses_post( $mission_text ); ?></div>
			</div>
		<?php endif; ?>

		<div class="vertical-divider"></div>

		<div class="about-media">
			<?php foreach ( $media as $item ) :

				// Skip if no image URL
				if ( ! $item['img']['url'] ) {
					continue;
				}

				$link_url = $item['link'] ? esc_url( $item['link'] ) : false;
				?>
				<div class="media-block">
					<?php if ( $link_url ) : ?>
						<a href="<?php echo $link_url; ?>" target="_blank" rel="noopener">
					<?php endif; ?>

						<img src="<?php echo esc_url( $item['img']['url'] ); ?>"
							 alt="<?php echo esc_attr( $item['img']['alt'] ?: 'Media thumbnail' ); ?>" />

					<?php if ( $link_url ) : ?>
						</a>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div><!-- /.about-media -->

	</div><!-- /.about-container -->
</section>

<?php get_footer(); ?>
