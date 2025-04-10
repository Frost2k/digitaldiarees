<?php
/*
 * Template Name: Stills Page
 * Template Post Type: page
 */

get_header();
$image = get_field('stills_image');
$link = get_field('stills_link');
?>

<main class="site-main container">
    <section class="media-row">
        <h2 class="section-title">Stills</h2>
        <?php if ($image && $link): ?>
            <div class="media-card">
                <a href="<?php echo esc_url($link); ?>">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="media-img" />
                </a>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
