<?php
/*
 * Template Name: How It Works
 * Template Post Type: post, page
 */

get_header();

/*───────────────────────────────────────────
 * Helper functions
 *───────────────────────────────────────────*/

/** Normalize any ACF image return (array / ID / URL) → ['url','alt'] */
function dd_get_image_meta( $field ) {
	$out = [ 'url' => false, 'alt' => '' ];

	if ( is_array( $field ) && isset( $field['url'] ) ) {          // Image array
		$out['url'] = $field['url'];
		$out['alt'] = $field['alt'] ?? '';
	} elseif ( is_numeric( $field ) ) {                            // Attachment ID
		if ( $src = wp_get_attachment_image_src( $field, 'full' ) ) {
			$out['url'] = $src[0];
		}
		$out['alt'] = get_post_meta( $field, '_wp_attachment_image_alt', true );
	} elseif ( is_string( $field ) ) {                             // Plain URL
		$out['url'] = $field;
	}
	return $out;
}

/** Normalize ACF link / page-link / URL / post-object → URL string */
function dd_get_link_url( $field ) {
	if ( ! $field ) { return false; }

	if ( is_array( $field ) && isset( $field['url'] ) ) {          // ACF link array
		return $field['url'];
	}
	if ( is_numeric( $field ) ) {                                  // Post object / ID
		return get_permalink( $field );
	}
	if ( is_string( $field ) ) {                                   // Raw URL
		return $field;
	}
	return false;
}

/*───────────────────────────────────────────
 * Fetch ACF fields
 *───────────────────────────────────────────*/
$bg_image      = dd_get_image_meta( get_field( 'about_background_image' ) );

$banner_btn    = dd_get_link_url( get_field( 'banner_btn' ) );
$banner_label  = get_field( 'banner_btn_label' ) ?: ( $banner_btn ? parse_url( $banner_btn, PHP_URL_HOST ) : '' );

/* Icon cards */
$cards = [
	[
		'img'  => dd_get_image_meta( get_field( 'icon_1' ) ),
		'title'=> 'Capturing voices, preserving stories',
		'link' => dd_get_link_url( get_field( 'icon_1_link' ) ),
	],
	[
		'img'  => dd_get_image_meta( get_field( 'icon_2' ) ),
		'title'=> 'Share your story—your way',
		'link' => dd_get_link_url( get_field( 'icon_2_link' ) ),
	],
	[
		'img'  => dd_get_image_meta( get_field( 'icon_3' ) ),
		'title'=> 'Curated with care, crafted for impact',
		'link' => dd_get_link_url( get_field( 'icon_3_link' ) ),
	],
	[
		'img'  => dd_get_image_meta( get_field( 'icon_4' ) ),
		'title'=> 'Stories organized, community inspired',
		'link' => dd_get_link_url( get_field( 'icon_4_link' ) ),
	],
];
?>

<!-- ───── Banner ───── -->
<section class="about-banner"
	<?php if ( $bg_image['url'] ) : ?>
		style="background-image:url('<?php echo esc_url( $bg_image['url'] ); ?>');"
	<?php endif; ?>>
	<div class="about-heading-outer">
		<h2 class="mission-title-outer">How It Works</h2>
		<p class="mission-subtitle-outer">“Capturing History, One Story at a Time”</p>

		<?php if ( $banner_btn ) : ?>
			<a class="banner-cta-btn"
			   href="<?php echo esc_url( $banner_btn ); ?>"
			   target="_blank" rel="noopener">
				<?php echo esc_html( $banner_label ); ?>
			</a>
		<?php endif; ?>
	</div>
</section>

<!-- ───── Icon cards ───── -->
<section class="how-it-works-section">
	<div class="how-it-works-grid">
		<?php foreach ( $cards as $card ) :

			/* Skip if no image — adjust as needed */
			if ( ! $card['img']['url'] ) { continue; }

			$link_open  = $card['link'] ? '<a href="' . esc_url( $card['link'] ) . '" target="_blank" rel="noopener" class="how-card-link">' : '';
			$link_close = $card['link'] ? '</a>' : '';
		?>
			<div class="how-card">
				<?php echo $link_open; ?>
					<div class="how-icon">
						<img src="<?php echo esc_url( $card['img']['url'] ); ?>"
							 alt="<?php echo esc_attr( $card['title'] ); ?>">
					</div>
					<h3><?php echo esc_html( $card['title'] ); ?></h3>
				<?php echo $link_close; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<?php get_footer(); ?>
