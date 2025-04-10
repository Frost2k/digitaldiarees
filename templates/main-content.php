<?php
/*
 * Template Name: Main Content
 * Template Post Type: post, page
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container">

        <!-- STILLS Section -->
        <section class="media-row">
            <h2 class="section-title">Stills</h2>
            <div class="media-grid">
                <?php for ($i = 1; $i <= 3; $i++): 
                    $image = get_field("stills_image_$i");
                    $link = get_field("stills_link_$i");
                    if ($image && $link): ?>
                        <div class="media-card">
                            <a href="<?php echo esc_url($link); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="media-img" />
                            </a>
                        </div>
                    <?php endif;
                endfor; ?>
            </div>
        </section>

        <!-- INTERVIEWS Section -->
        <section class="media-row">
            <h2 class="section-title">Interviews</h2>
            <div class="media-grid">
                <?php for ($i = 1; $i <= 3; $i++): 
                    $image = get_field("interviews_image_$i");
                    $link = get_field("interviews_link_$i");
                    $title = get_field("interviews_title_$i");
                    if ($image && $link): ?>
                        <div class="media-card">
                            <a href="<?php echo esc_url($link); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="media-img" />
                            </a>
                            <?php if ($title): ?>
                                <h3 class="media-title"><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>
                        </div>
                    <?php endif;
                endfor; ?>
            </div>
        </section>

        <!-- STORIES Section -->
        <section class="media-row">
            <h2 class="section-title">Stories</h2>
            <div class="media-grid">
                <?php for ($i = 1; $i <= 3; $i++): 
                    $image = get_field("stories_image_$i");
                    $link = get_field("stories_link_$i");
                    $title = get_field("stories_title_$i");
                    if ($image && $link): ?>
                        <div class="media-card">
                            <a href="<?php echo esc_url($link); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="media-img" />
                            </a>
                            <?php if ($title): ?>
                                <h3 class="media-title"><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>
                        </div>
                    <?php endif;
                endfor; ?>
            </div>
        </section>

    </main>
</div>

<?php get_footer(); ?>
