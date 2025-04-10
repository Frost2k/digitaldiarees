<?php
/*
 * Template Name: Stories Page
 * Template Post Type: page
 */

get_header();
$video_url = get_field('stories_video_url');
$title = get_field('stories_title');
$link = get_field('stories_link');
?>

<main class="site-main container">
    <section class="media-row">
        <h2 class="section-title">Story</h2>
        <?php if ($video_url): ?>
            <div class="media-card">
                <div class="video-container">
                <?php
                $video = get_field('stories_video_file');
                $title = get_field('stories_title');
                $link = get_field('stories_link');
                ?>

                <?php if ($video): ?>
                    <div class="media-card">
                        <video class="media-video" controls>
                            <source src="<?php echo esc_url($video); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <?php if ($title && $link): ?>
                            <h3 class="media-title">
                                <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
                            </h3>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                </div>
                <?php if ($title && $link): ?>
                    <h3 class="media-title">
                        <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
                    </h3>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
