<?php
/*
 * Template Name: Landing
 *
 * Template Post Type: post, page
 *
 * The template for displaying Landing
 *
 * @package JetBlack
 */

get_header();
?>

<div class="landing-about-section">
    <?php 
    $image = get_field('background_image') ?: null;
    $heading = get_field('overlay_heading') ?: null;
    $tagline = get_field('overlay_tagline') ?: null;
    ?>

    <?php if ($image): ?>
        <div class="acf-image-overlay" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
            <div class="acf-overlay-text">
                <?php if ($heading): ?>
                    <h1 class="overlay-heading"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>
                <?php if ($tagline): ?>
                    <p class="overlay-tagline"><?php echo esc_html($tagline); ?></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<div id="primary" class="content-area" style="width: 100%;">
    <main id="main" class="site-main">
        <div class="section-wwd">
            <div class="container">
                <div class="section-title-wrap" style="text-align: center;">
                    <h2 class="section-title">Featured Stories</h2>
                    <span class="divider"></span>
                </div>
                <div class="wwd-block-list">
                    <div class="row">
                        <!-- Block 1: Video with Watch Button -->
                        <?php 
                        $video_img = get_field('featured_stories_video_img') ?: null;
                        $video_link = get_field('featured_stories_video_img_link') ?: null;
                        ?>
                        <div class="wwd-block-item post-type ff-grid-4" style="margin: 30px 0px">
                            <div class="wwd-block-inner inner-block-shadow" style="padding-right: 10px; padding-left: 10px;">
                                <div class="wwd-block-inner-content">
                                    <?php if ($video_img && $video_link): ?>
                                        <a href="<?php echo esc_url($video_link); ?>" rel="bookmark">
                                            <img src="<?php echo esc_url($video_img['url']); ?>" alt="<?php echo esc_attr($video_img['alt']); ?>" style="width: 100%; height: auto;" />
                                        </a>
                                        <div class="entry-summary" style="text-align: center; margin-top: 10px;">
                                            <a href="<?php echo esc_url($video_link); ?>" class="more-link">
                                                <span class="more-button">Watch<span class="screen-reader-text">Watch</span></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Block 2: Clickable Image -->
                        <?php 
                        $click_img = get_field('featured_stories_images') ?: null;
                        $click_link = get_field('featured_stories_images_link') ?: null;
                        ?>
                        <div class="wwd-block-item post-type ff-grid-4" style="margin: 30px 0px">
                            <div class="wwd-block-inner inner-block-shadow" style="padding-right: 10px; padding-left: 10px;">
                                <div class="wwd-block-inner-content">
                                    <?php if ($click_img && $click_link && isset($click_img['url'], $click_img['alt'])): ?>
                                        <a href="<?php echo esc_url($click_link); ?>" rel="bookmark">
                                            <img src="<?php echo esc_url($click_img['url']); ?>" alt="<?php echo esc_attr($click_img['alt']); ?>" style="width: 100%; height: auto;" />
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Block 3: Contribute Section -->
                        <?php 
                        $contribute_link = get_field('contribute_link');
                        $contribute_title = get_field('contribute_title');
                        $contribute_text = get_field('contribute_text');
                        ?>

                        <div class="wwd-block-item post-type ff-grid-4" style="margin: 30px 0px; color: #ff9972;">
                            <div class="wwd-block-inner inner-block-shadow" style="padding-right: 10px; padding-left: 10px;">
                                <div class="wwd-block-inner-content">
                                    <?php if ($contribute_link && $contribute_title): ?>
                                        <h3 class="wwd-item-title">
                                            <a href="<?php echo esc_url($contribute_link); ?>" rel="bookmark">
                                                <?php echo esc_html($contribute_title); ?>
                                            </a>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if ($contribute_text): ?>
                                        <div class="entry-summary">
                                            <p><?php echo esc_html($contribute_text); ?></p>
                                            <?php if ($contribute_link): ?>
                                                <a href="<?php echo esc_url($contribute_link); ?>" class="more-link" style="margin-top: 67px;">
                                                    <span class="more-button">Learn How<span class="screen-reader-text">Learn How</span></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<?php
get_footer();
